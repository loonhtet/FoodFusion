<x-layout>

    @auth
        <h1>Logged In</h1>
    @endauth

    @guest
        <x-navbar />
        <x-contact />
    @endguest

</x-layout>         