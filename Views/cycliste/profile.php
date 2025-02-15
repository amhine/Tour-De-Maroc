<?php
require_once 'common/header.php';
?>

<!-- Form -->
<form method="POST" class="space-y-8 p-8" enctype="multipart/form-data">
    <!-- Profile Section -->
    <div>
        <h2 class="text-lg font-medium text-gray-800 mb-6">3. Profil</h2>
        <div class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Photo de profil</label>
                <div class="flex items-center space-x-4">
                    <div class="w-24 h-24 bg-gray-100 rounded-full overflow-hidden">
                        <img src="/api/placeholder/96/96" alt="Aperçu du profil" class="w-full h-full object-cover">
                    </div>
                    <label class="cursor-pointer bg-white px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50">
                        <span class="text-sm text-gray-600">Télécharger une photo</span>
                        <input type="file" name="image_profile" class="hidden" accept="image/*">
                    </label>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Bio</label>
                <textarea name="achievements" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Parlez-nous de vous..."></textarea>
            </div>
        </div>
    </div>

    <!-- Personal Details Section -->
    <div>
        <h2 class="text-lg font-medium text-gray-800 mb-6">1. Détails personnels</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                <input type="text" name="nom" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                <input type="text" name="prenom" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Âge</label>
                <input type="number" name="age" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nationalité</label>
                <input type="text" name="nationality" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Type de course préféré</label>
                <select name="preferred_race_type" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Sélectionnez un type de course</option>
                    <option value="road">Course sur route</option>
                    <option value="time-trial">Contre-la-montre</option>
                    <option value="mountain">VTT</option>
                    <option value="cyclocross">Cyclocross</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Physical Details Section -->
    <div>
        <h2 class="text-lg font-medium text-gray-800 mb-6">2. Détails physiques</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Taille (cm)</label>
                <input type="number" name="height_cm" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Poids (kg)</label>
                <input type="number" name="weight_kg" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Enregistrer le profil
        </button>
    </div>
</form>

<?php
require_once 'common/footer.php';
?>