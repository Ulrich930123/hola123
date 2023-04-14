<?php
namespace App\Http\Controllers\api;

use App\Http\Requests\StorePost;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Routing\Controller;
use App\Traits\ApiResponse;


class PostControllerApi extends Controller
{
    use ApiResponse;

    public function index()
    {
       
       
        $posts=Post::orderBy('created_at','desc')->paginate(1);
        return $this->successResponse($posts);
    }
    public function show(Post $post)
    {
        $post->category;
        return $this->successResponse($post);
    }
    public function category(Category $category)
    {
        return $this->successResponse(["posts"=>$category->post()->paginate(10), "category"=>$category]);
    }
    public function store(StorePost $request){
     //   dd($request->all());
        Post::create($request->validated());
        return response()->json(
            ['res'=>true,
            'message'=>'Registro insertado correctamente']
        );
    }
}