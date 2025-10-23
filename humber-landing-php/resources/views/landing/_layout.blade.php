<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="x-build-origin" content="resources-layout">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico" sizes="16x16 32x32">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('leads.gtm_id') }}');</script>
    <!-- End Google Tag Manager -->
    
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="transporte carga Chile, logística internacional Chile, transporte terrestre Chile, carga Argentina Chile, envíos internacionales Chile">
    <meta name="author" content="HUMBER Internacional">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $canonical }}">
    <link rel="alternate" hreflang="{{ $lang == 'es' ? 'pt-BR' : 'es-CL' }}" href="{{ $alternate }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="/assets/images/logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="HUMBER Internacional">
    <meta property="og:locale" content="{{ $lang == 'es' ? 'es_CL' : 'pt_BR' }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="/assets/images/logo.png">
    <meta name="twitter:site" content="@HumberInternacional">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#fcc007',
                        black: '#4c4c4c'
                    },
                    fontFamily: {
                        'montserrat': ['Montserrat', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --color-primary: #fcc007;
            --color-black: #4c4c4c;
        }
        
        .overlay-dark {
            background: rgba(0, 0, 0, 0.24);
        }
        
        .overlay-dark-strong {
            background: rgba(0, 0, 0, 0.32);
        }
        
        .text-gray-72 {
            color: rgba(0, 0, 0, 0.72);
        }
        
        .text-gray-56 {
            color: rgba(0, 0, 0, 0.56);
        }
        
        .text-gray-40 {
            color: rgba(0, 0, 0, 0.40);
        }
        
        .text-gray-24 {
            color: rgba(0, 0, 0, 0.24);
        }
        
        .bg-gray-24 {
            background-color: rgba(0, 0, 0, 0.24);
        }
        
        .bg-gray-40 {
            background-color: rgba(0, 0, 0, 0.40);
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.open {
            transform: translateX(0);
        }
        
        .fab-whatsapp {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 50;
        }
        
        .fab-options {
            position: absolute;
            bottom: 100%;
            right: 0;
            margin-bottom: 12px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        
        .fab-options.open {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .toast {
            position: fixed;
            top: 24px;
            right: 24px;
            z-index: 60;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }
        
        .toast.show {
            transform: translateX(0);
        }
        
        .nav-link.active {
            color: var(--color-primary);
        }
    </style>
    <style>
        .hero-bg-mobile {
            background-image: url('/assets/images/split.png');
        }
        
        @media (min-width: 768px) {
            .hero-bg-mobile {
                background-image: url('/assets/images/hero_bg.png');
            }
        }
    </style>
</head>
<body class="font-montserrat text-black bg-white">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('leads.gtm_id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    @yield('content')

    <!-- Lead Form Modal -->
    <div id="lead-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg max-w-md w-full p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-[#4c4c4c]">{{ $lang == 'es' ? 'Contactanos' : 'Fale Conosco' }}</h3>
                    <button id="close-modal" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <form id="lead-form" class="space-y-4">
                    @csrf
                    <input type="hidden" name="lang" value="{{ $lang }}">
                    <input type="text" name="hp" class="hidden" tabindex="-1" autocomplete="off">
                    
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ $lang == 'es' ? 'Nombre' : 'Nome' }} *
                        </label>
                        <input type="text" id="first_name" name="first_name" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#fcc007]">
                    </div>
                    
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ $lang == 'es' ? 'Apellido' : 'Sobrenome' }}
                        </label>
                        <input type="text" id="last_name" name="last_name" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#fcc007]">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ $lang == 'es' ? 'Email' : 'E-mail' }} *
                        </label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#fcc007]">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ $lang == 'es' ? 'Teléfono' : 'Telefone' }} *
                        </label>
                        <input type="tel" id="phone" name="phone" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#fcc007]">
                    </div>
                    
                    <button type="submit" class="w-full bg-[#fcc007] text-black px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-colors">
                        {{ $lang == 'es' ? 'Enviar' : 'Enviar' }}
                    </button>
                </form>
                
                <div id="form-success" class="hidden mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ $lang == 'es' ? '¡Gracias! Nos pondremos en contacto contigo pronto.' : 'Obrigado! Entraremos em contato em breve.' }}
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Modal functionality
        const modal = document.getElementById('lead-modal');
        const closeModal = document.getElementById('close-modal');
        const form = document.getElementById('lead-form');
        const successMessage = document.getElementById('form-success');
        
        // Open modal when clicking contact buttons
        document.addEventListener('click', function(e) {
            if (e.target.matches('[href="#cotizar"]') || e.target.closest('[href="#cotizar"]')) {
                e.preventDefault();
                modal.classList.remove('hidden');
            }
        });
        
        // Close modal
        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
            form.classList.remove('hidden');
            successMessage.classList.add('hidden');
            form.reset();
        });
        
        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                form.classList.remove('hidden');
                successMessage.classList.add('hidden');
                form.reset();
            }
        });
        
        // Form submission
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(form);
            
            // Add UTM parameters if present
            const urlParams = new URLSearchParams(window.location.search);
            ['utm_source', 'utm_medium', 'utm_campaign'].forEach(param => {
                if (urlParams.has(param)) {
                    formData.append(param, urlParams.get(param));
                }
            });
            
            try {
                const response = await fetch('{{ route('lead.store') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                
                const result = await response.json();
                
                if (result.ok) {
                    // GTM event
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'lead_submit', {
                            lang: '{{ $lang }}'
                        });
                    }
                    
                    form.classList.add('hidden');
                    successMessage.classList.remove('hidden');
                    form.reset();
                    
                    setTimeout(() => {
                        modal.classList.add('hidden');
                        form.classList.remove('hidden');
                        successMessage.classList.add('hidden');
                    }, 3000);
                } else {
                    alert('{{ $lang == 'es' ? 'Error al enviar el formulario. Por favor, inténtalo de nuevo.' : 'Erro ao enviar formulário. Tente novamente.' }}');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('{{ $lang == 'es' ? 'Error al enviar el formulario. Por favor, inténtalo de nuevo.' : 'Erro ao enviar formulário. Tente novamente.' }}');
            }
        });
        
        // Hero animations
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const heroLogo = document.getElementById('hero-logo');
                const heroFlags = document.getElementById('hero-flags');
                const heroSubcopy = document.getElementById('hero-subcopy');
                
                if (heroLogo) {
                    heroLogo.classList.remove('opacity-0', '-translate-y-4');
                }
                
                setTimeout(() => {
                    if (heroFlags) {
                        heroFlags.classList.remove('opacity-0', '-translate-y-4');
                    }
                }, 300);
                
                setTimeout(() => {
                    if (heroSubcopy) {
                        heroSubcopy.classList.remove('opacity-0', '-translate-y-4');
                    }
                }, 600);
            }, 500);
        });
        
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.add('open');
            });
        }
        
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function() {
                mobileMenu.classList.remove('open');
            });
        }
        
        // Close mobile menu when clicking on links
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('open');
            });
        });
    </script>
    <!-- Formulario de Leads y JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact-form');
            if (form) {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    
                    // MODO TESTING: Cambiar a false para producción, true para testing
                    const isTestMode = false; // Cambiar a false para enviar emails reales
                    
                    const formData = new FormData(form);
                    
                    // Agregar campos ocultos
                    formData.append('lang', '{{ $lang }}');
                    formData.append('hp', ''); // honeypot
                    
                    // Agregar UTM parameters si existen
                    const urlParams = new URLSearchParams(window.location.search);
                    ['utm_source', 'utm_medium', 'utm_campaign'].forEach(param => {
                        if (urlParams.has(param)) {
                            formData.append(param, urlParams.get(param));
                        }
                    });
                    
                    // Mapear campos del formulario
                    const firstName = form.querySelector('#nombre')?.value || '';
                    const email = form.querySelector('#email')?.value || '';
                    const phone = form.querySelector('#telefono')?.value || '';
                    const message = form.querySelector('#mensaje')?.value || '';
                    
                    formData.set('first_name', firstName);
                    formData.set('email', email);
                    formData.set('phone', phone);
                    formData.set('message', message);
                    
                    // Mostrar botón de carga
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.textContent;
                    submitBtn.textContent = '{{ $lang === "es" ? "Enviando..." : "Enviando..." }}';
                    submitBtn.disabled = true;
                    
                    try {
                        if (isTestMode) {
                            // MODO TESTING: Simular envío sin enviar datos reales
                            console.log('=== MODO TESTING ACTIVADO ===');
                            console.log('Datos del formulario que se enviarían:');
                            for (let [key, value] of formData.entries()) {
                                console.log(`${key}: ${value}`);
                            }
                            console.log('=== FIN DATOS FORMULARIO ===');
                            
                            // Simular delay de red
                            await new Promise(resolve => setTimeout(resolve, 1500));
                            
                            // Simular respuesta exitosa
                            const result = { ok: true };
                            
                            if (result.ok) {
                                // Mostrar mensaje de éxito (modo testing)
                                showToast(@json($lang === "es" ? "[MODO TESTING] Formulario validado correctamente. Los datos NO fueron enviados al servidor." : "[MODO TESTING] Formulário validado corretamente. Os dados NÃO foram enviados ao servidor."), 'success');
                                
                                // Resetear formulario
                                form.reset();
                            }
                        } else {
                            // MODO PRODUCCIÓN: Envío real al servidor Laravel
                            const response = await fetch('{{ route('lead.store') }}', {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                            });
                            
                            const result = await response.json();
                            
                            if (result.ok) {
                                // Disparar evento GTM si existe
                                if (typeof gtag !== 'undefined') {
                                    gtag('event', 'lead_submit', {
                                        lang: '{{ $lang }}'
                                    });
                                }
                                
                                // Mostrar mensaje de éxito
                                showToast(@json($lang === "es" ? "Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto." : "Mensagem enviada com sucesso. Entraremos em contato em breve."), 'success');
                                
                                // Resetear formulario
                                form.reset();
                            } else {
                                showToast(@json($lang === "es" ? "Error al enviar el mensaje. Por favor, inténtalo de nuevo." : "Erro ao enviar mensagem. Por favor, tente novamente."), 'error');
                            }
                        }
                    } catch (error) {
                        console.error('Error:', error);
                        if (isTestMode) {
                            showToast(@json($lang === "es" ? "[MODO TESTING] Error simulado para pruebas." : "[MODO TESTING] Erro simulado para testes."), 'error');
                        } else {
                            showToast(@json($lang === "es" ? "Error de conexión. Por favor, inténtalo de nuevo." : "Erro de conexão. Por favor, tente novamente."), 'error');
                        }
                    } finally {
                        // Restaurar botón
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }
                });
            }
        });
        
        function showToast(message, type) {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} text-white`;
            toast.textContent = message;
            
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.remove();
            }, 5000);
        }
    </script>
</body>
</html>