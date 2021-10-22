<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $slider;
    private $category;
    public function __construct(Slider $slider, Category $category)
    {
        $this->slider = $slider;
        $this->category = $category;
    }
    public function index(){
        $sliders = $this->slider->latest()->get();
        $categorys = $this->category->where('parent_id',0)->get();
        $products = Product::latest()->take(10)->get();
//        Nếu latest có tham số thì nó sẽ lấy từ lớn đến béc của tham số đó
        $productsRecommend = Product::latest('views_count','desc')->take(12)->get();
        return view('home.home', compact('sliders', 'categorys', 'products', 'productsRecommend'));
    }

    public function product(){
        $categorys = $this->category->where('parent_id',0)->get();
        return view('product.product',compact('categorys'));
    }
}
