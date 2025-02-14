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
       

        <!-- Login Form -->
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <img src="/api/placeholder/200/100" alt="Tour de France Club" class="h-16">
            </div>

            <h2 class="text-2xl font-bold text-center mb-6">ResetPassword</h2>


            <!-- Login Form Fields -->
            <form class="space-y-4" action="/ResetpasswordForm." method="POST">
            <div>
        <label class="block text-sm mb-1">Mot de passe</label>
        <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
    </div>
    <div>
        <label class="block text-sm mb-1">Confirmation du mot de passe</label>
        <input type="password" name="confirm_password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
    </div>

   

    <button type="submit" class="w-full bg-black text-white py-3 rounded font-bold hover:bg-gray-800">
        Envoyer
    </button>
</form>

        

        <!-- Footer -->
        <div class="text-center mt-6">
            <a href="#" class="text-sm text-gray-600 hover:underline">Mentions légales</a>
        </div>
    </div>
</body>
</html>
