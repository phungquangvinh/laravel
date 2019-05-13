@extends('layouts.master')
@section('title')
    Collection
@stop
@section('content')
<div id="content">
	
	@include('layouts.slide')

	<div class="promo">
		@foreach($product as $p)
			<div class="promo-01">
				<a href="{{route('detail',$p->id)}}">
					<img src="upload/product/{{$p->img_url}}">
				</a>
				<h3><b>{{$p->product}}</b></h3>
				<p>{{$p->price}} VND</p>
			</div>
		@endforeach
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