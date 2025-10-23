<?php

return [
    'rest_url' => env('LEAD_REST_URL', 'https://notifications.tudominio.com/service/send'),
    
    'from' => [
        'email' => env('LEAD_FROM_EMAIL', 'no-reply@tudominio.com'),
        'name' => env('LEAD_FROM_NAME', 'Tu Empresa')
    ],
    
    'to' => [
        'all' => env('LEAD_TO_ALL', 'contacto@tudominio.com')
    ],
    
    'notify_bcc' => env('LEAD_NOTIFY_BCC', ''),
    
    'whatsapp' => [
        'ar' => env('WHATSAPP_AR', '5491112345678'),
        'cl' => env('WHATSAPP_CL', '56912345678'),
        'br' => env('WHATSAPP_BR', '5511912345678'),
    ],
    
    'gtm_id' => env('GTM_ID', 'GTM-XXXXXXX'),
];