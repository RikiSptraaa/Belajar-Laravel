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
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 mb-4 text-left bg-white shadow-lg">
        <div class="flex justify-center">
         <img src="{{ asset('img/logo_divi.svg') }}" alt="Logo" width="200px" height="155px" class="object-fill">
        </div>
        <h3 class="text-xl font-bold text-center">Daftar Akun</h3>
        <form action="/daftar" method="post">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                                class="@error('email') focus:ring-1 focus:ring-pink-600 text-pink-600 border-pink-600 placeholder-pink-600
                                @enderror 
                                focus:ring-1 w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-blue-600">
                                @error('email')
                                    <p class="text-sm m-1 text-pink-600">{{ $message }}</p>
                                @enderror
                            </div>
                <div class="mt-4">
                    <label class="block">Nama<label>
                            <input type="text" placeholder="Nama" name="name" value="{{ old('name') }}"
                                class="@error('name') focus:ring-1 focus:ring-pink-600 text-pink-600 border-pink-600 placeholder-pink-600
                                @enderror 
                                w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @error('name')
                                    <p class="text-sm m-1 text-pink-600">{{ $message }}</p>
                                @enderror
                </div>
                <div class="mt-4">
                    <label class="block">Username<label>
                            <input type="text" placeholder="Username" name="username"  value="{{ old('username') }}"
                                class="@error('username') focus:ring-1 focus:ring-pink-600 text-pink-600 border-pink-600 placeholder-pink-600
                                @enderror 
                                w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @error('username')
                                    <p class="text-sm m-1 text-pink-600">{{ $message }}</p>
                                @enderror
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password" name="password" 
                                class="@error('password') focus:ring-1 focus:ring-pink-600 text-pink-600 border-pink-600 placeholder-pink-600
                                @enderror
                                w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @error('password')
                                    <p class="text-sm m-1 text-pink-600">{{ $message }}</p>
                                @enderror
                </div>
                <div class="mt-4">
                    <label class="block">Confirm Password<label>
                            <input type="password" placeholder="Confirm Password" name="ConfirmPassword"
                                class="@error('ConfirmPassword') focus:ring-1 focus:ring-pink-600 text-pink-600 border-pink-600 placeholder-pink-600
                                @enderror
                                w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                                @error('ConfirmPassword')
                                    <p class="text-sm m-1 text-pink-600">{{ $message }}</p>
                                @enderror
                 </div>
                <div class="flex items-baseline justify-between">
                    <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Daftar</button>
                    <a href="/login" class="text-sm text-blue-600 hover:underline">Balik Ke Menu Log-In</a>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>