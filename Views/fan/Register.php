<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour de France Club - Authentication</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Registration Form -->
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8 mb-8">
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <img src="/api/placeholder/200/100" alt="Tour de France Club" class="h-16">
            </div>

            <h2 class="text-2xl font-bold text-center mb-6">INSCRIPTION</h2>

            <!-- Social Login -->
            <div class="flex justify-center gap-4 mb-4">
                <button class="w-10 h-10 bg-blue-600 text-white rounded flex items-center justify-center">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button class="w-10 h-10 bg-white border border-gray-300 rounded flex items-center justify-center">
                    <i class="fab fa-google"></i>
                </button>
                <button class="w-10 h-10 bg-black text-white rounded flex items-center justify-center">
                    <i class="fab fa-apple"></i>
                </button>
            </div>

            <div class="text-center text-gray-500 mb-6">ou</div>

            <!-- Registration Form Fields -->
            <form class="space-y-4">
                <div>
                    <label class="block text-sm mb-1">Prénom</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400">
                </div>

                <div>
                    <label class="block text-sm mb-1">Civilité</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400">
                        <option>Sélectionner</option>
                        <option>M.</option>
                        <option>Mme</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm mb-1">Nationalité</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400">
                        <option>Sélectionner</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm mb-1">Date de naissance</label>
                    <div class="grid grid-cols-3 gap-2">
                        <input type="text" placeholder="Jour" class="px-3 py-2 border border-gray-300 rounded">
                        <select class="px-3 py-2 border border-gray-300 rounded">
                            <option>Mois</option>
                        </select>
                        <input type="text" placeholder="Année" class="px-3 py-2 border border-gray-300 rounded">
                    </div>
                </div>

                <div>
                    <label class="block text-sm mb-1">Adresse électronique</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400">
                </div>

                <div>
                    <label class="block text-sm mb-1">Mot de passe</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400">
                </div>

                <div>
                    <label class="block text-sm mb-1">Confirmation du mot de passe</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400">
                </div>

                <!-- Checkboxes -->
                <div class="space-y-2">
                    <label class="flex items-start gap-2">
                        <input type="checkbox" class="mt-1">
                        <span class="text-sm">Je souhaite recevoir en exclusivité l'actualité du Tour de France, ainsi que les contenus et avantages réservés aux membres du Tour de France Club.</span>
                    </label>
                    <label class="flex items-start gap-2">
                        <input type="checkbox" class="mt-1">
                        <span class="text-sm">Je souhaite recevoir les meilleures offres et actualités de nos partenaires</span>
                    </label>
                </div>

                <button class="w-full bg-black text-white py-3 rounded font-bold hover:bg-gray-800">
                    INSCRIPTION
                </button>
            </form>

            <div class="text-center mt-6">
                <span class="text-sm">Vous avez déjà un compte ? </span>
                <a href="#" class="text-black font-bold">Connexion</a>
            </div>
        </div>
</body>
</html>