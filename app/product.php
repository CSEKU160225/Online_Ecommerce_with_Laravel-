<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use App\category;

class product extends Model
{
    //
    public function image()
    {
    	# code...
    	return $this->hasmany('App\product_image');
    }
    public function Category()
    {
    	# code...

    	return $this->belongsTo(category::class);
    }
}
