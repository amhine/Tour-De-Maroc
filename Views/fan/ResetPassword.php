

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation du mot de passe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Formulaire de réinitialisation de mot de passe -->
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-center mb-6">Réinitialisation du mot de passe</h2>
            <form class="space-y-4" action="/UpdatePassword" method="POST">
                <!-- Champ caché pour transmettre le token -->
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

                <!-- Champ pour le nouveau mot de passe -->
                <div>
                    <label class="block text-sm mb-1">Nouveau mot de passe</label>
                    <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
                </div>

                <!-- Champ pour la confirmation du mot de passe -->
                <div>
                    <label class="block text-sm mb-1">Confirmer le mot de passe</label>
                    <input type="password" name="confirm_password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
                </div>

                <!-- Bouton de soumission -->
                <button type="submit" class="w-full bg-black text-white py-3 rounded font-bold hover:bg-gray-800">
                    Réinitialiser
                </button>
            </form>
        </div>

        <!-- Footer -->
        <div class="text-center mt-6">
            <a href="#" class="text-sm text-gray-600 hover:underline">Mentions légales</a>
        </div>
    </div>
</body>
</html>