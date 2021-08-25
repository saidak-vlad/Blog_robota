<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Post;
use App\Models\CommentseModel;
use Cassandra\Index;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->simplePaginate(3),
            'popularPosts' => Post::withCount('comments')->whereHas('comments')->orderByDesc('comments_count')->limit(5)->get()
        ]);
    }



    public function show(Post $post){
         return view('posts.show',[
             "post" => $post,
             'popularPosts' => Post::withCount('comments')->whereHas('comments')->orderByDesc('comments_count')->limit(5)->get()
         ]);
    }


    public function comment($id, CommentForm $request){
        $post = Post::findOrFail($id);

        $post->comments()->create($request->validated());

        return redirect(route('posts.show',$id));
    }
}
