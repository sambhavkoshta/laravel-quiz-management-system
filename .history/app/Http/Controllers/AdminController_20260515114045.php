<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    function showAdminLogin(){
        if(!Session::has('admin')){
            return view('adminLogin');
        }
        return redirect('/dashboard');
    }

    function showAdminRegister(){
        if(!Session::has('student')){
            return view('adminRegister');
        }
        return redirect('/dashboard');
    }
}
