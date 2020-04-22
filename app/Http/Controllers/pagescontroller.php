<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class pagescontroller extends Controller
{
    //
    public function index()
    {
    	# code...
    	return view('pages.index');
    }
        public function contact()
    {
    	# code...
    	return view('pages.contact');
    }
            public function products()
    {
        # code...
        $products=product::orderBy('id','desc')->get();
        return view('pages.product.index')->with('product',$products);
    }
    public function slug($id)
    {
        # code...
        $products=product::where('slug',$id)->first();
        if (!is_null($products)) {
            # code...
            return view('pages.product.show')->with('pro',$products);
        }


    }

        public function search(Request $request)
    {
        # code...
        $search=$request->search2;
        $products=product::orWhere('title','like',$search)->orderBy('id','desc');
       
            # code...
            return view('pages.product.search')->with('search',$products);
        

    }
}
