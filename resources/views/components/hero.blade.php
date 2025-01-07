<section class="h-screen bg-neutral">
  <div class="relative flex items-center justify-center h-full">
    <div class="mb-16 space-y-8">
      <p class="text-center uppercase">Authentic cutural food</p>
      <h1 class="font-bold text-center uppercase text-7xl font-barlow">It's not just a food. <br/> It's an experience!</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo in omnis doloribus deserunt sapiente aliquid!</p>

      <div class="flex items-center justify-center gap-x-2">
        <button class="px-4 py-2 border border-black bg-neutral z-20">
          Popular Food
        </button>
        <button class="px-4 py-2 border border-black bg-secondary z-20">
          Get Started
        </button>
      </div>
    </div>

    <img src="/placeholder_three.png" alt="placeholder_one" class="absolute w-56 left-12 top-12">

    <img src="/placeholder_two.png" alt="placeholder_two" class="absolute left-0 w-56 bottom-4">
    <img src="/placeholder_one.png" alt="placeholder_one" class="absolute right-0 bottom-4">
    
    <img src="/hero_girl_bgremove.png" alt="placeholder_two" class="absolute bottom-0 w-56 translate-x-1/2 right-1/2 z-10">
  </div>

  <div id="modal-signup" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
    <div class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
      <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-slide-down-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
            Welcome  To <span class="text-accent">Brand</span>
          </h3>
          <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#modal-signup">
            <span class="sr-only">Close</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
          <form action="{{route('register')}}" method="POST">
            @csrf
          <div class="grid gap-y-4">
            <!-- Form Group -->
            <div>
                <label for="name" class="block text-sm mb-2 dark:text-white">Name</label>
                <div class="relative">
                  <input
                  type="text"
                  name="name"
                  value="{{old('name')}}"
                  placeholder=""
                  @class([
                      'w-full bg-transparent',
                      'border-red-600' => $errors->has('name'),
                      'placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100'
                  ])
              />
                  @error('name')
                  <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                  </div>
                  @enderror
                </div>
                @error('name')
                <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                @enderror
              </div>
      
            <div>
              <label for="email" class="block text-sm mb-2 dark:text-white">Email</label>
              <div class="relative">
                <input
                type="text"
                name="email"
                value="{{old('email')}}"
                placeholder=""
                @class([
                  'w-full bg-transparent',
                  'border-red-600' => $errors->has('email'),
                  'placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100'
                ])
                />
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                  <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                </div>
              </div>
              @error('email')
              <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
              @enderror
            </div>
            <!-- End Form Group -->
      
            <!-- Form Group -->
            <div>
              <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
              <div class="relative">
                <input
                type="password"
                name="password"
                placeholder=""
                @class([
                  'w-full bg-transparent',
                  'border-red-600' => $errors->has('password'),
                  'placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100'
                ])
                />
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                  <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                </div>
              </div>
              @error('password')
              <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
              @enderror
            </div>
            <!-- End Form Group -->
      
            <!-- Form Group -->
            <div>
              <label for="confirm-password" class="block text-sm mb-2 dark:text-white">Confirm Password</label>
              <div class="relative">
                <input
                type="password"
                name="password_confirmation"
                placeholder=""
                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100"
                />
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                  <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                </div>
              </div>
              <p class="hidden text-xs text-red-600 mt-2" id="confirm-password-error">Password does not match the password</p>
            </div>
            <!-- End Form Group -->
      
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#modal-signup">
                Close
              </button>
              <button data-ripple-light="true" type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Sign Up
              </button>
            </div>
          </div>
        </form>

        </div>
      </div>
    </div>
  </div>

  <div id="modal-login" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
    <form action="{{route('login')}}" method="POST" class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">

      @csrf

      <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-slide-down-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
            Welcome Back to <span class="text-accent">Brand</span>
          </h3>
          <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#modal-login">
            <span class="sr-only">Close</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
       
          <div class="grid gap-y-4">
            <!-- Form Group -->
            <div>
              <label for="email" class="block text-sm mb-2 dark:text-white">Email</label>
              <div class="relative">
                <input
                type="text"
                name="email"
                value="{{old('email')}}"
                placeholder=""
                @class([
                  'w-full bg-transparent',
                  'border-red-600' => $errors->has('email'),
                  'placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100'
                ])
                />
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                  <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                </div>
              </div>
              @error('email')
              <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
              @enderror
            </div>
            <!-- End Form Group -->
  
            <!-- Form Group -->
            <div>
              <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
              <div class="relative">
                <input
                type="password"
                name="password"
                placeholder=""
                @class([
                  'w-full bg-transparent',
                  'border-red-600' => $errors->has('password'),
                  'placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100'
                ])
                />
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                  <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                </div>
              </div>
              @error('password')
              <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
              @enderror
            </div>
            <!-- End Form Group -->

            @error('failed')
            <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
            @enderror
  
            <!-- Checkbox -->
            <div class="flex items-center">
              <div class="flex">
                <input id="remember-me" name="remember" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
              </div>
              <div class="ms-3">
                <label for="remember" class="text-sm dark:text-white">Remember Me?</label>
              </div>
            </div>
            <!-- End Checkbox -->
  
            <button data-ripple-light="true" type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign up</button>
          </div>
      </div>
    </form>
  </div>
