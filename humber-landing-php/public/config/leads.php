<?php

return [
    // REST API Configuration
    'rest_url' => env('LEAD_REST_URL', 'https://api.example.com/leads'),
    
    // Email Configuration
    'sender_name' => env('LEAD_SENDER_NAME', 'HUMBER Internacional'),
    'sender_email' => env('LEAD_SENDER_EMAIL', 'leads@humber.com'),
    'destination_email' => env('LEAD_DESTINATION_EMAIL', 'ventas@humber.com'),
    'bcc_notification' => env('LEAD_BCC_NOTIFICATION', 'notifications@humber.com'),
    
    // WhatsApp Numbers by Region
    'whatsapp_argentina' => env('WHATSAPP_ARGENTINA', '+5491234567890'),
    'whatsapp_chile' => env('WHATSAPP_CHILE', '+56912345678'),
    'whatsapp_brazil' => env('WHATSAPP_BRAZIL', '+5511987654321'),
    
    // Google Tag Manager
    'gtm_id' => env('GTM_ID', 'GTM-XXXXXXX'),
];