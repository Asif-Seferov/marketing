<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        return view('admin.tag.index');
    }

    public function create(){
        return view('admin.tag.create');
    }

    public function store(Request $request){
        $tag = Tag::create($request->all());
        if($tag){
            return redirect()->back()->with('success', 'Taq uğurla əlavə olundu');
        }
        else{
            return redirect()->back()->with('error', 'Xəta baş verdi! Taq əlavə olunmadı');
        }
    }
}