</section>
<section class="h-screen bg-neutral">
  <div class="relative flex items-center justify-center h-full">
    <div class="mb-16 space-y-8">
      <p class="text-center uppercase">Authentic cutural food</p>
      <h1 class="font-bold text-center uppercase text-7xl font-barlow">It's not just a food. <br/> It's an experience!</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo in omnis doloribus deserunt sapiente aliquid!</p>

      <div class="flex items-center justify-center gap-x-2">
        <button class="px-4 py-2 border border-black bg-neutral z-20">
          Popular Food
        </button>
        <button class="px-4 py-2 border border-black bg-secondary z-20">
          Get Started
        </button>
      </div>
    </div>

    <img src="/placeholder_three.png" alt="placeholder_one" class="absolute w-56 left-12 top-12">

    <img src="/placeholder_two.png" alt="placeholder_two" class="absolute left-0 w-56 bottom-4">
    <img src="/placeholder_one.png" alt="placeholder_one" class="absolute right-0 bottom-4">
    
    <img src="/hero_girl_bgremove.png" alt="placeholder_two" class="absolute bottom-0 w-56 translate-x-1/2 right-1/2 z-10">
  </div>

  <div id="modal-signup" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
    <div class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
      <div class="flex flex-col bg-neutral border shadow-sm pointer-events-auto rounded-sm p-3">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-slide-down-animation-modal-label" class="font-bold text-lg font-montserrat text-gray-800 dark:text-white">
            Create a <span class="text-primary">new account</span>
          </h3>
          <button type="button" class="size-10 inline-flex justify-center items-center gap-x-2 rounded-full bg-secondary text-gray-800 hover:bg-neutral focus:outline-none focus:bg-gray-200 duration-300 border-2 border-black disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#modal-signup">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            
            
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
        <div class="font-barlow">
          <label for="" class="font-semibold">Name</label>
          <input type="text" placeholder="Your Name" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1">
        </div>
        <div class="mt-6 font-barlow">
          <label for="" class="font-semibold">Email</label>
          <input type="text" placeholder="Your Email" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1">
        </div>
        <div class="mt-6 font-barlow">
          <label for="" class="font-semibold">Password</label>
          <input type="password" placeholder="New Password" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1">
        </div>

        <div class="mt-6 font-barlow">
          <label for="" class="font-semibold">Confirm Password</label>
          <input type="password" placeholder="Repeat Password" class="w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1">
        </div>

        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4">
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-sm border border-black bg-neutral text-gray-800 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#modal-signup">
            Cancel
          </button>
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-sm border border-black bg-accent hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Sign Up
          </button>
        </div>
      </div>
    </div>
  </div>



  <div id="modal-login" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
    <form action="{{route('login')}}" method="POST" class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">

      @csrf

      <div class="flex flex-col bg-neutral border shadow-sm rounded-sm pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-slide-down-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
            Welcome Back <span class="text-accent">User</span>
          </h3>
          <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#modal-login">
            <span class="sr-only">Close</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
       
          <div class="grid gap-y-4">
            <!-- Form Group -->
            <div>
              <label for="email" class="block text-sm mb-2 font-semibold dark:text-white">Email</label>
              <div class="relative">
                <input
                type="text"
                name="email"
                value="{{old('email')}}"
                placeholder="Your Email"
                @class([
                  'w-full bg-transparent',
                  'border-red-600' => $errors->has('email'),
                  'w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1'
                ])
                />
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                  <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                </div>
              </div>
              @error('email')
              <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
              @enderror
            </div>
            <!-- End Form Group -->
  
            <!-- Form Group -->
            <div>
              <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
              <div class="relative">
                <input
                type="password"
                name="password"
                placeholder="Your Password"
                @class([
                  'w-full bg-transparent',
                  'border-red-600' => $errors->has('password'),
                  'w-full bg-transparent p-2 border-2 placeholder-gray-600 text-sm border-black outline-none mt-1'
                ])
                />
                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                  <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                </div>
              </div>
              @error('password')
              <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
              @enderror
            </div>
            <!-- End Form Group -->

            @error('failed')
            <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
            @enderror
  
            <!-- Checkbox -->
            <div class="flex items-center">
              <div class="flex">
                <input id="remember-me" name="remember" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
              </div>
              <div class="ms-3">
                <label for="remember" class="text-sm dark:text-white">Remember Me?</label>
              </div>
            </div>
            <!-- End Checkbox -->
  
            <div class="flex justify-end items-center gap-x-2 py-3 px-4">
              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-sm border border-black bg-neutral text-gray-800 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#modal-login">
                Cancel
              </button>
              <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-sm border border-black bg-accent hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Log In
              </button>
            </div>
          </div>
      </div>
    </form>
  </div>

</section>