<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('dashboard.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePost $request)
    {
        Post::create($request->validated());
        return back()->with('status','Publicacion creada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories=Category::all();
        return view('dashboard.post.edit',compact('categories'),['post'=>$post,]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePost $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status','POst modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status','post eliminado exitosamente');
    }
    
}
