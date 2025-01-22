<div class="bg-white shadow-md p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Quick Stats</h2>
    
    <div class="space-y-6">
        <!-- Total Users -->
        <div class="p-4 bg-orange-50 rounded-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Users</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ $totalUsers ?? 0 }}</p>
                </div>
                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
        </div>

        <!-- Total Recipes -->
        <div class="p-4 bg-orange-50 rounded-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Recipes</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ $totalRecipes ?? 0 }}</p>
                </div>
                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
        </div>

        <!-- Active Users Today -->
        <div class="p-4 bg-orange-50 rounded-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Active Users Today</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ $activeUsersToday ?? 0 }}</p>
                </div>
                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>

        <!-- New Recipes Today -->
        <div class="p-4 bg-orange-50 rounded-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">New Recipes Today</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ $newRecipesToday ?? 0 }}</p>
                </div>
                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</div>
