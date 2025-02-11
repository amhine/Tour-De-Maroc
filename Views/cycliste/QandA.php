<?php
require_once 'common/header.php';
?>

<main class="container mx-auto px-4 py-8 max-w-4xl">
    <!-- Question Card -->
    <div class="bg-white rounded-lg shadow-sm mb-6">
        <!-- Question Header -->
        <div class="p-4 border-b">
            <div class="flex items-start space-x-3">
                <img src="/placeholder.svg" alt="Profile" class="w-10 h-10 rounded-full">
                <div class="flex-1">
                    <div class="flex items-center space-x-2">
                        <h3 class="font-bold">Jean Dupont</h3>
                        <span class="text-sm text-gray-500">• 2h</span>
                    </div>
                    <p class="mt-2">Comment gérer l'alimentation pendant une étape de montagne ? J'ai du mal à trouver le bon équilibre entre l'énergie nécessaire et le poids.</p>
                </div>
            </div>
        </div>

        <!-- Interaction Stats -->
        <div class="px-4 py-2 border-b flex items-center space-x-4 text-sm text-gray-600">
            <div class="flex items-center space-x-2">
                <button class="hover:bg-gray-100 p-1 rounded">
                    <i class="fas fa-arrow-up"></i>
                </button>
                <span>24</span>
                <button class="hover:bg-gray-100 p-1 rounded">
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>
            <div class="flex items-center space-x-1">
                <i class="far fa-comment"></i>
                <span>8 réponses</span>
            </div>
            <button class="hover:bg-gray-100 p-1 rounded">
                <i class="fas fa-share"></i>
                Partager
            </button>
        </div>

        <!-- Answers Section -->
        <div class="p-4 space-y-4">
            <!-- Existing Answer -->
            <div class="pl-8 border-l-2 border-gray-200">
                <div class="flex items-start space-x-3">
                    <img src="/placeholder.svg" alt="Profile" class="w-8 h-8 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center space-x-2">
                            <h4 class="font-bold">Marie Martin</h4>
                            <span class="text-sm text-gray-500">• 1h</span>
                        </div>
                        <p class="mt-1 text-sm">Je recommande de prendre des barres énergétiques toutes les 45 minutes et de bien s'hydrater. Pour les cols, privilégiez les glucides complexes avant l'ascension.</p>
                        <div class="mt-2 flex items-center space-x-4 text-sm text-gray-600">
                            <div class="flex items-center space-x-2">
                                <button class="hover:bg-gray-100 p-1 rounded">
                                    <i class="fas fa-arrow-up"></i>
                                </button>
                                <span>12</span>
                                <button class="hover:bg-gray-100 p-1 rounded">
                                    <i class="fas fa-arrow-down"></i>
                                </button>
                            </div>
                            <button class="text-gray-500 hover:text-gray-700">Répondre</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Answer Input -->
            <div class="flex items-start space-x-3 pt-4">
                <img src="/placeholder.svg" alt="Your Profile" class="w-8 h-8 rounded-full">
                <div class="flex-1">
                        <textarea
                            placeholder="Répondre..."
                            class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent resize-none"
                            rows="3"
                        ></textarea>
                    <div class="mt-2 flex justify-end">
                        <button class="bg-yellow-400 text-black px-4 py-2 rounded-md text-sm font-bold hover:bg-yellow-500">
                            Répondre
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Question Card -->
    <div class="bg-white rounded-lg shadow-sm mb-6">
        <div class="p-4 border-b">
            <div class="flex items-start space-x-3">
                <img src="/placeholder.svg" alt="Profile" class="w-10 h-10 rounded-full">
                <div class="flex-1">
                    <div class="flex items-center space-x-2">
                        <h3 class="font-bold">Pierre Dubois</h3>
                        <span class="text-sm text-gray-500">• 5h</span>
                    </div>
                    <p class="mt-2">Quelle est la meilleure façon de récupérer après une étape difficile ? Je participe à une course par étapes la semaine prochaine.</p>
                </div>
            </div>
        </div>

        <div class="px-4 py-2 border-b flex items-center space-x-4 text-sm text-gray-600">
            <div class="flex items-center space-x-2">
                <button class="hover:bg-gray-100 p-1 rounded">
                    <i class="fas fa-arrow-up"></i>
                </button>
                <span>18</span>
                <button class="hover:bg-gray-100 p-1 rounded">
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>
            <div class="flex items-center space-x-1">
                <i class="far fa-comment"></i>
                <span>5 réponses</span>
            </div>
            <button class="hover:bg-gray-100 p-1 rounded">
                <i class="fas fa-share"></i>
                Partager
            </button>
        </div>

        <div class="p-4">
            <!-- New Answer Input -->
            <div class="flex items-start space-x-3">
                <img src="/placeholder.svg" alt="Your Profile" class="w-8 h-8 rounded-full">
                <div class="flex-1">
                        <textarea
                            placeholder="Répondre..."
                            class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent resize-none"
                            rows="3"
                        ></textarea>
                    <div class="mt-2 flex justify-end">
                        <button class="bg-yellow-400 text-black px-4 py-2 rounded-md text-sm font-bold hover:bg-yellow-500">
                            Répondre
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'common/footer.php';
?>

