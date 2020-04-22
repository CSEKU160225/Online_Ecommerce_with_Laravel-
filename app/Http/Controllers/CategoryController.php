<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    //
    public function category_create()
    {
    	# code...
/*    	    	$category=new category;
    	$product->title=$request->title;
    	$product->description=$request->des;
    	$product->price=$request->price;
    	$product->quantity=$request->quan;*/

    	return view('admin.pages.category.create');
    }
     public function category_store(Request $request)
    {
    	# code...
/*    	    	$category=new category;
    	$product->title=$request->title;
    	$product->description=$request->des;
    	$product->price=$request->price;
    	$product->quantity=$request->quan;*/
    	$category=new category;
    	$category->name=$request->name;
    	$category->descriptions=$request->des;
    	$category->save();

    	return redirect()->route('admin.category.create');
    }

         public function category_manage()
    {
    	# code...
    	$category=category::orderBy('id','desc')->get();
        return view('admin.pages.category.manage')->with('categorys',$category);
    }


}
