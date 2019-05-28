@extends('layouts.app')
@section('title')
    Chi tiết sản phẩm
@stop
@section('content')

<div class="slider-product">
	<img style="height: 400px; margin-left: 40px" src="{{asset('upload/product/'.$product->img_url)}}"></a>
</div>
<br><br>
<div class="detail" style="width: 400px; margin-left: 40px">
	<b><h3>Tên sản phẩm: {{ $product->product }}</h3></b>
	<p>Mô tả: {!! $product->description !!}</p>
	<p>
		Đơn giá: 
		@if($product->sale_price == 0)
			<b>{{ $product->price }} VND</b>
		@elseif($product->sale_price != 1)
			<del>{{ $product->price }} VND</del> <b style="color: red">{{ $product->price - ($product->price*$product->sale_price) }} VND</b>
		@else
			<del>{{ $product->price }} VND</del> <b style="color: red">Free!</b>
		@endif
	</p>
	<p>Tình trạng: 
		@if($product->active == 1)
            {{"Hàng đang bán"}}
        @else
            {{"Hết hàng"}}
        @endif
	</p>
	<p>
		@if($product->sale_price == 0)
			{{"Không có khuyến mãi"}}            
        @elseif($product->sale_price != 1)
        	Khuyến mãi: {{ $product->sale_price*100 }}%        	
        @else
            {{"Hàng free. Nhanh tay đừng bỏ lỡ!"}}
        @endif		
	</p>
	<a href="{{route('index')}}">Trở về trang chủ</a>
</div>
@endsection