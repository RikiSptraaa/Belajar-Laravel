
@extends('layouts.main')

@section('container')
@if ($posts->count())
    <div class="container mt-20 ">
        <h1 class="text-2xl font-bold mb-6 text-center text-slate-500">{{ $title }}</h1>
        <form action="/blog" class="flex justify-end">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <input value="{{ request('search') }}" class="shadow-md w-1/4 border border-solid border-black rounded-sm p-1" type="search" name="search" id="Search" placeholder="Cari Post">
            <button class="shadow-md hover:bg-sky-600 w-[10%] mx-1 py-1 px-2 bg-sky-500 text-white rounded-sm " type="submit">Cari</button>
        </form>
    </div>
        <div class="container">

            <div class="max-w-[100%] group text-center
            my-10 border
            border-slate-200 rounded-xl mx-auto p-5 shadow-md font-inter 
            dark:hover:bg-slate-300">
            @if($posts[0]->image)
          
                <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="" class="w-full h-96 object-cover object-center">
     
            @else
            
                <img src="https://source.unsplash.com/1280x720/?{{ $posts[0]->category->name }}" alt="img" class="w-full h-96 object-cover object-center">
            @endif
                <h2 class="cursor-pointer text-xl font-bold text-slate-600 mt-4 group-hover:text-blue-600">
                    <a href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                </h2>
                <p>By <a href="/blog?author={{ $posts[0]->author->username }}" class="cursor-pointer hover:text-blue-600">{{ $posts[0]->author->name }}</a> In <a href="/blog?category={{ $posts[0]->category->slug }}" class="cursor-pointer hover:text-blue-600">{{ $posts[0]->category->name }} {{ $posts[0]->created_at->diffForHumans() }} </a></p>
                <p class="text-justify cursor-pointer mt-2 first-letter:mr-1 first-letter:uppercase first-letter:text-5xl first-letter:float-left first-line:tracking-widest first-line:uppercase group-hover:text-blue-600 text-lg text-black">{{ $posts[0]->excerpt }} </p>  
                
                <a href="/blog/{{ $posts[0]->slug }}" class="my-3 group-hover:bg-blue-800 sm:text-base inline-block px-5 py-3 bg-blue-600 text-white rounded-lg shadow-lg uppercase font-semibold tracking-wider text-sm">Read more</a>
            </div> 
        </div>
  
<div class="container mx-auto px-6 font-inter sm:flex sm:flex-wrap sm:gap-6 sm:justify-center">
        @foreach ($posts->skip(1) as $post)
            <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:mb-0 sm:w-64 md:w-80 lg:w-72">
                <div class="absolute p-2 bg-neutral-800 text-white rounded-br-md ">{{ $post->category->name }}</div>
                @if($post->image)       
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="w-full">
                @else
                    <img src="https://source.unsplash.com/600x400/?{{ $post->category->name }}" alt="img" class="w-full" >
                @endif
                <div class="px-6 py-4 ">
                    <div class="font-bold text-xl mb-2">{{ $post->title  }}</div>
                    <p>By <a href="/blog?author={{ $post->author->username }}" class="cursor-pointer hover:text-blue-600">{{ $post->author->name }}</a> In <a href="/blog?category={{ $post->category->slug }}" class="cursor-pointer hover:text-blue-600">{{ $post->category->name }}</a> </p>
                    <p class="text-sm text-slate-600">{{ $post->excerpt }}</p>
                    <a href="/blog/{{ $post->slug }}" class="inline-block px-5 py-3 bg-sky-500 text-white rounded-lg shadow-lg uppercase font-semibold tracking-wider text-sm">Read more...</a>
                </div>
            </div>
        @endforeach
    </div>
   <div class="container px-6 my-2">
       {{ $posts->links('pagination::tailwind') }}
   </div>
   
    <div class="mb-96"></div>
 @else
 <div class="container">
    
     <p class="text-xl text-center">No Post Found</p>
 </div>
@endif  
@endsection
