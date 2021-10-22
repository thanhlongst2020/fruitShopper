<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Slider extends Model
{
//    Thêm use SoftDeletes để không lấy các slider đã xóa mềm
    use SoftDeletes;
    protected $table = 'sliders';
    protected $guarded = [];
}
