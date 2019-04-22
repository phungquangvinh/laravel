@extends('layouts.master')
@section('title')
    Homepage
@stop
@section('content')
<div id="content">
    <div class="slideshow col-01">
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
                    <img src="images/02_Homepage_01_17.png">
                    <div class="carousel-caption">
                        <h1>GARDEN SPRING</h1>
                        <input type="submit" name="buy_01" value="BUY NOW">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/02_Homepage_01_17.png">
                    <div class="carousel-caption">
                        <h1>GARDEN SPRING</h1>
                        <input type="submit" name="buy_01" value="BUY NOW">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/02_Homepage_01_17.png">
                    <div class="carousel-caption">
                        <h1>GARDEN SPRING</h1>
                        <input type="submit" name="buy_01" value="BUY NOW">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/02_Homepage_01_17.png">
                    <div class="carousel-caption">
                        <h1>GARDEN SPRING</h1>
                        <input type="submit" name="buy_01" value="BUY NOW">
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
    <div class="promotion">
        <div class="text_01">
            <div class="exceptional">
                <b><p>EXCEPTIONAL</p></b>
                <h1>Services We Offer</h1>
            </div>
            <div class="text_01_01">
                <p>BETTER is a simply beautiful and delightful PSD template speacially designed for gardening and home decoration online shop. You will immediately fall in love with those cheerful and easily customizable layouts of BETTER. A perfect choice for your little adorable shop. Go for it!   
                We provide exceptional Garden services to a wide range of commercial and residential properties for over 10 years...</p>
            </div>
        </div>
        <div class="image image_01">
            <div class="container">
                <div class="row1">
                    <div class="column active">
                        <p class="demo cursor" onclick="currentSlide(1)">Gift from Flower</p>
                    </div>
                    <div class="column">
                        <p class="demo cursor" onclick="currentSlide(2)">Planting of Garden</p>
                    </div>
                    <div class="column">
                        <p class="demo cursor" onclick="currentSlide(3)">Indoor Decorations</p>
                    </div>
                </div>

                <div class="mySlide fade">
                    <img src="images/the-hayden-full-1460745825-bloomthat_thehayden@2x.png" style="max-width:300px;height: 400px">
                </div>

                <div class="mySlide fade">
                    <img src="images/Fotolia_92360029_Subscription_Monthly_XXL.jpg" style="max-width: 400px;height: 400px">
                </div>

                <div class="mySlide fade">
                    <img src="images/02_Homepage_01_55.jpg" style="width: 350px;height: 400px">
                </div>                   
            </div>
        </div>
    </div>
    <div class="block_static">
        <div class="text_02">
            <b><h2>FLOWER CARE WORKERS!</h2></b>
            <p>We have workers skilled flower care, with many years of experience in the profession, the meticulously cared create the best products for customers</p>
            <div class="bs_submit">
                <input type="submit" name="contact" value="CONTACT NOW" style="background-color: #000; color: #fff">
            </div>
        </div>
        <div class="image image_02">
            <img src="images/Fotolia_92360029_Subscription_Monthly_XXL.jpg">
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
                <img src="images/02_Homepage_01_30.jpg">
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></i></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-item">
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="product-thumb-link" href="#">
                                        <img class="first-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                        <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                        <img class="second-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                    </a>
                                    <div class="product-info-cart">
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"></a>
                                            <a href="#" class="compare-link"></a>
                                            <a href="#" class="quickview-link"></a>
                                        </div>
                                        <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video">
        <!-- Button to Open the Modal -->
        <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <img src="images/02_Homepage_01_43.png">
            <h2 style="color: #fff">LASTEST VIDEO CLIP</h2>
        </a>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <iframe width="729" height="410" src="https://www.youtube.com/embed/MjUqa_4ebNc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="feature_items">
        <div class="arrows">
            <img src="images/02_Homepage_01_46.png">
            <ul>
                <li><a href="#">HOME DECOR</a></li>
                <li><a href="#">WORKSPACE</a></li>
                <li><a href="#">OUT DOOR</a></li>
                <li><a href="#">FOR GIFT</a></li>
            </ul>
        </div>  
        <div class="promotions">
            <div class="img_pro">
                <img src="images/02_Homepage_01_49.jpg">
            </div>                  
            <div class="abc">
                <div class="item">
                    <div class="owl-item">
                        <div class="item-product">
                            <div class="product-thumb">
                                <a class="product-thumb-link" href="#">
                                    <img class="first-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                    <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                    <img class="second-thumb" alt="" src="images/02_Homepage_01_51.jpg">
                                </a>
                                <div class="product-info-cart">
                                    <div class="product-extra-link">
                                        <a href="#" class="wishlist-link"></a>
                                        <a href="#" class="compare-link"></a>
                                        <a href="#" class="quickview-link"></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-item">
                        <div class="item-product">
                            <div class="product-thumb">
                                <a class="product-thumb-link" href="#">
                                    <img class="first-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                    <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                    <img class="second-thumb" alt="" src="images/02_Homepage_01_52.jpg">
                                </a>
                                <div class="product-info-cart">
                                    <div class="product-extra-link">
                                        <a href="#" class="wishlist-link"></a>
                                        <a href="#" class="compare-link"></a>
                                        <a href="#" class="quickview-link"></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-item">
                        <div class="item-product">
                            <div class="product-thumb">
                                <a class="product-thumb-link" href="#">
                                    <img class="first-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                    <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                    <img class="second-thumb" alt="" src="images/02_Homepage_01_55.jpg">
                                </a>
                                <div class="product-info-cart">
                                    <div class="product-extra-link">
                                        <a href="#" class="wishlist-link"></a>
                                        <a href="#" class="compare-link"></a>
                                        <a href="#" class="quickview-link"></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-item">
                        <div class="item-product">
                            <div class="product-thumb">
                                <a class="product-thumb-link" href="#">
                                    <img class="first-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                    <p style="color: #000;">Small tree house <span><b>$67.05</b></span></p>
                                    <img class="second-thumb" alt="" src="images/02_Homepage_01_57.jpg">
                                </a>
                                <div class="product-info-cart">
                                    <div class="product-extra-link">
                                        <a href="#" class="wishlist-link"></a>
                                        <a href="#" class="compare-link"></a>
                                        <a href="#" class="quickview-link"></a>
                                    </div>
                                    <a href="#" class="addcart-link"><i class="fa fa-shopping-basket"></i> ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
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
                    <div class="news">
                        <div class="image_03">
                            <img src="images/team4-m-min.png">      
                        </div>
                        <div class="text_03">
                            <h3><b>PLANTING & REMOVAL</b></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc lacinia.</p>
                        </div>
                    </div>
                    <div class="news">
                        <div class="image_03">
                            <img src="images/photo-1455819413567-ef04b7e1fe3d.png">
                        </div>
                        <div class="text_03">
                            <h3><b>BETTER DESIGN</b></h3>
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
                    <div class="news">
                        <div class="image_03">
                            <img src="images/team_06-848x480.png">
                        </div>
                        <div class="text_03">
                            <h3><b>GARDEN CARE</b></h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc lacinia.</p>
                        </div>
                    </div>
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