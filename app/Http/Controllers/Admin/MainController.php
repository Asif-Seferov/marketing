<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
//use Cviebrock\EloquentSluggable\Sluggable;

class MainController extends Controller
{
    public function index(){
        Category::create([
            'name' => 'Salam Dünya'
        ]);
        return view('admin.index');
    }
}
