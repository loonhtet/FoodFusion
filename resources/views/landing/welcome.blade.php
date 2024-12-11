<x-layout>

    @auth
        <h1>Logged In</h1>
    @endauth

    @guest
        <x-hero />
        <x-exampleblog />
        <x-event />
        <x-menu />
    @endguest

</x-layout>         