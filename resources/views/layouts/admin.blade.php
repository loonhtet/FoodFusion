<x-layout>
    <x-admin.admindashboardsidebar />

    <!-- Content -->
    <div>
        <!-- Navigation Toggle -->
        <div class="lg:hidden p-2">
            <button type="button" class="flex justify-center items-center gap-x-3 size-8 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-content-push" aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-content-push">
                <svg class="sm:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
                <svg class="hidden sm:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m10 15-3-3 3-3"/></svg>
                <span class="sr-only">Navigation Toggle</span>
            </button>
        </div>
        <!-- End Navigation Toggle -->

        <div>
            @if(isset($section))
                @switch($section)
                    @case('manageadmin')
                        <x-admin.sections.manageadmin :users="$users" />
                        @break
                    @case('newadmin')
                        <x-admin.sections.newadmin />
                        @break
                    @case('manageusers')
                        <x-admin.sections.manageusers :users="$users" />
                        @break
                    @case('managerecipes')
                        <x-admin.sections.managerecipes />
                        @break
                    @case('settings')
                        <x-admin.sections.settings />
                        @break
                    @default
                        @yield('content')
                @endswitch
            @else
                {{ $slot }}
            @endif
        </div>
    </div>
    <!-- End Content -->
</x-layout>