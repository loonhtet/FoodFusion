<section class="ms-0 lg:ms-64">
    <form action="{{ route('admin.dashboard.store') }}" method="POST" class="space-y-4 md:space-y-6" novalidate="novalidate">
        @csrf
        <div class="flex flex-col bg-white shadow-sm pointer-events-auto rounded-sm p-3">
          <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 id="hs-slide-down-animation-modal-label" class="font-bold text-lg font-montserrat text-gray-800">
              Create a <span class="text-primary">new account</span>
            </h3>
          </div>
          <div class="p-4 overflow-y-auto">
          <div class="font-barlow">
            <label for="" class="font-semibold">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1 @error('name') border-red-500 @enderror">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          
          <div class="mt-6 font-barlow">
            <label for="" class="font-semibold">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1 @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mt-6 font-barlow">
            <label for="" class="font-semibold">Password</label>
            <input type="password" name="password" placeholder="New Password" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1 @error('password') border-red-500 @enderror">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
  
          <div class="mt-6 font-barlow">
            <label for="" class="font-semibold">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Repeat Password" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1">
          </div>

          <input hidden name="role" value="admin" />
  
          </div>
          <div class="flex justify-end items-center gap-x-2 py-3 px-4">
            <button type="button" onclick="window.history.back()" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-sm border border-black bg-neutral text-gray-800 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
              Cancel
            </button>
            <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-sm border border-black bg-accent hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
              Create Admin
            </button>
          </div>
        </div>
      </form>
</section>