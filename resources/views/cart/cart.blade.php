@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    @section('title')
<title>Home page</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('home1/home.css') }}">
@endsection
@section('js')
<link rel="stylesheet" href="{{ asset('home1/home.js') }}">
@endsection
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="{{ route('comehome') }}">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        @php
                        $total=0;
                    @endphp
        @if (is_null($carts) || count($carts) == 0)
        <div class="col-sm-12">
          <div class="alert alert-info text-center">
              Không có sản phẩm nào trong giỏ hàng
          </div>
      </div>
      @else
        <div class="row">
            <table class="table">
                <thead style="align-items: center">
                    <tr class="cart_menu">
                       <th scope="col">#</th>
                       <th scope="col">Ảnh sản phẩm</th>
                       <th scope="col">Tên</th>
                       <th scope="col">Giá sản phẩm</th>
                       <th scope="col">Số lượng</th>
                       <th scope="col">Tổng tiền</th>
                       <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total=0;
                    @endphp
                     
                                        
                      @foreach ($carts as $index=>$cartitem)
                      @php
                        $total+=($cartitem['price']*$cartitem['quantity']) ;
                      @endphp
                   <tr>
                        <td>{{ $index }}</td>
                        <td class="productinfo"><img src="{{ config('app.base_url').$cartitem['image'] }}" alt=""></td>
                        <td style="max-width: 200px;">{{ $cartitem['name'] }}</td>
                        <td>{{number_format($cartitem['price'])  }}VNĐ</td>
                        <td><input style="max-width: 80px;" type="number" value="{{ $cartitem['quantity'] }}" min="1"></td>
                            <td>
                                {{number_format($cartitem['price']*$cartitem['quantity'])  }}VNĐ
                            </td>
                            <td>
                                <a href="" class="btn btn-primary" style="margin-top: 0px;border-radius: 4px">Cập nhật</a>
                                <a href="" class="btn btn-danger" >Xóa</a>
                            </td>
                       </tr>
                   @endforeach
                   @endif
                </tbody>
            </table>
            <div class="col-md-12 text-right">
                <h2 style="color: rgb(247, 148, 0);">Tổng tiền: {{ number_format($total) }} VNĐ</h2>
                <a href="{{ route('checkOut') }}" class="btn btn-success btn-lg" style="margin-top: 20px;">Thanh toán mua hàng</a>
                <br>
            </div>
            <br>
            <br>
        </div>
    </div>
</section> <!--/#cart_items-->
<br>

@endsection
</html>