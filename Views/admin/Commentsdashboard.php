<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycling Comments Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-zinc-900 tracking-tight">Comments Dashboard</h1>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Total Comments -->
            <div class="bg-white rounded-xl p-6 border-l-4 border-yellow-400">
                <h3 class="text-zinc-500 text-sm font-medium uppercase tracking-wider">Total Comments</h3>
                <p class="text-2xl font-bold text-zinc-900 mt-2"><?= $totalComments ?></p>
            </div>

            <!-- Hidden Comments -->
            <div class="bg-white rounded-xl p-6 border-l-4 border-yellow-400">
                <h3 class="text-zinc-500 text-sm font-medium uppercase tracking-wider">Hidden Comments</h3>
                <p class="text-2xl font-bold text-zinc-900 mt-2"><?= $hiddenComments ?></p>
            </div>

            <!-- Average Comments per Etape -->
            <div class="bg-white rounded-xl p-6 border-l-4 border-yellow-400">
                <h3 class="text-zinc-500 text-sm font-medium uppercase tracking-wider">Average Comments per Etape</h3>
                <p class="text-2xl font-bold text-zinc-900 mt-2">
                    <?php
                    // Avoid division by zero.
                    $totalEtapes = 0; // Initialize the count of etapes
                    $etapesWithComments = [];

                    foreach ($comments as $comment) {
                         $etapesWithComments[$comment->fk_etape_id] = 1; // Use associative array trick
                    }
                    $totalEtapes = count($etapesWithComments);


                    echo ($totalEtapes > 0) ? number_format($totalComments / $totalEtapes, 1) : '0';
                    ?>
                </p>
            </div>
        </div>

        <!-- Comments List -->
        <div class="bg-white rounded-xl">
            <div class="p-6 border-b border-zinc-100">
                <h2 class="text-lg font-semibold text-zinc-900">Recent Comments</h2>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <!-- Loop through comments -->
                    <?php foreach ($comments as $comment): ?>
                        <div class="bg-zinc-50 rounded-lg p-4 hover:bg-zinc-100 transition-colors">
                            <div class="flex items-start justify-between">
                                <div class="space-y-1">
                                    <!-- Commenter Name and Etape -->
                                    <div class="flex items-center space-x-2">
                                        <span class="font-medium text-zinc-900"><?= htmlspecialchars($comment->fan_name) ?></span>
                                        <span class="text-sm text-zinc-500">on</span>
                                        <span class="text-sm font-medium text-yellow-600"><?= htmlspecialchars($comment->etape) ?></span>
                                    </div>

                                    <!-- Comment Content -->
                                    <p class="text-zinc-700"><?= htmlspecialchars($comment->comment_content) ?></p>

                                    <!-- Metadata -->
                                    <div class="flex items-center space-x-3 text-sm">
                                        <!--  No created_at in data, remove. -->
                                        <span class="text-yellow-600 font-medium">Stage Discussion</span>
                                        <span class="<?= $comment->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-zinc-200 text-zinc-800' ?> px-2 py-0.5 rounded-full text-xs font-medium">
                                            <?= $comment->status === 'active' ? 'Visible' : 'Hidden' ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Action Button (Placeholder - No Functionality) -->
                                <button class="p-1.5 text-zinc-400 hover:text-zinc-600 rounded-lg hover:bg-zinc-200 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>