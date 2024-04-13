
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cart page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>


        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


    <!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->


<!-- header-area -->
<header class="header-style-three">
    <div class="header-top-wrap">
        <div class="container custom-container-two">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-6">
                    <div class="header-top-link">
                        <ul>
                            <li><a href="{{ route('about.page') }}">About US</a></li>
                            <li><a href="#"> id:{{ $client != null ? $client->id : '0' }}</a></li>
                            <li><a
                                    href="tel:123456789">email:{{ $client != null ? $client->email : 'not loginedd' }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-top-right">
                        <div class="lang">
                            <select name="select">
                                <option value="">English</option>
                                <option value="">Spanish</option>
                                <option value="">Turkish</option>
                                <option value="">Russian</option>
                                <option value="">Chinese</option>
                            </select>
                        </div>
                        <div class="currency">
                            <form action="#">
                                <select name="select">
                                    <option value="">USD</option>
                                    <option value="">AUE</option>
                                    <option value="">SAR</option>
                                    <option value="">INR</option>
                                    <option value="">BDT</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-header menu-area">
        <div class="container custom-container-two">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                        width="120px" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="menu-item-has-children has--mega--menu"><a href="/">Home</a>
                                    </li>
                                    <li class="has--mega--menu"><a href="/shop">Shop</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-wrap">
                                                <ul class="mega-menu-col">
                                                    <li class=" mega-title"><a href="/shopsidebar">SHOP
                                                            SIDEBAR</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="/blog">blog</a>
                                    </li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search"><a href="#" data-toggle="modal"
                                            data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                    @if (!isset($client))
                                        <li class="sign-in"><a href="{{ route('client.login') }}">Sign In</a></li>
                                    @else
                                        <li class="sign-in"><a href="{{ route('client.logout') }}"><i
                                                    style="color: red" class="fas fa-sign-out-alt"></i></a></li>
                                    @endif
                                    <li class="header-wishlist"><a href="{{route('wish.page')}}"><i class="flaticon-heart-shape-outline"></i></a></li>

                                    <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><i
                                                class="flaticon-menu-button-of-three-horizontal-lines"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Search -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <input type="text" placeholder="Search here...">
                    <button><i class="flaticon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Search-end -->

    <!-- off-canvas-start -->
    <div class="sidebar-off-canvas info-group">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-widget scroll">
            <div class="sidebar-widget-container">
                <div class="off-canvas-heading">
                    <a href="#" class="close-side-widget">
                        <span class="flaticon-targeting-cross"></span>
                    </a>
              </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">

                            <div class="logo mb-30">
                                <a href="{{ route('main.page') }}"><img
                                        src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="content-box">
                                <p>WooCommerce and WordPress are both free, open source software reasons many ...
                                </p>
                            </div>
                            <div class="contact-info">
                                <h4 class="title">CONTACT US</h4>
                                <ul>
                                    <li><span class="flaticon-phone-call"></span><a
                                            href="+998972320018">{{ $settings->phone }}</a></li>
                                    <li><span class="flaticon-email"></span><a
                                            href="muqimovdeveloper@gmail.com">{{ $settings->email }}</a></li>
                                    <li><span class="flaticon-place"></span>{{ $settings->address }}</li>
                                </ul>
                            </div>
                            @if ($client)
                                <div class="oc-newsletter">
                                    <h4 class="title">NEWSLETTER</h4>
                                    <p>Fill your email below to subscribe to my newsletter</p>
                                    <form action="{{ route('regster.news') }}" method="POST">
                                        @csrf


                                        <button class="btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            @elseif(!$client)
                                <div class="oc-newsletter">
                                    <h4 class="title">NEWSLETTER</h4>
                                    <p>Fill your email below to subscribe to my newsletter</p>
                                    <form action="{{ route('regster.news') }}" method="POST">
                                        @csrf

                                        <input type="email" name="email" placeholder="Email..." required>

                                        <button class="btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            @endif


                            <div class="oc-social">
                                <ul>
                                    <li><a href="https://t.me/backend_frontend_uz"><i
                                                class="fab fa-telegram"></i></a></li>
                                    <li><a
                                            href="https://www.instagram.com/muqimov_dev?utm_source=qr&igsh=MWl5bzMzdjFyMzF4eg=="><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            {{-- <div class="oc-bottom">
                                        <div class="currency">
                                            <form action="#">
                                                <label>Currency</label>
                                                <select name="select">
                                                    <option value="">USD</option>
                                                    <option value="">AUE</option>
                                                    <option value="">SAR</option>
                                                    <option value="">INR</option>
                                                    <option value="">BDT</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="language">
                                            <form action="#">
                                                <label>Language</label>
                                                <select name="select">
                                                    <option value="">English</option>
                                                    <option value="">Spanish</option>
                                                    <option value="">Turkish</option>
                                                    <option value="">Russian</option>
                                                    <option value="">Chinese</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div> --}}


                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- off-canvas-end -->

</header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>


<!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('frontend/assets/img/bg/breadcrumb_bg01.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Cart Page</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.htm{{ route('main.page') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- cart-area -->
            <div class="cart-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-wrapper">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">QUANTITY</th>
                                                <th class="product-price">Color</th>
                                                <th class="product-price">Size</th>
                                                <th class="product-subtotal">SUBTOTAL</th>
                                                <th class="product-delete"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $cart)
                                            <tr>
                                                <td class="product-thumbnail"><a href="{{ route('main.show' , $cart->product_id) }}"><img src="{{ asset($cart->image) }}" alt=""></a></td>
                                                <td class="product-name">
                                                    <h4><a href="{{ route('main.show' , $cart->product_id) }}">{{ $cart->name }}</a></h4>
                                                </td>
                                                <td class="product-price">
                                                    <span class="new">{{ ($cart->price - ( $cart->price * ($cart->discount / 100  )))  }}</span>
                                                    <span><del>{{ $cart->price  }}</del></span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <form action="#" class="num-block">
                                                            <input type="text" class="in-num" value="{{ $cart->count }}" readonly="">

                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-color"><div class="mt-5" style="background-color: {{ $cart->color->color }} ; height: 30px; width:30px; ">


                                                </div></td>
                                                <td class="product-size"><div>{{ $cart->size->name }}</div></td>
                                                <td class="product-subtotal"><span>{{ ($cart->price - ( $cart->price * ($cart->discount / 100  ))) *  $cart->count }}</span></td>
                                                <td class="product-delete"><a href="{{ route( 'delete.cart' , $cart->id )}}"><i class="flaticon-trash"></i></a></td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="shop-cart-bottom mt-20">
                                    <div class="cart-coupon">
                                        <form action="{{'cupon'}}">
                                            <input type="text"name="cupon" placeholder="Enter Coupon Code...">
                                            <button class="btn">Apply Coupon</button>
                                        </form>
                                    </div>
                                    <div class="continue-shopping">
                                        <a href="shop.html" class="btn">update shopping</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-total pt-95">
                                <h3 class="title">CART TOTALS</h3>
                                <div class="shop-cart-widget">
                                    <form action="#">
                                        <ul>

                                            <li class="cart-total-amount"><span>TOTAL</span> <span class="amount">
                                                @php
                                                    $totalDiscount = 0;
                                                @endphp
                                               @foreach($carts as $cart)
                                              @php
                                               $discountAmount = ($cart->price - ( $cart->price * ($cart->discount / 100))) * $cart->count ;
                                              $totalDiscount += $discountAmount;
                                              @endphp
                                               @endforeach
                                  @php
                                  echo $totalDiscount;
                                  @endphp
                                  </span></li>
                                        </ul>
                                        <a href="{{ count($carts) == 0  ? '#' : route('checkout') }}" class="btn">PROCEED TO CHECKOUT</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-area-end -->

        </main>
        <!-- main-area-end -->


<!-- footer-area -->
<footer class="gray-bg footer-style-two footer-style-three pt-75">
    <div class="container">
        <div class="footer-top-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="footer-logo">
                        <a href="{{ route('main.page') }}"><img
                                src="{{ asset('frontend/assets/img/logo/logo.png') }}" width="150px"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle-wrap pt-45 pb-20">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <h4 class="fw-title">COMPANY</h4>
                        <div class="fw-link">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About us</a></li>
                                <li><a href="/shop">Shop</a></li>
                                <li><a href="/contact">Contact us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <h4 class="fw-title">STORE</h4>
                        <div class="fw-link">
                            <ul>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <h4 class="fw-title">Category</h4>
                        <div class="fw-link">
                            <ul>
                                {{-- <li><a href="#">{{$categorys->name}}</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <h4 class="fw-title">FOLLOW US</h4>
                        <div class="footer-text">
                            <p>Get Free Shipping on all your orders!</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="https://t.me/backend_frontend_uz" target="_blank"><i
                                                class="fab fa-telegram"></i></a></li>
                                    <li><a href=""><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; 2024 <a href="{{ route('main.page') }}">{{ $settings->site_title }}</a>. Phone
                            | +998{{ $settings->phone }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pay-method-img">
                        <img src="img/images/payment_method_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
        <!-- footer-area-end -->





    <!-- JS here -->
        <script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nav-tool.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
