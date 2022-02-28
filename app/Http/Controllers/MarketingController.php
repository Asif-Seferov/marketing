<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MarketingController extends Controller
{
    public function index(){
        $posts = Post::with('category')->orderBy('id', 'DESC')->paginate(2);
        return view('front.article', compact('posts'));
    }
    public function post_show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();
        return view('front.show', compact('post'));
    }
}
