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
<br>
<section>
    <div class="container">
        <div class="row" id="feature">
         @include('Components.slidebar')
            
            <div class="col-sm-9 padding-right">
                @include('home.Components.feature_product')
                <!--category-tab-->
              @include('home.Components.category_tab')
                <!--/category-tab-->

                <!--recommended_items-->
              @include('home.Components.recommend_product')
                <!--/recommended_items-->
                
            </div>
        </div>
    </div>
</section>



@endsection

