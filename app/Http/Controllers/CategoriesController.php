<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories=Category::get();
        return view('admin.categories.index',compact('categories'));
    }


    public function create(){

        return view('admin.categories.create');
    }

    public function store(Request $request){
        $c_name=$request->name;
        $category=new Category();
        $category->name=$c_name;
        $category->save();

        return redirect()->route('category.index');

    }

    public function edit($id){

        return view('products.create');
    }
    public function update(Request $request, $id){

        return view('products.create');
    }

    public function destroy($id){

        return view('products.create');
    }


}
