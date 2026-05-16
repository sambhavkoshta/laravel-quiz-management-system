<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function showCategory(){
        return view('category');
    }

    function addCategory(Request $request){
        $request->validate([
            'name'=>'required|min:3',
        ]);

        $category = new Category();
        $category->name = $request->name;

        if($category->save()){
            Session::
        }
    }
}
