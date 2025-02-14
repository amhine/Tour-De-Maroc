<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de mot de passe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .glass-button {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        .glass-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 to-teal-100 flex items-center justify-center min-h-screen p-6">
    <div class="glass p-8 max-w-md w-full text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Réinitialisation de mot de passe</h1>
        <p class="text-gray-600 mb-6">
            Vous avez demandé à réinitialiser votre mot de passe. Cliquez sur le bouton ci-dessous pour procéder.
        </p>
        <a href="#" class="glass-button inline-block px-6 py-3 rounded-lg text-white font-semibold bg-gradient-to-r from-green-400 to-teal-500 hover:from-green-500 hover:to-teal-600">
            Réinitialiser mon mot de passe
        </a>
        <p class="text-gray-500 text-sm mt-6">
            Si vous n'avez pas demandé cette réinitialisation, veuillez ignorer cet e-mail.
        </p>
    </div>
</body>
</html>