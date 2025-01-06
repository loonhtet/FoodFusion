<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">   
    <title>{{ env('APP_NAME') }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- from node_modules -->
    {{-- <script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script> --}}
 
</head>
<body>
    
    {{-- <x-navbar/> --}}


    <main>
        {{$slot}}
    </main>

</body>
</html>