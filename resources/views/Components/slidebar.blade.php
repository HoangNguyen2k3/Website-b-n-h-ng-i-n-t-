<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
          @foreach ($categorys as $category)     
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        @if($category->categoryChildrent->count())
                        <a 
                        data-toggle="collapse" data-parent="#accordian" href="#sportswear_{{ $category->id }}">
                            <span class="badge pull-right">
                                @if($category->categoryChildrent->count())
                                <i class="fa fa-plus"></i>
                                @endif
                            </span>
                            {{ $category->name }}
                        </a>
                        @else 
                        <a 
                        href="#sportswear_{{ $category->id }}">
                            <span class="badge pull-right">
                            </span>

                            {{ $category->name }}
                        </a>
                        @endif

                    </h4>
                </div>
                <div id="sportswear_{{ $category->id }}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach ($category->categoryChildrent as $categoryChild)
                            <li><a href="{{ route('category.product',
                            ['slug'=>$categoryChild->slug,'id'=>$categoryChild->id]) }}">
                                {{ $categoryChild->name }} </a>
                            </li>  
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/category-products-->
    
        
        <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div><!--/price-range-->
        
        <div class="shipping text-center"><!--shipping-->
            <img src="{{ asset('eshopper/images/home/shipping.jpg') }}" alt="" />
        </div><!--/shipping-->
    
    </div>
</div>