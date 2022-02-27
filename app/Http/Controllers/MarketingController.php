<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MarketingController extends Controller
{
    public function index(){
        $posts = Post::with('categories')->orderBy('id', 'DESC')->paginate(2);
        return view('front.article', compact('posts'));
    }
}
