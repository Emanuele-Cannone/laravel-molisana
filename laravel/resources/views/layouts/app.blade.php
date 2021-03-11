<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('fontawesome')
    <title>@yield('title', 'la molisana')</title>
</head>
<body>
    {{-- questo è l'header --}}
    @include('Partials.header')
    

    {{-- questo è il main che ogni volta è compilato con una root diversa --}}
    <main class="contenitore">
        @yield('content')
    </main>

    {{-- questo è il footer --}}
    @include('Partials.footer')
    
</body>
</html>