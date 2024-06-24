<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        @yield('title')
        <link href="{{ asset('eshopper/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('eshopper/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('eshopper/css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ asset('eshopper/css/price-range.css') }}" rel="stylesheet">
        <link href="{{ asset('eshopper/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('eshopper/css/main.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        @include('Components.header')
            @yield('content')  
            @include('Components.footer')   
        
    <script src="{{ asset('eshopper/js/jquery.js') }}"></script>
	<script src="{{ asset('eshopper/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('eshopper/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('eshopper/js/price-range.js') }}"></script>
    <script src="{{ asset('eshopper/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('eshopper/js/main.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    <script>
function addToCart(event){
    event.preventDefault();
    let urlCart = $(this).data('url');
    console.log('URL Cart:', urlCart); // Kiểm tra URL
    $.ajax({
        type: "GET",
        url: urlCart,
        success: function(data){
          if(data.code===200){
            Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Sản phẩm đã được thêm vào giỏ hàng thành công",
  showConfirmButton: false,
  timer: 1500
});
          }
        },
        error: function(xhr, status, error){
            console.log('Error Status:', status);
            console.log('Error:', error);
            console.log('Response Text:', xhr.responseText); // Kiểm tra lỗi trả về từ server
            alert('Failed to add product to cart. Please try again.');
        }
    });
}

        $(function(){
            
           $('.add-to-cart').on('click',addToCart);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')
    </body>
</html>