<section class="p-6 border border-black/10">
  <div class="sticky top-6">
  <img class="w-full h-56 object-cover rounded-lg" 
     src="{{ auth()->user()->profile_image ? asset(auth()->user()->profile_image) : asset('path/to/default-image.jpg') }}" 
     alt="{{ auth()->user()->name }}'s profile picture">


            <div class="my-4 space-y-4">
              <div class="flex items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                  
                <h3 class="text-sm font-montserrat font-semibold">{{ auth()->user()->name }}</h3>

              </div>

              <div class="flex items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <span class="text-sm font-montserrat font-semibold">{{ auth()->user()->email }}</span>
              </div>


              <button type="button" class="block text-sm w-full p-2 bg-beige text-center border border-black hover:scale-95 duration-300" aria-haspopup="dialog" aria-expanded="false" aria-controls="useracc_edit" data-hs-overlay="#useracc_edit">
                Edit Profile
              </button>
            </div>
  </div>
</section>
