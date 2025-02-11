<?php
    require_once 'common/header.php';
?>



<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Profile Section -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="text-center mb-6">
                    <div class="relative inline-block">
                        <img src="/api/placeholder/128/128" alt="Profile" class="w-32 h-32 rounded-full mx-auto">
                        <label class="absolute bottom-0 right-0 bg-yellow-400 p-2 rounded-full cursor-pointer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </label>
                    </div>
                </div>
                <!-- Profile form -->
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Prénom</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Équipe</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                </form>
            </div>
        </div>

        <!-- Performance Stats -->
        <div class="lg:col-span-3">
            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-sm text-gray-500">Vitesse moyenne</div>
                    <div class="text-2xl font-bold">32.5 km/h</div>
                    <div class="text-xs text-green-500">+2.3% vs dernière course</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-sm text-gray-500">Points</div>
                    <div class="text-2xl font-bold">245</div>
                    <div class="text-xs text-yellow-500">3ème au classement</div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-sm text-gray-500">Courses complétées</div>
                    <div class="text-2xl font-bold">12</div>
                    <div class="text-xs text-gray-500">Cette saison</div>
                </div>
            </div>

            <!-- Performance History -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-4">Historique des performances</h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="text-left border-b">
                            <th class="pb-3">Course</th>
                            <th class="pb-3">Date</th>
                            <th class="pb-3">Distance</th>
                            <th class="pb-3">Temps</th>
                            <th class="pb-3">Position</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y">
                        <tr>
                            <td class="py-3">Étape 1</td>
                            <td class="py-3">05/07/2024</td>
                            <td class="py-3">185 km</td>
                            <td class="py-3">4h 32m</td>
                            <td class="py-3">
                                <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-sm">1er</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'common/footer.php';
?>
