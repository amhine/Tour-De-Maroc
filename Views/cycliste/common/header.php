<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour de France - Profil Cycliste</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=favorite" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .dropdown-menu {
            opacity: 0;
            transform: translateY(-10px);
            visibility: hidden;
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
        }

        .dropdown-menu.active {
            opacity: 1;
            transform: translateY(0);
            visibility: visible;
        }

        /* Page transition animations */
        .page-content {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .page-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .tab-content {
            display: none;
            opacity: 0;
            transform: translateX(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .tab-content.active {
            display: block;
            opacity: 1;
            transform: translateX(0);
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #FCD34D;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">
<!-- Navigation -->
<nav class="bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-8">
                <img src="/placeholder.svg" alt="Tour de France" class="h-8">
                <a href="#performances" class="nav-link hover:text-yellow-400" data-tab="performances">MES PERFORMANCES</a>
                <a href="#classements" class="nav-link hover:text-yellow-400" data-tab="classements">CLASSEMENTS</a>
            </div>
            <div class="relative">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button id="profileButton" class="text-white hover:bg-yellow-400 hover:text-black px-4 py-2 rounded transition-colors duration-300 text-sm flex items-center gap-1">
                            <span>Tadej Pogačar</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="dropdownMenu" class="dropdown-menu absolute right-0 mt-2 bg-white shadow-lg rounded-md py-2 min-w-[200px] z-50">
                            <a href="profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">Mon Profile</a>
                            <a href="QandA" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">Q&A</a>
                        </div>
                    </div>
                    <button class="bg-yellow-400 text-black px-4 py-2 rounded text-sm font-bold hover:bg-yellow-500 transition-colors duration-300">
                        DÉCONNEXION
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>