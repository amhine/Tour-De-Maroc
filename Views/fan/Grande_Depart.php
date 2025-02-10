
<?php 
    require_once __DIR__ . '/common/header.php';
?>

    <main class="container mx-auto px-4 py-12 max-w-7xl">
        <!-- Header Section -->
        <div class="mb-12">
            <h1 class="text-4xl font-bold mb-2">GRAND DÉPART</h1>
            <h2 class="text-xl mb-8">À VOS MARQUES, PRÊTS... PARTEZ !</h2>

            <div class="max-w-3xl space-y-4 text-gray-700">
                <p>Par définition, le Tour de France porte l'idée du voyage. Hormis une expérience en 1926 à Évian, il a
                    toutefois fallu attendre les années 50 pour voir la Grande Boucle s'élancer loin de ses bases
                    parisiennes, et 1954 pour que le peloton soit convoqué hors de frontières, en l'occurrence à
                    Amsterdam.</p>
                <p>Depuis l'après-guerre, 55 villes au total ont connu l'ambiance des derniers préparatifs et se sont
                    vêtues au compte-gouttes des équipes, tout en donnant à chaque fois une tonalité et une énergie
                    particulière à l'édition qui se profile.</p>
                <p>Pour 2025, le Grand Départ Lille-Nord de France promet au Tour de France un accueil à la hauteur de
                    la réputation des habitants du Nord.</p>
            </div>
        </div>

        <!-- Featured Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- Lille Card -->
            <div class="relative aspect-[4/3] group cursor-pointer overflow-hidden">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Frame%20(4).jpg-BAQxaSqGC1Bn5DXoivbAk49Bt5vdgD.jpeg"
                    alt="Grand Départ Lille 2025"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 card-overlay"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <div class="bg-yellow-400 text-black inline-block px-4 py-2 font-bold mb-4">
                        EN LIRE PLUS
                    </div>
                </div>
            </div>

            <!-- Barcelona Card -->
            <div class="relative aspect-[4/3] group cursor-pointer overflow-hidden">
                <img src="/placeholder.svg" alt="Grand Départ Barcelona 2024"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 card-overlay"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <div class="bg-yellow-400 text-black inline-block px-4 py-2 font-bold mb-4">
                        EN LIRE PLUS
                    </div>
                </div>
            </div>
        </div>

        <!-- Previous Grand Départs -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">RETOUR SUR LES GRANDS DÉPARTS DU TOUR DE FRANCE</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Florence Card -->
                <div class="relative aspect-[4/3] group cursor-pointer overflow-hidden">
                    <img src="/placeholder.svg" alt="Florence" class="w-full h-full object-cover">
                    <div class="absolute inset-0 card-overlay"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-2">GRAND DÉPART FLORENCE-ÉMILIE-ROMAGNE 2024</h3>
                        <button
                            class="bg-yellow-400 text-black px-6 py-2 font-bold hover:bg-yellow-500 transition-colors">
                            VOIR PLUS
                        </button>
                    </div>
                </div>

                <!-- Pays Basque Card -->
                <div class="relative aspect-[4/3] group cursor-pointer overflow-hidden">
                    <img src="/placeholder.svg" alt="Pays Basque" class="w-full h-full object-cover">
                    <div class="absolute inset-0 card-overlay"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-2">GRAND DÉPART PAYS BASQUE 2023</h3>
                        <button
                            class="bg-yellow-400 text-black px-6 py-2 font-bold hover:bg-yellow-500 transition-colors">
                            VOIR PLUS
                        </button>
                    </div>
                </div>

                <!-- Copenhagen Card -->
                <div class="relative aspect-[4/3] group cursor-pointer overflow-hidden">
                    <img src="/placeholder.svg" alt="Copenhagen" class="w-full h-full object-cover">
                    <div class="absolute inset-0 card-overlay"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-white text-xl font-bold mb-2">GRAND DÉPART COPENHAGUE 2022</h3>
                        <button
                            class="bg-yellow-400 text-black px-6 py-2 font-bold hover:bg-yellow-500 transition-colors">
                            VOIR PLUS
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">PARTENAIRES DU TOUR</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
                <div class="bg-gray-100 p-6 flex items-center justify-center">
                    <img src="/placeholder.svg" alt="LCL" class="h-12">
                </div>
                <div class="bg-gray-100 p-6 flex items-center justify-center">
                    <img src="/placeholder.svg" alt="SKODA" class="h-12">
                </div>
                <div class="bg-gray-100 p-6 flex items-center justify-center">
                    <img src="/placeholder.svg" alt="E.Leclerc" class="h-12">
                </div>
                <div class="bg-gray-100 p-6 flex items-center justify-center">
                    <img src="/placeholder.svg" alt="Krys" class="h-12">
                </div>
                <div class="bg-gray-100 p-6 flex items-center justify-center">
                    <img src="/placeholder.svg" alt="Continental" class="h-12">
                </div>
                <div class="bg-gray-100 p-6 flex items-center justify-center">
                    <img src="/placeholder.svg" alt="France.tv" class="h-12">
                </div>
            </div>
        </section>
    </main>

<?php 
    require_once __DIR__ . '/common/footer.php';
?>