@extends('layouts.master')
@section('title')
    Homepage
@stop
@section('content')
<div id="content">
    
    @include('layouts.slide')

    <div class="promotion">
        <div class="text_01">
            <div class="exceptional">
                <b><p>TUYỆT VỜI</p></b>
                <h1>Các dịch vụ của chúng tôi</h1>
            </div>
            <div class="text_01_01">
                <p>BETTER là một mẫu PSD đơn giản và đẹp mắt được thiết kế riêng cho cửa hàng trực tuyến Thời trang và mỹ phẩm BETTER. Bạn sẽ ngay lập tức yêu những bố cục vui vẻ và dễ dàng tùy chỉnh của BETTER. Một sự lựa chọn hoàn hảo cho cửa hàng nhỏ đáng yêu của bạn!
                Chúng tôi cung cấp dịch vụ Shop đặc biệt cho nhiều loại tài sản thương mại trong hơn 10 năm...</p>
            </div>
        </div>
        <div class="image image_01">
            <div class="container">
                <div class="row1">
                @foreach($category as $c)
                    <div @if($c->id == 1) class="column active" @else class="column" @endif>
                        <p class="demo cursor" onclick="currentSlide({{$c->id}})">{{$c->name}}</p>
                    </div>
                @endforeach
                </div>

                @foreach($category as $c)
                    <div class="mySlide fade">
                        <img src="{{asset('upload/category/'.$c->img_url)}}" style="max-width: 400px; height: 300px">
                    </div>
                @endforeach                   
            </div>
        </div>
    </div>
    
    <div class="new_product">
        <div class="arrows">
            <img src="images/02_Homepage_01_21.png">
            <div class="prev_next">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>          
        </div>
        <div class="promotions">
            <div class="img_pro">
                <a href="{{route('detail',['id' => $pro->id, 'TenKhongDau' => $pro->TenKhongDau])}}">
                    <img src="{{asset('upload/product/'.$pro->img_url)}}">
                </a>
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    @foreach($product as $p)
                        <div class="item">
                            <div class="owl-item">
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a class="product-thumb-link" href="{{route('detail',['id' => $p->id, 'TenKhongDau' => $p->TenKhongDau])}}">
                                            <img class="first-thumb" alt="" src="{{asset('upload/product/'.$p->img_url)}}">
                                            <p style="color: #000;">{{$p->product}}</p>
                                            <span>
                                                @if($p->sale_price == 0)
                                                    <b>{{$p->price}} VND</b>
                                                @elseif($p->sale_price != 1)
                                                    <del>{{ $p->price }} VND</del> <b style="color: red">{{ $p->price - ($p->price*$p->sale_price) }} VND</b>
                                                @else
                                                    <del>{{ $p->price }} VND</del> <b style="color: red">Free!</b>
                                                @endif 
                                            </span>
                                            <img class="second-thumb" alt="" src="{{asset('upload/product/'.$p->img_url)}}">
                                        </a>
                                        <div class="product-info-cart">
                                            <div class="product-extra-link">
                                                <a href="{{route('product.edit',$p->id)}}" class="wishlist-link"></a>
                                                <a href="{{route('product.edit',$p->id)}}" class="compare-link"></i></a>
                                                <a href="{{route('product.edit',$p->id)}}" class="quickview-link"></a>
                                            </div>
                                            <a href="{{route('user.cart')}}" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="video">
        <!-- Button to Open the Modal -->
        <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <img src="images/02_Homepage_01_43.png">
            <h2 style="color: #fff">XEM VIDEO MỚI NHẤT</h2>
        </a>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <iframe width="727" height="409" src="https://www.youtube.com/embed/SuzG7u65LeA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="feature_items">
        <div class="arrows">
            <img src="images/02_Homepage_01_46.png">
            <ul>
                <li><a href="#">MỸ PHẨM</a></li>
            </ul>
        </div>  
        <div class="promotions">
            <div class="img_pro">
                <img src="images/02_Homepage_01_49.jpg">
            </div>                  
            <div class="abc">
                @foreach($pr as $pr)
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="{{route('detail',['id' => $pr->id, 'TenKhongDau' => $pr->TenKhongDau])}}">
                                        <img class="first-thumb" alt="" src="upload/product/{{$pr->img_url}}">
                                        <p style="color: #000;">{{$pr->product}}</p>
                                        <span>
                                            @if($pr->sale_price == 0)
                                                <b>{{$pr->price}} VND</b>
                                            @elseif($pr->sale_price != 1)
                                                <del>{{ $pr->price }} VND</del> <b style="color: red">{{ $pr->price - ($pr->price*$pr->sale_price) }} VND</b>
                                            @else
                                                <del>{{ $pr->price }} VND</del> <b style="color: red">Free!</b>
                                            @endif 
                                        </span>
                                        <img class="second-thumb" alt="" src="upload/product/{{$pr->img_url}}">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="{{route('product.edit',$pr->id)}}" class="wishlist-link"></a>
                                            <a href="{{route('product.edit',$pr->id)}}" class="compare-link"></i></a>
                                            <a href="{{route('product.edit',$pr->id)}}" class="quickview-link"></a>
                                        </div>
                                        <a href="{{route('user.cart')}}" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>                
        </div>          
    </div>
    <div class="lastest_news">
        <div class="arrows">
            <img src="images/02_Homepage_01_61.png">
        </div>
        <div id="demo" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="promotions">
                    @foreach($produce as $p)
                    <div class="news">
                        <div class="image_03">
                            <img src="upload/product/{{$p->img_url}}">      
                        </div>
                        <div class="text_03">
                            <h3><b>{{$p->product}}</b></h3>
                            <p>{!! $p->description !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="carousel-item">
                <div class="promotions">
                    <div class="news">
                        <div class="image_03">
                            <img src="images/photo-1455819413567-ef04b7e1fe3d.png">
                        </div>
                        <div class="text_03">
                            <h3><b>BETTER DESIGN</b></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc lacinia.</p>
                        </div>
                    </div>
                    <div class="news">
                        <div class="image_03">
                            <img src="images/team4-m-min.png">      
                        </div>
                        <div class="text_03">
                            <h3><b>PLANTING & REMOVAL</b></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc lacinia.</p>
                        </div>
                    </div>
                    <div class="news">
                        <div class="image_03">
                            <img src="images/team_06-848x480.png">
                        </div>
                        <div class="text_03">
                            <h3><b>GARDEN CARE</b></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc lacinia.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="promotions">
                    @foreach($produce as $p)
                    <div class="news">
                        <div class="image_03">
                            <img src="upload/product/{{$p->img_url}}">      
                        </div>
                        <div class="text_03">
                            <h3><b>{{$p->product}}</b></h3>
                            <p>{!! $p->description !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="news_letters">
        <div class="text_04">
            <h2><b>NEWSLETTER SIGN-UP</b></h2>
            <p>We make sure you do not miss any news</p>
        </div>
        <form class="email">
            <input type="text" name="email" class="text_email" placeholder="Enter your email..." value="">
            <input type="submit" class="sub_email" name="sub_email" value="SIGN UP">
        </form>
    </div>                      
</div>
@endsection