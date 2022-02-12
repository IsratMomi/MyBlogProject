<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function newCategory(Request $request){
        Category::addCategory($request);
        return redirect()->back()->with('message','Category created successfully');
    }
    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories' => Category::all()
        ]);
    }
    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category' => Category::find($id)
        ]);

    }
    public function updateCategory(Request $request){
        Category::updateCategory($request);
        return redirect('/manage-category')->with('message','Category Updated successfully');

    }
    public function deleteCategory($id){
        $this->category = Category::find($id);
        $this->category->delete();
        return redirect()->back()->with('message','Category deleted successfully');

    }
}
