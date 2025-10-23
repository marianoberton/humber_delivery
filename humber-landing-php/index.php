<?php
// Router simple para la landing page de HUMBER

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Función helper para env()
function env($key, $default = null) {
    return $_ENV[$key] ?? getenv($key) ?: $default;
}

// Función helper para config()
function config($key, $default = null) {
    static $configs = [];
    
    $keys = explode('.', $key);
    $configFile = $keys[0];
    
    if (!isset($configs[$configFile])) {
        $configPath = "config/{$configFile}.php";
        if (file_exists($configPath)) {
            $configs[$configFile] = include $configPath;
        } else {
            $configs[$configFile] = [];
        }
    }
    
    $value = $configs[$configFile];
    
    // Skip the first key (config file name)
    for ($i = 1; $i < count($keys); $i++) {
        $k = $keys[$i];
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
    $content = preg_replace_callback('/\{\{\s*config\([\'\"]([^\'\"]+)[\'\"]\)\s*\}\}/', function($matches) {
        return config($matches[1], '');
    }, $content);

    // Procesar @json() en el contenido
    $content = preg_replace_callback('/@json\(([^)]+(?:\([^)]*\))*[^)]*)\)/', function($matches) use ($variables) {
        $expression = trim($matches[1]);
        
        // Evaluar expresiones ternarias con comillas dobles
        if (preg_match('/\$lang\s*===\s*"([^"]+)"\s*\?\s*"([^"]+)"\s*:\s*"([^"]+)"/', $expression, $ternaryMatches)) {
            $langVal = $variables['lang'] ?? null;
            $result = ($langVal === $ternaryMatches[1]) ? $ternaryMatches[2] : $ternaryMatches[3];
            return json_encode($result);
        }
        
        // Evaluar expresiones ternarias con comillas simples
        if (preg_match('/\$lang\s*===\s*\'([^\']+)\'\s*\?\s*\'([^\']+)\'\s*:\s*\'([^\']+)\'/', $expression, $ternaryMatches)) {
            $langVal = $variables['lang'] ?? null;
            $result = ($langVal === $ternaryMatches[1]) ? $ternaryMatches[2] : $ternaryMatches[3];
            return json_encode($result);
        }
        
        return '""'; // fallback
    }, $content);

    // Reemplazar variables simples {{ $variable }}
    $content = preg_replace_callback('/\{\{\s*\$([a-zA-Z_][a-zA-Z0-9_]*)\s*\}\}/', function($matches) use ($variables) {
        $name = $matches[1];
        return $variables[$name] ?? '';
    }, $content);

    // Reemplazar ternario de idioma {{ $lang == 'es' ? '...' : '...' }}
    $content = preg_replace_callback('/\{\{\s*\$lang\s*==\s*[\'\"]([^\'\"]+)[\'\"]\s*\?\s*[\'\"]([^\'\"]*)[\'\"]\s*:\s*[\'\"]([^\'\"]*)[\'\"]\s*\}\}/', function($matches) use ($variables) {
        $langVal = $variables['lang'] ?? null;
        return ($langVal === $matches[1]) ? $matches[2] : $matches[3];
    }, $content);
    
    return $content;
}

// Configuración de variables
$config = [
    'es' => [
        'lang' => 'es',
        'title' => 'Humber - Internacional',
        'description' => 'Líder en transporte de carga y logística internacional en Chile. Conectamos Argentina, Chile y Brasil con servicios especializados.',
        'canonical' => 'http://localhost:8001/',
        'alternate' => 'http://localhost:8001/br',
        'waAr' => config('whatsapp.ar', '5491127530009'),
        'waCl' => config('whatsapp.cl', '56950004666'),
        'waBr' => config('whatsapp.br', '554398650213')
    ],
    'pt' => [
        'lang' => 'pt',
        'title' => 'Humber - Internacional',
        'description' => 'Líder em transporte de carga e logística internacional no Chile. Conectamos Argentina, Chile e Brasil com serviços especializados.',
        'canonical' => 'http://localhost:8001/br',
        'alternate' => 'http://localhost:8001/',
        'waAr' => config('whatsapp.ar', '5491127530009'),
        'waCl' => config('whatsapp.cl', '56950004666'),
        'waBr' => config('whatsapp.br', '554398650213')
    ]
];

// Manejo de rutas
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST' && $uri === '/lead') {
    // Manejar envío de formulario
    header('Content-Type: application/json');
    
    // Obtener datos JSON
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!$input) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Datos inválidos']);
        exit;
    }
    
    // Validar campos requeridos
    $required = ['name', 'email', 'phone', 'message'];
    foreach ($required as $field) {
        if (empty($input[$field])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => "Campo $field es requerido"]);
            exit;
        }
    }
    
    // Simular procesamiento exitoso
    echo json_encode(['success' => true, 'message' => 'Mensaje enviado correctamente']);
    exit;
}

switch ($uri) {
    case '/':
        echo renderView('resources/views/landing/es.blade.php', $config['es']);
        break;
        
    case '/br':
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