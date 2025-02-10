<?php 
    require_once __DIR__ . '/common/header.php';
?>
    
    <!-- Hero Section -->
    <header class="relative h-[900px]">
        <div class="absolute inset-0">
            <img src="  " alt="Tour de France cyclists" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>
        <div class="relative container mx-auto px-4 py-20">
            <h1 class="text-white text-6xl font-extrabold max-w-3xl leading-tight">
                DÉCOUVREZ LE PARCOURS DU TOUR DE FRANCE 2025
            </h1>
            <button class="mt-8 bg-yellow-400 text-black px-8 py-3 font-bold hover:bg-yellow-300 transition-colors">
                VOIR LA VIDÉO
            </button>
        </div>
    </header>

    <!-- News Cards Section -->
    <section class="container mx-auto px-4 -mt-32 relative z-10">
        <div class="grid grid-cols-3 gap-6">
            <div class="bg-black text-white group cursor-pointer">
                <div class="relative aspect-video overflow-hidden">
                    <img src="/placeholder.svg" alt="Cyclo-sportifs"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                </div>
                <div class="p-4">
                    <div class="text-yellow-400 text-sm font-bold mb-2">ACTUALITÉS</div>
                    <h2 class="text-xl font-bold">TROUVEZ VOS PROCHAINS DÉFIS CYCLO-SPORTIFS !</h2>
                </div>
            </div>

            <div class="bg-black text-white group cursor-pointer">
                <div class="relative aspect-video overflow-hidden">
                    <img src="/placeholder.svg" alt="Cyclo-sportifs"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                </div>
                <div class="p-4">
                    <div class="text-yellow-400 text-sm font-bold mb-2">ACTUALITÉS</div>
                    <h2 class="text-xl font-bold">TROUVEZ VOS PROCHAINS DÉFIS CYCLO-SPORTIFS !</h2>
                </div>
            </div>

            <!-- Repeat for other news cards -->
        </div>
    </section>
    
    <!-- Main Section -->
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