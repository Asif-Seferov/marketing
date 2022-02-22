<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request){
        $data = $request->all();
        $create = Category::create($data);
        if($create){
            return redirect()->back()->with('success', 'Bölmə uqurla əlavə edildi');
        }else{
            return redirect()->back()->with('error', 'Xəta baş verdi! Bölmə əlavə edilmədi');
        }

    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->slug = null;
        $update = $category->update($request->all());
        if($update){
            return redirect()->back()->with('success', 'Bölmə uqurla yeniləndi');
        }else{
            return redirect()->back()->with('error', 'Xəta baş verdi! Bölmə yenilənmədi');
        }
    }

    public function destroy($id){
        $delete = Category::find($id);
        $delete->delete();
        
            return redirect()->back()->with('success', 'Silmə uqurla baş verdi');
       
    }
}
