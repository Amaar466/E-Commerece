<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected static function booted() { //booted method, no need to call parent boot
    //     static::deleting( function ($category) {
    //       $category->children()->delete();
    //     });
    //   }
    protected $table = ('products');
    protected $fillable = ['id','cate_id','product_slug','short_description','status','trending','price','photo','quantity'];
    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id','id');
    }
}

