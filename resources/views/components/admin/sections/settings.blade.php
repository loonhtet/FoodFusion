<div class="bg-white shadow-md rounded-lg p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Admin Settings</h2>

    <div class="space-y-6">
        <!-- Site Settings -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Site Settings</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Site Name</label>
                    <input type="text" 
                           value="{{ $settings->site_name ?? 'FoodFusion' }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Site Description</label>
                    <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500" 
                              rows="3">{{ $settings->site_description ?? '' }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Contact Email</label>
                    <input type="email" 
                           value="{{ $settings->contact_email ?? '' }}" 
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>
            </div>
        </div>

        <!-- Recipe Settings -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Recipe Settings</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Auto-approve Recipes</label>
                        <p class="text-sm text-gray-500">Automatically approve new recipes when they are submitted</p>
                    </div>
                    <button type="button" 
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 {{ $settings->auto_approve_recipes ?? false ? 'bg-orange-500' : 'bg-gray-200' }}" 
                            role="switch">
                        <span class="sr-only">Auto-approve recipes</span>
                        <span aria-hidden="true" 
                              class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out {{ $settings->auto_approve_recipes ?? false ? 'translate-x-5' : 'translate-x-0' }}">
                        </span>
                    </button>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Maximum Recipe Images</label>
                    <input type="number" 
                           value="{{ $settings->max_recipe_images ?? 5 }}" 
                           min="1" 
                           max="10" 
                           class="mt-1 block w-32 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>
            </div>
        </div>

        <!-- User Settings -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">User Settings</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email Verification Required</label>
                        <p class="text-sm text-gray-500">Require email verification for new user registrations</p>
                    </div>
                    <button type="button" 
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 {{ $settings->email_verification_required ?? true ? 'bg-orange-500' : 'bg-gray-200' }}" 
                            role="switch">
                        <span class="sr-only">Email verification required</span>
                        <span aria-hidden="true" 
                              class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out {{ $settings->email_verification_required ?? true ? 'translate-x-5' : 'translate-x-0' }}">
                        </span>
                    </button>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Maximum Recipe Submissions Per Day</label>
                    <input type="number" 
                           value="{{ $settings->max_daily_recipes ?? 5 }}" 
                           min="1" 
                           max="20" 
                           class="mt-1 block w-32 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>
            </div>
        </div>

        <div class="flex justify-end space-x-4">
            <button type="button" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                Cancel
            </button>
            <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                Save Changes
            </button>
        </div>
    </div>
</div>
