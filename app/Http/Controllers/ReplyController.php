<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyRequest;
use App\Models\Post;
use App\Http\Requests\StorePost;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        
        
    }
    public function index()
    {
        $replies=Reply::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.reply.index',['replies'=>$replies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autor=Auth::user()->name;
        $posts=Post::all();
        return view('dashboard.reply.create',compact('autor','posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReplyRequest $request)
    {
        Reply::create($request->validated());
        return back()->with('status','Comentario creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reply $reply)
    {
        return view('dashboard.reply.show',['reply'=>$reply]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reply $reply)
    {
        $post=Post::all();
        $autor=Auth::user()->name;
        return view('dashboard.post.edit',compact('post','autor'),['reply'=>$reply,]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReplyRequest $request, Reply $reply)
    {
        $reply->update($request->validated());
        return back()->with('status','Comentario modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $reply)
    {
        $reply->delete();
        return back()->with('status','Comentario eliminado exitosamente');
    }
    
}
