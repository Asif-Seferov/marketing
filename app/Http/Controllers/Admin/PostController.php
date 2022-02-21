<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(20);
        return view('admin.post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        return view('admin.post.create', compact('categories', 'tags'));
    }

    public function store(Request $request){
        $all = $request->all();
        if(isset($all['tags'])){
            unset($all['tags']);
        }
       $all['img'] = Post::upLoadImage($request);
        $create = Post::create($all);
        if($create){
            $create->tags()->sync($request->tags);
            return redirect()->back()->with('success', 'Post uqurla elave olundu');
        }
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name', 'id')->all();
        $tags = Tag::pluck('name', 'id')->all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $all = $request->all();
        if(isset($request['tags'])){
            unset($all['tags']);
        }
        if($request->hasFile('img')){
            $all['img'] = Post::upLoadImage($request, $all['img']);
        }
        $post->update($all);
        if($post){
            $post->tags()->sync($request->tags);
            return redirect()->back()->with('success', 'Post uqurla redakte edildi');
        }else{
            return redirect()->back()->with('error', 'Post redakte edilerken xeta bas verdi');
        }
        
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->tags()->sync([]);
        Storage::delete($post->img);
        $post->delete($id); 
        
            return redirect()->back()->with('success', 'Post uqurla silindi');
        

    }
}
