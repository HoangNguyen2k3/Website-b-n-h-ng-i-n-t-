<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    @foreach ($products as $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img class="image" src="{{ config('app.base_url').$product->feature_image_path }}" alt="" />
                        <h2>{{ number_format($product->price) }} VNĐ</h2>
                        <p>{{ $product->name }}</p>
                        <a href="#"
                        data-url="{{ route('addToCart',['id'=>$product->id]) }}"
                        class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{ number_format($product->price) }} VNĐ </h2>
                            <p>{{ $product->name }}</p>
                            <a href="#"
                            data-url="{{ route('addToCart',['id'=>$product->id]) }}"
                            class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ route('details_products') }}"><i class="fa fa-plus-square"></i>Xem chi tiết sản phẩm</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
  
    
</div><!--features_items-->
