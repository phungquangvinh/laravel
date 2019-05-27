<div id="header">
	<div class="logo">
		<a href="{{route("index")}}">
			<img src="images/02_Homepage_01_03.png">
		</a>				
	</div>
	<div class="icon_top">
		<div class="search">
			<span style="cursor:pointer" onclick="open_Nav()"><img src="images/02_Homepage_01_06.png"></span>
		</div>
		<div class="sale">
			<span style="cursor:pointer" onclick="openNav1()"><img src="images/02_Homepage_01_08.png"></span>
		</div>
		<div class="menu_hover">
			<span style="cursor:pointer" onclick="openNav()"><img src="images/02_Homepage_01_10.png"></span>
		</div>
	</div>
	<div class="menu_bar">
		<ul>
			<li><a href="{{route("index")}}">HOME</a></li>
			<li class="dropdown">
			  	<span class="dropbtn">SHOP</span>
			  	<div class="dropdown-content fade">
			  		<div class="all">
			  			<div class="shop_menu">
			  				<div class="shop_01">
			  					<div class="bag">
									<h3>STYLIST BAG</h3><hr>
									<ul>
										<li><a href="{{route("shop")}}">> Clutch Handbags</a></li>
										<li><a href="{{route("shop")}}">> Diaper Bags</a></li>
										<li><a href="{{route("shop")}}">> Bags</a></li>
										<li><a href="{{route("shop")}}">> Hobo Handbags</a></li>
									</ul>
								</div>
								<div class="bag">
									<h3>MATERIAL BAG</h3><hr>
									<ul>
										<li><a href="{{route("shop")}}">> Beaded Handbags</a></li>
										<li><a href="{{route("shop")}}">> Fabric Handbags</a></li>
										<li><a href="{{route("shop")}}">> Handbags</a></li>
										<li><a href="{{route("shop")}}">> Leather Handbags</a></li>
									</ul>
								</div>
								<div class="bag">
									<h3>SHOE</h3><hr>
									<ul>
										<li><a href="{{route("shop")}}">> Flat Shoes</a></li>
										<li><a href="{{route("shop")}}">> Flat Sandals</a></li>
										<li><a href="{{route("shop")}}">> Boots</a></li>
										<li><a href="{{route("shop")}}">> Heels</a></li>
									</ul>
								</div>
			  				</div>
			  				<div class="shop_02">
			  					<div class="bag">
									<h3>JWELLERY</h3><hr>
									<ul>
										<li><a href="{{route("shop")}}">> Bracelets</a></li>
										<li><a href="{{route("shop")}}">> Necklaces & Pendants</a></li>
										<li><a href="{{route("shop")}}">> Pendants</a></li>
										<li><a href="{{route("shop")}}">> Pins & Brooches</a></li>
									</ul>
								</div>
								<div class="bag">
									<h3>DRESSES</h3><hr>
									<ul>
										<li><a href="{{route("shop")}}">> Casual Dresses</a></li>
										<li><a href="{{route("shop")}}">> Evening</a></li>
										<li><a href="{{route("shop")}}">> Designer</a></li>
										<li><a href="{{route("shop")}}">> Party</a></li>
									</ul>
								</div>
								<div class="bag">
									<h3>SWIMWEAR</h3><hr>
									<ul>
										<li><a href="{{route("shop")}}">> Swimsuits</a></li>
										<li><a href="{{route("shop")}}">> Beach Clothing</a></li>
										<li><a href="{{route("shop")}}">> Clothing</a></li>
										<li><a href="{{route("shop")}}">> Bikinis</a></li>
									</ul>
								</div>
			  				</div>
						</div>
						<div class="img_shop">
							<img src="images/20_Hover_Mega_menu_03.png">
						</div>
			  		</div>								
				</div>
			</li>
			<li class="dropdown">
			  	<span class="dropbtn">CATEGORY</span>
			  	<div class="dropdown-content fade">
			  		<div class="all">
			  			<div class="shop_menu">
			  				<div class="shop_01">
			  					@foreach($category as $c)
			  					<div class="bag">
									<h3>{{$c->name}}</h3><hr>
									<ul>										
										<li><a href="{{route('category',['id' => $c->id, 'TenKhongDau' => $c->TenKhongDau])}}">> Chi tiết</a></li>							
									</ul>
								</div>
								@endforeach
			  				</div>
						</div>
						<div class="img_shop">
							<img src="images/20_Hover_Mega_menu_03.png">
						</div>
			  		</div>								
				</div>
			</li> 
			<li><a href="">ABOUT</a></li>
			@if (Auth::check())
				@if( Auth::user()->id_role == 1)
					<li><a href="{{route("admin")}}">ADMIN</a></li>
				@elseif( Auth::user()->id_role == 2)
					<li><a href="{{route("admin")}}">ADMIN</a></li>
				@elseif( Auth::user()->id_role == 3)
					<li><a href="{{route("shop")}}">SHOP</a></li>
				@endif
			@else
				<li><a href="#">BLOG</a></li>
			@endif
			<li><a href="">CONTACT</a></li>
		</ul>
	</div>			
</div>