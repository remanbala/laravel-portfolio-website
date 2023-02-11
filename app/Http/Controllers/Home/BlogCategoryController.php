<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory()
    {
        $blogCategory = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all', compact('blogCategory'));
    }

    public function AddBlogCategory()
    {
        return view('admin.blog_category.blog_category_add');
    }

    public function StoreBlogCategory(Request $request)
    {
        // $request->validate([
        //     'blog_category' => 'required',
        // ], [
        //     'blog_category.required' => 'Blog Category is required',
        // ]);



        BlogCategory::insert([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' => 'Blog Category Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function EditBlogCategory($id) {
        $blogCategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit', compact('blogCategory'));
    }

    public function DeleteBlogCategory($id) {
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->delete();
        $notification = array(
            'message' => 'Blog Category Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);    
    }

    public function UpdateBlogCategory(Request $request)
    {
        $blogCategory_id = $request->id;
        BlogCategory::findOrFail($blogCategory_id)->update([
            'blog_category' => $request->blog_category
        ]); 

        $notification = array(
            'message' => 'Blog Category Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);  
    }
}
