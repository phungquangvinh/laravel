@extends('layouts.app')
@section('title')
    Product detail
@stop
@section('content')

<div class="slider-product">
	<img style="width: 400px; margin-left: 40px" src="../upload/product/{{$product->img_url}}"></a>
</div>
<br><br>
<div class="detail" style="width: 400px; margin-left: 40px">
	<b><h3>Tên sản phẩm: {{ $product->product }}</h3></b>
	<p>Mô tả: {{ $product->description }}</p>
	<p>Đơn giá: {{ $product->price }} VND</p>
	<p>Tình trạng: 
		@if($product->active == 1)
            {{"Hàng đang bán"}}
        @else
            {{"Hết hàng"}}
        @endif
	</p>
	<p>
		@if($product->sale_price != 0)
            Khuyến mãi: {{ $product->sale_price*100 }}%
        @else
            {{"Không có khuyến mãi"}}
        @endif		
	</p>
	<a href="{{route('index')}}">Trở về trang chủ</a>
</div>

@endsection