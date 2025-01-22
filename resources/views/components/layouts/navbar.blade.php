<header class="fixed z-50 w-full max-w-screen-xl p-2 mx-auto -translate-x-1/2 bg-white/70 backdrop-blur-md border border-gray-300 left-1/2 top-2">
    <nav class="flex items-center justify-between">
        <h1 class="px-4">Brand</h1>

        <div class="flex items-center gap-x-2">
            
            @guest()
                <button type="button" class="px-4 py-2 bg-neutral border border-black hover:bg-neutral-100 transition-colors" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-slide-down-animation-modal" data-hs-overlay="#modal-signup">
                    Sign Up
                </button>

                <button type="button" class="px-4 py-2 border bg-secondary border-black hover:bg-secondary-100 transition-colors" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-slide-down-animation-modal" data-hs-overlay="#modal-login">
                    Login
                </button>
            @endguest

            @auth
                <span class="font-semibold font-montserrat">Welcome, <span class="text-primary">{{ auth()->user()->name }}</span></span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="px-4 py-2 border bg-accent border-black hover:bg-accent-100 transition-colors">Logout</button>
                </form>
            @endauth
            

            <button class="p-3 bg-white border rounded-full border-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>              
            </button>
        </div>
    </nav>
</header>