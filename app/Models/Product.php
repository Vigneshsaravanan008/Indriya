<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }
}
