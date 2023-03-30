<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::select(['id', 'title', 'description'])->get();
        return view('posts')->with(['posts'=> $posts]);
    }

    public function softDelete(Post $post){
        $post->delete();
        return redirect()->back();
    }

    public function withTrashed(){
        $posts = Post::onlyTrashed()->get();
        return view("trashed")->with(['posts'=> $posts]);
    }

    public function forceDelete($id){
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect()->back();
    }
}
