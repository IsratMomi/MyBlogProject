<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable =['category_id','title','description','authorName','image'];

    protected static $blog;
    protected static $blogImage;
    protected static $imageName;
    protected static $imgDirectory;
    protected static $imgUrl;
    protected static function saveImage($request){
        self::$blogImage = $request->file('image');
        if (self::$blogImage){
            self::$imageName = 'blog-image'.time().''.self::$blogImage->getClientOriginalExtension();
            self::$imgDirectory = 'blog-image/';
            self::$blogImage->move(self::$imgDirectory, self::$imageName);
            return self::$imgDirectory.self::$imageName;
        }
        else{
            return '';
        }

    }
    public static function newBlog($request){
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->title = $request->title;
        self::$blog->description = $request->description;
        self::$blog->authorName = $request->authorName;
        self::$blog->image = self::saveImage($request);
        self::$blog->status = $request->status;
        self::$blog->save();
    }
    public static function updateBlog($request){
        self::$blog = Blog::find($request->blog_id);
        if ($request->hasFile('image')){
            if (file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::$imgUrl = self::saveImage($request);
        }
        else{
            self::$imgUrl = self::$blog->image;
        }
        self::$blog->category_id = $request->category_id;
        self::$blog->title = $request->title;
        self::$blog->description = $request->description;
        self::$blog->authorName = $request->authorName;
        self::$blog->image = self::$imgUrl;
        self::$blog->status = $request->status;
        self::$blog->save();
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
