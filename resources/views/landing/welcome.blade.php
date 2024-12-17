<x-layout>

    @auth
        <h1>Logged In</h1>
    @endauth

    @guest
        <x-navbar />
        <x-hero />
        <x-popular />
        {{-- <x-exampleblog /> --}}
        <x-event />
        <x-footer />
        {{-- <x-menu /> --}}
    @endguest

</x-layout>         