<div class="bg-white shadow-md rounded-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Manage Recipes</h2>
        <div class="flex space-x-4">
            <div class="relative">
                <input type="text" 
                       placeholder="Search recipes..." 
                       class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option value="">All Categories</option>
                @foreach($categories ?? [] as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($recipes ?? [] as $recipe)
        <div class="bg-white border rounded-lg overflow-hidden">
            <img src="{{ $recipe->image_url }}" alt="{{ $recipe->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $recipe->name }}</h3>
                    <span class="px-2 py-1 text-xs font-semibold rounded {{ $recipe->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ $recipe->is_approved ? 'Approved' : 'Pending' }}
                    </span>
                </div>
                <p class="text-sm text-gray-600 mb-2">By {{ $recipe->user->name }}</p>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ $recipe->created_at->format('M d, Y') }}
                </div>
                <div class="flex justify-between items-center">
                    <button class="text-orange-600 hover:text-orange-900">View Details</button>
                    <div class="flex space-x-2">
                        @if(!$recipe->is_approved)
                        <button class="text-green-600 hover:text-green-900">Approve</button>
                        @endif
                        <button class="text-red-600 hover:text-red-900">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-8">
            <p class="text-gray-500">No recipes found</p>
        </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $recipes->links() ?? '' }}
    </div>
</div>
