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

    public function show($pid,$koib){

        return "Name:".$pid.', Price:'.$koib;
    }

    public function create(){

        return view('products.create');
    }

    public function store(Request $request){
        $p_name=$request->name;
        $p_price=$request->price;

        return "<h1>The Name of Product:".$p_name.", Price :".$p_price."</h1>";

    }
}
