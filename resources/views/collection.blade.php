@extends('layouts.master')
@section('title')
    Collection
@stop
@section('content')
<div id="content">
	
	<form action="{{route("postFile")}}" method="post" enctype="multipart/form-data" >
		{!! csrf_field() !!}
	 	<input type="file" name="myFile" id="myFile" >
	 	<input type="submit" >
	</form>
	<div class="slideshow col-03">
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
		      	<img src="images/04_Homepage_03_03.png">
		      	<div class="carousel-caption">
		          <h1>FLYCAM SMART TOYS</h1>
		          <p style="color: #aeaeae">Simply Professional Performance</p>
		        </div>
		    </div>
		    <div class="carousel-item">
		      	<img src="images/04_Homepage_03_03.png">
		      	<div class="carousel-caption">
		          <h1>FLYCAM SMART TOYS</h1>
		          <p style="color: #aeaeae">Simply Professional Performance</p>
		        </div>
		    </div>
		    <div class="carousel-item">
		      	<img src="images/04_Homepage_03_03.png">
		      	<div class="carousel-caption">
		          <h1>FLYCAM SMART TOYS</h1>
		          <p style="color: #aeaeae">Simply Professional Performance</p>
		        </div>
		    </div>
		    <div class="carousel-item">
		      	<img src="images/04_Homepage_03_03.png">
		      	<div class="carousel-caption">
		          <h1>FLYCAM SMART TOYS</h1>
		          <p style="color: #aeaeae">Simply Professional Performance</p>
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
	<div class="promo">
		<div class="promo-01">
			<img src="images/04_Homepage_03_07.png">
			<h3><b>ANIMAL TOYS</b></h3>
			<p>Trending Smart Toys 2016</p>
		</div>
		<div class="promo-01">
			<img src="images/04_Homepage_03_10.png">
			<h3><b>ROBOCON TOYS</b></h3>
			<p>Trending Smart Toys 2016</p>
		</div>
		<div class="promo-01">
			<img src="images/04_Homepage_03_13.png">
			<h3><b>CAR TOYS</b></h3>
			<p>Trending Smart Toys 2016</p>
		</div>
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