<?php
// Router simple para la landing page de HUMBER

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Función helper para env()
function env($key, $default = null) {
    return $_ENV[$key] ?? getenv($key) ?: $default;
}

// Función helper para config()
function config($key, $default = null) {
    static $config = null;
    if ($config === null) {
        if (file_exists('config/leads.php')) {
            $config = include 'config/leads.php';
        } else {
            $config = [];
        }
    }
    
    $keys = explode('.', $key);
    $value = $config;
    
    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $default;
        }
    }
    
    return $value;
}

// Función para renderizar vista Blade básica
function renderView($viewPath, $variables = []) {
    if (!file_exists($viewPath)) {
        return "Vista no encontrada: $viewPath";
    }
    
    extract($variables);
    
    ob_start();
    include $viewPath;
    $content = ob_get_clean();
    
    // Procesar @extends y @section básico
    if (strpos($content, "@extends('landing._layout')") !== false) {
        // Extraer contenido de @section('content')
        preg_match('/@section\(\'content\'\)(.*?)@endsection/s', $content, $matches);
        $sectionContent = isset($matches[1]) ? trim($matches[1]) : '';
        
        // Cargar layout
        $layoutPath = 'resources/views/landing/_layout.blade.php';
        if (file_exists($layoutPath)) {
            extract($variables);
            ob_start();
            include $layoutPath;
            $layoutContent = ob_get_clean();
            
            // Reemplazar @yield('content')
            $content = str_replace("@yield('content')", $sectionContent, $layoutContent);
        }
    }
    
    // Procesar funciones config() en el contenido
    $content = preg_replace_callback('/\{\{\s*config\([\'"]([^\'"]+)[\'"]\)\s*\}\}/', function($matches) {
        return config($matches[1], '');
    }, $content);
    
    return $content;
}

// Configuración de variables
$config = [
    'es' => [
        'lang' => 'es',
        'title' => 'HUMBER - Transporte Internacional | Logística Argentina, Brasil, Chile',
        'description' => 'Líder en transporte de carga y logística internacional en Chile. Conectamos Argentina, Chile y Brasil con servicios especializados.',
        'canonical' => 'http://localhost:8000/es/internacional',
        'alternate' => 'http://localhost:8000/pt/internacional',
        'waAr' => config('leads.whatsapp.ar', '+54 9 11 2753-0009'),
        'waCl' => config('leads.whatsapp.cl', '+56 9 5000 4666'),
        'waBr' => config('leads.whatsapp.br', '+55 43 9865-0213')
    ],
    'pt' => [
        'lang' => 'pt',
        'title' => 'HUMBER - Transporte Internacional | Logística Argentina, Brasil, Chile',
        'description' => 'Líder em transporte de carga e logística internacional no Chile. Conectamos Argentina, Chile e Brasil com serviços especializados.',
        'canonical' => 'http://localhost:8000/pt/internacional',
        'alternate' => 'http://localhost:8000/es/internacional',
        'waAr' => config('leads.whatsapp.ar', '+54 9 11 2753-0009'),
        'waCl' => config('leads.whatsapp.cl', '+56 9 5000 4666'),
        'waBr' => config('leads.whatsapp.br', '+55 43 9865-0213')
    ]
];

// Manejo de rutas
switch ($uri) {
    case '/':
    case '/es/internacional':
        echo renderView('resources/views/landing/es.blade.php', $config['es']);
        break;
        
    case '/pt/internacional':
    case '/br/internacional':
        echo renderView('resources/views/landing/pt.blade.php', $config['pt']);
        break;
        
    default:
        // Verificar si es un archivo estático
        $file = __DIR__ . $uri;
        if (is_file($file)) {
            return false; // Dejar que PHP sirva el archivo
        }
        
        // 404
        http_response_code(404);
        echo "404 - Página no encontrada";
        break;
}
?>