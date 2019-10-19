<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function Index(){
    	return view('addCategory');
    }

    public function store(Request $request){
    	$validatedData = $request->validate([
        'name' => 'required|unique:categories|max:255',
        'description' => 'required',
    	]);

    	$data=array();
    	$data['name']=$request->name;
    	$data['description']=$request->description;

    	$insert = DB::table('categories')->insert($data);

    	return Redirect()->back()->with('msg','Successfully Inserted');
    }
    public function show(){
    	$category = DB::table('categories')->get();
    	return view('allCategory',compact('category',$category));	
    }
}
