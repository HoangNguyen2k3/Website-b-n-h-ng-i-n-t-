<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    public function index1($slug,$category_id){
        Paginator::useBootstrap();
        $categorys=Category::where('parent_id',0)->get();
        $sliders=Slider::latest()->get();
       $products=Product::where('category_id',$category_id)->paginate(12);
        return view('product.category.list',compact('categorys','products','sliders'));
    }
}
