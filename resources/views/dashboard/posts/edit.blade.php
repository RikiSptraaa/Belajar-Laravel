@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit posts</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input value="{{ old('title' , $post->title) }}" type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title">
          @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input value="{{ old('slug', $post->slug) }}" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select @error('category') is-invalid @enderror" name="category_id">
                @foreach ($category as $categories)
                @if (old('category_id', $post->category_id) == $categories->id )
                <option value="{{ $categories->id }}" selected>{{ $categories->name }}</option>     
                @else
                <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Post Image</label>
            <input type="hidden" name="old_img" value="{{ $post->image }}">
            @if($post->image)
            <img class="img-preview d-block mb-3 col-sm-5" src="{{ asset('storage/'.$post->image) }}">
            @else
                <img class="img-preview mb-3 col-sm-5">
            @endif
            <input onchange="previewImage()" class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body" value="{{ old('body', $post->body) }}"></trix-editor>
        </div>

        
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener("change", function() {
        fetch('checkSlug?title=' + title.value)
        .then((response) => response.json())
        .then((data) => slug.value = data.slug);
    })

    feather.repalce();

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();  
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const img_preview = document.querySelector('.img-preview');

        img_preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            img_preview.src = oFREvent.target.result;
            
        }
        
    }

</script>

@endsection