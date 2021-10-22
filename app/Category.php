<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $guarded = [];
    public function categoryChildrent(){
        return $this->hasMany(Category::class, 'parent_id');
    }

//    Lây tất cả các sản phẩm của mục lục cha lớn thông qua mục lục cha nhỏ trung gian (Eloquent: has-many-through)
    public function products()
    {
        return $this->hasManyThrough(Product::class,Category::class, 'parent_id', 'category_id');
    }
}
