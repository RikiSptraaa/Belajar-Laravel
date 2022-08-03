<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Divi Tailor | {{ $title; }}</title>
</head>
<body>
    @include('partial.navbar')

     <div class="mt-24">
         @yield('container')
         <script src="js/nav.js"></script>
         <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     </div>
</body>
</html>