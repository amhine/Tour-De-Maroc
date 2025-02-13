<?php 
    require_once __DIR__ . '/common/header.php';
?>

<!-- Hero Section -->
<div class="relative h-[500px] overflow-hidden">
        <img src="" alt="Stage hero section image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50">
            <div class="max-w-7xl mx-auto px-4 h-full flex items-center">
                <div class="text-white" id="hero-content">
                    <h1 class="text-5xl font-bold mb-4">Étape 2</h1>
                    <p class="text-2xl mb-2">Vitré → Rennes</p>
                    <p class="text-xl">Distance: 185 km</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stage Details -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Stage Info -->
            <div class="md:col-span-2 space-y-8">
                <div class="bg-white rounded-lg shadow-lg p-6" id="stage-info">
                    <h2 class="text-2xl font-bold mb-4">Informations de l'étape</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Date</p>
                            <p class="font-bold">2 juillet 2025</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Type</p>
                            <p class="font-bold">Plaine</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Départ</p>
                            <p class="font-bold">10:30</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Arrivée estimée</p>
                            <p class="font-bold">16:45</p>
                        </div>
                    </div>
                </div>

                <!-- Elevation Profile -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">Profil de l'étape</h2>
                    <div class="relative h-48 bg-gray-100 rounded">
                        <div class="absolute inset-0" id="elevation-profile">
                            <!-- SVG elevation profile -->
                            <svg viewBox="0 0 1000 200" class="w-full h-full">
                                <path d="M0,180 Q250,150 500,160 T1000,180" 
                                      stroke="#4B5563" 
                                      fill="none" 
                                      stroke-width="2"
                                      class="elevation-path"/>
                                <circle cx="0" cy="180" r="4" fill="#4B5563" class="elevation-point"/>
                                <circle cx="1000" cy="180" r="4" fill="#4B5563" class="elevation-point"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Route Description -->
                <div class="bg-white rounded-lg shadow-lg p-6" id="route-description">
                    <h2 class="text-2xl font-bold mb-4">Description du parcours</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Cette étape de plaine traverse la Bretagne d'est en ouest, offrant aux coureurs un parcours
                        relativement plat mais exposé aux vents. Le final dans les rues de Rennes promet d'être
                        spectaculaire avec un sprint massif attendu sur le Boulevard de la Liberté.
                    </p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-8">
                <!-- Key Points -->
                <div class="bg-white rounded-lg shadow-lg p-6" id="key-points">
                    <h2 class="text-2xl font-bold mb-4">Points clés</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3 hover:bg-gray-50 p-2 rounded transition-colors duration-200">
                            <span class="w-8 h-8 flex items-center justify-center bg-red-500 text-white rounded-full">S</span>
                            <div>
                                <p class="font-bold">Sprint intermédiaire</p>
                                <p class="text-sm text-gray-600">Fougères - km 82</p>
                            </div>
                        </li>
                        <li class="flex items-center space-x-3 hover:bg-gray-50 p-2 rounded transition-colors duration-200">
                            <span class="w-8 h-8 flex items-center justify-center bg-yellow-500 text-white rounded-full">R</span>
                            <div>
                                <p class="font-bold">Ravitaillement</p>
                                <p class="text-sm text-gray-600">Liffré - km 135</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Weather -->
                <div class="bg-white rounded-lg shadow-lg p-6" id="weather">
                    <h2 class="text-2xl font-bold mb-4">Météo</h2>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span>Température</span>
                            <span class="font-bold">22°C</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Vent</span>
                            <span class="font-bold">15 km/h NO</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Précipitations</span>
                            <span class="font-bold">10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Hero content animation
            gsap.from("#hero-content", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out"
            });

            // Stage info animation
            gsap.from("#stage-info", {
                duration: 0.8,
                x: -50,
                opacity: 0,
                delay: 0.3,
                ease: "power2.out"
            });

            // Elevation profile animation
            gsap.from(".elevation-path", {
                duration: 2,
                strokeDasharray: 1000,
                strokeDashoffset: 1000,
                ease: "power1.inOut"
            });

            gsap.from(".elevation-point", {
                duration: 0.5,
                scale: 0,
                delay: 1.5,
                stagger: 0.2,
                ease: "back.out"
            });

            // Animate key points on hover
            document.querySelectorAll('#key-points li').forEach(point => {
                point.addEventListener('mouseenter', () => {
                    gsap.to(point, {
                        duration: 0.3,
                        scale: 1.05,
                        backgroundColor: '#F3F4F6'
                    });
                });

                point.addEventListener('mouseleave', () => {
                    gsap.to(point, {
                        duration: 0.3,
                        scale: 1,
                        backgroundColor: 'transparent'
                    });
                });
            });
        });
    </script>

    <?php
    
    ?>