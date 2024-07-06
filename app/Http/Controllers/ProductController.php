<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $name="Muhammad Ahsan";
        $age=18;
        $is_admin=false;

        $students=['Anam','Hadia','Sana','Shanza Ashraf','Shanza Amjad','Aqsa'];

        return view('products.index',compact('students','name','age','is_admin'));
    }

    public function welcome(){

        return view('welcome');
    }
}
