<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::simplePaginate(5);
        return view('admin.tag.index', compact('tags'));
    }

    public function create(){
        return view('admin.tag.create');
    }

    public function store(TagRequest $request){
        $tag = Tag::create($request->all());
        if($tag){
            return redirect()->back()->with('success', 'Taq uğurla əlavə olundu');
        }
        else{
            return redirect()->back()->with('error', 'Xəta baş verdi! Taq əlavə olunmadı');
        }
    }

    public function edit($id){
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, $id){
        $tag = Tag::find($id);
        $tag->slug = null;
        $update = $tag->update($request->all());
        if($update){
            return redirect()->back()->with('success', 'Taq uğurla yeniləndi');
        }else{
            return redirect()->back()->with('error', 'Xəta baş verdi! Taq yenilənmədi');
        }
    }

    public function destroy($id){
        $tag = Tag::destroy($id);
        return redirect()->back()->with('success', 'Taq uğurla silindi');

    }
}
