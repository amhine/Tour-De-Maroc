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
</body>
</html>