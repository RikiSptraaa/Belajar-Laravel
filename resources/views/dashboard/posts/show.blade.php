@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather='arrow-left'></span>Back To My Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit<span data-feather='edit'></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah yakin ingin dihapus?')">Delete <span data-feather='x-circle'></span></button>
                  </form>
                
                <p>By. <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}</a></p>

                @if($post->image)
                <div style="max-height: 350px; overflow: hidden;">

                    <img src="{{ asset('storage/'.$post->image) }}" alt="">
                </div>
                @else

                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="PostImage">
                @endif

                <p>{!! $post->body !!}</p>


            </div>
        </div>
    </div>
@endsection