@extends('Store.app')
@section('content')
 <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.html">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                            <li><a href="index-5.html">Home 5</a></li>
                                            <li><a href="index-6.html">Home 6</a></li>
                                            <li><a href="index-7.html">Home 7</a></li>
                                            <li><a href="index-8.html">Home 8</a></li>
                                            <li><a href="index-9.html">Home 9</a></li>
                                            <li><a href="index-10.html">Home 10</a></li>
                                            <li><a href="index-11.html">Home 11</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="portfolio-gutter-box-3.html">portfolio</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Boxed Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-box-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-gutter-box-3.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-gutter-box-2.html">Gutter 2 Column</a></li>
                                                    <li><a href="portfolio-nospace-box-4.html">no Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-box-3.html"> no Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-nospace-box-2.html">no Gutter 2 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Wide Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-full-wide-6.html">Gutter 6 Column</a></li>
                                                    <li><a href="portfolio-gutter-full-wide-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-full-wide-6.html">no Gutter 6 Column</a></li>
                                                    <li><a href="portfolio-nospace-full-wide-4.html"> no Gutter 4 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Card Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-card-box-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-card-box-3.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-card-box-2.html">Gutter 2 Column</a></li>
                                                    <li><a href="portfolio-card-full-wide-6.html"> full Width 6 Column</a></li>
                                                    <li><a href="portfolio-card-full-wide-4.html"> full Width 4 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Masonry Box <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-masonry-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-masonry-3.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-masonry-2.html">Gutter 2 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-4.html">no Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-3.html"> no Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-2.html">no Gutter 2 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Masonry Wide <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-masonry-fullwide-4.html">Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-gutter-masonry-fullwide-6.html">Gutter 6 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-fullwide-4.html">no Gutter 4 Column</a></li>
                                                    <li><a href="portfolio-nospace-masonry-fullwide-6.html"> no Gutter 6 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">carousel style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-gutter-box-3-carousel.html">Gutter 3 Column</a></li>
                                                    <li><a href="portfolio-gutter-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                    <li><a href="portfolio-card-box-3-carousel.html">card 3 Column</a></li>
                                                    <li><a href="portfolio-card-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">justified style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="portfolio-justified-box-3.html">box 3 Column</a></li>
                                                    <li><a href="portfolio-justified-full-wide-3.html">full wide 3 Column</a></li>
                                                    <li><a href="portfolio-justified-box-nospace-3.html">box no space 3 Column</a></li>
                                                    <li><a href="portfolio-justified-nospace-fullwide-3.html">full wide no space 3 Col</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Portfolio Details <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="single-portfolio.html">style 1</a></li>
                                                    <li><a href="single-portfolio-left-details.html">style 2</a></li>
                                                    <li><a href="single-portfolio-gallery.html">gallery style</a></li>
                                                    <li><a href="single-portfolio-slider.html">slider style</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="blog.html">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">blog 3 column</a></li>
                                            <li><a href="blog-2-col.html">blog 2 column</a></li>
                                            <li><a href="blog-2-col-leftsidebar.html">2 col left siderbar</a></li>
                                            <li><a href="blog-4-col-fullwide.html">4 column full wide</a></li>
                                            <li><a href="blog-3-col-fullwide-sidebar.html">3 col full wide sidebar</a></li>
                                            <li><a href="blog-details.html"> details right sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html"> details left sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="shop.html">Shop</a>
                                        <ul class="dropdown mega_dropdown">
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.html">shop layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="shop.html">default shop</a></li>
                                                    <li><a href="shop-2-col.html">2 column box</a></li>
                                                    <li><a href="shop-3-col.html">3 column box</a></li>
                                                    <li><a href="shop-4-col-full-wide.html">4 column full wide</a></li>
                                                    <li><a href="shop-6-col-full-wide.html">6 column full wide</a></li>
                                                    <li><a href="shop-on-sale.html">shop on sale</a></li>
                                                    <li><a href="shop-sidebar.html">shop left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.html">product details layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="product-details.html">tab style 1</a></li>
                                                    <li><a href="product-details-2.html">tab style 2</a></li>
                                                    <li><a href="product-details-gallery-left.html">gallery left</a></li>
                                                    <li><a href="product-details-gallery-right.html">gallery right</a></li>
                                                    <li><a href="product-details-sticky-left.html">sticky left</a></li>
                                                    <li><a href="product-details-sticky-right.html">sticky right</a></li>
                                                    <li><a href="product-details-slider-box.html">slider box</a></li>
                                                    <li><a href="product-details-slider-full-wide.html">slider full wide</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li>
                                                <ul class="mega__item">
                                                    <li>
                                                        <div class="mega-item-img">
                                                            <a href="shop.html">
                                                                <img src="images/feature-img/3.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="#">pages</a>
                                        <ul class="dropdown">
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="customer-review.html">customer review</a></li>
                                                    <li><a href="customer-review-2.html">customer review 2</a></li>
                                                    <li><a href="customer-review-3.html">customer review 3</a></li>
                                                    <li><a href="customer-review-4.html">customer review 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="login-register.html">login & register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li><a href="index-7.html">Home 7</a></li>
                                                <li><a href="index-8.html">Home 8</a></li>
                                                <li><a href="index-9.html">Home 9</a></li>
                                                <li><a href="index-10.html">Home 10</a></li>
                                                <li><a href="index-11.html">Home 11</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">portfolio</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Boxed Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-box-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-gutter-box-3.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-gutter-box-2.html">Gutter 2 Column</a></li>
                                                        <li><a href="portfolio-nospace-box-4.html">no Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-box-3.html"> no Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-nospace-box-2.html">no Gutter 2 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Wide Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-full-wide-6.html">Gutter 6 Column</a></li>
                                                        <li><a href="portfolio-gutter-full-wide-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-full-wide-6.html">no Gutter 6 Column</a></li>
                                                        <li><a href="portfolio-nospace-full-wide-4.html"> no Gutter 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Card Style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-card-box-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-card-box-3.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-card-box-2.html">Gutter 2 Column</a></li>
                                                        <li><a href="portfolio-card-full-wide-6.html"> full Width 6 Column</a></li>
                                                        <li><a href="portfolio-card-full-wide-4.html"> full Width 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Masonry Box <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-masonry-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-masonry-3.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-masonry-2.html">Gutter 2 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-4.html">no Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-3.html"> no Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-2.html">no Gutter 2 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Masonry Wide <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-masonry-fullwide-4.html">Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-gutter-masonry-fullwide-6.html">Gutter 6 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-fullwide-4.html">no Gutter 4 Column</a></li>
                                                        <li><a href="portfolio-nospace-masonry-fullwide-6.html"> no Gutter 6 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">carousel style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-gutter-box-3-carousel.html">Gutter 3 Column</a></li>
                                                        <li><a href="portfolio-gutter-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                        <li><a href="portfolio-card-box-3-carousel.html">card 3 Column</a></li>
                                                        <li><a href="portfolio-card-box-3-carousel-fullwide.html">full wide 3 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">justified style <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="portfolio-justified-box-3.html">box 3 Column</a></li>
                                                        <li><a href="portfolio-justified-full-wide-3.html">full wide 3 Column</a></li>
                                                        <li><a href="portfolio-justified-box-nospace-3.html">box no space 3 Column</a></li>
                                                        <li><a href="portfolio-justified-nospace-fullwide-3.html">full wide no space 3 Col</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Portfolio Details <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="single-portfolio.html">style 1</a></li>
                                                        <li><a href="single-portfolio-left-details.html">style 2</a></li>
                                                        <li><a href="single-portfolio-gallery.html">gallery style</a></li>
                                                        <li><a href="single-portfolio-slider.html">slider style</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog 3 column</a></li>
                                                <li><a href="blog-2-col.html">blog 2 column</a></li>
                                                <li><a href="blog-2-col-leftsidebar.html">2 col left siderbar</a></li>
                                                <li><a href="blog-4-col-fullwide.html">4 column full wide</a></li>
                                                <li><a href="blog-3-col-fullwide-sidebar.html">3 col full wide sidebar</a></li>
                                                <li><a href="blog-details.html"> details right sidebar</a></li>
                                                <li><a href="blog-details-left-sidebar.html"> details left sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-down"></i></span></a>
                                                    <ul class="lavel-dropdown">
                                                        <li><a href="customer-review.html">customer review</a></li>
                                                        <li><a href="customer-review-2.html">customer review 2</a></li>
                                                        <li><a href="customer-review-3.html">customer review 3</a></li>
                                                        <li><a href="customer-review-4.html">customer review 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-sidebar.html">shop sidebar</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="login-register.html">login & register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>                          
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3">  
                            <ul class="menu-extra">
                                <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                                <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <ul class="sidebar__thumd">
                        <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                    </ul>
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            
                            <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                            <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('Store/images/bg/2.jpg') }}) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Cart</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="images/product/4.png" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                            <td class="product-price"><span class="amount">£165.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1" /></td>
                                            <td class="product-subtotal">£165.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="images/product/3.png" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                                            <td class="product-price"><span class="amount">£50.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1" /></td>
                                            <td class="product-subtotal">£50.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <div class="buttons-cart">
                                        <input type="submit" value="Update Cart" />
                                        <a href="#">Continue Shopping</a>
                                    </div>
                                    <div class="coupon">
                                        <h3>Coupon</h3>
                                        <p>Enter your coupon code if you have one.</p>
                                        <input type="text" placeholder="Coupon code" />
                                        <input type="submit" value="Apply Coupon" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="cart_totals">
                                        <h2>Cart Totals</h2>
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">£215.00</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td>
                                                        <ul id="shipping_method">
                                                            <li>
                                                                <input type="radio" /> 
                                                                <label>
                                                                    Flat Rate: <span class="amount">£7.00</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <input type="radio" /> 
                                                                <label>
                                                                    Free Shipping
                                                                </label>
                                                            </li>
                                                            <li></li>
                                                        </ul>
                                                        <p><a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong><span class="amount">£215.00</span></strong>
                                                    </td>
                                                </tr>                                           
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="checkout.html">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        <!-- Start Footer Area -->
        <footer class="htc__foooter__area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                         <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="ft__widget">
                                <div class="ft__logo">
                                    <a href="index.html">
                                        <img src="images/logo/logo.png" alt="footer logo">
                                    </a>
                                </div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-pin"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>194 Main Rd T, FS Rayed <br> VIC 3057, USA</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="address-text">
                                                <a href="#"> info@example.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-phone-in-talk"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>+012 345 678 102 </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="social__icon">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Categories</h2>
                                <ul class="footer-categories">
                                    <li><a href="shop-sidebar.html">Men</a></li>
                                    <li><a href="shop-sidebar.html">Women</a></li>
                                    <li><a href="shop-sidebar.html">Accessories</a></li>
                                    <li><a href="shop-sidebar.html">Shoes</a></li>
                                    <li><a href="shop-sidebar.html">Dress</a></li>
                                    <li><a href="shop-sidebar.html">Denim</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Infomation</h2>
                                <ul class="footer-categories">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Returns & Exchanges</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Newsletter</h2>
                                <div class="newsletter__form">
                                    <p>Subscribe to our newsletter and get 10% off your first purchase .</p>
                                    <div class="input__box">
                                        <div id="mc_embed_signup">
                                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                    <div class="news__input">
                                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                    </div>
                                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                    <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                    </div>
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>© 2017 <a href="#">your website name</a>
                                    All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
@endsection