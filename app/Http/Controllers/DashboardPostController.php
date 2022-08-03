<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;



class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'post' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $valiadated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $valiadated['image'] = $request->file('image')->store('post-images');
        }

        $valiadated['user_id'] = auth()->user()->id;
        $valiadated['excerpt'] = Str::limit(strip_tags($request->body, 100,));

        Post::create($valiadated);
        return redirect('/dashboard/posts')->with('success', 'Post Telah Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];



        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->old_img) {
                Storage::delete($request->old_img);
            }
            $validated['image'] = $request->file('image')->store('post-images');
        }

        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body, 100,));


        Post::where('id', $post->id)
            ->update($validated);
        return redirect('/dashboard/posts')->with('success', 'Post Telah Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post Telah Dihapus');
    }
    public function cekSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
