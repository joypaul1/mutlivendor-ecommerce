<html lang="en"><head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title>Shopwise - eCommerce Bootstrap 4 HTML Template</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/ionicons.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/themify-icons.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/linearicons.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/simple-line-icons.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick-theme.css">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">

<style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>

<body class="" style="">

<!-- LOADER -->
<div class="preloader loaded" style="display: none;">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->

<!-- Home Popup Section -->
<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row no-gutters">
                    <div class="col-sm-5">
                    	<div class="background_bg h-100" data-img-src="{{ asset('frontend') }}/assets/images/popup_img.jpg" style="background-image: url(&quot;{{ asset('frontend') }}/assets/images/popup_img.jpg&quot;);"></div>
                    </div>
                    <div class="col-sm-7">
                        <div class="popup_content">
                            <div class="popup-text">
                                <div class="heading_s4">
                                    <h4>Subscribe and Get 25% Discount!</h4>
                                </div>
                                <p>Subscribe to the newsletter to receive updates about new products.</p>
                            </div>
                            <form method="post">
                            	<div class="form-group">
                                	<input name="email" required="" type="email" class="form-control rounded-0" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                	<button class="btn btn-fill-line btn-block text-uppercase rounded-0" title="Subscribe" type="submit">Subscribe</button>
                                </div>
                            </form>
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this popup again!</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
<!-- End Screen Load Popup Section -->

