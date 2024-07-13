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
        $category=new Category();
        return view('admin.categories.create',compact('category'));
    }

    public function store(Request $request){
        // $c_name=$request->name;
        // $category=new Category();
        // $category->name=$c_name;
        // $category->save();

        Category::create($request->all());

        return redirect()->route('category.index');

    }

    public function edit($id){
        // Select * from categories where id=$id
        // $category=Category::find($id);
        $category=Category::where('id',$id)->first();

        return view('admin.categories.create',compact('category'));
    }
    public function update(Request $request, $id){

        $data=$request->all();
        $category=Category::find($id);
        // date('h:m:s');
        if($request->hasFile('image')){
            $img_file=$request->file('image');
            $destination="uploads";
            $file_name="category_".time().'.'.$img_file->getClientOriginalExtension();
            $img_file->move(public_path($destination),$file_name);
            $data['img']='/'.$destination.'/'.$file_name;
        }

        $category->update($data);
        return redirect()->route('category.index');
    }

    public function destroy($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }


}
