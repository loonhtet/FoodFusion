<x-layout>

    @auth
        <h1>Logged In</h1>
    @endauth

    @guest
        <x-navbar />
        <x-aboutmission />
        <x-value />
        <x-fusiontechniques />
        <x-team />
        <x-footer />

    @endguest

</x-layout>         