
@extends('layouts.main')

@section('container')
     <div class="container px-6 mt-2">
        <div class="w-[80%] mx-auto">
            <h2 class="cursor-pointer text-xl font-bold text-slate-700 mt-4 group-hover:text-blue-600">
                {{ $post->title }}
            </h2>
            @if($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" alt="">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="w-full h-1/4" alt="PostImage">
            @endif
            <p class="font-semibold mt-3">By <a href="/blog?author={{ $post->author->username }}" class="cursor-pointer hover:text-blue-600">{{ $post->author->name }}</a> In <a href="/blog?category={{ $post->category->slug }}" class="cursor-pointer hover:text-blue-600">{{ $post->category->name }}  </a></p>
            <p>{{ $post->created_at->diffForHumans() }}</p>
            <span class="text-justify mt-2">{!! $post->body !!}</span>
            <a href="/blog" class="inline-block mt-4 text-sm py-2 px-8 bg-slate-600 text-white rounded-full font-semibold">Back</a>
        </div>
    </div>
@endsection