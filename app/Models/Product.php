<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
protected $fillable = [ 'name',
 'description',
 'image',
 'price',
  'discount_price',
   'category_id'
,'status'
,'trending'
,'slug'
,'long_description'



];
    protected $table = 'product';


public function Category()
{
    return $this->hasOne(Category::class, 'id', 'category_id');
}


public function brand(){

    return $this->hasOne(Brand::class, 'id','brand_id', );}




public function productimage()
{
    return $this->hasMany(ProductImage::class, 'product_id', 'id');
}


public function wishlist(){
     return $this->hasMany(Wishlist::class);
  }

}

