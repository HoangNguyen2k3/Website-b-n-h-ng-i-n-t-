@extends('layouts.master')
@section('title')
<title>Home page</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('home1/home.css') }}">
@endsection
@section('js')
<link rel="stylesheet" href="{{ asset('home1/home.js') }}">
@endsection
@section('content')
@include('home.Components.slider')
<section>
    <div class="container">
        <div class="row" id="feature">
            @include('Components.slidebar')
            
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Features Items</h2>
                    @if($products->count() > 0)
                        @foreach ($products as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ config('app.base_url').$product->feature_image_path }}" alt="" />
                                        <h2>{{ number_format($product->price) }} VNĐ</h2>
                                        <p>{{ $product->name }}</p>
                                        <a href="#"
                                        data-url="{{ route('addToCart',['id'=>$product->id]) }}"
                                        class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{ number_format($product->price) }} VNĐ</h2>
                                            <p>{{ $product->name }}</p>
                                            <a href="#"
                                            data-url="{{ route('addToCart',['id'=>$product->id]) }}"
                                             class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="col-sm-12">
                            <div class="alert alert-info text-center">
                                Không có sản phẩm nào thuộc danh mục sản phẩm này
                            </div>
                        </div>
                    @endif

                    <!-- Pagination Links -->
                </div>
                <div class="custom-pagination">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
