<?php

return [
    'rest_url' => env('LEAD_REST_URL', 'https://notifications.humberapp.com.ar/service/send'),
    
    'from' => [
        'email' => env('LEAD_FROM_EMAIL', 'no-reply@humber.com.ar'),
        'name' => env('LEAD_FROM_NAME', 'Humber Internacional')
    ],
    
    'destinations' => [
        'all' => env('LEAD_TO_ALL', 'comercial.internacional@humber.com.ar')
    ],
    
    'notify_bcc' => env('LEAD_NOTIFY_BCC', 'leads@humber.com'),
    
    'whatsapp' => [
        'ar' => env('WHATSAPP_AR', '+54 9 11 2753-0009'),
        'cl' => env('WHATSAPP_CL', '+56 9 5000 4666'),
        'br' => env('WHATSAPP_BR', '+55 43 9865-0213'),
    ],
    
    'gtm_id' => env('GTM_ID', 'GTM-NP6GMN3C'),
];