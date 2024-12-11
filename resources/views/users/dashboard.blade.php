<x-layout>

    <h1>Welcome, {{ auth()->user()->name }}</h1>

    <div>
        {{-- Start Left SideBar  --}}

        <aside class="w-40 border-r h-screen">
            <nav class="flex flex-col justify-between h-full">
               <div class="grid gap-y-2">
                    <a href="#" class="py-3">Home</a>
                    <a href="#" class="py-3">Create</a>
                    <a href="#" class="py-3">Category</a>
                    <a href="#" class="py-3">Profile</a>
               </div>

               <div>
                    <a href="#" class="py-3">Setting</a>
               </div>
            </nav>
        </aside>

        {{-- End Left SideBar  --}}

    </div>

</x-layout>