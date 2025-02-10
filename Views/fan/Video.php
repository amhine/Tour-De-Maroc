<?php 
    require_once __DIR__ . '/common/header.php';
?>

    <main class="container mx-auto px-4 py-12 max-w-7xl">
        <h1 class="text-2xl font-bold mb-8">TOUTES LES IMAGES DU TOUR DE FRANCE</h1>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Gallery Item 1 -->
            <div class="gallery-item relative aspect-video cursor-pointer overflow-hidden group">
                <img src=""
                    alt="Tour de France"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-yellow-400 px-3 py-1 text-xs font-bold">
                        ACTUALITÉS
                    </span>
                </div>
                <div class="gallery-content absolute bottom-0 left-0 right-0 p-4 z-10">
                    <h3 class="text-white font-bold">Les plus belles images de l'étape 1</h3>
                    <p class="text-gray-200 text-sm mt-2">Revivez les moments forts de cette première étape...</p>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item relative aspect-video cursor-pointer overflow-hidden group">
                <img src="/placeholder.svg" alt="Tour de France"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-yellow-400 px-3 py-1 text-xs font-bold">
                        VIDÉO
                    </span>
                </div>
                <div class="gallery-content absolute bottom-0 left-0 right-0 p-4 z-10">
                    <h3 class="text-white font-bold">Les meilleurs moments en vidéo</h3>
                    <p class="text-gray-200 text-sm mt-2">Retrouvez le résumé de l'étape en vidéo...</p>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item relative aspect-video cursor-pointer overflow-hidden group">
                <img src="/placeholder.svg" alt="Tour de France"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="absolute top-4 left-4 z-10">
                    <span class="bg-yellow-400 px-3 py-1 text-xs font-bold">
                        PHOTOS
                    </span>
                </div>
                <div class="gallery-content absolute bottom-0 left-0 right-0 p-4 z-10">
                    <h3 class="text-white font-bold">La beauté des paysages</h3>
                    <p class="text-gray-200 text-sm mt-2">Découvrez les plus beaux panoramas...</p>
                </div>
            </div>

            <!-- Repeat similar structure for more gallery items -->
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-yellow-400 text-black px-8 py-3 font-bold hover:bg-yellow-500 transition-colors">
                CHARGER PLUS
            </button>
        </div>
    </main>

<?php 
    require_once __DIR__ . '/common/footer.php';
?>

