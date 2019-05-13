@extends('layouts.master')
@section('title')
    Shop
@stop
@section('content')
<div id="content">
	@include('layouts.slide')

	
	<div class="promotions">
		<div class="category">
			<div class="trending">
				<a href="#">
					<h1>01</h1>
					<p>TRENDING</p>
				</a>
			</div>
			@foreach($abc as $product)
				<div class="trending">
					<a href="{{route('detail',$product->id)}}"><img src="upload/product/{{$product->img_url}}"></a>
				</div>
			@endforeach
		</div>
		<div class="slider-product">
			<a href="#"><img src="images/2655002401_2_1_1.jpg"></a>
		</div>
	</div>
	
	<div class="date">
		<div class="date-time">
			<div class="data-date">
				<h1><b>02</b></h1>
				<h3>MARCH</h3>
			</div>
			<p>LASTEST NEWS</p>
		</div>
		<div class="date-time">
			<div class="data-date">
				<h1><b>18</b></h1>
				<h3>MAY</h3>
			</div>
		</div>
		<div class="date-time">
			<div class="data-date">
				<h1><b>10</b></h1>
				<h3>APR</h3>
			</div>
		</div>
		<div class="date-time">
			<div class="data-date">
				<h1><b>07</b></h1>
				<h3>OCT</h3>
			</div>
		</div>
	</div>
	<div class="contact">		
		<form class="" method="" enctype="">
			<p>CONTACT US</p>
			<input type="text" name="name" placeholder="Your Name"><br /><br />
			<input type="text" name="email" placeholder="Your Email"><br /><br />
			<input type="text" name="subject" placeholder="Subject"><br /><br />
			<input type="text" name="message" placeholder="Message"><br /><br />
			<input type="submit" name="send" value="SEND MESSAGE">
		</form>
	</div><br><br>
</div>

@endsection