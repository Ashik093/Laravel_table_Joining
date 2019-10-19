<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
        public function Index(){
        	$cat=DB::table('categories')->get();
        	$sub_cat=DB::table('subcategories')->get();
        	return view('addpost')->with('cat',$cat)->with('sub_cat',$sub_cat);
        }

        public function store(Request $request){
        	$validatedData = $request->validate([
    	    	'title' => 'required|unique:posts|max:255',
    	    	'cat_id'=>'required',
    	    	'sub_id'=>'required',
    	        'description' => 'required',
        	]);

        	$data=array();
        	$data['title']=$request->title;
        	$data['cat_id']=$request->cat_id;
        	$data['sub_id']=$request->sub_id;
        	$data['description']=$request->description;

        	$insert = DB::table('posts')->insert($data);

        	return Redirect()->back()->with('msg','Successfully Inserted');
        }
        public function show(){
        	$post = DB::table('posts')
        					->join('categories','posts.cat_id','categories.id')
        					->join('subcategories','posts.sub_id','subcategories.id')
        					->select('posts.*','categories.name as catName','subcategories.name as subName')
        					->get();
        	return view('allpost',compact('post',$post));	
        }
}
