<div class="ms-0 lg:ms-64">
    <div class="p-4 space-y-6">
        <!-- Welcome Section -->
        <div class="bg-white p-4 rounded-xl shadow-sm border-l-4 border-l-primary">
            <h1 class="text-2xl font-bold text-gray-800">Welcome back, {{ auth()->user()->name }}!</h1>
            <p class="text-gray-600">Here's what's happening in your kitchen today.</p>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Total Users -->
            <div class="flex flex-col bg-white border border-l-4 border-l-secondary shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center">
                        <div class="bg-secondary/10 p-3 rounded-lg">
                            <i class="fas fa-users text-2xl text-secondary"></i>
                        </div>
                        <div class="ms-4">
                            <h3 class="text-xl font-bold text-gray-800">{{ number_format($totalUsers) }}</h3>
                            <span class="text-gray-600">Total Users</span>
                        </div>
                    </div>
                    <a href="{{ route('admin.users.index') }}" class="mt-4 inline-flex items-center text-sm text-secondary hover:text-secondary-dark">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Total Recipes -->
            <div class="flex flex-col bg-white border border-l-4 border-l-accent shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center">
                        <div class="bg-accent/10 p-3 rounded-lg">
                            <i class="fas fa-utensils text-2xl text-accent"></i>
                        </div>
                        <div class="ms-4">
                            <h3 class="text-xl font-bold text-gray-800">{{ number_format($totalRecipes) }}</h3>
                            <span class="text-gray-600">Total Recipes</span>
                        </div>
                    </div>
                    <a href="{{ route('admin.recipes.index') }}" class="mt-4 inline-flex items-center text-sm text-accent hover:text-accent-dark">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Total Chefs -->
            <div class="flex flex-col bg-white border border-l-4 border-l-primary shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center">
                        <div class="bg-primary/10 p-3 rounded-lg">
                            <i class="fas fa-hat-chef text-2xl text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <h3 class="text-xl font-bold text-gray-800">{{ number_format($totalChefs) }}</h3>
                            <span class="text-gray-600">Active Chefs</span>
                        </div>
                    </div>
                    <a href="{{ route('admin.users.index', ['role' => 'chef']) }}" class="mt-4 inline-flex items-center text-sm text-primary hover:text-primary-dark">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- Total Reviews -->
            <div class="flex flex-col bg-white border border-l-4 border-l-deep shadow-sm rounded-xl">
                <div class="p-4 md:p-5">
                    <div class="flex items-center">
                        <div class="bg-deep/10 p-3 rounded-lg">
                            <i class="fas fa-star text-2xl text-deep"></i>
                        </div>
                        <div class="ms-4">
                            <h3 class="text-xl font-bold text-gray-800">{{ number_format($totalReviews) }}</h3>
                            <span class="text-gray-600">Total Reviews</span>
                        </div>
                    </div>
                    <a href="{{ route('admin.reviews.index') }}" class="mt-4 inline-flex items-center text-sm text-deep hover:text-deep-dark">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Popular Recipes -->
            <div class="col-span-2 bg-white rounded-xl shadow-sm">
                <div class="flex items-center justify-between p-4 border-b">
                    <h2 class="text-lg font-semibold text-gray-800">Popular Recipes</h2>
                    <a href="{{ route('admin.recipes.index') }}" class="text-sm text-primary hover:underline">View All</a>
                </div>
                <div class="p-4">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Recipe</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Chef</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Rating</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Reviews</th>
                                    <th class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse($popularRecipes as $recipe)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <img class="h-10 w-10 rounded-lg object-cover" src="{{ $recipe->image_url }}" alt="{{ $recipe->name }}">
                                            <div class="ms-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $recipe->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $recipe->category }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $recipe->user->name }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <span class="text-sm text-gray-600">{{ number_format($recipe->rating, 1) }}</span>
                                            <i class="fas fa-star text-yellow-400 ms-1"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $recipe->reviews_count }}</td>
                                    <td class="px-6 py-4 text-end">
                                        <a href="{{ route('admin.recipes.edit', $recipe) }}" class="text-primary hover:text-primary-dark">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">No recipes found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="bg-white rounded-xl shadow-sm">
                <div class="flex items-center justify-between p-4 border-b">
                    <h2 class="text-lg font-semibold text-gray-800">Recent Activities</h2>
                </div>
                <div class="p-4 space-y-4">
                    @foreach($recentActivities as $activity)
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center justify-center h-8 w-8 rounded-lg {{ $activity->type_color }}">
                                <i class="fas {{ $activity->icon }} text-gray-800"></i>
                            </span>
                        </div>
                        <div class="ms-4 flex-1">
                            <p class="text-sm text-gray-900">{{ $activity->description }}</p>
                            <p class="text-xs text-gray-500">{{ $activity->created_at }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <a href="{{ route('admin.recipes.create') }}" class="flex items-center p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="p-3 rounded-lg bg-primary/10">
                    <i class="fas fa-plus text-xl text-primary"></i>
                </div>
                <div class="ms-4">
                    <h3 class="text-sm font-medium text-gray-900">Add New Recipe</h3>
                    <p class="text-xs text-gray-500">Create a new recipe</p>
                </div>
            </a>

            <a href="{{ route('admin.users.index') }}" class="flex items-center p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="p-3 rounded-lg bg-secondary/10">
                    <i class="fas fa-user-plus text-xl text-secondary"></i>
                </div>
                <div class="ms-4">
                    <h3 class="text-sm font-medium text-gray-900">Manage Users</h3>
                    <p class="text-xs text-gray-500">View and manage users</p>
                </div>
            </a>

            <a href="{{ route('admin.reviews.index') }}" class="flex items-center p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="p-3 rounded-lg bg-accent/10">
                    <i class="fas fa-comments text-xl text-accent"></i>
                </div>
                <div class="ms-4">
                    <h3 class="text-sm font-medium text-gray-900">Review Management</h3>
                    <p class="text-xs text-gray-500">Moderate user reviews</p>
                </div>
            </a>

            <a href="{{ route('admin.reports.index') }}" class="flex items-center p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <div class="p-3 rounded-lg bg-deep/10">
                    <i class="fas fa-chart-bar text-xl text-deep"></i>
                </div>
                <div class="ms-4">
                    <h3 class="text-sm font-medium text-gray-900">Analytics</h3>
                    <p class="text-xs text-gray-500">View detailed reports</p>
                </div>
            </a>
        </div>
    </div>
</div>