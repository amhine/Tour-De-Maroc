<?php 
    require_once __DIR__ . '/common/header.php';
?>
    
    <main class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-xl font-bold">CLASSEMENT 2024 À L'ISSUE DE L'ÉTAPE 21</h1>
            <div class="flex items-center space-x-4">
                <button class="p-2 hover:bg-gray-200 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <span>ÉTAPE 21</span>
                <button class="p-2 hover:bg-gray-200 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Classification Tabs -->
        <div class="flex border-b mb-6">
            <button class="px-6 py-3 font-bold border-b-2 border-yellow-400 text-black">
                CLASSEMENT GÉNÉRAL
            </button>
            <button class="px-6 py-3 text-gray-500 hover:text-black">
                CLASSEMENT DE L'ÉTAPE
            </button>
        </div>

        <!-- Classification Icons -->
        <div class="flex justify-between items-center mb-6">
            <div class="flex space-x-4">
                <span class="text-sm text-gray-500">Distance totale parcourue : 3488 km</span>
            </div>
        </div>

        <!-- Leaderboard Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <!-- Table Header -->
            <div class="grid grid-cols-12 gap-4 px-6 py-3 bg-gray-50 text-sm text-gray-500">
                <div class="col-span-1">Rang</div>
                <div class="col-span-3">Coureur</div>
                <div class="col-span-3">Équipe</div>
                <div class="col-span-2">Temps</div>
                <div class="col-span-2">Écart</div>
                <div class="col-span-1">B</div>
            </div>

            <!-- Table Body -->
            <div class="divide-y">
                <!-- Rider 1 -->
                <div class="grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50">
                    <div class="col-span-1 font-bold">1</div>
                    <div class="col-span-3 flex items-center space-x-3">
                        <span class="flag-icon flag-icon-si"></span>
                        <img src="/placeholder.svg" alt="T. POGACAR" class="w-10 h-10 rounded-full">
                        <span class="font-medium">T. POGACAR</span>
                    </div>
                    <div class="col-span-3 text-gray-600">UAE TEAM EMIRATES</div>
                    <div class="col-span-2">83h 38' 58"</div>
                    <div class="col-span-2">-</div>
                    <div class="col-span-1">8"</div>
                </div>

                <!-- Repeat for other riders -->
                <!-- Example for 2nd place -->
                <div class="grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50">
                    <div class="col-span-1 font-bold">2</div>
                    <div class="col-span-3 flex items-center space-x-3">
                        <span class="flag-icon flag-icon-dk"></span>
                        <img src="/placeholder.svg" alt="J. VINGEGAARD" class="w-10 h-10 rounded-full">
                        <span class="font-medium">J. VINGEGAARD</span>
                    </div>
                    <div class="col-span-3 text-gray-600">TEAM VISMA | LEASE A BIKE</div>
                    <div class="col-span-2">83h 40' 51"</div>
                    <div class="col-span-2">+ 00h 01' 53"</div>
                    <div class="col-span-1">8"</div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-center space-x-4 mt-8">
            <button class="bg-black text-white px-6 py-3 rounded flex items-center space-x-2">
                <span>SUITE DU CLASSEMENT</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <button class="bg-black text-white px-6 py-3 rounded">
                ABANDONS
            </button>
        </div>

        <!-- Follow Us Section -->
        <section class="mt-16 text-center">
            <h2 class="font-bold mb-4">SUIVEZ-NOUS</h2>
            <p class="text-sm text-gray-500 mb-6">Recevez des informations exclusives sur le Tour de France</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm3 8h-1.35c-.538 0-.65.221-.65.778V10h2l-.209 2H13v7h-3v-7H8v-2h2V7.692C10 5.923 10.931 5 13.029 5H15v3z" />
                    </svg>
                </a>
                <!-- Add other social media icons -->
            </div>
        </section>
    </main>

<?php 
    require_once __DIR__ . '/common/footer.php';
?>
