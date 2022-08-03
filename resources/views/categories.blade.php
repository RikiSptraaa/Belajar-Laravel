
@extends('layouts.main')

@section('container')
    <div class="container mt-20 ">
        <h1 class="text-2xl font-bold mb-6 text-center text-slate-500">Posts</h1>
    </div>
    <div class="container mx-auto px-6 font-inter sm:flex sm:flex-wrap sm:gap-6 sm:justify-center">
        @foreach($categories as $cag) 
        <div class="relative rounded-md shadow-lg overflow-hidden mb-10 sm:mb-0 sm:w-64 md:w-80 lg:w-72">      
            <div class="bg-neutral-800 absolute  rounded-br-md">
                <a class="text-white mx-7" href="/blog?category={{ $cag->slug }}">{{ $cag->name }}</a>
            </div>
            <img src="https://source.unsplash.com/1200x400/?{{ $cag->name }}" alt="">
            

    
        </div>    
        @endforeach
    </div>
    <div class="mb-96"></div>
@endsection
