<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Validación de campos
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:80',
            'last_name' => 'nullable|string|max:80',
            'email' => 'required|email',
            'phone' => 'required|string|max:30',
            'message' => 'nullable|string|max:1000',
            'lang' => 'required|in:es,pt',
            'hp' => 'nullable|size:0', // honeypot debe estar vacío
            'utm_source' => 'nullable|string|max:120',
            'utm_medium' => 'nullable|string|max:120',
            'utm_campaign' => 'nullable|string|max:120',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'ok' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Verificar honeypot - si está lleno, devolver éxito silencioso
        if (!empty($request->hp)) {
            return response()->json(['ok' => true]);
        }

        $data = $validator->validated();

        // Configuración de destinatarios
        $to = config('leads.destinations.all');
        $bcc = config('leads.notify_bcc');
        $from = config('leads.from');

        // Subject según idioma
        $subject = $data['lang'] === 'es' 
            ? 'Nuevo lead internacional — Humber'
            : 'Novo lead internacional — Humber';

        // Mensaje en texto plano
        $message = $this->buildPlainTextMessage($data);

        // HTML del email
        $html = view('landing.emails.lead_html', compact('data'))->render();

        // Payload para el servicio REST
        $payload = [
            'subject' => $subject,
            'from' => $from['email'] . ',' . $from['name'],
            'to' => $to,
            'bcc' => $bcc,
            'message' => $message,
            'html' => $html,
            'htlm' => $html, // fallback como especificado
        ];

        try {
            // Envío al servicio REST
            $response = Http::asForm()->post(config('leads.rest_url'), $payload);

            if ($response->successful()) {
                return response()->json(['ok' => true]);
            } else {
                return response()->json([
                    'ok' => false,
                    'status' => $response->status(),
                    'body' => $response->body()
                ], 502);
            }
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'error' => 'Service unavailable'
            ], 502);
        }
    }

    private function buildPlainTextMessage($data)
    {
        $message = "Nuevo lead internacional:\n\n";
        $message .= "Nombre: " . $data['first_name'];
        
        if (!empty($data['last_name'])) {
            $message .= " " . $data['last_name'];
        }
        
        $message .= "\n";
        $message .= "Email: " . $data['email'] . "\n";
        $message .= "Teléfono: " . $data['phone'] . "\n";
        $message .= "Idioma: " . strtoupper($data['lang']) . "\n";

        if (!empty($data['message'])) {
            $message .= "Mensaje: " . $data['message'] . "\n";
        }

        // Agregar UTM si existen
        $utmParams = [];
        if (!empty($data['utm_source'])) $utmParams[] = "Source: " . $data['utm_source'];
        if (!empty($data['utm_medium'])) $utmParams[] = "Medium: " . $data['utm_medium'];
        if (!empty($data['utm_campaign'])) $utmParams[] = "Campaign: " . $data['utm_campaign'];

        if (!empty($utmParams)) {
            $message .= "\nUTM Parameters:\n" . implode("\n", $utmParams);
        }

        return $message;
    }
}