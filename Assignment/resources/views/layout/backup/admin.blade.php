{{-- <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo23.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 03:04:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icons/favicon.png') }}">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:200,300,400,500,600,700,800',
                    'Oswald:300,400,500,600,700,800', 'Nanum+Brush+Script:400,700,800'
                ]
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{ asset('js/webfont.js') }}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/demo23.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice font2">
            <div class="container-fluid text-center text-dark">
                <i class="icon-shipping align-middle"></i><b class="text-uppercase">Free Shipping</b>&nbsp;on orders of
                $80 or more!
                Code:&nbsp;<b class="text-uppercase">PortoMagic</b>&nbsp;| Restrictions Apply.&nbsp;<a
                    href="demo23-shop.html" class="text-dark">See All Offers</a>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>

        <header class="header">
            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container-fluid">
                    <div class="header-left d-none d-lg-flex">
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-dropdown">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div>
                    </div>

                    <div class="header-center ml-0 ml-lg-auto">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="demo23.html" class="logo">
                            <img src="{{ asset('images/demoes/demo23/logo.png') }}" alt="Porto Logo" width="113"
                                height="48">
                        </a>
                    </div>

                    <div class="header-right">
                        <a href="login.html" class="header-icon d-lg-block d-none">
                            <div class="header-user">
                                <i class="icon-user-2"></i>
                                <div class="header-userinfo">
                                    <span class="d-inline-block font2 line-height-1">Hello!</span>
                                    <h4 class="mb-0">My Account</h4>
                                </div>
                            </div>
                        </a>

                        <a href="wishlist.html" class="header-icon">
                            <i class="icon-wishlist-2"></i>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo23-product.html">Ultimate 3D Bluetooth Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo23-product.html" class="product-image">
                                                    <img src="{{ asset('images/products/product-1.jpg') }}"
                                                        alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove"
                                                    title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo23-product.html">Brown Women Casual HandBag</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo23-product.html" class="product-image">
                                                    <img src="{{ asset('images/products/product-2.jpg') }}"
                                                        alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove"
                                                    title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo23-product.html">Circled Ultimate 3D Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo23-product.html" class="product-image">
                                                    <img src="{{ asset('images/products/product-3.jpg') }}"
                                                        alt="product" width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove"
                                                    title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->

                        <div
                            class="header-search header-search-popup header-search-category text-right d-flex d-lg-none">
                            <a href="#" class="search-toggle" role="button"><i
                                    class="icon-magnifier"></i><span>Search</span></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="I'm searching for..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                </div>
            </div>

            <div class="header-bottom sticky-header" data-sticky-options="{'mobile': false}">
                <div class="container-fluid">
                    <div class="header-left d-flex">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li><a href="#">Outlet</a></li>
                                <li><a href="#">Buy Porto</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-center w-auto">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="demo23.html">Home</a>
                                </li>
                                <li>
                                    <a href="demo23-shop.html">Categories</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 1</a>
                                                <ul class="submenu">
                                                    <li><a href="category.html">Fullwidth Banner</a></li>
                                                    <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                            Banner</a>
                                                    </li>
                                                    <li><a href="category-banner-boxed-image.html">Boxed Image
                                                            Banner</a>
                                                    </li>
                                                    <li><a href="category.html">Left Sidebar</a></li>
                                                    <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                    <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                                    <li><a href="category-horizontal-filter1.html">Horizontal
                                                            Filter1</a>
                                                    </li>
                                                    <li><a href="category-horizontal-filter2.html">Horizontal
                                                            Filter2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 2</a>
                                                <ul class="submenu">
                                                    <li><a href="category-list.html">List Types</a></li>
                                                    <li><a href="category-infinite-scroll.html">Ajax Infinite
                                                            Scroll</a>
                                                    </li>
                                                    <li><a href="category.html">3 Columns Products</a></li>
                                                    <li><a href="category-4col.html">4 Columns Products</a></li>
                                                    <li><a href="category-5col.html">5 Columns Products</a></li>
                                                    <li><a href="category-6col.html">6 Columns Products</a></li>
                                                    <li><a href="category-7col.html">7 Columns Products</a></li>
                                                    <li><a href="category-8col.html">8 Columns Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner">
                                                    <figure>
                                                        <img src="{{ asset('images/menu-banner.jpg') }}"
                                                            alt="Menu banner" width="300" height="300">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">50%</b>
                                                            <i>OFF</i>
                                                        </h4>
                                                        <a href="category.html" class="btn btn-sm btn-dark">SHOP
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="demo23-product.html">Products</a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                                <ul class="submenu">
                                                    <li><a href="demo23-product.html">SIMPLE PRODUCT</a></li>
                                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                                    <li><a href="demo23-product.html">SALE PRODUCT</a></li>
                                                    <li><a href="demo23-product.html">FEATURED & ON SALE</a></li>
                                                    <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a>
                                                    </li>
                                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                                </ul>
                                            </div><!-- End .col-lg-4 -->

                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                                <ul class="submenu">
                                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a>
                                                    </li>
                                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                                </ul>
                                            </div><!-- End .col-lg-4 -->

                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner menu-banner-2">
                                                    <figure>
                                                        <img src="{{ asset('images/menu-banner-1.jpg') }}"
                                                            alt="Menu banner" class="product-promo" width="380"
                                                            height="790">
                                                    </figure>
                                                    <i>OFF</i>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">50%</b>
                                                        </h4>
                                                    </div>
                                                    <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                                </div>
                                            </div><!-- End .col-lg-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="d-none d-xl-block">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single.html">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a></li>
                                <li>
                                    <a href="#">Elements</a>
                                    <ul class="custom-scrollbar">
                                        <li><a href="element-accordions.html">Accordion</a></li>
                                        <li><a href="element-alerts.html">Alerts</a></li>
                                        <li><a href="element-animations.html">Animations</a></li>
                                        <li><a href="element-banners.html">Banners</a></li>
                                        <li><a href="element-buttons.html">Buttons</a></li>
                                        <li><a href="element-call-to-action.html">Call to Action</a></li>
                                        <li><a href="element-countdown.html">Count Down</a></li>
                                        <li><a href="element-counters.html">Counters</a></li>
                                        <li><a href="element-headings.html">Headings</a></li>
                                        <li><a href="element-icons.html">Icons</a></li>
                                        <li><a href="element-info-box.html">Info box</a></li>
                                        <li><a href="element-posts.html">Posts</a></li>
                                        <li><a href="element-products.html">Products</a></li>
                                        <li><a href="element-product-categories.html">Product Categories</a></li>
                                        <li><a href="element-tabs.html">Tabs</a></li>
                                        <li><a href="element-testimonial.html">Testimonials</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right d-flex pr-0">
                        <div class="header-search header-search-popup header-search-category text-right">
                            <a href="#" class="search-toggle" role="button"><i
                                    class="icon-magnifier mr-2"></i><span>Search</span></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q1"
                                        placeholder="I'm searching for..." required>
                                    <div class="select-custom">
                                        <select id="cat1" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                </div>
            </div>
        </header><!-- End .header -->

        <main class="main">
            <section class="intro-section mb-3">
                <div class="home-slider slide-animate owl-carousel owl-theme"
                    data-owl-options="{
                        'nav': false,
                        'responsive': {
                            '1440': {
                                'nav': true
                            }
                        }
                    }">
                    <div class="home-slide home-slide-1 banner">
                        <img class="slide-bg" src="{{ asset('images/demoes/demo23/slider/slide-1.jpg') }}"
                            alt="slider image" width="1200" height="575">

                        <div class="banner-layer banner-layer-middle banner-layer-left">
                            <div class="container-fluid">
                                <div class="appear-animate" data-animation-name="fadeInLeftShorter"
                                    data-animation-delay="200">
                                    <h2 class="font-weight-light ls-10 text-primary">Discover our Arrivals!</h2>
                                    <a href="demo23-shop.html" class="btn btn-link"><i>View
                                            our
                                            Dresses</i><i class="icon-right-open-big"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-slide home-slide-2 banner">
                        <img class="slide-bg" src="{{ asset('images/demoes/demo23/slider/slide-2.jpg') }}"
                            alt="slider image" width="1200" height="575">

                        <div class="banner-layer banner-layer-middle banner-layer-right w-100">
                            <div class="container-fluid">
                                <div class="col-6 offset-6 appear-animate" data-animation-name="fadeInRightShorter"
                                    data-animation-delay="200">
                                    <h2 class="font-weight-light ls-10 text-primary">Trendy Collections!</h2>
                                    <a href="demo23-shop.html" class="btn btn-link"><i>View
                                            our
                                            Specials</i><i class="icon-right-open-big"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="welcome-section">
                <div class="container">
                    <h2 class="section-title text-center text-uppercase appear-animate"
                        data-animation-name="fadeInUpShorter" data-animation-delay="200">Welcome to little
                        Porto&rsquo;s
                        world</h2>
                    <p class="section-description text-center mb-3 appear-animate"
                        data-animation-name="fadeInUpShorter" data-animation-delay="400">Enjoy the exceptional quality
                        in all our products
                    </p>

                    <div class="row mb-2">
                        <div class="col-md-8 col-lg-6">
                            <div class="banner banner1 mb-2 appear-animate" data-animation-name="fadeIn"
                                data-animation-delay="200" style="background-color: #d8d8d8;">
                                <figure>
                                    <img src="{{ asset('images/demoes/demo23/banners/banner-1.jpg') }}"
                                        alt="banner" width="580" height="374">
                                </figure>

                                <div class="banner-layer d-flex flex-column align-items-end justify-content-center">
                                    <div class="text-justify">
                                        <h3 class="font4 font-weight-bold ls-n-25 text-uppercase mb-0">Discounts</h3>
                                        <h4 class="ls-n-25 text-uppercase">Up to 70%</h4>
                                        <a href="demo23-shop.html" class="btn btn-link"><i>View our Deals</i><i
                                                class="icon-right-open-big"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="banner banner2 mb-2 appear-animate" data-animation-name="fadeIn"
                                data-animation-delay="200" style="background-color: #f0f5f8;">
                                <figure>
                                    <img src="{{ asset('images/demoes/demo23/banners/banner-2.jpg') }}"
                                        alt="banner" width="280" height="374">
                                </figure>

                                <div class="banner-layer d-flex flex-column align-items-center justify-content-end">
                                    <h2 class="ls-n-25 text-uppercase">Summer classics</h2>
                                    <a href="demo23-shop.html" class="btn btn-link"><i>View our Classics</i><i
                                            class="icon-right-open-big"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="banner banner3 mb-2 appear-animate" data-animation-name="fadeIn"
                                data-animation-delay="200" style="background-color: #ededed;">
                                <figure>
                                    <img src="{{ asset('images/demoes/demo23/banners/banner-3.jpg') }}"
                                        alt="banner" width="280" height="374">
                                </figure>

                                <div
                                    class="banner-layer d-flex flex-column align-items-center justify-content-between">
                                    <h2 class="font-weight-bold ls-n-25 text-center text-uppercase">Mother &amp;
                                        Daughter</h2>
                                    <a href="demo23-shop.html" class="btn btn-link"><i>View our Outfits</i><i
                                            class="icon-right-open-big"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="banner banner4 mb-2 appear-animate" data-animation-name="fadeIn"
                                data-animation-delay="200" style="background-color: #f5f6f8;">
                                <figure>
                                    <img src="{{ asset('images/demoes/demo23/banners/banner-4.jpg') }}"
                                        alt="banner" width="560" height="374">
                                </figure>

                                <div class="banner-layer d-flex flex-column align-items-center">
                                    <h2 class="ls-n-25 text-uppercase">Babies Outfits</h2>
                                    <a href="demo23-shop.html" class="btn btn-link"><i>View our Outfits</i><i
                                            class="icon-right-open-big"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="banner banner5 mb-2 appear-animate" data-animation-name="fadeIn"
                                data-animation-delay="200" style="background-color: #f5ecef;">
                                <figure>
                                    <img src="{{ asset('images/demoes/demo23/banners/banner-5.jpg') }}"
                                        alt="banner" width="280" height="374">
                                </figure>

                                <div
                                    class="banner-layer d-flex flex-column align-items-center justify-content-between">
                                    <h2 class="ls-n-25 text-uppercase">Babies dresses</h2>
                                    <a href="demo23-shop.html" class="btn btn-link"><i>View our Dresses</i><i
                                            class="icon-right-open-big"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <div class="banner banner6 mb-2 appear-animate" data-animation-name="fadeIn"
                                data-animation-delay="200" style="background-color: #e2e2e2;">
                                <figure>
                                    <img src="{{ asset('images/demoes/demo23/banners/banner-6.jpg') }}"
                                        alt="banner" width="280" height="374">
                                </figure>

                                <div
                                    class="banner-layer d-flex flex-column align-items-center justify-content-between">
                                    <h2 class="ls-n-25 text-uppercase">Shoes for Babies</h2>
                                    <a href="demo23-shop.html" class="btn btn-link"><i>View our Deals</i><i
                                            class="icon-right-open-big"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="info-boxes-container appear-animate" data-animation-name="fadeInUpShorter"
                        data-animation-delay="200">
                        <div class="row m-0">
                            <div class="info-box info-box-icon-left col-md-4">
                                <i class="icon-shipping"></i>

                                <div class="info-box-content">
                                    <h4 class="ls-n-25">FREE SHIPPING &amp; RETURN</h4>
                                    <p class="font2 font-weight-light">Free shipping on all orders over $99.</p>
                                </div><!-- End .info-box-content -->
                            </div><!-- End .info-box -->
                            <div class="info-box info-box-icon-left col-md-4">
                                <i class="icon-money"></i>

                                <div class="info-box-content">
                                    <h4 class="ls-n-25">MONEY BACK GUARANTEE</h4>
                                    <p class="font2 font-weight-light">100% money back guarantee</p>
                                </div><!-- End .info-box-content -->
                            </div><!-- End .info-box -->
                            <div class="info-box info-box-icon-left col-md-4">
                                <i class="icon-support"></i>

                                <div class="info-box-content">
                                    <h4 class="ls-n-25">ONLINE SUPPORT 24/7</h4>
                                    <p class="font2 font-weight-light">Lorem ipsum dolor sit amet.</p>
                                </div><!-- End .info-box-content -->
                            </div><!-- End .info-box -->
                        </div>
                    </div>

                    <div class="row appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400">
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-1.jpg') }}"
                                            width="217" height="217" alt="product">
                                        <img src="{{ asset('images/demoes/demo23/products/product-7.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="demo23-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">Pink Winter Girl Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-2.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="demo23-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">Porto Extended Camera</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$599.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-3.jpg') }}"
                                            width="217" height="217" alt="product">
                                        <img src="{{ asset('images/demoes/demo23/products/product-1.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="demo23-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">Blue Child Overshoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$39.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-4.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-13%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart"
                                            class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">Baby Summer Underclothes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$299.00</span>
                                        <span class="product-price">$259.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="cats-banner-section mb-3">
                <div class="row m-0 no-gutters">
                    <div class="col-lg-3">
                        <div class="cat-banner d-flex flex-column align-items-center justify-content-center h-100">
                            <h4 class="font4 line-height-1 ls-0 text-primary mb-0">Best Collections</h4>
                            <p class="font2 line-height-1 mb-0">Selected Products From Famous Brands</p>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="categories-slider owl-carousel owl-theme"
                            data-owl-options="{
                            'margin': 0,
                            'nav': false,
                            'items': 1,
                            'responsive': {
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 3
                                }
                            }
                        }">
                            <div class="product-category" style="background-color: #d8dfe1;">
                                <a href="demo23-shop.html">
                                    <figure>
                                        <img src="{{ asset('images/demoes/demo23/products/cats/cat-1.jpg') }}"
                                            alt="cat banner" width="500" height="400">
                                    </figure>

                                    <div class="category-content">
                                        <h3>Boys</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="product-category" style="background-color: #ebeae9;">
                                <a href="demo23-shop.html">
                                    <figure>
                                        <img src="{{ asset('images/demoes/demo23/products/cats/cat-2.jpg') }}"
                                            alt="cat banner" width="500" height="400">
                                    </figure>

                                    <div class="category-content">
                                        <h3>Babies</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="product-category" style="background-color: #ead7d5;">
                                <a href="demo23-shop.html">
                                    <figure>
                                        <img src="{{ asset('images/demoes/demo23/products/cats/cat-3.jpg') }}"
                                            alt="cat banner" width="500" height="400">
                                    </figure>

                                    <div class="category-content">
                                        <h3>Girls</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="products-container appear-animate" data-animation-name="fadeIn" data-animation-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-5.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart"
                                            class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">Smart Watches</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-6.jpg') }}"
                                            width="217" height="217" alt="product">
                                        <img src="{{ asset('images/demoes/demo23/products/product-9.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo23-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">White Girl Shoes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-7.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo23-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">Rag baby doll</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$55.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo23-product.html">
                                        <img src="{{ asset('images/demoes/demo23/products/product-4.jpg') }}"
                                            width="217" height="217" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-13%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" title="Add To Cart"
                                            class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo23-shop.html" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo23-product.html">Baby Summer Underclothes</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$299.00</span>
                                        <span class="product-price">$259.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="brands-section">
                <div class="container">
                    <div class="brands-slider owl-carousel owl-theme images-center appear-animate"
                        data-animation-name="fadeIn" data-animation-delay="400"
                        data-owl-options="{
                    'margin': 30,
                    'responsive': {
                        '991': {
                            'items': 4
                        },
                        '1200': {
                            'items': 5
                        }
                    }
                }">
                        <img src="{{ asset('images/demoes/demo23/brands/brand1.png') }}" width="200"
                            height="50" alt="brand">
                        <img src="{{ asset('images/demoes/demo23/brands/brand2.png') }}" width="200"
                            height="50" alt="brand">
                        <img src="{{ asset('images/demoes/demo23/brands/brand3.png') }}" width="200"
                            height="50" alt="brand">
                        <img src="{{ asset('images/demoes/demo23/brands/brand4.png') }}" width="200"
                            height="50" alt="brand">
                        <img src="{{ asset('images/demoes/demo23/brands/brand5.png') }}" width="200"
                            height="50" alt="brand">
                    </div><!-- End .brands-slider -->
                </div>
            </div>
        </main><!-- End .main -->

        <footer class="footer">
            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <a href="#">
                                <img class="logo mb-3" src="{{ asset('images/demoes/demo23/logo.png') }}"
                                    alt="Porto Logo" width="113" height="48"></a>

                            <div class="row">
                                <div class="col-sm-6 pr-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">ADDRESS:</h4>
                                        <a href="#">123 Street Name, City, England</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">PHONE:</h4>
                                        <a href="#">Toll Free (123) 456-7890</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pr-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">EMAIL:</h4>
                                        <a
                                            href="https://portotheme.com/cdn-cgi/l/email-protection#87eae6eeebc7e2ffe6eaf7ebe2a9e4e8ea"><span
                                                class="__cf_email__"
                                                data-cfemail="5a373b33361a3f223b372a363f74393537">[email&#160;protected]</span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">
                                            WORKING DAYS/HOURS:
                                        </h4>
                                        <a href="#">Mon - Sun / 9:00AM - 8:00PM</a>
                                    </div>
                                </div>
                            </div>
                            <div class="social-icons mt-1 mb-3">
                                <a href="#" class="social-icon social-facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon social-twitter" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon social-linkedin" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-2">
                            <div class="widget">
                                <h4 class="widget-title">Account</h4>
                                <div class="row link-lg link-parts">
                                    <div class="col-6 link-part">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="dashboard.html">My Account</a>
                                            </li>
                                            <li><a href="#">Track Your Order</a></li>
                                            <li><a href="#">Payment Methods</a></li>
                                            <li><a href="#">Shipping Guide</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Product Support</a></li>
                                            <li><a href="#">Privacy</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 link-part">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="#">Orders History</a>
                                            </li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Affiliate Program</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">About</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="about.html">About Porto</a>
                                            </li>
                                            <li><a href="#">Our Guarantees</a></li>
                                            <li><a href="#">Terms And Conditions</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                            <li><a href="#">Return Policy</a></li>
                                            <li>
                                                <a href="#">Intellectual Property Claims</a>
                                            </li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="#">Site Index</a>
                                            </li>
                                            <li><a href="#">Porto for the Press</a></li>
                                            <li><a href="#">Business Accounts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-2">
                            <div class="widget">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="widget-newsletter">
                                    <div class="widget-newsletter-info">
                                        <p class="widget-newsletter-content m-b-4">Get all the latest
                                            information on
                                            Events, Sales and Offers. Sign up for newsletter today</p>
                                    </div>
                                    <form action="#">
                                        <div class="footer-submit-wrapper d-flex">
                                            <input type="email" class="form-control mb-0"
                                                placeholder="Email Address" size="40" required>
                                            <button type="submit"
                                                class="btn btn-primary btn-sm ls-0">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container-fluid d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <img src="{{ asset('images/demoes/demo23/payment-icon.png') }}" alt="payment">
                    </div>
                </div>
            </div><!-- End .footer-bottom -->
        </footer>
    </div><!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo23.html">Home</a></li>
                    <li>
                        <a href="demo23-shop.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left
                                    Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo23-product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="demo23-product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="demo23-product.html">SALE PRODUCT</a></li>
                                    <li><a href="demo23-product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="https://1.envato.market/DdLk5" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo23.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo23-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"
        style="background: #f1f1f1 no-repeat center/cover url({{ asset('images/newsletter_popup_bg.jpg') }})">
        <div class="newsletter-popup-content">
            <img src="{{ asset('images/logo-black.png') }}" alt="Logo" class="logo-newsletter"
                width="111" height="44">
            <h2 class="ls-n-25">Subscribe to newsletter</h2>

            <p class="font2">
                Subscribe to the Porto mailing list to receive updates on new
                arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                        placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label font2">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div><!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins.min.js') }}"></script>
    <script src="{{ asset('js/optional/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('js/jquery.plugin.min.js') }}"></script>


    <!-- Main JS File -->
    <script src="{{ asset('js/main.min.js') }}"></script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo23.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 03:05:19 GMT -->

</html> --}}
