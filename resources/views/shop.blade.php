@extends('layouts.master')
@section('title')
    Shop
@stop
@section('content')
<div id="content">
	<div class="slideshow col-02">
		<style type="text/css">.carousel-caption{color: #000;}</style>
		<div id="demo" class="carousel slide" data-ride="carousel">

		  	<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
			</ul>
		  
		  	<!-- The slideshow -->
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
			      	<img src="images/03_Homepage_02_03.png">
			      	<div class="carousel-caption">
			      		<h2>BETTER ECOMMERGE</h2>
			      		<h1>Lookbook Collection</h1>
			      	</div>	      	
		    	</div>
			    <div class="carousel-item">
			      	<img src="images/03_Homepage_02_03.png">
			      	<div class="carousel-caption">
			      		<h2>BETTER ECOMMERGE</h2>
			      		<h1>Lookbook Collection</h1>
			      	</div>	
			    </div>
			    <div class="carousel-item">
			      	<img src="images/03_Homepage_02_03.png">
			      	<div class="carousel-caption">
			      		<h2>BETTER ECOMMERGE</h2>
			      		<h1>Lookbook Collection</h1>
			      	</div>	
			    </div>
			    <div class="carousel-item">
			      	<img src="images/03_Homepage_02_03.png">
			      	<div class="carousel-caption">
			      		<h2>BETTER ECOMMERGE</h2>
			      		<h1>Lookbook Collection</h1>
			      	</div>	
			    </div>
		  	</div>
		  
		  	<!-- Left and right controls -->
		  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		    	<span class="carousel-control-prev-icon"></span>
		  	</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>
<div>

@foreach($abc as $category)
<!-- <tr>
	        <td>{{ $category->product }}</td>
	        <td>{{ $category->description }}</td>
	        <td>{{ $category->quality }}</td>
	        <td>{{ $category->price }}</td>
	        <td>{{ $category->sale_price }}</td>
	    </tr> -->
	<div class="promotions">
		<div class="category">
			<div class="trending">
				<a href="#">
					<h1>01</h1>
					<p>TRENDING</p>
				</a>
			</div>
			<div class="trending">
				<a href="chi-tiet-san-pham/2"><img src="images/03_Homepage_02_07.png"></a>
			</div>
			<div class="trending">
				<a href="#"><img src="images/03_Homepage_02_10.png"></a>
			</div>
			<div class="trending">
				<a href="#"><img src="images/03_Homepage_02_12.png"></a>
			</div>
		</div>
		<div class="slider-product">
			<a href="chi-tiet-san-pham/{{ $category-> id_product }}"><img src="images/{{ $category->img_url }}"></a>
		</div>
	</div>
@endforeach
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
	</div>
</div>
@endsection