<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
<<<<<<< HEAD
	use SoftDeletes;
    protected $table ='categories';
    protected $fillable = ['name','parent_id'];
=======
    protected $table ='categories' ;

    
   
>>>>>>> 2d223964ae540b40bffe9a7281067dff81cd5ce8
}
