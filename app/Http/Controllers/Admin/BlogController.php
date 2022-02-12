<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{
    protected $blog;
    public function addBlog(){
        return view('admin.blog.add-blog',[
            'categories' => Category::all()
        ]);
    }
    public function newBlog(Request $request){
        Blog::newBlog($request);
        return redirect()->back()->with('message','Blog added ');

    }
    public function manageBlog(){
        return view('admin.blog.manage-blog',[
            'blogs' => Blog::all()
        ]);
    }
    public function editBlog($id){
        return view('admin.blog.edit-blog',[
            'blog' => Blog::find($id),
            'categories' => Category::all()
        ]);

    }
    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        return redirect('/manage-blog')->with('message','Blog updated successfully');
    }
    public function deleteBlog($id){
        $this->blog = Blog::find($id);
            if (file_exists($this->blog->image)){
                unlink($this->blog->image);
            }
            $this->blog->delete();
            return redirect()->back()->with('message','Blog Info deleted successfully');
    }
}
