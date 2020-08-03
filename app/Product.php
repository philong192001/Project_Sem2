<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
     protected $table ='products' ;
     protected $guarded = [];
     public function category()
     {
     	return $this->belongsTo(Category::class, 'id_category');
     }
=======
    protected $table ='products' ;

    
>>>>>>> 2d223964ae540b40bffe9a7281067dff81cd5ce8
}
