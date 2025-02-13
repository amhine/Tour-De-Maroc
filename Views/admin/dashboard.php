<?php
require_once __DIR__ . '/common/header.php';
?>

<!-- Main Content -->
<div class="pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <!-- Stats Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex justify-between items-center">
            <h3 class="text-gray-600 text-sm">Total Visitors</h3>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">+12%</span>
          </div>
          <p class="text-2xl font-bold text-gray-900 mt-2">24,567</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex justify-between items-center">
            <h3 class="text-gray-600 text-sm">Active Users</h3>
            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">+5%</span>
          </div>
          <p class="text-2xl font-bold text-gray-900 mt-2">1,234</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex justify-between items-center">
            <h3 class="text-gray-600 text-sm">Pending Reviews</h3>
            <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">23</span>
          </div>
          <p class="text-2xl font-bold text-gray-900 mt-2">45</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex justify-between items-center">
            <h3 class="text-gray-600 text-sm">Active Races</h3>
            <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">Live</span>
          </div>
          <p class="text-2xl font-bold text-gray-900 mt-2">8</p>
        </div>
      </div>

      <!-- Main Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-8">
          <!-- Stage Management -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
              <h2 class="text-lg font-medium text-gray-900">Stage Management</h2>
            </div>
            <div class="p-6">
              <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                  <div>
                    <h3 class="font-medium">Mountain Stage ⛰️</h3>
                    <p class="text-sm text-gray-600">Stage 3 - Alps Challenge</p>
                  </div>
                  <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded-md">Edit</button>
                    <button class="px-3 py-1 text-sm bg-red-600 text-white rounded-md">Delete</button>
                  </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                  <div>
                    <h3 class="font-medium">Plains Stage 🏞️</h3>
                    <p class="text-sm text-gray-600">Stage 4 - Countryside Sprint</p>
                  </div>
                  <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm bg-blue-600 text-white rounded-md">Edit</button>
                    <button class="px-3 py-1 text-sm bg-red-600 text-white rounded-md">Delete</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Moderation -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
              <h2 class="text-lg font-medium text-gray-900">Content Moderation</h2>
            </div>
            <div class="p-6">
              <div class="space-y-4">
                <div class="border rounded-lg p-4">
                  <div class="flex items-start justify-between">
                    <div>
                      <p class="text-sm text-gray-600">Comment by John Doe</p>
                      <p class="mt-1">Great performance in today's mountain stage!</p>
                    </div>
                    <div class="flex space-x-2">
                      <button class="px-3 py-1 text-sm bg-green-600 text-white rounded-md">Approve</button>
                      <button class="px-3 py-1 text-sm bg-red-600 text-white rounded-md">Reject</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-8">
          <!-- Fan Leaderboard -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
              <h2 class="text-lg font-medium text-gray-900">Fan Leaderboard 🏆</h2>
            </div>
            <div class="p-6">
              <div class="space-y-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center space-x-3">
                    <span class="text-lg font-bold text-blue-600">1</span>
                    <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                    <div>
                      <p class="font-medium">Sarah Smith</p>
                      <p class="text-sm text-gray-600">1,234 points</p>
                    </div>
                  </div>
                  <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Top Fan</span>
                </div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center space-x-3">
                    <span class="text-lg font-bold text-gray-600">2</span>
                    <img src="/api/placeholder/40/40" alt="User" class="w-10 h-10 rounded-full">
                    <div>
                      <p class="font-medium">Mike Johnson</p>
                      <p class="text-sm text-gray-600">956 points</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Validations -->
          <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
              <h2 class="text-lg font-medium text-gray-900">Pending Validations</h2>
            </div>
            <div class="p-6">
              <div class="space-y-4">
                <div class="border rounded-lg p-4">
                  <p class="text-sm font-medium">New Cyclist Profile</p>
                  <p class="text-sm text-gray-600 mt-1">Awaiting verification</p>
                  <div class="mt-3 flex space-x-2">
                    <button class="px-3 py-1 text-sm bg-green-600 text-white rounded-md">Validate</button>
                    <button class="px-3 py-1 text-sm bg-gray-600 text-white rounded-md">Review</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="etapeModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
        <div class="flex justify-between items-center border-b pb-4">
            <h3 class="text-xl font-bold text-gray-900">Add/Edit Stage</h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-500">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <form class="mt-4 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <input type="text" name="description" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Region</label>
                    <input type="text" name="region" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input type="text" name="image" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date" name="start_date" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Difficulty ID</label>
                    <input type="number" name="fk_difficulte_id" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Course ID</label>
                    <input type="number" name="fk_course_id" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Category ID</label>
                    <input type="number" name="fk_categorie_id" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Frape</label>
                    <input type="text" name="frape"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Type</label>
                    <input type="text" name="type"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" name="date"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Départ</label>
                    <input type="text" name="depart_et_arrivee"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Arrivée</label>
                    <input type="text" name="arrivee"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Distance</label>
                    <input type="number" step="0.01" name="distance"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Détails</label>
                <textarea name="details" rows="3"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t">
                <button type="button" onclick="closeModal()"
                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">
                    Cancel
                </button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openModal() {
    document.getElementById('etapeModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('etapeModal').classList.add('hidden');
}

document.getElementById('openModal').addEventListener('click', () => {
    if (e.target === this) {
      openModal();
    }
})

document.getElementById('etapeModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>
</body>
</html>