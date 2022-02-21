<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [];

    public static function upLoadImage(Request $request, $img = null){
            if($request->hasFile('img')){
                if($img){
                    Storage::delete($img);
                }
            }
           
        
            $folder = date('Y-m-d');
            return $request->file('img')->store($folder);
      
        
        
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getImage($img){
        if($img){
            return asset("uploads/{$this->img}");
        }
        return null;
    }

    public function getCatName($catId){
        $category = Category::find($catId);
        return $category->name;
    }
}
