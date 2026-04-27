<?php

namespace App\Models\Admin; 

use App\Models\admin\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
    protected $table = 'category';
    protected $primaryKey = 'id';

    function getcategory()
    { 
           

        return $this->hasMany(Product::class, 'emp_id', 'emp_id');
    }

    

  
}
