@extends('landing._layout')

@section('content')
    <!-- Header Sticky -->
    <header id="top" class="sticky top-0 bg-white shadow-sm z-40">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <!-- Logo -->
            <a href="#top" class="text-2xl font-semibold text-black flex items-center">
                <img src="/assets/logos/logo.png" alt="HUMBER Internacional" class="h-8">
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#quienes-somos" class="nav-link text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Sobre Nós</a>
                <a href="#cobertura" class="nav-link text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Cobertura</a>
                <a href="#tipos-carga" class="nav-link text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Serviços</a>
                <a href="#tecnologia" class="nav-link text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Tecnologia</a>
                <a href="#cotizar" class="nav-link text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Contato</a>
            </div>
            
            <!-- CTA Button -->
            <a href="#cotizar" class="hidden md:inline-block bg-primary text-black px-6 py-3 rounded-full font-semibold hover:opacity-90 transition-colors">
                Fale Conosco
            </a>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2" aria-label="Abrir menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </nav>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu fixed inset-y-0 left-0 w-64 bg-white shadow-lg md:hidden z-50">
            <div class="p-4">
                <div class="flex items-center justify-between mb-8">
                    <img src="/assets/logos/logo.png" alt="HUMBER Internacional" class="h-6">
                    <button id="mobile-menu-close" class="p-2" aria-label="Fechar menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav class="space-y-4">
                    <a href="#quienes-somos" class="block py-2 text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Sobre Nós</a>
                    <a href="#cobertura" class="block py-2 text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Cobertura</a>
                    <a href="#tipos-carga" class="block py-2 text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Serviços</a>
                    <a href="#tecnologia" class="block py-2 text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Tecnologia</a>
                    <a href="#cotizar" class="block py-2 text-gray-72 hover:text-[#fcc007] transition-colors duration-300">Contato</a>
                    <a href="#cotizar" class="block mt-6 bg-primary text-black px-6 py-3 rounded-full font-semibold text-center">
                        Fale Conosco
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col justify-center bg-cover bg-center md:justify-start md:flex-row md:items-center hero-bg-mobile">
        <!-- Imagen de fondo -->
        <div class="absolute inset-0 z-0"></div>
        
        <!-- Degradado horizontal para desktop / Degradado vertical para móvil -->
        <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/80 via-black/40 to-transparent md:bg-black/40"></div>
        
        <!-- Contenedor de Contenido Responsive - Aplicando Regla de los Tercios -->
        <div class="relative z-20 text-white px-6 py-8 md:pl-16 md:pr-0 md:pb-0 lg:pl-24 xl:pl-40 2xl:pl-48 max-w-4xl md:ml-0">
            <!-- Bloque de Contenido Principal con Flujo Perfecto -->
            <div class="flex flex-col gap-y-4 md:gap-y-8 text-left">
                <!-- Logo Principal como Titular Dominante -->
                <div id="hero-logo" class="opacity-0 -translate-y-4 transition-all duration-1000 ease-in-out">
                    <img src="/assets/logos/humber_Internacional.svg" alt="HUMBER Internacional" class="h-24 md:h-32 lg:h-40 w-auto drop-shadow-lg">
                </div>
                
                <!-- Banderas Elegantes -->
                <div id="hero-flags" class="flex items-center gap-x-2.5 md:gap-x-4 opacity-0 -translate-y-4 transition-all duration-1000 ease-in-out">
                    <img src="/assets/images/banderas.svg" alt="Países onde operamos" class="h-6 md:h-8 w-auto drop-shadow-md hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
                
                <!-- Sub-copy Legible y Refinado -->
                <p id="hero-subcopy" class="text-lg md:text-xl lg:text-2xl text-gray-200 leading-relaxed max-w-3xl opacity-0 -translate-y-4 transition-all duration-1000 ease-in-out">
                    Transporte Internacional com presença na Argentina, Bolívia, Brasil, Chile, Paraguai, Peru e Uruguai.
                </p>
            </div>
        </div>
        
        <!-- Indicador de Scroll Cinematográfico - Oculto en móvil -->
        <div class="hidden md:block absolute bottom-10 left-1/2 -translate-x-1/2">
            <a href="#servicios" class="animate-bounce">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- Experiência que conecta a região - Sección Unificada -->
    <section id="quienes-somos" class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <!-- Título Principal Unificado -->
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-[#4c4c4c] mb-12">Experiência que <span class="text-[#fcc007]">conecta a região</span></h2>
            </div>
            
            <!-- Grid de Três Colunas - Filosofia -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 mb-32 max-w-4xl mx-auto">
                
                <!-- Coluna 1: A Operação -->
                <div class="text-center">
                    <!-- Ícone -->
                    <div class="bg-[#fcc007]/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#4c4c4c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <!-- Subtítulo -->
                    <h3 class="font-bold text-xl text-[#4c4c4c] mt-4 mb-2">Alcance Internacional</h3>
                    <!-- Texto -->
                    <p class="text-gray-600 mt-2 text-center">
                        Somos especialistas em Transporte e Logística de cargas terrestres, com operações nacionais e internacionais. Levamos sua carga a destinos na Argentina, Bolívia, Brasil, Chile, Paraguai, Peru e Uruguai.
                    </p>
                </div>

                <!-- Coluna 2: A Solução -->
                <div class="text-center">
                    <!-- Ícone -->
                    <div class="bg-[#fcc007]/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#4c4c4c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <!-- Subtítulo -->
                    <h3 class="font-bold text-xl text-[#4c4c4c] mt-4 mb-2">Soluções Integrais</h3>
                    <!-- Texto -->
                    <p class="text-gray-600 mt-2 text-center">
                        Cobrimos toda a gama de soluções logísticas para cargas terrestres, em todos os setores da economia produtiva.
                    </p>
                </div>

                <!-- Coluna 3: A Equipe e os Valores -->
                <div class="text-center">
                    <!-- Ícone -->
                    <div class="bg-[#fcc007]/20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#4c4c4c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <!-- Subtítulo -->
                    <h3 class="font-bold text-xl text-[#4c4c4c] mt-4 mb-2">Excelência e Triplo Impacto</h3>
                    <!-- Texto -->
                    <p class="text-gray-600 mt-2 text-center">
                        Combinamos responsabilidade econômica, compromisso social e ambiental, e o respaldo de uma equipe humana de excelência que integra a experiência logística com o know-how digital.
                    </p>
                </div>

            </div>

            <!-- Cobertura e Números - Integrados na mesma seção -->
            <div id="cobertura" class="max-w-7xl mx-auto">
                <!-- Mobile: Uma coluna -->
                <div class="lg:hidden space-y-12">
                    <!-- Mapa -->
                    <div class="text-center">
                        <img src="/assets/images/mapa_completo.png" alt="Mapa de cobertura Cone Sul" class="w-full max-w-md mx-auto" loading="lazy">
                    </div>
                    
                    <!-- Estatística Principal - Sem Card -->
                    <div class="text-center py-8">
                        <div class="text-gray-500 text-sm uppercase tracking-widest mb-2">VIAGENS</div>
                        <div class="text-8xl font-extrabold text-[#4c4c4c] mb-4">50.000</div>
                        <div class="w-24 h-1 bg-[#fcc007] mx-auto mb-6"></div>
                        <img src="/assets/images/banderas.svg" alt="Bandeiras países" class="h-8 mx-auto hover:scale-105 transition-transform" loading="lazy">
                    </div>
                    
                    <!-- Grid 2x2 Estatísticas Secundárias -->
                    <div class="overflow-hidden">
                        <div class="grid grid-cols-2">
                            <!-- +450 -->
                            <div class="text-center p-4 border-r border-b border-gray-200">
                                <div class="text-4xl font-bold text-[#4c4c4c] mb-2">+450</div>
                                <div class="text-base text-gray-500 leading-relaxed">Embarcadores confiam em nós</div>
                            </div>
                            
                            <!-- 31 -->
                            <div class="text-center p-4 border-b border-gray-200">
                                <div class="text-4xl font-bold text-[#4c4c4c] mb-2">31</div>
                                <div class="text-base text-gray-500 leading-relaxed">Escritórios cobrindo a região</div>
                            </div>
                            
                            <!-- +40K -->
                            <div class="text-center p-4 border-r border-gray-200">
                                <div class="text-4xl font-bold text-[#4c4c4c] mb-2">+40K</div>
                                <div class="text-base text-gray-500 leading-relaxed">Caminhões conectando nossa rede</div>
                            </div>
                            
                            <!-- 7 -->
                            <div class="text-center p-4">
                                <div class="text-4xl font-bold text-[#4c4c4c] mb-2">7</div>
                                <div class="text-base text-gray-500 leading-relaxed">Países com presença operacional e comercial</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Desktop: Duas colunas -->
                <div class="hidden lg:grid lg:grid-cols-2 gap-6 xl:gap-8 items-center">
                    <!-- Coluna Esquerda: Mapa -->
                    <div class="flex items-center justify-center">
                        <img src="/assets/images/mapa_completo.png" alt="Mapa de cobertura Cone Sul" class="w-full max-w-sm xl:max-w-md" loading="lazy">
                    </div>
                    
                    <!-- Coluna Direita: Narrativa de Dados -->
                    <div class="space-y-6 xl:space-y-8">
                        <!-- Estatística Principal - Sem Card -->
                        <div class="text-center py-6 xl:py-8">
                            <div class="text-gray-500 text-sm uppercase tracking-widest mb-2 xl:mb-3">VIAGENS</div>
                            <div class="text-6xl xl:text-7xl font-extrabold text-[#4c4c4c] mb-4 xl:mb-5">50.000</div>
                            <div class="w-24 xl:w-28 h-1 bg-[#fcc007] mx-auto mb-4 xl:mb-5"></div>
                            <img src="/assets/images/banderas.svg" alt="Bandeiras países" class="h-8 xl:h-10 mx-auto hover:scale-105 transition-transform" loading="lazy">
                        </div>
                        
                        <!-- Grid 2x2 Estatísticas Secundárias -->
                        <div class="overflow-hidden">
                            <div class="grid grid-cols-2">
                                <!-- +450 -->
                                <div class="text-center p-4 xl:p-5 border-r border-b border-gray-200">
                                    <div class="text-3xl xl:text-4xl font-bold text-[#4c4c4c] mb-2">+450</div>
                                    <div class="text-sm xl:text-base text-gray-500 leading-relaxed">Embarcadores confiam em nós</div>
                                </div>
                                
                                <!-- 31 -->
                                <div class="text-center p-4 xl:p-5 border-b border-gray-200">
                                    <div class="text-3xl xl:text-4xl font-bold text-[#4c4c4c] mb-2">31</div>
                                    <div class="text-sm xl:text-base text-gray-500 leading-relaxed">Escritórios cobrindo a região</div>
                                </div>
                                
                                <!-- +40K -->
                                <div class="text-center p-4 xl:p-5 border-r border-gray-200">
                                    <div class="text-3xl xl:text-4xl font-bold text-[#4c4c4c] mb-2">+40K</div>
                                    <div class="text-sm xl:text-base text-gray-500 leading-relaxed">Caminhões conectando nossa rede</div>
                                </div>
                                
                                <!-- 7 -->
                                <div class="text-center p-4 xl:p-5">
                                    <div class="text-3xl xl:text-4xl font-bold text-[#4c4c4c] mb-2">7</div>
                                    <div class="text-sm xl:text-base text-gray-500 leading-relaxed">Países com presença operacional e comercial</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tipos de Carga -->
    <section id="tipos-carga" class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-6 md:px-8 lg:px-12">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-[#4c4c4c] mb-4">Soluções para cada necessidade</h2>
                <!-- Barra de Acento para Coesão Visual -->
                <div class="w-16 h-1 bg-[#fcc007] mx-auto mb-8"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Card 1 - Cargas Refrigeradas -->
                <a href="#" class="group block bg-white shadow-md rounded-3xl hover:bg-white hover:shadow-xl hover:border-[#fcc007] hover:border transition-all duration-300 ease-in-out transform hover:-translate-y-2 p-8 flex flex-col items-center justify-center">
                    <!-- Contenedor circular del icono -->
                    <div class="w-24 h-24 mb-6 bg-[#fcc007]/20 group-hover:bg-[#fcc007] rounded-full flex items-center justify-center transition-all duration-300 ease-in-out">
                        <img src="/assets/icons/cargas_refrigeradas.svg" alt="Cargas refrigeradas" class="w-12 h-12 text-[#4c4c4c] group-hover:text-white transition-all duration-300 ease-in-out" loading="lazy">
                    </div>
                    
                    <!-- Título del servicio -->
                    <h3 class="text-2xl font-extrabold text-[#4c4c4c] group-hover:text-[#a37d00] text-center transition-colors duration-300 ease-in-out font-montserrat tracking-wide">Cargas Refrigeradas</h3>
                </a>
                
                <!-- Card 2 - Cargas Secas/Líquidas -->
                <a href="#" class="group block bg-white shadow-md rounded-3xl hover:bg-white hover:shadow-xl hover:border-[#fcc007] hover:border transition-all duration-300 ease-in-out transform hover:-translate-y-2 p-8 flex flex-col items-center justify-center">
                    <!-- Contenedor circular del icono -->
                    <div class="w-24 h-24 mb-6 bg-[#fcc007]/20 group-hover:bg-[#fcc007] rounded-full flex items-center justify-center transition-all duration-300 ease-in-out">
                        <img src="/assets/icons/cargas_secas_liquidas.svg" alt="Cargas secas e líquidas" class="w-12 h-12 text-[#4c4c4c] group-hover:text-white transition-all duration-300 ease-in-out" loading="lazy">
                    </div>
                    
                    <!-- Título del servicio -->
                    <h3 class="text-2xl font-extrabold text-[#4c4c4c] group-hover:text-[#a37d00] text-center transition-colors duration-300 ease-in-out font-montserrat tracking-wide">Cargas Secas/Líquidas</h3>
                </a>
                
                <!-- Card 3 - Cargas Contenedores -->
                <a href="#" class="group block bg-white shadow-md rounded-3xl hover:bg-white hover:shadow-xl hover:border-[#fcc007] hover:border transition-all duration-300 ease-in-out transform hover:-translate-y-2 p-8 flex flex-col items-center justify-center">
                    <!-- Contenedor circular del icono -->
                    <div class="w-24 h-24 mb-6 bg-[#fcc007]/20 group-hover:bg-[#fcc007] rounded-full flex items-center justify-center transition-all duration-300 ease-in-out">
                        <img src="/assets/icons/cargas_contenedores.svg" alt="Cargas contêineres" class="w-12 h-12 text-[#4c4c4c] group-hover:text-white transition-all duration-300 ease-in-out" loading="lazy">
                    </div>
                    
                    <!-- Título del servicio -->
                    <h3 class="text-2xl font-extrabold text-[#4c4c4c] group-hover:text-[#a37d00] text-center transition-colors duration-300 ease-in-out font-montserrat tracking-wide">Cargas Contêineres</h3>
                </a>
                
                <!-- Card 4 - Cargas Consolidadas -->
                <a href="#" class="group block bg-white shadow-md rounded-3xl hover:bg-white hover:shadow-xl hover:border-[#fcc007] hover:border transition-all duration-300 ease-in-out transform hover:-translate-y-2 p-8 flex flex-col items-center justify-center">
                    <!-- Contenedor circular del icono -->
                    <div class="w-24 h-24 mb-6 bg-[#fcc007]/20 group-hover:bg-[#fcc007] rounded-full flex items-center justify-center transition-all duration-300 ease-in-out">
                        <img src="/assets/icons/cargas_consolidadas.svg" alt="Cargas consolidadas" class="w-12 h-12 text-[#4c4c4c] group-hover:text-white transition-all duration-300 ease-in-out" loading="lazy">
                    </div>
                    
                    <!-- Título del servicio -->
                    <h3 class="text-2xl font-extrabold text-[#4c4c4c] group-hover:text-[#a37d00] text-center transition-colors duration-300 ease-in-out font-montserrat tracking-wide">Consolidadas</h3>
                </a>
                
                <!-- Card 5 - Cargas Peligrosas -->
                <a href="#" class="group block bg-white shadow-md rounded-3xl hover:bg-white hover:shadow-xl hover:border-[#fcc007] hover:border transition-all duration-300 ease-in-out transform hover:-translate-y-2 p-8 flex flex-col items-center justify-center">
                    <!-- Contenedor circular del icono -->
                    <div class="w-24 h-24 mb-6 bg-[#fcc007]/20 group-hover:bg-[#fcc007] rounded-full flex items-center justify-center transition-all duration-300 ease-in-out">
                        <img src="/assets/icons/cargas_peligrosas.svg" alt="Cargas perigosas" class="w-12 h-12 text-[#4c4c4c] group-hover:text-white transition-all duration-300 ease-in-out" loading="lazy">
                    </div>
                    
                    <!-- Título del servicio -->
                    <h3 class="text-2xl font-extrabold text-[#4c4c4c] group-hover:text-[#a37d00] text-center transition-colors duration-300 ease-in-out font-montserrat tracking-wide">Perigosas</h3>
                </a>
                
                <!-- Card 6 - Cargas Proyecto -->
                <a href="#" class="group block bg-white shadow-md rounded-3xl hover:bg-white hover:shadow-xl hover:border-[#fcc007] hover:border transition-all duration-300 ease-in-out transform hover:-translate-y-2 p-8 flex flex-col items-center justify-center">
                    <!-- Contenedor circular del icono -->
                    <div class="w-24 h-24 mb-6 bg-[#fcc007]/20 group-hover:bg-[#fcc007] rounded-full flex items-center justify-center transition-all duration-300 ease-in-out">
                        <img src="/assets/icons/cargas_proyecto.svg" alt="Gás e óleo" class="w-12 h-12 text-[#4c4c4c] group-hover:text-white transition-all duration-300 ease-in-out" loading="lazy">
                    </div>
                    
                    <!-- Título del servicio -->
                    <h3 class="text-2xl font-extrabold text-[#4c4c4c] group-hover:text-[#a37d00] text-center transition-colors duration-300 ease-in-out font-montserrat tracking-wide">Gás & Óleo</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Recursos Tecnológicos -->
    <section id="tecnologia" class="py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Grid de Duas Colunas -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    <!-- Coluna Esquerda: A Narrativa -->
                    <div class="text-left">
                        <!-- Título Principal -->
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-[#4c4c4c] text-left">
                            Simplificando a <span class="text-[#fcc007]">Logística.</span>
                        </h2>
                        
                        <!-- Parágrafo de Apoio -->
                        <p class="text-lg text-gray-600 mt-6 text-left">
                            Na Humber, a inovação tecnológica não é um complemento: é a base do nosso serviço. Nós a utilizamos para transformar processos complexos em soluções simples, oferecendo uma experiência logística mais ágil, transparente e confiável.
                        </p>
                        
                        <!-- Call-to-Action -->
                        <a href="#contacto" class="mt-8 inline-block bg-[#fcc007] text-[#4c4c4c] font-bold text-lg rounded-full py-3 px-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            Fale Conosco
                        </a>
                    </div>
                    
                    <!-- Coluna Direita: A Prova Visual -->
                    <div class="text-center lg:text-right">
                        <img src="/assets/images/tecnologia.png" alt="Plataforma tecnológica HUMBER" class="w-full max-w-lg mx-auto lg:mx-0 drop-shadow-2xl" loading="lazy">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section id="cotizar" class="py-16 lg:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Título e Subtítulo Centralizados -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-[#4c4c4c] mb-4">
                        Contato
                    </h2>
                    <p class="text-lg text-gray-600">
                        Deixe seus dados e um consultor entrará em contato
                    </p>
                </div>
                
                <!-- Formulário de Largura Completa -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <form id="contact-form" class="space-y-6">
                        <!-- Campos ocultos -->
                        <input type="hidden" name="lang" value="{{ $lang }}">
                        <input type="text" name="hp" class="hidden" tabindex="-1" autocomplete="off">
                        
                        <!-- Linha 1: Nome e Email -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nome" class="block text-sm font-semibold text-gray-600 mb-2">Nome e Sobrenome *</label>
                                <input type="text" id="nome" name="first_name" required 
                                       class="w-full mt-2 p-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fcc007]/50 focus:border-[#fcc007]">
                                <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-600 mb-2">Email *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full mt-2 p-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fcc007]/50 focus:border-[#fcc007]">
                                <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                            </div>
                        </div>
                        
                        <!-- Linha 2: Telefone e Empresa -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefone" class="block text-sm font-semibold text-gray-600 mb-2">Telefone *</label>
                                <input type="tel" id="telefone" name="phone" required 
                                       class="w-full mt-2 p-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fcc007]/50 focus:border-[#fcc007]">
                                <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                            </div>
                            <div>
                                <label for="empresa" class="block text-sm font-semibold text-gray-600 mb-2">Empresa *</label>
                                <input type="text" id="empresa" name="last_name" required 
                                       class="w-full mt-2 p-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fcc007]/50 focus:border-[#fcc007]">
                                <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                            </div>
                        </div>
                        
                        <!-- Mensagem -->
                        <div>
                            <label for="mensagem" class="block text-sm font-semibold text-gray-600 mb-2">Mensagem</label>
                            <textarea id="mensagem" name="message" rows="4" 
                                      class="w-full mt-2 p-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fcc007]/50 focus:border-[#fcc007] resize-vertical"></textarea>
                        </div>
                        
                        <!-- Botão de Envio -->
                        <button type="submit" 
                                class="w-full mt-6 bg-[#fcc007] text-[#4c4c4c] font-bold text-lg rounded-full py-3 px-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            Fale Conosco
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção CTA Final -->
    <section class="relative bg-[#4c4c4c] py-20 text-center bg-cover bg-center bg-no-repeat" style="background-image: url('/assets/images/footer.png');">
        <!-- Overlay para melhorar legibilidade -->
        <div class="absolute inset-0 bg-[#4c4c4c] bg-opacity-75"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-6">
                Simplificando a logística,<br>
                <span class="text-[#fcc007]">conectando pessoas</span>
            </h2>
            <p class="text-lg text-gray-200 max-w-2xl mx-auto mb-10">
                Junte-se à rede logística mais confiável da região.
            </p>
            <a href="#cotizar" class="inline-block bg-[#fcc007] text-[#4c4c4c] font-bold text-lg rounded-full py-4 px-10 shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                Fale Conosco
            </a>
        </div>
    </section>

    <!-- Footer Funcional -->
    <footer class="bg-[#4c4c4c] border-t border-gray-700 py-10">
        <div class="container mx-auto px-4">
            <!-- Grid Principal de Conteúdo -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-300">
                <!-- Coluna 1: Branding -->
                 <div class="text-center md:text-left">
                     <img src="/assets/logos/logo-v3.png" alt="HUMBER Internacional" class="h-10 mx-auto md:mx-0 mb-4">
                     <p class="text-gray-400 text-sm">Logística Internacional</p>
                 </div>
                <!-- Coluna 2: Navegação -->
                <div class="text-center">
                    <h4 class="font-bold text-lg mb-4 text-[#fcc007]">Navegação</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#quienes-somos" class="hover:text-[#fcc007] transition-colors">Sobre Nós</a></li>
                        <li><a href="#cobertura" class="hover:text-[#fcc007] transition-colors">Cobertura</a></li>
                        <li><a href="#tipos-carga" class="hover:text-[#fcc007] transition-colors">Serviços</a></li>
                        <li><a href="#tecnologia" class="hover:text-[#fcc007] transition-colors">Tecnologia</a></li>
                        <li><a href="#cotizar" class="hover:text-[#fcc007] transition-colors">Contato</a></li>
                    </ul>
                </div>
                <!-- Coluna 3: Contato -->
                <div class="text-center md:text-right">
                    <h4 class="font-bold text-lg mb-4 text-[#fcc007]">Contato Direto</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>AR: <a href="tel:+5491127530009" class="hover:text-[#fcc007] transition-colors">+54 9 11 2753-0009</a></li>
                        <li>CL: <a href="tel:+56950004666" class="hover:text-[#fcc007] transition-colors">+56 9 5000 4666</a></li>
                        <li>BR: <a href="tel:+554398650213" class="hover:text-[#fcc007] transition-colors">+55 43 9865-0213</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6">
                 <p class="text-sm text-gray-400 text-center">© HUMBER, 2025. Todos os direitos reservados.</p>
             </div>
        </div>
    </footer>

    <!-- FAB WhatsApp -->
    <div class="fab-whatsapp">
        <div class="fab-options">
            <div class="bg-white rounded-lg shadow-lg p-2 space-y-2 min-w-48">
                <a href="https://wa.me/5491127530009" target="_blank" 
                   class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                    <img src="/assets/images/argentina.svg" alt="Argentina" class="w-6 h-6">
                    <span class="text-sm font-medium text-gray-700">Argentina</span>
                </a>
                <a href="https://wa.me/56950004666" target="_blank" 
                   class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                    <img src="/assets/images/chile.svg" alt="Chile" class="w-6 h-6">
                    <span class="text-sm font-medium text-gray-700">Chile</span>
                </a>
                <a href="https://wa.me/554398650213" target="_blank" 
                   class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                    <img src="/assets/images/brasil.svg" alt="Brasil" class="w-6 h-6">
                    <span class="text-sm font-medium text-gray-700">Brasil</span>
                </a>
            </div>
        </div>
        <button id="fab-btn" class="bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg transition-colors" 
                aria-label="Contatar por WhatsApp">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
        </button>
    </div>

    <!-- Toast Container -->
    <div id="toast-container"></div>

    <!-- Hero Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Elementos para a animação cinematográfica
            const elements = [
                { id: 'hero-logo', delay: 200 },
                { id: 'hero-h1', delay: 400 },
                { id: 'hero-flags', delay: 600 },
                { id: 'hero-subcopy', delay: 700 }
            ];

            elements.forEach(({ id, delay }) => {
                const el = document.getElementById(id);
                if (el) {
                    setTimeout(() => {
                        el.classList.remove('opacity-0', '-translate-y-4');
                    }, delay);
                }
            });
        });
    </script>

    <script src="/js/app.js"></script>
@endsection