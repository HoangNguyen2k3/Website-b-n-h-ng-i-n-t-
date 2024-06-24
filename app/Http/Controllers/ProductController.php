<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function addToCart($id){
         //session()->flush('cart');
        $product=Product::find($id);
        $cart=session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity']=$cart[$id]['quantity']+1;
        }else{
            $cart[$id]=[
                'name'=>$product->name,
                'price'=>$product->price,
                'quantity'=>1,
                'image'=>$product->feature_image_path
            ];
        }
        session()->put('cart',$cart);
        return response()->json([
            'code'=>200,
            'message'=>'success'
        ],200);
    
    }
    public function showCart(){
        $carts=session()->get('cart');
       return view('cart.cart',compact('carts'));
        }
}
