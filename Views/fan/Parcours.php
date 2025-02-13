<?php
require_once __DIR__ . '/common/header.php';
?>
<main class="container mx-auto px-4 py-12 max-w-7xl">
    <!-- Stages Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="text-left">
                <tr class="border-b">
                    <th class="py-4 px-4 font-medium text-gray-500">ÉTAPE</th>
                    <th class="py-4 px-4 font-medium text-gray-500">TYPE</th>
                    <th class="py-4 px-4 font-medium text-gray-500">DATE</th>
                    <th class="py-4 px-4 font-medium text-gray-500">DÉPART</th>
                    <th class="py-4 px-4 font-medium text-gray-500">ARRIVÉE</th>
                    <th class="py-4 px-4 font-medium text-gray-500">DISTANCE</th>
                    <th class="py-4 px-4 font-medium text-gray-500">DÉTAILS</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (!empty($etapes)): ?>
                    <?php foreach ($etapes as $etape): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-4"><?= $etape->etape_id ?></td>
                            <td class="py-4 px-4">
                                <i class="fas fa-road text-gray-600"></i>
                                <span class="ml-2 text-sm text-gray-600"><?= $etape->type ?></span>
                            </td>
                            <td class="py-4 px-4 text-sm"><?= $etape->date ?></td>
                            <td class="py-4 px-4 font-medium"><?= $etape->depart ?></td>
                            <td class="py-4 px-4 font-medium"><?= $etape->arrivee ?></td>
                            <td class="py-4 px-4"><?= $etape->distance ?> KM</td>
                            <td class="py-4 px-4">
                                <a href="Etapes/<?= $etape->etape_id ?>"
                                    class="bg-black text-white px-4 py-1 text-sm hover:bg-yellow-400 transition-colors">
                                    ÉTAPE <?= $etape->etape_id ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="py-4 px-4 text-center text-gray-500">Aucune étape trouvée.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Course Information Sections -->
    <div class="mt-16 space-y-12">
        <!-- Parcours Section -->
        <section>
            <h2 class="inline-block bg-yellow-400 px-4 py-2 font-bold mb-4">PARCOURS</h2>
            <div class="space-y-4">
                <p>Hexagonal à 100 %. Le Tour de France 2025 ne fera pas d'escapade au-delà de ses frontières et son parcours sera intégralement tracé dans l'Hexagone.</p>
                <p>Cela vient une année étape 2025. <strong>11 Régions et 34 départements seront visités.</strong></p>
            </div>
        </section>

        <!-- Etapes Section -->
        <section>
            <h2 class="inline-block bg-yellow-400 px-4 py-2 font-bold mb-4">ÉTAPES</h2>
            <div class="space-y-4">
                <p>Elles seront au nombre de 21 : <strong>7 de plaine, 6 accidentées, 6 de montagne avec cinq arrivées en altitude</strong> à Hautacam, Luchon- Superbagnères, mont Ventoux, Courchevel col de la Loze et La Plagne Tarentaise, <strong>2 contre la montre</strong>, il y aura 2 journées de repos.</p>
            </div>
        </section>

        <!-- Nouveaux et Nouvelles Élues Section -->
        <section>
            <h2 class="inline-block bg-yellow-400 px-4 py-2 font-bold mb-4">NOUVEAUX ET NOUVELLES ÉLUES</h2>
            <div class="space-y-4">
                <p>Sur un total de 39, 8 sites ou villes-étapes visités rejoindront la famille du Tour :</p>
                <ul class="list-disc list-inside space-y-2 ml-4">
                    <li>Lauwin-Planque (départ de la 2e étape)</li>
                    <li>Bayeux (départ de la 6e étape)</li>
                    <li>Chinon (départ de la 9e étape)</li>
                    <li>Ennezat (départ de la 10e étape)</li>
                    <li>Le Mont-Dore Puy de Sancy (arrivée de la 10e étape)</li>
                    <li>Bollène (départ de la 17e étape)</li>
                    <li>Vif (départ de la 18e étape)</li>
                    <li>Mantes-la-Ville (départ de la 21e étape)</li>
                </ul>
            </div>
        </section>

        <!-- Other sections with similar structure... -->
    </div>

    <!-- Follow Us Section -->
    <section class="mt-24 text-center">
        <h2 class="font-bold text-xl mb-4">SUIVEZ-NOUS</h2>
        <p class="text-gray-600 mb-8">Recevez des informations exclusives sur le Tour de France</p>
        <div class="flex justify-center items-center space-x-4">
            <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="#" class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/common/footer.php';
?>