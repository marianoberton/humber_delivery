<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Lead Internacional - Humber</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #fcc007;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #4c4c4c;
            margin: 0;
            font-size: 24px;
        }
        .field {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #fcc007;
        }
        .field strong {
            color: #4c4c4c;
            display: inline-block;
            width: 120px;
        }
        .utm-section {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f8ff;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .utm-section h3 {
            color: #4c4c4c;
            margin-top: 0;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $data['lang'] === 'es' ? 'Nuevo Lead Internacional' : 'Novo Lead Internacional' }}</h1>
            <p style="color: #666; margin: 5px 0 0 0;">Humber - Soluciones Logísticas</p>
        </div>

        <div class="field">
            <strong>Nombre:</strong>
            {{ $data['first_name'] }}{{ !empty($data['last_name']) ? ' ' . $data['last_name'] : '' }}
        </div>

        <div class="field">
            <strong>Email:</strong>
            <a href="mailto:{{ $data['email'] }}" style="color: #4c4c4c;">{{ $data['email'] }}</a>
        </div>

        <div class="field">
            <strong>Teléfono:</strong>
            <a href="tel:{{ $data['phone'] }}" style="color: #4c4c4c;">{{ $data['phone'] }}</a>
        </div>

        <div class="field">
            <strong>Idioma:</strong>
            {{ strtoupper($data['lang']) }} ({{ $data['lang'] === 'es' ? 'Español' : 'Português' }})
        </div>

        @if(!empty($data['message']))
        <div class="field">
            <strong>Mensaje:</strong>
            <div style="margin-top: 10px; padding: 10px; background-color: #fff; border: 1px solid #ddd; border-radius: 4px;">
                {{ nl2br(e($data['message'])) }}
            </div>
        </div>
        @endif

        @if(!empty($data['utm_source']) || !empty($data['utm_medium']) || !empty($data['utm_campaign']))
        <div class="utm-section">
            <h3>Parámetros UTM</h3>
            @if(!empty($data['utm_source']))
                <div><strong>Source:</strong> {{ $data['utm_source'] }}</div>
            @endif
            @if(!empty($data['utm_medium']))
                <div><strong>Medium:</strong> {{ $data['utm_medium'] }}</div>
            @endif
            @if(!empty($data['utm_campaign']))
                <div><strong>Campaign:</strong> {{ $data['utm_campaign'] }}</div>
            @endif
        </div>
        @endif

        <div class="footer">
            <p>Este email fue generado automáticamente desde el formulario de contacto internacional de Humber.</p>
            <p>Fecha: {{ date('d/m/Y H:i:s') }}</p>
        </div>
    </div>
</body>
</html>