<!-- START HEADER -->
<div class="header_sticky_bar" style="height: 119.656px;"></div><header class="header_wrap fixed-top header_with_topbar nav-fixed" style="">
	<div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="lng_dropdown mr-2">
                            <div class="ddOutOfVision" id="msdrpdd20_msddHolder" style="height: 0px; overflow: hidden; position: absolute;"><select name="countries" class="custome_select" id="msdrpdd20" tabindex="-1">
                                <option value="en" data-image="{{ asset('frontend') }}/assets/images/eng.png" data-title="English">English</option>
                                <option value="fn" data-image="{{ asset('frontend') }}/assets/images/fn.png" data-title="France">France</option>
                                <option value="us" data-image="{{ asset('frontend') }}/assets/images/us.png" data-title="United States">United States</option>
                            </select></div><div class="dd ddcommon borderRadius" id="msdrpdd20_msdd" tabindex="0" style="width: 130px;"><div class="ddTitle borderRadiusTp"><span class="divider"></span><span class="ddArrow arrowoff"></span><span class="ddTitleText " id="msdrpdd20_title"><img src="{{ asset('frontend') }}/assets/images/eng.png" class="fnone"><span class="ddlabel">English</span><span class="description" style="display: none;"></span></span></div><input id="msdrpdd20_titleText" type="text" autocomplete="off" class="text shadow borderRadius" style="display: none;"><div class="ddChild ddchild_ border shadow" id="msdrpdd20_child" style="z-index: 9999; display: none; position: absolute; visibility: visible; height: 108px;"><ul><li class="enabled _msddli_ selected" title="English"><img src="{{ asset('frontend') }}/assets/images/eng.png" class="fnone"><span class="ddlabel">English</span><div class="clear"></div></li><li class="enabled _msddli_" title="France"><img src="{{ asset('frontend') }}/assets/images/fn.png" class="fnone"><span class="ddlabel">France</span><div class="clear"></div></li><li class="enabled _msddli_" title="United States"><img src="{{ asset('frontend') }}/assets/images/us.png" class="fnone"><span class="ddlabel">United States</span><div class="clear"></div></li></ul></div></div>
                        </div>
                        <div class="mr-3">
                            <div class="ddOutOfVision" id="msdrpdd21_msddHolder" style="height: 0px; overflow: hidden; position: absolute;"><select name="countries" class="custome_select" id="msdrpdd21" tabindex="-1">
                                <option value="USD" data-title="USD">USD</option>
                                <option value="EUR" data-title="EUR">EUR</option>
                                <option value="GBR" data-title="GBR">GBR</option>
                            </select></div><div class="dd ddcommon borderRadius" id="msdrpdd21_msdd" tabindex="0" style="width: 56px;"><div class="ddTitle borderRadiusTp"><span class="divider"></span><span class="ddArrow arrowoff"></span><span class="ddTitleText " id="msdrpdd21_title"><span class="ddlabel">USD</span><span class="description" style="display: none;"></span></span></div><input id="msdrpdd21_titleText" type="text" autocomplete="off" class="text shadow borderRadius" style="display: none;"><div class="ddChild ddchild_ border shadow" id="msdrpdd21_child" style="z-index: 9999; display: none; position: absolute; visibility: visible; height: 108px;"><ul><li class="enabled _msddli_ selected" title="USD"><span class="ddlabel">USD</span><div class="clear"></div></li><li class="enabled _msddli_" title="EUR"><span class="ddlabel">EUR</span><div class="clear"></div></li><li class="enabled _msddli_" title="GBR"><span class="ddlabel">GBR</span><div class="clear"></div></li></ul></div></div>
                        </div>
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="text-center text-md-right">
                       	<ul class="header_list">
                        	<li><a href="compare.html"><i class="ti-control-shuffle"></i><span>Compare</span></a></li>
                            <li><a href="wishlist.html"><i class="ti-heart"></i><span>Wishlist</span></a></li>
                            <li><a href="login.html"><i class="ti-user"></i><span>Login</span></a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
    	<div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img class="logo_light" src="{{ asset('frontend') }}/assets/images/logo_light.png" alt="logo">
                    <img class="logo_dark" src="{{ asset('frontend') }}/assets/images/logo_dark.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Home</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="/">Fashion 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Fashion 2</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-3.html">Furniture 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Furniture 2</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-5.html">Electronics 1</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="index-6.html">Electronics 2</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="dropdown-item nav-link nav_item" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="contact.html">Contact Us</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="faq.html">Faq</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Error Page</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="login.html">Login</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="signup.html">Register</a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="term-condition.html">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Products</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Woman's</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Donec porttitor</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">Curabitur tempus</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Vivamus in tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Men's</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Donec vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Etiam ac rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Quisque condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="compare.html">Curabitur laoreet</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Vivamus in tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Kid's</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Accessories</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="d-lg-flex menu_banners">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{ asset('frontend') }}/assets/images/menu_banner1.jpg" alt="menu_banner1">
                                            <div class="banne_info">
                                                <h6>10% Off</h6>
                                                <h4>New Arrival</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{ asset('frontend') }}/assets/images/menu_banner2.jpg" alt="menu_banner2">
                                            <div class="banne_info">
                                                <h6>15% Off</h6>
                                                <h4>Men's Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="{{ asset('frontend') }}/assets/images/menu_banner3.jpg" alt="menu_banner3">
                                            <div class="banne_info">
                                                <h6>23% Off</h6>
                                                <h4>Kids Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link active" href="#" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu dropdown-reverse">
                                <ul>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Grids</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item active" href="blog-three-columns.html">3 columns</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-four-columns.html">4 columns</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-left-sidebar.html">Left Sidebar</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-right-sidebar.html">right Sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-standard-left-sidebar.html">Standard Left Sidebar</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-standard-right-sidebar.html">Standard right Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Masonry</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-three-columns.html">3 columns</a></li>
                                           		<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-four-columns.html">4 columns</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
                                            	<li><a class="dropdown-item nav-link nav_item" href="blog-masonry-right-sidebar.html">right Sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">Single Post</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single.html">Default</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-left-sidebar.html">left sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-slider.html">slider post</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-video.html">video post</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-single-audio.html">audio post</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item menu-link dropdown-toggler" href="#">List</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-list-left-sidebar.html">left sidebar</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="blog-list-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Shop</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-9">
                                        <ul class="d-lg-flex">
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Shop Page Layout</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">shop List view</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Shop Load More</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Other Pages</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Cart</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Checkout</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="my-account.html">My Account</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Wishlist</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="compare.html">compare</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Order Completed</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-4">
                                                <ul>
                                                    <li class="dropdown-header">Product Pages</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Default</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Thumbnails Left</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <div class="header_banner">
                                            <div class="header_banner_content">
                                                <div class="shop_banner">
                                                    <div class="banner_img overlay_bg_40">
                                                        <img src="{{ asset('frontend') }}/assets/images/shop_banner.jpg" alt="shop_banner">
                                                    </div>
                                                    <div class="shop_bn_content">
                                                        <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                                        <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                                        <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Blog three columns</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Blog three columns</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION BLOG -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{ asset('frontend') }}/assets/images/blog_small_img1.jpg" alt="blog_small_img1">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">But I must explain to you how all this mistaken idea</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 10</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{ asset('frontend') }}/assets/images/blog_small_img2.jpg" alt="blog_small_img2">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">On the other hand we provide denounce with righteous</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 12</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{ asset('frontend') }}/assets/images/blog_small_img3.jpg" alt="blog_small_img3">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so expensive?</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 14</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <div class="fit-videos">
                            <div class="fluid-width-video-wrapper" style="padding-top: 66.6667%;"><iframe src="https://player.vimeo.com/video/132464682?byline=0&amp;portrait=0" allowfullscreen="" name="fitvid0"></iframe></div>
                        </div>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">The Problem With Typefaces on the Web</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 13</a></li>
                            </ul>
                            <p>It uses a dictionary of over combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <div class="carousel_slider owl-carousel owl-theme dot_style1 owl-loaded owl-drag" data-autoheight="true" data-autoplay="true" data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="3000" data-items="1">


                        <div class="owl-stage-outer owl-height" style="height: 233.328px;"><div class="owl-stage" style="transform: translate3d(-1050px, 0px, 0px); transition: all 0s ease 0s; width: 2100px;"><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img4.jpg" alt="blog_img4">
                            </a></div><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img4-1.jpg" alt="blog_small_img4-1">
                            </a></div><div class="owl-item" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img4.jpg" alt="blog_img4">
                            </a></div><div class="owl-item active" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img4-1.jpg" alt="blog_small_img4-1">
                            </a></div><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img4.jpg" alt="blog_img4">
                            </a></div><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img4-1.jpg" alt="blog_small_img4-1">
                            </a></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so expensive?</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 20</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <div class="fit-videos">
                            <div class="fluid-width-video-wrapper" style="padding-top: 66.6667%;"><iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" name="fitvid1"></iframe></div>
                        </div>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">The Problem With Typefaces on the Web</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 18</a></li>
                            </ul>
                            <p>It uses a dictionary of over combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <div class="fit-videos">
                            <div class="fluid-width-video-wrapper" style="padding-top: 66.6667%;"><iframe src="https://www.youtube.com/embed/7e90gBu4pas" allowfullscreen="" name="fitvid2"></iframe></div>
                        </div>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">The Problem With Typefaces on the Web</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 13</a></li>
                            </ul>
                            <p>It uses a dictionary of over combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <a href="blog-single.html">
                            <img src="{{ asset('frontend') }}/assets/images/blog_small_img5.jpg" alt="blog_small_img5">
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so expensive?</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 12</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style2 box_shadow1">
                    <div class="blog_img">
                        <div class="carousel_slider owl-carousel owl-theme nav_style5 owl-loaded owl-drag" data-nav="true" data-dots="false" data-autoheight="true" data-autoplay="true" data-loop="true" data-autoplay-timeout="3000" data-items="1">


                        <div class="owl-stage-outer owl-height" style="height: 233.328px;"><div class="owl-stage" style="transform: translate3d(-1050px, 0px, 0px); transition: all 0.25s ease 0s; width: 2100px;"><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img6.jpg" alt="blog_small_img6">
                            </a></div><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img6-1.jpg" alt="blog_small_img6-1">
                            </a></div><div class="owl-item" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img6.jpg" alt="blog_small_img6">
                            </a></div><div class="owl-item active" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img6-1.jpg" alt="blog_small_img6-1">
                            </a></div><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img6.jpg" alt="blog_small_img6">
                            </a></div><div class="owl-item cloned" style="width: 350px;"><a href="blog-single.html">
                                <img src="{{ asset('frontend') }}/assets/images/blog_small_img6-1.jpg" alt="blog_small_img6-1">
                            </a></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button></div><div class="owl-dots disabled"></div></div>
                    </div>
                    <div class="blog_content bg-white">
                        <div class="blog_text">
                            <h5 class="blog_title"><a href="blog-single.html">Why is a ticket to Lagos so expensive?</a></h5>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> April 14, 2018</a></li>
                                <li><a href="#"><i class="ti-comments"></i> 17</a></li>
                            </ul>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2 mt-md-4">
                <ul class="pagination pagination_style1 justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="linearicons-arrow-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION BLOG -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<div class="section bg_default small_pt small_pb">
	<div class="container">
    	<div class="row align-items-center">
            <div class="col-md-6">
                <div class="heading_s1 mb-md-0 heading_light">
                    <h3>Subscribe Our Newsletter</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter_form">
                    <form>
                        <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
