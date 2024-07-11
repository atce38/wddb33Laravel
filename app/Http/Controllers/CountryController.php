<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $countries=Country::get();
        return view('admin.countries.index',compact('countries'));
    }


    public function create(){

        return view('admin.countries.create');
    }

    public function store(Request $request){
        $c_name=$request->name;
        $country=new Country();
        $country->name=$c_name;
        $country->save();

        return redirect()->route('country.index');

    }
}
