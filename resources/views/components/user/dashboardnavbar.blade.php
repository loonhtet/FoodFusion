<main class="grid grid-cols-4 bg-beige">
    <div class="p-6 border border-black/10">
        <a href="{{ route('dashboard.cookbook') }}" class="text-xl font-bold">FoodFusion</a>
    </div>
    <div class="col-span-2 border border-black/10">
        <div class="grid grid-cols-4 gap-x-1 p-2">
            <a href="{{ route('dashboard.cookbook') }}" class="mx-auto flex justify-center flex-col items-center gap-y-1 w-full hover:bg-neutral py-2 px-3 rounded-lg {{ request()->routeIs('dashboard.cookbook') || !request()->routeIs('dashboard.explore', 'dashboard.favorites', 'dashboard.settings') ? 'bg-neutral' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>   
                <span class="text-xs font-barlow">Cook Book</span>
            </a>

            <a href="{{ route('dashboard.explore') }}" class="mx-auto flex justify-center flex-col items-center gap-y-1 w-full hover:bg-neutral py-2 px-3 rounded-lg {{ request()->routeIs('dashboard.explore') ? 'bg-neutral' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <span class="text-xs font-barlow">Explore</span>
            </a>

            <a href="{{ route('dashboard.favorites') }}" class="mx-auto flex justify-center flex-col items-center gap-y-1 w-full hover:bg-neutral py-2 px-3 rounded-lg {{ request()->routeIs('dashboard.favorites') ? 'bg-neutral' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
                <span class="text-xs font-barlow">Favorites</span>
            </a>

            <a href="{{ route('dashboard.settings') }}" class="mx-auto flex justify-center flex-col items-center gap-y-1 w-full hover:bg-neutral py-2 px-3 rounded-lg {{ request()->routeIs('dashboard.settings') ? 'bg-neutral' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.432l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.432l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.432l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <span class="text-xs font-barlow">Settings</span>
            </a>
        </div>
    </div>

    <div class="p-6 border border-black/10">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold">Welcome, {{ auth()->user()->name }}</h2>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="text-sm px-4 py-2 bg-danger text-white rounded-lg hover:scale-95 duration-300">Logout</button>
            </form>
        </div>
    </div>
</main>