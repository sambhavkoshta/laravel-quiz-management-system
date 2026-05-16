<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Su

class AdminController extends Controller
{
    //
    function showAdminLogin(){
        if(!Session::has('admin')){
            return redirect('/dashboard');
        }
        return redirect('/admin-login')
    }
}
