
<?php
require_once './Controllers/RoleController.php';

$roleController = new Controllers\RoleController();
$roles = $roleController->getRoles();

?>
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

          

           
            <!-- Registration Form Fields -->
            <form class="space-y-4" action="/Register" method="POST">
    <div>
        <label class="block text-sm mb-1">Nom</label>
        <input type="text" name="nom" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
    </div>
    <div>
        <label class="block text-sm mb-1">Prénom</label>
        <input type="text" name="prenom" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
    </div>
    <div>
        <label class="block text-sm mb-1">Adresse électronique</label>
        <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
    </div>
    <div>
        <label class="block text-sm mb-1">Mot de passe</label>
        <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
    </div>
    <div>
        <label class="block text-sm mb-1">Confirmation du mot de passe</label>
        <input type="password" name="confirm_password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
    </div>
    <div>
        <label class="block text-sm mb-1">Rôle</label>
        <select name="role" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-400" required>
            <option value="0">Choisissez votre rôle</option>
            <?php foreach ($roles as $role): ?>
                <option value="<?php echo $role->role_name; ?>"><?php echo $role->role_name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="space-y-2">
        <label class="flex items-start gap-2">
            <input type="checkbox" class="mt-1" required>
            <span class="text-sm">Je souhaite recevoir les meilleures offres et actualités de nos partenaires</span>
        </label>
    </div>
    <button type="submit" class="w-full bg-black text-white py-3 rounded font-bold hover:bg-gray-800">
        INSCRIPTION
    </button>
</form>

            <div class="text-center mt-6">
                <span class="text-sm">Vous avez déjà un compte ? </span>
                <a href="/Login" class="text-black font-bold">Connexion</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php
        $message = '';
        $key = '';
        if (isset($_SESSION['Error'])) {
            $message = $_SESSION['Error'];
            $key = "error";
            unset($_SESSION['Error']);
        } elseif (isset($_SESSION['Success'])) {
            $message = $_SESSION['Success'];
            $key = "success";
            unset($_SESSION['Success']);
        }
        ?>
        document.addEventListener('DOMContentLoaded', function() {
            let message = "<?= $message; ?>";
            let key = "<?= $key ?>";
            if (message) {
                Swal.fire({
                    icon: key,
                    title: 'Message',
                    text: message,
                });
            }
        });
    </script>
</body>
</html>