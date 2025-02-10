<?php 
    require_once __DIR__ . '/common/header.php';
?>
    
    <!-- Hero Section with Podium -->
    <header class="relative h-screen min-h-[600px]">
        <div class="absolute inset-0">
            <img src="" alt="Tour de France cyclists" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>

        <div class="relative container mx-auto px-4 py-20 flex justify-between items-start">
            <!-- Left Content -->
            <div class="max-w-2xl">
                <h1 class="text-white text-6xl font-extrabold leading-tight mb-8">
                    DÉCOUVREZ LE PARCOURS DU TOUR DE FRANCE 2025
                </h1>
                <button class="bg-yellow-400 text-black px-8 py-3 font-bold hover:bg-yellow-300 transition-colors">
                    VOIR LA VIDÉO
                </button>
            </div>

            <!-- Right Podium -->
            <div class="w-96 bg-black/80 p-6 rounded-lg">
                <h2 class="text-white text-xl font-bold mb-4">PALMARÈS 2024</h2>
                <div class="space-y-4">
                    <!-- Podium Items -->
                    <div class="podium-item">
                        <div class="jersey yellow-jersey"></div>
                        <div class="text-white">
                            <div class="font-bold">T. POGACAR</div>
                            <div class="text-sm text-gray-400">83h 38' 56"</div>
                        </div>
                    </div>
                    <!-- More podium items -->
                </div>
            </div>
        </div>

        <!-- News Cards -->
        <div class="relative container mx-auto px-4 -mb-32">
            <div class="grid grid-cols-3 gap-6">
                <div class="news-card">
                    <img src="/placeholder.svg" alt="News" class="w-full aspect-video object-cover">
                    <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
                        <span class="bg-yellow-400 text-black px-2 py-1 text-sm font-bold">ACTUALITÉS</span>
                        <h3 class="text-white text-xl font-bold mt-2">TROUVEZ VOS PROCHAINS DÉFIS CYCLO-SPORTIFS !</h3>
                    </div>
                </div>
                <!-- More news cards -->
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- News Section -->
            <div class="lg:col-span-2">
                <h2 class="text-2xl font-bold mb-8">SUIVRE LA LIVE</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- News Cards -->
                    <article class="group cursor-pointer">
                        <div class="relative aspect-video overflow-hidden">
                            <img src="/placeholder.svg" alt="News"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <span class="absolute bottom-4 left-4 text-white font-semibold">ÉTAPE 1</span>
                        </div>
                        <h3 class="mt-3 font-semibold">Lorem ipsum dolor sit amet</h3>
                    </article>
                    <!-- Repeat for other news cards -->
                </div>
            </div>

            <!-- Leaderboard -->
            <aside class="bg-gray-100 p-6">
                <h2 class="text-2xl font-bold mb-6">CLASSEMENT GÉNÉRAL</h2>
                <div class="space-y-4">
                    <!-- Leaderboard Items -->
                    <div class="flex items-center gap-4">
                        <span class="w-8 h-8 bg-yellow-400 flex items-center justify-center font-bold">1</span>
                        <span class="flex-1">Jonas Vingegaard</span>
                        <span class="text-gray-600">+0:00</span>
                    </div>
                    <!-- Repeat for other positions -->
                </div>
            </aside>
        </div>

        <!-- Culture Tour Section -->
        <section class="mt-16">
            <h2 class="text-2xl font-bold mb-8">CULTURE TOUR</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Culture Cards -->
                <article class="group cursor-pointer">
                    <div class="relative aspect-video overflow-hidden">
                        <img src="/placeholder.svg" alt="Culture"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>
                    <h3 class="mt-3 font-semibold">QUIZ : LE TOUR DE FRANCE</h3>
                    <button
                        class="mt-2 bg-yellow-400 text-black px-4 py-2 text-sm font-semibold hover:bg-yellow-300 transition-colors">
                        JOUER
                    </button>
                </article>
                <!-- Repeat for other culture cards -->
            </div>
        </section>

        <!-- Shop Section -->
        <section class="mt-16">
            <h2 class="text-2xl font-bold mb-8">BOUTIQUE OFFICIELLE</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Shop Items -->
                <article class="group cursor-pointer">
                    <div class="relative aspect-square overflow-hidden bg-gray-100">
                        <img src="/placeholder.svg" alt="Maillot" class="w-full h-full object-contain p-4">
                    </div>
                    <h3 class="mt-3 font-semibold">MAILLOTS</h3>
                    <button
                        class="mt-2 bg-yellow-400 text-black px-4 py-2 text-sm font-semibold hover:bg-yellow-300 transition-colors">
                        ACHETER
                    </button>
                </article>
                <!-- Repeat for other shop items -->
            </div>
        </section>
    </main>

<?php 
    require_once __DIR__ . '/common/footer.php';
?>