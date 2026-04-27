<?php

namespace App\Models\admin;

use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $primaryKey = 'id';

   public function category()
    {
        return $this->belongsTo(Category::class, 'emp_id', 'emp_id');
    }
   
}
