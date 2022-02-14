<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_login(){
        $title = "Ecommerce | Login";
        return view('Admin.login',compact('title'));
    }
}
