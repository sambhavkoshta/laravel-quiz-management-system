<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function showAdminLogin(){
        if(!Session::has('admin')){
            return redirect('/-login');
        }
        return redirect('/admin-login')
    }
}
