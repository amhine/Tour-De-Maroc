<?php 
    require_once __DIR__ . '/common/header.php';
?>
  
    <main class="container mx-auto px-4 py-12 max-w-7xl">
        <!-- Header -->
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-8">ACTUS</h1>
            <h2 class="text-xl font-bold">DERNIERS ARTICLES</h2>
        </header>

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="group">
                <div class="relative aspect-video overflow-hidden mb-4">
                    <img src="/placeholder.svg" alt="Tour de France Club" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-4 left-4 bg-yellow-400 px-3 py-1 text-xs font-bold">
                        ACTUALITÉS
                    </span>
                </div>
                <h3 class="font-bold text-lg mb-4 group-hover:text-yellow-400 transition-colors">
                    LE CALENDRIER DE L'AVENT DU TOUR DE FRANCE CLUB BY MONDIAL RELAY EST DE RETOUR !
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Comme chaque année, le Tour de France Club vous fait gagner des lots tout au long du...
                </p>
                <a href="#" class="inline-block bg-black text-white px-6 py-2 text-sm font-medium hover:bg-yellow-400 transition-colors">
                    LIRE LA SUITE
                </a>
            </article>

            <!-- Article 2 -->
            <article class="group">
                <div class="relative aspect-video overflow-hidden mb-4">
                    <img src="/placeholder.svg" alt="XPO Logistics" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-4 left-4 bg-yellow-400 px-3 py-1 text-xs font-bold">
                        ACTUALITÉS
                    </span>
                </div>
                <h3 class="font-bold text-lg mb-4 group-hover:text-yellow-400 transition-colors">
                    XPO LOGISTICS SILLONNERA LES ROUTES DU TOUR DE FRANCE SIX ANNÉES SUPPLÉMENTAIRES
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Depuis plus de 40 ans, XPO Logistics est le transporteur officiel et responsable du...
                </p>
                <a href="#" class="inline-block bg-black text-white px-6 py-2 text-sm font-medium hover:bg-yellow-400 transition-colors">
                    LIRE LA SUITE
                </a>
            </article>

            <!-- Article 3 -->
            <article class="group">
                <div class="relative aspect-video overflow-hidden mb-4">
                    <img src="" alt="Tour de France Mountains" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-4 left-4 bg-yellow-400 px-3 py-1 text-xs font-bold">
                        ACTUALITÉS
                    </span>
                </div>
                <h3 class="font-bold text-lg mb-4 group-hover:text-yellow-400 transition-colors">
                    SUR UN AIR DE RETROUVAILLES
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Le crayon n'a pas délaissé d'un millimètre ! L'annonce...
                </p>
                <a href="#" class="inline-block bg-black text-white px-6 py-2 text-sm font-medium hover:bg-yellow-400 transition-colors">
                    LIRE LA SUITE
                </a>
            </article>

            <!-- Article 4 - Velux -->
            <article class="group">
                <div class="relative aspect-video overflow-hidden mb-4">
                    <img src="/placeholder.svg" alt="Velux Partnership" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <span class="absolute top-4 left-4 bg-yellow-400 px-3 py-1 text-xs font-bold">
                        ACTUALITÉS
                    </span>
                </div>
                <h3 class="font-bold text-lg mb-4 group-hover:text-yellow-400 transition-colors">
                    VELUX DEVIENT PARTENAIRE OFFICIEL DU TOUR DE FRANCE
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    L'arrivée du groupe danois VELUX est une nouvelle marque de confiance du sport...
                </p>
                <a href="#" class="inline-block bg-black text-white px-6 py-2 text-sm font-medium hover:bg-yellow-400 transition-colors">
                    LIRE LA SUITE
                </a>
            </article>

            <!-- More articles... -->
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-yellow-400 text-black px-8 py-3 font-bold hover:bg-yellow-500 transition-colors">
                PLUS DE CONTENU
            </button>
        </div>

        <!-- Follow Us Section -->
        <section class="mt-24 text-center">
            <h2 class="font-bold text-xl mb-4">SUIVEZ-NOUS</h2>
            <p class="text-gray-600 mb-8">Recevez des informations exclusives sur le Tour de France</p>
            <div class="flex justify-center items-center space-x-4">
                <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </section>
    </main>

<?php 
    require_once __DIR__ . '/common/footer.php';
?>
