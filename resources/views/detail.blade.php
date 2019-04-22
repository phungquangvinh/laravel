@extends('layouts.app')
@section('title')
    Product detail
@stop
@section('content')

@foreach($abc as $category)
<div class="slider-product">
	<img src="../images/{{ $category->img_url }}"></a>
</div>
<div class="detail" style="width: 400px; margin-left: 40px">
	<b><h3>{{ $category->product }}</h3></b>
	<p>{{ $category->description }}</p>
	<p>Price: {{ $category->price }}$</p>
	<p>Sale price: {{ $category->sale_price*100 }}%</p>
</div>
@endforeach

@endsection