<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BookVerse - {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite('resources/css/app.css')
</head>

<body class="bg-[#F2F6FF]">
    <div class="flex">
        @include('layouts.partials.sidebar')

        {{-- content start here --}}
        <div class="w-full h-full p-4 m-8 overflow-y-auto">
            <div class="flex flex-col justify-center p-8  border-4 border-dotted">
                @yield('container')
            </div>
        </div>
</body>

</html>
