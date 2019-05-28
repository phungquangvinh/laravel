<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="menu">
        <li><a href="{{route("user")}}">TÀI KHOẢN CỦA TÔI</a></li>
        <li><a href="#">DANH SÁCH MONG MUỐN</a></li>
        <li><a href="{{route("user.cart")}}">GIỎ HÀNG</a></li>
        <li><a href="#">KIỂM TRA</a></li>
        <li>
            @if (Auth::check())
                <a href="{{ url('/logout') }}">ĐĂNG XUẤT</a>
            @else
                <a href="{{route("login")}}">ĐĂNG NHẬP</a>
            @endif
        </li>
    </ul>
    <p style="padding-left: 20px">LỰA CHỌN NGÔN NGỮ</p>
    <ul class="lang">
		<li><a href=""><img src="{{asset('images/21_Hover_Setting_03.png')}}"></a></li>
		<li><a href=""><img src="{{asset('images/21_Hover_Setting_05.png')}}"></a></li>
		<li><a href=""><img src="{{asset('images/21_Hover_Setting_07.png')}}"></a></li>
		<li><a href=""><img src="{{asset('images/21_Hover_Setting_09.png')}}"></a></li>
    </ul>  
    <p style="padding-left: 20px">ĐƠN VỊ TIỀN TỆ</p>
    <ul class="lang">
		<li><a href="">EUR</a></li>
		<li><a href="">USA</a></li>
		<li><a href="">VND</a></li>
		<li><a href="">JPY</a></li>
    </ul>
</div>

<div id="my_Sidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="close_Nav()">&times;</a>
    <p style="padding: 30px; padding-bottom: 0">TÌM KIẾM</p>
    <div class="topnav">
      <div class="search-container">
        <form action="{{route('search')}}" method="get" class="navbar-form navbar-left" role="search">
            @csrf
          <input type="text" placeholder="Search..." name="key">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <p style="padding:30px">Top từ khóa tìm kiếm hot nhất hiện nay: Shoes, Blouse, Jean, etc...</p>
</div>

<div id="mySidenav-01" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
    <p style="padding: 30px; padding-bottom: 0">ITEM GIỎ HÀNG</p>
    <div class="item-cart">
    	<div class="item-cart-img">
    		<img src="{{asset('images/19_Hover_Cart_03.png')}}">
    	</div>
    	<div class="item-cart-text">
    		<p>Item 01</p>
    		<span style="font-family: oswald">$67.05</span>
    		<h4 style="font-family: oswald;color: #a4a4a4">QTY: 2</h4>
    	</div>
    	<button><i class="fa fa-shopping-basket"></i></button>
    </div>
    <div class="item-cart">
    	<div class="item-cart-img">
    		<img src="{{asset('images/19_Hover_Cart_06.png')}}">
    	</div>
    	<div class="item-cart-text">
    		<p>Item 02</p>
    		<span style="font-family: oswald">$67.05</span>
    		<h4 style="font-family: oswald;color: #a4a4a4">QTY: 2</h4>
    	</div>
    	<button><i class="fa fa-shopping-basket"></i></button>
    </div>
    <div class="item-cart">
    	<div class="item-cart-img">
    		<img src="{{asset('images/19_Hover_Cart_08.png')}}">
    	</div>
    	<div class="item-cart-text">
    		<p>Item 03</p>
    		<span style="font-family: oswald">$67.05</span>
    		<h4 style="font-family: oswald;color: #a4a4a4">QTY: 2</h4>
    	</div>
    	<button><i class="fa fa-shopping-basket"></i></button>
    </div>
</div>