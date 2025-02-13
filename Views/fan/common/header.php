<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour de France - Grand Départ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .card-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
        }

        .classification-icon {
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .yellow-jersey {
            background-color: #FFD700;
        }

        .green-jersey {
            background-color: #1d8348;
        }

        .polka-dot {
            background-color: white;
            position: relative;
        }

        .polka-dot::after {
            content: '•';
            color: red;
            font-size: 24px;
            position: absolute;
        }

        .gallery-item::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover::after {
            opacity: 1;
        }

        .gallery-item:hover .gallery-content {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-content {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .news-card {
            position: relative;
            overflow: hidden;
        }

        .news-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
        }

        .podium-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            margin-bottom: 0.5rem;
            border-radius: 0.5rem;
            transition: transform 0.2s;
        }

        .podium-item:hover {
            transform: translateX(10px);
        }

        .jersey {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .yellow-jersey {
            background: var(--tdf-yellow);
        }

        .green-jersey {
            background: #1d8348;
        }

        .polka-jersey {
            background: white;
            position: relative;
        }

        .polka-jersey::after {
            content: '•';
            color: red;
            font-size: 2rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body class="bg-white">
    <!-- Main Navigation -->
    <nav class="bg-white shadow-md relative z-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Left Navigation -->
                <div class="flex items-center space-x-6">
                    <a href="/" class="font-bold hover:text-yellow-400">HOME</a>
                    <a href="/Parcours" class="font-bold hover:text-yellow-400">PARCOURS 2025</a>
                    <a href="/Grande_Depart" class="font-bold hover:text-yellow-400">GRANDS DÉPARTS</a>
                    <a href="/Culture" class="font-bold hover:text-yellow-400">CULTURE TOUR</a>
                    <a href="/Video" class="font-bold hover:text-yellow-400">VIDÉOS</a>
                </div>

                <!-- Right Navigation -->
                <div class="flex items-center space-x-6">
                    <a href="#" class="font-bold hover:text-yellow-400">FANTASY</a>
                    <a href="#" class="font-bold hover:text-yellow-400">CLUB</a>
                    <div class="flex items-center space-x-4">
                        <!-- <button class="text-xl">
                            <i class="fas fa-search"></i>
                        </button> -->
                        <button class="text-xl">
                            <i class="fas fa-bars"></i>
                        </button>
                        <button class="bg-black text-white px-4 py-1 text-xs font-bold hover:bg-yellow-400">
                            JE ME CONNECTE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>