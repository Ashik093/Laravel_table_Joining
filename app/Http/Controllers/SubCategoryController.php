<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SubCategoryController extends Controller
{
    public function Index(){
    	$cat=DB::table('categories')->get();
    	return view('addSubCategory',compact('cat',$cat));
    }

    public function store(Request $request){
    	$validatedData = $request->validate([
	    	'cat_id'=>'required',
	        'name' => 'required|max:255',
	        'description' => 'required',
    	]);

    	$data=array();
    	$data['cat_id']=$request->cat_id;
    	$data['name']=$request->name;
    	$data['description']=$request->description;

    	$insert = DB::table('subcategories')->insert($data);

    	return Redirect()->back()->with('msg','Successfully Inserted');
    }
    public function show(){
    	$subcategory = DB::table('subcategories')
    					->join('categories','subcategories.cat_id','categories.id')
    					->select('subcategories.*','categories.name as catName')
    					->get();
    	return view('allSubCategory',compact('subcategory',$subcategory));	
    }
}
