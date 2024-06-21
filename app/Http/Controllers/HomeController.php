<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){
       $sliders=Slider::latest()->get();
       $categorys=Category::where('parent_id',0)->get();
        $products=Product::latest()->take(6)->get();
      $productsRecommend=Product::latest('views_count','desc')->take(6)->get();
        return view('home.home',compact('sliders','categorys','products','productsRecommend'));
    }
    public function test(){
        return view('test');
    }
}
