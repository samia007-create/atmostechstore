@extends('Store.app')
@section('content')
 <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

 
    
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{ asset('Store/images/bg/2.jpg') }}) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Contact US</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Contact US</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="htc__contact__container">
                            <div class="htc__contact__address">
                                <h2 class="contact__title">contact info</h2>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-location-pin"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p>Location : <br> 77, seventh avenue, Brat road USA.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-mobile"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Phone : <br><a href="#">+012 345 678 102 </a></p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-email"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Mail :<br><a href="#">info@example.com</a></p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                            </div>
                            <div class="contact-form-wrap">
                            <div class="contact-title">
                                <h2 class="contact__title">Get In Touch</h2>
                            </div>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="name" placeholder="Your Nme*">
                                        <input type="email" name="email" placeholder="Mail*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="subject" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message"  placeholder="Massage*"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn">SEND</button>
                                </div>
                            </form>
                        </div> 
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div class="map-contacts">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
</div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                 styles: [
  

    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#888888"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text",
        "stylers": [
            {
                "color": "#6e6e6e"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#6f6b6b"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text",
        "stylers": [
            {
                "color": "#c5c5c5"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#cfcfcf"
            }
        ]
    },
    {
        "featureType": "landscape.natural.landcover",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "landscape.natural.landcover",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "color": "#909090"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e5e5e5"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e5e5e5"
            }
        ]
    },
    {
        "featureType": "poi.place_of_worship",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ff0000"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f7f7f7"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "gamma": 7.18
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "gamma": 0.48
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#bcbcbc"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    }
]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Tasfiu!',
                icon: 'images/icons/map.png',
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>


    <!-- Waypoints.min.js. -->
    <script src="{{ asset('Store/js/waypoints.min.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('Store/js/main.js') }}"></script>

@endsection