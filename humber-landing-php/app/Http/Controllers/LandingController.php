<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Mostrar la landing page en español
     */
    public function es()
    {
        $data = [
            'lang' => 'es',
            'title' => 'Humber Internacional - Soluciones Logísticas para España',
            'description' => 'Conectamos España con Argentina, Chile y Brasil. Soluciones logísticas integrales con más de 30 años de experiencia en comercio internacional.',
            'canonical' => url('/es/internacional'),
            'alternate' => url('/br/internacional'),
            'waAr' => preg_replace('/\D/', '', config('leads.whatsapp.ar')),
            'waCl' => preg_replace('/\D/', '', config('leads.whatsapp.cl')),
            'waBr' => preg_replace('/\D/', '', config('leads.whatsapp.br')),
        ];

        return view('landing.es', $data);
    }

    /**
     * Mostrar la landing page en portugués
     */
    public function pt()
    {
        $data = [
            'lang' => 'pt',
            'title' => 'Humber Internacional - Soluções Logísticas para Brasil',
            'description' => 'Conectamos Brasil com Argentina, Chile e Espanha. Soluções logísticas integrais com mais de 30 anos de experiência em comércio internacional.',
            'canonical' => url('/br/internacional'),
            'alternate' => url('/es/internacional'),
            'waAr' => preg_replace('/\D/', '', config('leads.whatsapp.ar')),
            'waCl' => preg_replace('/\D/', '', config('leads.whatsapp.cl')),
            'waBr' => preg_replace('/\D/', '', config('leads.whatsapp.br')),
        ];

        return view('landing.pt', $data);
    }
}