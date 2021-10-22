<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function index(){
        $categorys = $this->category->where('parent_id',0)->get();
        return view('product.product',compact('categorys'));
    }
}
