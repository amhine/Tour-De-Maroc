<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour de France - Grand Départ</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    </style>
</head>

<body class="bg-white">
    <!-- Top Navigation Bar -->
    <nav class="bg-black text-white text-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-12">
                <!-- Left Navigation -->
                <div class="flex items-center space-x-6">
                    <img src="/placeholder.svg" alt="Tissot" class="h-4">
                    <a href="#" class="hover:text-yellow-400">AUTRES ÉPREUVES</a>
                    <a href="#" class="hover:text-yellow-400">DIFFUSEURS</a>
                    <a href="#" class="hover:text-yellow-400">MÉDIAS</a>
                    <a href="#" class="hover:text-yellow-400">JEUX</a>
                </div>

                <!-- Right Navigation -->
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a ref="#" class="hover:text-gray-300"><i class="fab fa-tiktok"></i></a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="hover:text-yellow-400">TOUR OPÉRATEURS</a>
                        <a href="#" class="hover:text-yellow-400">MONTOUR</a>
                        <a href="#" class="hover:text-yellow-400">VIP</a>
                        <a href="#" class="hover:text-yellow-400">MAGASINS</a>
                        <a href="#" class="hover:text-yellow-400">BOUTIQUE</a>
                    </div>
                    <button class="bg-white text-black px-4 py-1 text-xs font-bold hover:bg-yellow-400">
                        JE ME CONNECTE
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Navigation -->
    <nav class="bg-white shadow-md relative z-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Left Navigation -->
                <div class="flex items-center space-x-6">
                    <a href="Home.html" class="font-bold hover:text-yellow-400">HOME</a>
                    <a href="Parcours.html" class="font-bold hover:text-yellow-400">PARCOURS 2025</a>
                    <a href="#" class="font-bold hover:text-yellow-400">EDITION 2024</a>
                    <a href="Grande_Depart.html" class="font-bold hover:text-yellow-400">GRANDS DÉPARTS</a>
                    <a href="Culture.html" class="font-bold hover:text-yellow-400">CULTURE TOUR</a>
                    <a href="Video.html" class="font-bold hover:text-yellow-400">VIDÉOS</a>
                </div>

                <!-- Right Navigation -->
                <div class="flex items-center space-x-6">
                    <a href="#" class="font-bold hover:text-yellow-400">FANTASY</a>
                    <a href="#" class="font-bold hover:text-yellow-400">CLUB</a>
                    <div class="flex items-center space-x-4">
                        <button class="flex items-center space-x-1">
                            <span>FR</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <button class="text-xl">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="text-xl">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
