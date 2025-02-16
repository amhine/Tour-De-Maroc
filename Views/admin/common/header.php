<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Visitors Dashboard</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .table-container {
      scrollbar-width: thin;
      scrollbar-color: #CBD5E1 #F1F5F9;
    }

    .table-container::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }

    .table-container::-webkit-scrollbar-track {
      background: #F1F5F9;
      border-radius: 3px;
    }

    .table-container::-webkit-scrollbar-thumb {
      background-color: #CBD5E1;
      border-radius: 3px;
    }

    .fade-in {
      animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .sticky-header {
      position: sticky;
      top: 0;
      z-index: 10;
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
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const profileButton = document.getElementById('profileButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        let isOpen = false;

        profileButton.addEventListener('click', function(e) {
            e.stopPropagation();
            isOpen = !isOpen;
            if (isOpen) {
                dropdownMenu.classList.add('active');
            } else {
                dropdownMenu.classList.remove('active');
            }
        });

        document.addEventListener('click', function(e) {
            if (!dropdownMenu.contains(e.target) && !profileButton.contains(e.target)) {
                dropdownMenu.classList.remove('active');
                isOpen = false;
            }
        });
    });
  </script>
</head>

<body class="bg-gray-50">

  <nav class="bg-white shadow-sm fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex items-center">
          <h1 class="text-xl font-semibold text-gray-900">Admin Dashboard</h1>
        </div>
        <div class="flex items-center space-x-4">
        <div class="relative">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button id="profileButton" class="text-black hover:bg-yellow-400 hover:text-black px-4 py-2 rounded transition-colors duration-300 text-sm flex items-center gap-1">
                            <span>Admin</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="dropdownMenu" class="dropdown-menu absolute right-0 mt-2 bg-white shadow-lg rounded-md py-2 min-w-[200px] z-50">
                            <a href="/visitor" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">Track Visitors</a>
                            <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-200">Dashboard</a>
                        </div>
                    </div>
                    <button class="border-2 border-yellow-400 text-black px-4 py-2 rounded text-sm font-bold hover:bg-yellow-100 transition-colors duration-300">
                        Ajouter Etape
                    </button>
                    <button class="bg-yellow-400 text-black px-4 py-2 rounded text-sm font-bold hover:bg-yellow-100 transition-colors duration-300">
                        DÉCONNEXION
                    </button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </nav>