<footer class="footer_dark">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                	<div class="widget">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ asset('frontend') }}/assets/images/logo_light.png" alt="logo"></a>
                        </div>
                        <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
        		</div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Category</h6>
                        <ul class="widget_links">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Woman</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Best Saller</a></li>
                            <li><a href="#">New Arrivals</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, New South London , UK</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-right">
                        <li><a href="#"><img src="{{ asset('frontend') }}/assets/images/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/assets/images/discover.png" alt="discover"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/assets/images/master_card.png" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/assets/images/paypal.png" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/assets/images/amarican_express.png" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style=""><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
<!-- popper min js -->
<script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ asset('frontend') }}/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="{{ asset('frontend') }}/assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="{{ asset('frontend') }}/assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="{{ asset('frontend') }}/assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="{{ asset('frontend') }}/assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="{{ asset('frontend') }}/assets/js/jquery.countdown.min.js"></script>
<!-- imagesloaded js -->
<script src="{{ asset('frontend') }}/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="{{ asset('frontend') }}/assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="{{ asset('frontend') }}/assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
<!-- fit video  -->
<script src="{{ asset('frontend') }}/assets/js/jquery.fitvids.js"></script>
<!-- elevatezoom js -->
<script src="{{ asset('frontend') }}/assets/js/jquery.elevatezoom.js"></script>
<!-- scripts js -->
<script src="{{ asset('frontend') }}/assets/js/scripts.js"></script>


</body></html>
