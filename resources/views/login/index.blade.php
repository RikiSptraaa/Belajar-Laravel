<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css?v.0.1') }}" rel="stylesheet">
    <title>Divi Tailor | {{ $title; }}</title>
</head>
<body class=" bg-gray-100">
 @if (session('status'))
 <div class="container mx-auto w-1/4 relative top-5">
    <div class="flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
        <p class="self-center ">
            {{ session('status') }}
        </p>
        <strong class="text-xl lighn-center cursor-pointer alert-del">
            &times;
        </strong>
    </div>
</div>
@endif
@if (session('fail_status'))
<div class="container mx-auto w-1/4 relative top-5">
   <div class="flex justify-between text-red-200 shadow-inner rounded p-3 bg-red-600">
       <p class="self-center">
           {{ session('fail_status') }}
       </p>
       <strong class="text-xl lighn-center cursor-pointer alert-del">
           &times;
       </strong>
   </div>
</div>
@endif

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <div class="flex justify-center">
         <img src="{{ asset('img/logo_divi.svg') }}" alt="Logo" width="200px" height="155px" class="object-fill">
        </div>
        <h3 class="text-xl font-bold text-center">Masukkan Akunmu</h3>
        <form action="/login" method="post"> 
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="email" placeholder="Email" name="email" autofocus
                                class="peer w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @error('email')
                                    <p class="text-xs text-red-600">Masukkan Email Dengan Format Yang Benar</p>
                                @enderror
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password" name="password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @error('password')
                                <p class="text-xs text-red-600">Masukkan Password</p>
                                @enderror
                </div>
                <div class="mt-4">
                    <p class="text-sm inline ">Belum Punya Akun? </p><a href="/daftar" class="text-sm text-blue-600 hover:underline">Daftar</a>
                </div>
                <div class="flex items-baseline justify-between">
                    <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/alert.js"></script>
</body>
</html>