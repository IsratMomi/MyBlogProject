<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $blogs;
    protected $blog;
    protected $totalComment;
    public function index(){
        $this->blogs = Category::where('status', 1)->get();

        return view('front.home.home',[
            'categories' => $this->blogs,
            'blogs' => Blog::orderBy('id','DESC')->take(4)->get(),
            'blog' =>  Blog::orderBy('id','DESC')->first(),

        ]);
    }
    public function singleBlog($id){
        $this->blog = Blog::find($id);
        $this->blog->totalRead = $this->blog->totalRead + 1;
        $this->blog->save();

        $this->totalComment = Comment::where('blog_id',$id)->get();
        return view('front.blog.blog-single',[
            'blog' => $this->blog,
            'categories' => Category::where('status',1)->get(),
            'comments' =>Comment::where('blog_id',$id)->orderBy('id','DESC')->take(4)->get(),
            'totalCommentCount' => count($this->totalComment)
        ]);
    }
    public function categoryBlog($id){
        $this->blogs = Blog::where('category_id',$id)->get();
        return view('front.blog.category-blog',[
            'blogs' => $this->blogs,
            'category' =>Category::find($id)
        ]);

    }
}
