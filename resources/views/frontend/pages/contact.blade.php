<html lang="en">
    <head>
        <style>
            .dismissButton {
                background-color: #fff;
                border: 1px solid #dadce0;
                color: #1a73e8;
                border-radius: 4px;
                font-family: Roboto, sans-serif;
                font-size: 14px;
                height: 36px;
                cursor: pointer;
                padding: 0 24px;
            }
            .dismissButton:hover {
                background-color: rgba(66, 133, 244, 0.04);
                border: 1px solid #d2e3fc;
            }
            .dismissButton:focus {
                background-color: rgba(66, 133, 244, 0.12);
                border: 1px solid #d2e3fc;
                outline: 0;
            }
            .dismissButton:focus:not(:focus-visible) {
                background-color: #fff;
                border: 1px solid #dadce0;
                outline: none;
            }
            .dismissButton:focus-visible {
                background-color: rgba(66, 133, 244, 0.12);
                border: 1px solid #d2e3fc;
                outline: 0;
            }
            .dismissButton:hover:focus {
                background-color: rgba(66, 133, 244, 0.16);
                border: 1px solid #d2e2fd;
            }
            .dismissButton:hover:focus:not(:focus-visible) {
                background-color: rgba(66, 133, 244, 0.04);
                border: 1px solid #d2e3fc;
            }
            .dismissButton:hover:focus-visible {
                background-color: rgba(66, 133, 244, 0.16);
                border: 1px solid #d2e2fd;
            }
            .dismissButton:active {
                background-color: rgba(66, 133, 244, 0.16);
                border: 1px solid #d2e2fd;
                box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
            }
            .dismissButton:disabled {
                background-color: #fff;
                border: 1px solid #f1f3f4;
                color: #3c4043;
            }
        </style>
        <style>
            .gm-control-active > img {
                box-sizing: content-box;
                display: none;
                left: 50%;
                pointer-events: none;
                position: absolute;
                top: 50%;
                transform: translate(-50%, -50%);
            }
            .gm-control-active > img:nth-child(1) {
                display: block;
            }
            .gm-control-active:hover > img:nth-child(1),
            .gm-control-active:active > img:nth-child(1) {
                display: none;
            }
            .gm-control-active:hover > img:nth-child(2),
            .gm-control-active:active > img:nth-child(3) {
                display: block;
            }
        </style>
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400" />
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93" />
        <style>
            .gm-ui-hover-effect {
                opacity: 0.6;
            }
            .gm-ui-hover-effect:hover {
                opacity: 1;
            }
        </style>
        <style>
            .gm-style .gm-style-cc a,
            .gm-style .gm-style-cc button,
            .gm-style .gm-style-cc span,
            .gm-style .gm-style-mtc div {
                font-size: 10px;
                box-sizing: border-box;
            }
        </style>
        <style>
            @media print {
                .gm-style .gmnoprint,
                .gmnoprint {
                    display: none;
                }
            }
            @media screen {
                .gm-style .gmnoscreen,
                .gmnoscreen {
                    display: none;
                }
            }
        </style>
        <style>
            .gm-style-moc {
                background-color: rgba(0, 0, 0, 0.45);
                pointer-events: none;
                text-align: center;
                transition: opacity ease-in-out;
            }
            .gm-style-mot {
                color: white;
                font-family: Roboto, Arial, sans-serif;
                font-size: 22px;
                margin: 0;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
            }
        </style>
        <style>
            .gm-style img {
                max-width: none;
            }
            .gm-style {
                font: 400 11px Roboto, Arial, sans-serif;
                text-decoration: none;
            }
        </style>
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="Anil z" name="author" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
            name="description"
            content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods."
        />
        <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store" />

        <!-- SITE TITLE -->
        <title>Shopwise - eCommerce Bootstrap 4 HTML Template</title>
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/favicon.png" />
        <!-- Animation CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css" />
        <!-- Latest Bootstrap min CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/bootstrap/css/bootstrap.min.css" />
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet" />
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/ionicons.min.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/themify-icons.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/linearicons.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/simple-line-icons.css" />
        <!--- owl carousel CSS-->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/owlcarousel/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/owlcarousel/css/owl.theme.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/owlcarousel/css/owl.theme.default.min.css" />
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css" />
        <!-- Slick CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick-theme.css" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css" />

        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/8/common.js"></script>
        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/8/util.js"></script>
        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/8/map.js"></script>
        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/8/marker.js"></script>
        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/8/onion.js"></script>
        <script
            type="text/javascript"
            charset="UTF-8"
            src="https://maps.googleapis.com/maps/vt?pb=!1m4!1m3!1i12!2i1205!3i1539!1m4!1m3!1i12!2i1206!3i1539!1m4!1m3!1i12!2i1207!3i1539!1m4!1m3!1i12!2i1205!3i1540!1m4!1m3!1i12!2i1205!3i1541!1m4!1m3!1i12!2i1206!3i1540!1m4!1m3!1i12!2i1206!3i1541!1m4!1m3!1i12!2i1207!3i1540!1m4!1m3!1i12!2i1207!3i1541!2m3!1e0!2sm!3i576301952!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e3!12m1!5b1&amp;callback=_xdc_._s17viy&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=115376"
        ></script>
        <style type="text/css">
            @-webkit-keyframes _gm8714 {
                0% {
                    -webkit-transform: translate3d(0px, 0px, 0);
                    -webkit-animation-timing-function: ease-out;
                }
                50% {
                    -webkit-transform: translate3d(0px, -20px, 0);
                    -webkit-animation-timing-function: ease-in;
                }
                100% {
                    -webkit-transform: translate3d(0px, 0px, 0);
                    -webkit-animation-timing-function: ease-out;
                }
            }
        </style>
        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/8/controls.js"></script>
        <script
            type="text/javascript"
            charset="UTF-8"
            src="https://maps.googleapis.com/maps/api/js/QuotaService.RecordEvent?1shttps%3A%2F%2Fbestwebcreator.com%2Fshopwise%2Fdemo%2Fcontact.html&amp;3sAIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;7sn4bnr2&amp;10e1&amp;callback=_xdc_._54wa8&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=104876"
        ></script>
        <script
            type="text/javascript"
            charset="UTF-8"
            src="https://maps.googleapis.com/maps/vt?pb=!1m4!1m3!1i12!2i1205!3i1539!1m4!1m3!1i12!2i1206!3i1539!1m4!1m3!1i12!2i1207!3i1539!1m4!1m3!1i12!2i1205!3i1540!1m4!1m3!1i12!2i1205!3i1541!1m4!1m3!1i12!2i1206!3i1540!1m4!1m3!1i12!2i1206!3i1541!1m4!1m3!1i12!2i1207!3i1540!1m4!1m3!1i12!2i1207!3i1541!2m3!1e0!2sm!3i576301952!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e3!12m1!5b1&amp;callback=_xdc_._sie7j5&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=124424"
        ></script>
    </head>

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
                                            <input name="email" required="" type="email" class="form-control rounded-0" placeholder="Enter Your Email" />
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-fill-line btn-block text-uppercase rounded-0" title="Subscribe" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
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
        <div class="header_sticky_bar" style="height: 119.656px;"></div>
        <header class="header_wrap fixed-top header_with_topbar nav-fixed" style="">
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="lng_dropdown mr-2">
                                    <div class="ddOutOfVision" id="msdrpdd20_msddHolder" style="height: 0px; overflow: hidden; position: absolute;">
                                        <select name="countries" class="custome_select" id="msdrpdd20" tabindex="-1">
                                            <option value="en" data-image="{{ asset('frontend') }}/assets/images/eng.png" data-title="English">English</option>
                                            <option value="fn" data-image="{{ asset('frontend') }}/assets/images/fn.png" data-title="France">France</option>
                                            <option value="us" data-image="{{ asset('frontend') }}/assets/images/us.png" data-title="United States">United States</option>
                                        </select>
                                    </div>
                                    <div class="dd ddcommon borderRadius" id="msdrpdd20_msdd" tabindex="0" style="width: 130px;">
                                        <div class="ddTitle borderRadiusTp">
                                            <span class="divider"></span><span class="ddArrow arrowoff"></span>
                                            <span class="ddTitleText" id="msdrpdd20_title">
                                                <img src="{{ asset('frontend') }}/assets/images/eng.png" class="fnone" /><span class="ddlabel">English</span><span class="description" style="display: none;"></span>
                                            </span>
                                        </div>
                                        <input id="msdrpdd20_titleText" type="text" autocomplete="off" class="text shadow borderRadius" style="display: none;" />
                                        <div class="ddChild ddchild_ border shadow" id="msdrpdd20_child" style="z-index: 9999; display: none; position: absolute; visibility: visible; height: 108px;">
                                            <ul>
                                                <li class="enabled _msddli_ selected" title="English">
                                                    <img src="{{ asset('frontend') }}/assets/images/eng.png" class="fnone" /><span class="ddlabel">English</span>
                                                    <div class="clear"></div>
                                                </li>
                                                <li class="enabled _msddli_" title="France">
                                                    <img src="{{ asset('frontend') }}/assets/images/fn.png" class="fnone" /><span class="ddlabel">France</span>
                                                    <div class="clear"></div>
                                                </li>
                                                <li class="enabled _msddli_" title="United States">
                                                    <img src="{{ asset('frontend') }}/assets/images/us.png" class="fnone" /><span class="ddlabel">United States</span>
                                                    <div class="clear"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mr-3">
                                    <div class="ddOutOfVision" id="msdrpdd21_msddHolder" style="height: 0px; overflow: hidden; position: absolute;">
                                        <select name="countries" class="custome_select" id="msdrpdd21" tabindex="-1">
                                            <option value="USD" data-title="USD">USD</option>
                                            <option value="EUR" data-title="EUR">EUR</option>
                                            <option value="GBR" data-title="GBR">GBR</option>
                                        </select>
                                    </div>
                                    <div class="dd ddcommon borderRadius" id="msdrpdd21_msdd" tabindex="0" style="width: 56px;">
                                        <div class="ddTitle borderRadiusTp">
                                            <span class="divider"></span><span class="ddArrow arrowoff"></span>
                                            <span class="ddTitleText" id="msdrpdd21_title"><span class="ddlabel">USD</span><span class="description" style="display: none;"></span></span>
                                        </div>
                                        <input id="msdrpdd21_titleText" type="text" autocomplete="off" class="text shadow borderRadius" style="display: none;" />
                                        <div class="ddChild ddchild_ border shadow" id="msdrpdd21_child" style="z-index: 9999; display: none; position: absolute; visibility: visible; height: 108px;">
                                            <ul>
                                                <li class="enabled _msddli_ selected" title="USD">
                                                    <span class="ddlabel">USD</span>
                                                    <div class="clear"></div>
                                                </li>
                                                <li class="enabled _msddli_" title="EUR">
                                                    <span class="ddlabel">EUR</span>
                                                    <div class="clear"></div>
                                                </li>
                                                <li class="enabled _msddli_" title="GBR">
                                                    <span class="ddlabel">GBR</span>
                                                    <div class="clear"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <ul class="contact_detail text-center text-lg-left">
                                    <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center text-md-right">
                                <ul class="header_list">
                                    <li>
                                        <a href="compare.html"><i class="ti-control-shuffle"></i><span>Compare</span></a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="ti-heart"></i><span>Wishlist</span></a>
                                    </li>
                                    <li>
                                        <a href="login.html"><i class="ti-user"></i><span>Login</span></a>
                                    </li>
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
                            <img class="logo_light" src="{{ asset('frontend') }}/assets/images/logo_light.png" alt="logo" />
                            <img class="logo_dark" src="{{ asset('frontend') }}/assets/images/logo_dark.png" alt="logo" />
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
                                    <a class="dropdown-toggle nav-link active" href="#" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="about.html">About Us</a></li>
                                            <li><a class="dropdown-item nav-link nav_item active" href="contact.html">Contact Us</a></li>
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
                                                    <img src="{{ asset('frontend') }}/assets/images/menu_banner1.jpg" alt="menu_banner1" />
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="header-banner">
                                                    <img src="{{ asset('frontend') }}/assets/images/menu_banner2.jpg" alt="menu_banner2" />
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Men's Fashion</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="header-banner">
                                                    <img src="{{ asset('frontend') }}/assets/images/menu_banner3.jpg" alt="menu_banner3" />
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
                                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Blog</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                            <li>
                                                <a class="dropdown-item menu-link dropdown-toggler" href="#">Grids</a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="dropdown-item nav-link nav_item" href="blog-three-columns.html">3 columns</a></li>
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
                                                                <img src="{{ asset('frontend') }}/assets/images/shop_banner.jpg" alt="shop_banner" />
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
                            <li>
                                <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                                <div class="search_wrap">
                                    <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                    <form>
                                        <input type="text" placeholder="Search" class="form-control" id="search_input" />
                                        <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                                <div class="search_overlay"></div>
                                <div class="search_overlay"></div>
                            </li>
                            <li class="dropdown cart_dropdown">
                                <a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                                <div class="cart_box dropdown-menu dropdown-menu-right">
                                    <ul class="cart_list">
                                        <li>
                                            <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                            <a href="#"><img src="{{ asset('frontend') }}/assets/images/cart_thamb1.jpg" alt="cart_thumb1" />Variable product 001</a>
                                            <span class="cart_quantity">
                                                1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                            <a href="#"><img src="{{ asset('frontend') }}/assets/images/cart_thamb2.jpg" alt="cart_thumb2" />Ornare sed consequat</a>
                                            <span class="cart_quantity">
                                                1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="cart_footer">
                                        <p class="cart_total">
                                            <strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00
                                        </p>
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
            <div class="container">
                <!-- STRART CONTAINER -->
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h1>Contact</h1>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END CONTAINER-->
        </div>
        <!-- END SECTION BREADCRUMB -->

        <!-- START MAIN CONTENT -->
        <div class="main_content">
            <!-- START SECTION CONTACT -->
            <div class="section pb_70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="contact_wrap contact_style3">
                                <div class="contact_icon">
                                    <i class="linearicons-map2"></i>
                                </div>
                                <div class="contact_text">
                                    <span>Address</span>
                                    <p>123 Street, Old Trafford, London, UK</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="contact_wrap contact_style3">
                                <div class="contact_icon">
                                    <i class="linearicons-envelope-open"></i>
                                </div>
                                <div class="contact_text">
                                    <span>Email Address</span>
                                    <a href="mailto:info@sitename.com">info@yourmail.com </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="contact_wrap contact_style3">
                                <div class="contact_icon">
                                    <i class="linearicons-tablet2"></i>
                                </div>
                                <div class="contact_text">
                                    <span>Phone</span>
                                    <p>+ 457 789 789 65</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION CONTACT -->

            <!-- START SECTION CONTACT -->
            <div class="section pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading_s1">
                                <h2>Get In touch</h2>
                            </div>
                            <p class="leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                            <div class="field_form">
                                <form method="post" name="enq">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input required="" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input required="" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input required="" placeholder="Enter Phone No. *" id="phone" class="form-control" name="phone" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea required="" placeholder="Message *" id="description" class="form-control" name="message" rows="4"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" title="Submit Your Message!" class="btn btn-fill-out" id="submitButton" name="submit" value="Submit">Send Message</button>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="alert-msg" class="alert-msg text-center"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-2 pt-lg-0 mt-4 mt-lg-0">
                            <div id="map" class="contact_map2" data-zoom="12" data-latitude="40.680" data-longitude="-73.945" data-icon="{{ asset('frontend') }}/assets/images/marker.png" style="position: relative; overflow: hidden;">
                                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                    <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                        <div>
                                            <button
                                                draggable="false"
                                                aria-label="Keyboard shortcuts"
                                                title="Keyboard shortcuts"
                                                type="button"
                                                style="
                                                    background: none transparent;
                                                    display: block;
                                                    border: none;
                                                    margin: 0px;
                                                    padding: 0px;
                                                    text-transform: none;
                                                    appearance: none;
                                                    position: absolute;
                                                    cursor: pointer;
                                                    user-select: none;
                                                    z-index: 1000002;
                                                    left: -100000px;
                                                    top: -100000px;
                                                "
                                            ></button>
                                        </div>
                                        <div
                                            tabindex="0"
                                            aria-label="Map"
                                            aria-roledescription="map"
                                            role="group"
                                            style="
                                                position: absolute;
                                                z-index: 0;
                                                left: 0px;
                                                top: 0px;
                                                height: 100%;
                                                width: 100%;
                                                padding: 0px;
                                                border-width: 0px;
                                                margin: 0px;
                                                cursor: url('https://maps.gstatic.com/mapfiles/openhand_8_8.cur'), default;
                                                touch-action: pan-x pan-y;
                                            "
                                        >
                                            <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                        <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -172, -130);">
                                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                    <div
                                                        style="
                                                            width: 38px;
                                                            height: 52px;
                                                            overflow: hidden;
                                                            position: absolute;
                                                            left: -19px;
                                                            top: -52px;
                                                            z-index: 0;
                                                            animation-duration: 700ms;
                                                            animation-iteration-count: infinite;
                                                            animation-name: _gm8714;
                                                        "
                                                    >
                                                        <img
                                                            alt=""
                                                            src="{{ asset('frontend') }}/assets/images/marker.png"
                                                            draggable="false"
                                                            style="position: absolute; left: 0px; top: 0px; user-select: none; width: 38px; height: 52px; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                        />
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                        <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -172, -130);">
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -172, -130);">
                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1540!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=91618"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1540!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=93582"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1539!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=50555"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1539!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=46627"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1539!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=48591"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1540!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=89654"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1207!3i1541!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=59426"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1205!3i1541!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=63354"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                            <img
                                                                draggable="false"
                                                                alt=""
                                                                role="presentation"
                                                                src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i1206!3i1541!4i256!2m3!1e0!2sm!3i576301952!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;token=61390"
                                                                style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                        <div title="" tabindex="-1" style="width: 38px; height: 52px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -19px; top: -52px; z-index: 0;">
                                                            <img
                                                                alt=""
                                                                src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                                draggable="false"
                                                                style="width: 38px; height: 52px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                </div>
                                            </div>
                                            <div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                <p class="gm-style-mot"></p>
                                            </div>
                                        </div>
                                        <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                        <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div>
                                            <button
                                                draggable="false"
                                                aria-label="Toggle fullscreen view"
                                                title="Toggle fullscreen view"
                                                type="button"
                                                class="gm-control-active gm-fullscreen-control"
                                                style="
                                                    background: none rgb(255, 255, 255);
                                                    border: 0px;
                                                    margin: 10px;
                                                    padding: 0px;
                                                    text-transform: none;
                                                    appearance: none;
                                                    position: absolute;
                                                    cursor: pointer;
                                                    user-select: none;
                                                    border-radius: 2px;
                                                    height: 40px;
                                                    width: 40px;
                                                    box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px;
                                                    overflow: hidden;
                                                    top: 0px;
                                                    right: 0px;
                                                "
                                            >
                                                <img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                    alt=""
                                                    style="height: 18px; width: 18px;"
                                                />
                                                <img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                    alt=""
                                                    style="height: 18px; width: 18px;"
                                                />
                                                <img
                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                    alt=""
                                                    style="height: 18px; width: 18px;"
                                                />
                                            </button>
                                        </div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div>
                                            <div
                                                class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                                draggable="false"
                                                controlwidth="40"
                                                controlheight="81"
                                                style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;"
                                            >
                                                <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                                                    <div style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;">
                                                        <button
                                                            draggable="false"
                                                            aria-label="Rotate map clockwise"
                                                            title="Rotate map clockwise"
                                                            type="button"
                                                            class="gm-control-active"
                                                            style="
                                                                background: none;
                                                                display: none;
                                                                border: 0px;
                                                                margin: 0px;
                                                                padding: 0px;
                                                                text-transform: none;
                                                                appearance: none;
                                                                position: relative;
                                                                cursor: pointer;
                                                                user-select: none;
                                                                left: 0px;
                                                                top: 0px;
                                                                overflow: hidden;
                                                                width: 40px;
                                                                height: 40px;
                                                            "
                                                        >
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"
                                                            />
                                                        </button>
                                                        <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                                        <button
                                                            draggable="false"
                                                            aria-label="Rotate map counterclockwise"
                                                            title="Rotate map counterclockwise"
                                                            type="button"
                                                            class="gm-control-active"
                                                            style="
                                                                background: none;
                                                                display: none;
                                                                border: 0px;
                                                                margin: 0px;
                                                                padding: 0px;
                                                                text-transform: none;
                                                                appearance: none;
                                                                position: relative;
                                                                cursor: pointer;
                                                                user-select: none;
                                                                left: 0px;
                                                                top: 0px;
                                                                overflow: hidden;
                                                                width: 40px;
                                                                height: 40px;
                                                                transform: scaleX(-1);
                                                            "
                                                        >
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                style="width: 20px; height: 20px;"
                                                            />
                                                        </button>
                                                        <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                                        <button
                                                            draggable="false"
                                                            aria-label="Tilt map"
                                                            title="Tilt map"
                                                            type="button"
                                                            class="gm-tilt gm-control-active"
                                                            style="
                                                                background: none;
                                                                display: block;
                                                                border: 0px;
                                                                margin: 0px;
                                                                padding: 0px;
                                                                text-transform: none;
                                                                appearance: none;
                                                                position: relative;
                                                                cursor: pointer;
                                                                user-select: none;
                                                                top: 0px;
                                                                left: 0px;
                                                                overflow: hidden;
                                                                width: 40px;
                                                                height: 40px;
                                                            "
                                                        >
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                style="width: 18px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                style="width: 18px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                style="width: 18px;"
                                                            />
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;">
                                                    <div
                                                        draggable="false"
                                                        style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"
                                                    >
                                                        <button
                                                            draggable="false"
                                                            aria-label="Zoom in"
                                                            title="Zoom in"
                                                            type="button"
                                                            class="gm-control-active"
                                                            style="
                                                                background: none;
                                                                display: block;
                                                                border: 0px;
                                                                margin: 0px;
                                                                padding: 0px;
                                                                text-transform: none;
                                                                appearance: none;
                                                                position: relative;
                                                                cursor: pointer;
                                                                user-select: none;
                                                                overflow: hidden;
                                                                width: 40px;
                                                                height: 40px;
                                                                top: 0px;
                                                                left: 0px;
                                                            "
                                                        >
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"
                                                            />
                                                        </button>
                                                        <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                        <button
                                                            draggable="false"
                                                            aria-label="Zoom out"
                                                            title="Zoom out"
                                                            type="button"
                                                            class="gm-control-active"
                                                            style="
                                                                background: none;
                                                                display: block;
                                                                border: 0px;
                                                                margin: 0px;
                                                                padding: 0px;
                                                                text-transform: none;
                                                                appearance: none;
                                                                position: relative;
                                                                cursor: pointer;
                                                                user-select: none;
                                                                overflow: hidden;
                                                                width: 40px;
                                                                height: 40px;
                                                                top: 0px;
                                                                left: 0px;
                                                            "
                                                        >
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"
                                                            />
                                                            <img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                alt=""
                                                                style="height: 18px; width: 18px;"
                                                            />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                <a
                                                    target="_blank"
                                                    rel="noopener"
                                                    href="https://maps.google.com/maps?ll=40.68,-73.945&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                                    title="Open this area in Google Maps (opens a new window)"
                                                    style="position: static; overflow: visible; float: none; display: inline;"
                                                >
                                                    <div style="width: 66px; height: 26px; cursor: pointer;">
                                                        <img
                                                            alt=""
                                                            src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                                            draggable="false"
                                                            style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"
                                                        />
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div></div>
                                        <div>
                                            <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 287px; bottom: 0px;">
                                                <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div
                                                        style="
                                                            position: relative;
                                                            padding-right: 6px;
                                                            padding-left: 6px;
                                                            box-sizing: border-box;
                                                            font-family: Roboto, Arial, sans-serif;
                                                            font-size: 10px;
                                                            color: rgb(0, 0, 0);
                                                            white-space: nowrap;
                                                            direction: ltr;
                                                            text-align: right;
                                                            vertical-align: middle;
                                                            display: inline-block;
                                                        "
                                                    >
                                                        <button
                                                            draggable="false"
                                                            aria-label="Keyboard shortcuts"
                                                            title="Keyboard shortcuts"
                                                            type="button"
                                                            style="
                                                                background: none;
                                                                display: inline-block;
                                                                border: 0px;
                                                                margin: 0px;
                                                                padding: 0px;
                                                                text-transform: none;
                                                                appearance: none;
                                                                position: relative;
                                                                cursor: pointer;
                                                                user-select: none;
                                                                color: rgb(0, 0, 0);
                                                                font-family: inherit;
                                                                line-height: normal;
                                                            "
                                                        >
                                                            Keyboard shortcuts
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;">
                                                <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div
                                                        style="
                                                            position: relative;
                                                            padding-right: 6px;
                                                            padding-left: 6px;
                                                            box-sizing: border-box;
                                                            font-family: Roboto, Arial, sans-serif;
                                                            font-size: 10px;
                                                            color: rgb(0, 0, 0);
                                                            white-space: nowrap;
                                                            direction: ltr;
                                                            text-align: right;
                                                            vertical-align: middle;
                                                            display: inline-block;
                                                        "
                                                    >
                                                        <button
                                                            draggable="false"
                                                            aria-label="Map Data"
                                                            title="Map Data"
                                                            type="button"
                                                            style="
                                                                background: none;
                                                                display: none;
                                                                border: 0px;
                                                                margin: 0px;
                                                                padding: 0px;
                                                                text-transform: none;
                                                                appearance: none;
                                                                position: relative;
                                                                cursor: pointer;
                                                                user-select: none;
                                                                color: rgb(0, 0, 0);
                                                                font-family: inherit;
                                                                line-height: normal;
                                                            "
                                                        >
                                                            Map Data
                                                        </button>
                                                        <span>Map data ©2021 Google</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div
                                                    style="
                                                        position: relative;
                                                        padding-right: 6px;
                                                        padding-left: 6px;
                                                        box-sizing: border-box;
                                                        font-family: Roboto, Arial, sans-serif;
                                                        font-size: 10px;
                                                        color: rgb(0, 0, 0);
                                                        white-space: nowrap;
                                                        direction: ltr;
                                                        text-align: right;
                                                        vertical-align: middle;
                                                        display: inline-block;
                                                    "
                                                >
                                                    <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of Use</a>
                                                </div>
                                            </div>
                                            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div
                                                    style="
                                                        position: relative;
                                                        padding-right: 6px;
                                                        padding-left: 6px;
                                                        box-sizing: border-box;
                                                        font-family: Roboto, Arial, sans-serif;
                                                        font-size: 10px;
                                                        color: rgb(0, 0, 0);
                                                        white-space: nowrap;
                                                        direction: ltr;
                                                        text-align: right;
                                                        vertical-align: middle;
                                                        display: inline-block;
                                                    "
                                                >
                                                    <a
                                                        target="_blank"
                                                        rel="noopener"
                                                        title="Report errors in the road map or imagery to Google"
                                                        dir="ltr"
                                                        href="https://www.google.com/maps/@40.68,-73.945,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                                        style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;"
                                                    >
                                                        Report a map error
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2021 Google</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="
                                        background-color: white;
                                        font-weight: 500;
                                        font-family: Roboto, sans-serif;
                                        padding: 15px 25px;
                                        box-sizing: border-box;
                                        top: 5px;
                                        border: 1px solid rgba(0, 0, 0, 0.12);
                                        border-radius: 5px;
                                        left: 50%;
                                        max-width: 375px;
                                        position: absolute;
                                        transform: translateX(-50%);
                                        width: calc(100% - 10px);
                                        z-index: 1;
                                    "
                                >
                                    <div>
                                        <img
                                            alt=""
                                            src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                                            draggable="false"
                                            style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"
                                        />
                                    </div>
                                    <div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span></div>
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="line-height: 16px; vertical-align: middle;">
                                                <a
                                                    href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors"
                                                    target="_blank"
                                                    rel="noopener"
                                                    style="color: rgba(0, 0, 0, 0.54); font-size: 12px;"
                                                >
                                                    Do you own this website?
                                                </a>
                                            </td>
                                            <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION CONTACT -->

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
                                    <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address" />
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
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/logo_light.png" alt="logo" /></a>
                                </div>
                                <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                            </div>
                            <div class="widget">
                                <ul class="social_icons social_white">
                                    <li>
                                        <a href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-googleplus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-youtube-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    </li>
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
                                <li>
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/visa.png" alt="visa" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/discover.png" alt="discover" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/master_card.png" alt="master_card" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/paypal.png" alt="paypal" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/amarican_express.png" alt="amarican_express" /></a>
                                </li>
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
        <!-- elevatezoom js -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.elevatezoom.js"></script>
        <!-- Google Map Js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script>
        <!-- scripts js -->
        <script src="{{ asset('frontend') }}/assets/js/scripts.js"></script>
    </body>
</html>
