<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LeadController;

/*
|--------------------------------------------------------------------------
| Web Routes - HUMBER Landing Page
|--------------------------------------------------------------------------
|
| Rutas para la landing page de HUMBER - Transporte Internacional
|
*/

// Ruta principal - Landing Page
Route::get('/', [ContactController::class, 'index'])->name('landing');

// Rutas de landing internacional
Route::get('/es/internacional', [LandingController::class, 'es'])->name('landing.es');
Route::get('/br/internacional', [LandingController::class, 'pt'])->name('landing.pt');

// Rutas de contacto
Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');

// Ruta de leads con throttling
Route::post('/lead', [LeadController::class, 'store'])->middleware('throttle:5,1')->name('lead.store');

// API para estadísticas (opcional)
Route::get('/api/stats', [ContactController::class, 'stats'])->name('api.stats');

// Rutas legales (placeholder - implementar según necesidades)
Route::get('/politica-privacidad', function () {
    return view('legal.privacy');
})->name('politica-privacidad');

Route::get('/terminos-condiciones', function () {
    return view('legal.terms');
})->name('terminos-condiciones');

/*
|--------------------------------------------------------------------------
| Rutas adicionales para administración (opcional)
|--------------------------------------------------------------------------
*/

// Grupo de rutas admin (requiere autenticación)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard de contactos
    Route::get('/contactos', function () {
        return view('admin.contacts');
    })->name('contactos');
    
    // Exportar contactos
    Route::get('/contactos/export', function () {
        // Implementar exportación de contactos
    })->name('contactos.export');
});

/*
|--------------------------------------------------------------------------
| Redirects y rutas de compatibilidad
|--------------------------------------------------------------------------
*/

// Redirect de rutas antiguas si es necesario
Route::redirect('/home', '/');
Route::redirect('/inicio', '/');
Route::redirect('/landing', '/');

// Manejo de errores 404 personalizado para la landing
Route::fallback(function () {
    return redirect('/')->with('error', 'Página no encontrada. Te hemos redirigido al inicio.');
});