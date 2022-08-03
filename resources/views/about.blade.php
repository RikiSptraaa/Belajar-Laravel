@extends('layouts.main')

@section('container')
<div class="container mt-20 ">
    <h1 class="text-3xl font-bold mb-6 text-center text-slate-500">About Us</h1>
</div>

<div class="container flex w-full mx-auto">
    <div class="hidden lg:flex lg:m-0 lg:w-1/2 lg:object-cover lg:p-10">
        <img src="https://source.unsplash.com/500x500?Tailor" alt="{{ $nama }}" class="mx-auto rounded-full object-cover">   
    </div>
    <div class="flex-1 p-4 lg:ml-10 lg:text-left text-center"> 
        <img src="img/logo_divi.svg" alt="" class="lg:mb-6 mb-10 sw-64 mt-4 object-fill mx-auto lg:mx-auto">  
        <h1 class="text-4xl font-semibold text-slate-500">{{ $nama; }}</h1>    
        <h3 class="text-lg text-slate-500">{{ $email; }}</h3> 
        <h3 class="text-lg text-slate-500 mb-4">+62 81 246 577 310</h3> 
        <h1 class="text-4xl font-semibold text-slate-500">Bali</h1>    
        <h3 class="text-lg text-slate-500">Denpasar</h3> 
        <h3 class="text-lg text-slate-500 mb-4">Jl. Gunung Agung Gg.Carik</h3>
    </div>
</div>
</div>
<div class="mb-96"></div>
@endsection