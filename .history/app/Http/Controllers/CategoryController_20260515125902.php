<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    //
    function showCategory(){
        $category = Category::get();
        return view('category',compact('category'));
    }

    function addCategory(Request $request){
        $request->validate([
            'name'=>'required|min:3|unique:categories,name',
        ]);

        $category = new Category();
        $category->name = $request->name;

        if($category->save()){
            Session::flash('category','Category '.$category->name.' Added');
            return redirect('/admin-dashboard');
        }
    }

    function showEdit($id){
        $category = Category::find($id);
        return view('editCategory',compact('category'));
    }

    function updateCategory(Request $request, $id){
        $request->validate([
            'name'=>'required|min:3|unique:categories,name',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;

        if($category->save()){
            return redirect('/categories');
        }
    }

    function deleteCategory($id)
}
