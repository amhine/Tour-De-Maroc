<?php
require_once 'common/header.php';
?>


<main class="container mx-auto px-4 py-8 flex-grow flex items-center">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 w-full">
        <!-- Main Content Area -->
        <div class="lg:col-span-3 space-y-8">
            <!-- Performance Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-sm text-gray-500">Vitesse moyenne</div>
                        <div class="text-green-500 text-sm">▲ 2.3%</div>
                    </div>
                    <div class="text-3xl font-bold">32.5 km/h</div>
                    <div class="mt-4 h-2 bg-gray-100 rounded">
                        <div class="h-2 bg-green-500 rounded" style="width: 85%"></div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-sm text-gray-500">Points</div>
                        <div class="text-yellow-500 text-sm">3ème</div>
                    </div>
                    <div class="text-3xl font-bold">245</div>
                    <div class="mt-4 h-2 bg-gray-100 rounded">
                        <div class="h-2 bg-yellow-400 rounded" style="width: 75%"></div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-sm text-gray-500">Courses complétées</div>
                        <div class="text-blue-500 text-sm">Cette saison</div>
                    </div>
                    <div class="text-3xl font-bold">12</div>
                    <div class="mt-4 h-2 bg-gray-100 rounded">
                        <div class="h-2 bg-blue-500 rounded" style="width: 60%"></div>
                    </div>
                </div>
            </div>

            <!-- Race Stages Overview -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-6">Aperçu des Étapes</h2>
                <div class="space-y-4">
                    <!-- Stage Card -->
                    <div class="border rounded-lg p-4 hover:bg-gray-50 transition-colors">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <div class="bg-green-500 w-2 h-2 rounded-full"></div>
                                <h3 class="font-bold">Étape 1: Col du Tourmalet</h3>
                            </div>
                            <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">Difficile</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                            <div>
                                <div class="text-gray-500">Date</div>
                                <div>5 juillet 2024</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Distance</div>
                                <div>185 km</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Dénivelé</div>
                                <div>+2500m</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Durée est.</div>
                                <div>5h 30min</div>
                            </div>
                        </div>
                    </div>

                    <!-- Stage Card (Completed) -->
                    <div class="border rounded-lg p-4 bg-gray-50">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-3">
                                <div class="bg-yellow-400 w-2 h-2 rounded-full"></div>
                                <h3 class="font-bold">Étape 2: Plaine de la Loire</h3>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Facile</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                            <div>
                                <div class="text-gray-500">Date</div>
                                <div>6 juillet 2024</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Distance</div>
                                <div>160 km</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Dénivelé</div>
                                <div>+800m</div>
                            </div>
                            <div>
                                <div class="text-gray-500">Temps réalisé</div>
                                <div class="text-green-500 font-medium">4h 15min 🏆</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance History -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold mb-6">Historique des Performances</h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="text-left border-b">
                            <th class="pb-3">Course</th>
                            <th class="pb-3">Date</th>
                            <th class="pb-3">Distance</th>
                            <th class="pb-3">Temps</th>
                            <th class="pb-3">V.Moy</th>
                            <th class="pb-3">Position</th>
                            <th class="pb-3">Performance</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y">
                        <tr class="hover:bg-gray-50">
                            <td class="py-3">Étape 1: Montagne</td>
                            <td class="py-3">05/07/24</td>
                            <td class="py-3">185 km</td>
                            <td class="py-3">4h 32m</td>
                            <td class="py-3">34.2 km/h</td>
                            <td class="py-3">
                                <span class="bg-yellow-400 text-black px-2 py-1 rounded-full text-sm">1er 🏆</span>
                            </td>
                            <td class="py-3">
                                <span class="text-green-500">Record personnel</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3">Étape 2: Plaine</td>
                            <td class="py-3">06/07/24</td>
                            <td class="py-3">160 km</td>
                            <td class="py-3">4h 15m</td>
                            <td class="py-3">32.5 km/h</td>
                            <td class="py-3">
                                <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-sm">3ème</span>
                            </td>
                            <td class="py-3">
                                <span class="text-blue-500">Sprint final +5s</span>
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
