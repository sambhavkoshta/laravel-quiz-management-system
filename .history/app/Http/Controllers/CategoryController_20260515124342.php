<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    //
    function showCategory(){
        return view('category');
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
        $category = Category::find($id)
        return view('editCategory');
    }
}
