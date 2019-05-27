@extends('layouts.master')
@section('title')
    Chi tiết sạp hàng
@stop
@section('content')
<div id="content">

	<div class="panel-heading" style="background-color:#337AB7; color:white;">
        <h4><b>{{$db_cate->name}}</b></h4>
    </div>

	<div class="promo">
		@foreach($product as $p)
			<div class="promo-01">
				<a href="{{route('detail',['id' => $p->id, 'TenKhongDau' => $p->TenKhongDau])}}">
					<img style="height: 300px" src="../../upload/product/{{$p->img_url}}">
				</a>
				<h3><b>{{$p->product}}</b></h3>
				<p>
					@if($p->sale_price == 0)
                        <b>{{$p->price}} VND</b>
                    @elseif($p->sale_price != 1)
                        <del>{{ $p->price }} VND</del> <b style="color: red">{{ $p->price - ($p->price*$p->sale_price) }} VND</b>
                    @else
                        <del>{{ $p->price }} VND</del> <b style="color: red">Free!</b>
                    @endif 
				</p>
			</div>
		@endforeach
	</div>

	<div style="text-align: center;">
        {{$product->links()}}
    </div>

	<div class="featured">
		<div class="arrows">
			<h3>FEATURED PRODUCTS</h3>
			<ul>
				<li><a href="#"></a>ALL</li>
				<li><a href="#"></a>BEST</li>
				<li><a href="#"></a>SALE</li>
				<li><a href="#"></a>NEW</li>
			</ul>
		</div>	
	</div>
	<div class="deal"></div>
	<div class="lastest-news"></div>
	<div class="new-arrivals"></div>
</div>
@endsection