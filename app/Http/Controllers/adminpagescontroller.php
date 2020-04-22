<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\product;
use Image;
use App\product_image;
use Session;
class adminpagescontroller extends Controller
{
    //
    public function index()
    {
    	# code...
    	return view('admin.pages.index');
    }

        public function product_create()
    {
    	# code...
    	return view('admin.pages.product.create');
    }

            public function product_store(Request $request)
    {
    	# code...
$request->validate([
    'title'=>'required|max:150',
    'price'=>'required',
    'quan'=>'required',
]);

    	$product=new product;
    	$product->title=$request->title;
    	$product->description=$request->des;
    	$product->price=$request->price;
    	$product->quantity=$request->quan;
         
         $product->slug=Str::slug($request->title);
    	$product->category_id=1;
    	$product->brand_id=1;
    	$product->admin_id=1;

    	$product->save();

        if ($request->hasFile('pimage')) {
            # code...
            $image=$request->file('pimage');
            $img=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/products/'.$img);
            Image::make($image)->save($location);


            $product_image= new product_image;
            $product_image->product_id=$product->id;
            $product_image->image=$img;
            $product_image->save();






        }
    	return redirect()->route('admin.product.create'); //database e pathanor por kon page e jbe;



    }
        public function product_manage()
    {
        # code...
               $products=product::orderBy('id','desc')->get();
        
        return view('admin.pages.product.manage')->with('product',$products);
    }
           public function product_edit($id)
    {
        # code...
             $products=product::find($id);
             
        
        return view('admin.pages.product.edit')->with('product',$products);
    }


            public function product_update(Request $request,$id)
    {
        # code...


        $product= product::find($id);
        $product->title=$request->title;
        $product->description=$request->des;
        $product->price=$request->price;
        $product->quantity=$request->quan;
         
         $product->slug=Str::slug($request->title);
        $product->category_id=1;
        $product->brand_id=1;
        $product->admin_id=1;

        $product->save();


        return redirect()->route('admin.product.manage'); //database e pathanor por kon page e jbe;



    }
               public function product_distroy($id)
    {
        # code...
             $products=product::find($id);
             if (!is_null($products)) {
                 # code...
                $products->delete();
                Session::flash('success', 'Deleted');
                return redirect()->route('admin.product.manage');
             }
             
        
        
    }

    
}
