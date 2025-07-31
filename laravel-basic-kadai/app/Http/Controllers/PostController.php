<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table('posts') -> get();

        return view('posts/index',compact('posts'));
        // return view('posts/index');
    }

    public function show($id){
        $posts = Post::find($id);

        return view('posts/show',compact('posts'));
    }
}
