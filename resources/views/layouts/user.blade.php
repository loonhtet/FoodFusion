<x-layout>
    <x-user.dashboardnavbar />

    <main class="grid grid-cols-4 bg-beige min-h-screen">
        <x-user.dashboarduserinfo />
        <div class="col-span-2 p-6">
            @switch($section ?? 'cookbook')
                @case('cookbook')
                    <x-user.sections.cookbook :recipes="$recipes ?? []" />
                    @break
                @case('explore')
                    <x-user.sections.explore />
                    @break
                @case('favorites')
                    <x-user.sections.favorites />
                    @break
                @case('settings')
                    <x-user.sections.settings />
                    @break
                @default
                    @yield('content')
            @endswitch
        </div>
        <x-user.dashboardpopularchef />
    </main>
</x-layout>