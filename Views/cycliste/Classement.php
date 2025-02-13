<?php
require_once 'common/header.php';
?>

<div class="w-full flex justify-center p-8">

    <div class="w-full max-w-3xl">
        <h1 class="text-3xl font-bold text-center mb-12">Classement Général</h1>

        <!-- Podium Container -->
        <div class="relative flex items-end justify-center h-96 mb-8">
            <!-- Second Place -->
            <div class="w-1/3 px-2">
                <div class="flex flex-col items-center">
                    <!-- Profile Picture -->
                    <div class="relative mb-4">
                        <img src="" alt="2nd Place" class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-silver-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold shadow-md">
                            2
                        </div>
                    </div>
                    <!-- Podium -->
                    <div class="w-full bg-gradient-to-b from-gray-300 to-gray-400 rounded-t-lg h-48 podium-animation podium-2 flex items-end justify-center pb-2">
                        <span class="text-white font-bold">Tadej Pogačar</span>
                    </div>
                </div>
            </div>

            <!-- First Place -->
            <div class="w-1/3 px-2">
                <div class="flex flex-col items-center">
                    <!-- Profile Picture -->
                    <div class="relative mb-4">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                            <svg class="w-12 h-12 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <img src="" alt="1st Place" class="w-24 h-24 rounded-full border-4 border-yellow-400 shadow-lg">
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-yellow-400 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold shadow-md">
                            1
                        </div>
                    </div>
                    <!-- Podium -->
                    <div class="w-full bg-gradient-to-b from-yellow-400 to-yellow-500 rounded-t-lg h-64 podium-animation podium-1 flex items-end justify-center pb-2">
                        <span class="text-white font-bold">Jonas Vingegaard</span>
                    </div>
                </div>
            </div>

            <!-- Third Place -->
            <div class="w-1/3 px-2">
                <div class="flex flex-col items-center">
                    <!-- Profile Picture -->
                    <div class="relative mb-4">
                        <img src="" alt="3rd Place" class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold shadow-md">
                            3
                        </div>
                    </div>
                    <div class="w-full bg-gradient-to-b from-orange-400 to-orange-500 rounded-t-lg h-32 podium-animation podium-3 flex items-end justify-center pb-2">
                        <span class="text-white font-bold">Simon Yates</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Winner Info Box -->
        <div class="winner-info bg-white rounded-lg shadow-lg p-6 text-center">
            <h2 class="text-2xl font-bold text-yellow-500 mb-2">🏆 Champion du Tour</h2>
            <p class="text-xl font-bold mb-1">Jonas Vingegaard</p>
            <p class="text-gray-600 mb-4">Team Visma | Jumbo</p>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="bg-gray-50 p-3 rounded">
                    <p class="text-sm text-gray-500">Temps Total</p>
                    <p class="font-bold">82h 40m 42s</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <p class="text-sm text-gray-500">Vitesse Moyenne</p>
                    <p class="font-bold">41.4 km/h</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <p class="text-sm text-gray-500">Points</p>
                    <p class="font-bold">425</p>
                </div>
            </div>
        </div>
    </div>

</div>

<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="space-y-8">
        <!-- General Classification -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold mb-4">Classement Général</h2>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="text-left border-b">
                        <th class="pb-3">Position</th>
                        <th class="pb-3">Coureur</th>
                        <th class="pb-3">Équipe</th>
                        <th class="pb-3">Temps</th>
                        <th class="pb-3">Écart</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    <tr>
                        <td class="py-3">
                            <span class="bg-yellow-400 text-black px-2 py-1 rounded-full">1</span>
                        </td>
                        <td class="py-3">Jonas Vingegaard</td>
                        <td class="py-3">Team Visma</td>
                        <td class="py-3">82h 40m 42s</td>
                        <td class="py-3">--</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Points Classification -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold mb-4">Classement par Points</h2>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="text-left border-b">
                        <th class="pb-3">Position</th>
                        <th class="pb-3">Coureur</th>
                        <th class="pb-3">Équipe</th>
                        <th class="pb-3">Points</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    <tr>
                        <td class="py-3">
                            <span class="bg-green-400 text-black px-2 py-1 rounded-full">1</span>
                        </td>
                        <td class="py-3">Jasper Philipsen</td>
                        <td class="py-3">Alpecin-Deceuninck</td>
                        <td class="py-3">325</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
require_once 'common/footer.php';
?>
