@extends('frontend.layouts.app')

@section('content')

    @include('frontend._partials.sliderSection')
    <section class="featured section-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/feature-1.png" alt="">
                        <h4 class="bg-1">Free Shipping</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/feature-2.png" alt="">
                        <h4 class="bg-3">Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/feature-3.png" alt="">
                        <h4 class="bg-2">Save Money</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/feature-4.png" alt="">
                        <h4 class="bg-4">Promotions</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/feature-5.png" alt="">
                        <h4 class="bg-5">Happy Sell</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="{{ asset('frontend') }}/assets/imgs/theme/icons/feature-6.png" alt="">
                        <h4 class="bg-6">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-tabs section-padding position-relative wow fadeIn animated">
        <div class="bg-square"></div>
        <div class="container">
            <div class="tab-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                    </li>
                </ul>
                <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content wow fadeIn animated" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-1-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-1-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Clothing</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Colorful Pattern Shirts</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>90%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-2-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-2-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Clothing</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Plain Color Pocket Shirts</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>50%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$138.85 </span>
                                        <span class="old-price">$255.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-3-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-3-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">Best Sell</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Shirts</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Vintage Floral Oil Shirts</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>95%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$338.85 </span>
                                        <span class="old-price">$445.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-4-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-4-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Clothing</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Colorful Hawaiian Shirts</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$123.85 </span>
                                        <span class="old-price">$235.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-xs-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-5-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-5-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-30%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Shirt</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Flowers Sleeve Lapel Shirt</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$28.85 </span>
                                        <span class="old-price">$45.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-xs-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-6-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-6-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-22%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Shirts</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Ethnic Floral Casual Shirts</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-xs-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-7-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-7-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Shoes</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Stitching Hole Sandals</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>98%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$1275.85 </span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-8-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-8-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Shirt</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Mens Porcelain Shirt</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab one (Featured)-->
                <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row product-grid-4">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-9-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-9-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Donec </a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Lorem ipsum dolor</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>90%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-10-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-10-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Music</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Sed tincidunt interdum</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>50%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$138.85 </span>
                                        <span class="old-price">$255.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-11-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-11-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">Best Sell</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Watch</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Fusce metus orci</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>95%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$338.85 </span>
                                        <span class="old-price">$445.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-12-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-12-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Music</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Integer venenatis libero</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$123.85 </span>
                                        <span class="old-price">$235.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-13-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-13-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-30%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Speaker</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Cras tempor orci id</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$28.85 </span>
                                        <span class="old-price">$45.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-14-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-14-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-22%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Camera</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Nullam cursus mi qui</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-15-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-15-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Phone</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Fusce fringilla ultrices</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>98%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$1275.85 </span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-1-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-1-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Accessories </a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Sed sollicitudin est</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab two (Popular)-->
                <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row product-grid-4">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-2-1.jpg" alt="">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-2-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Music</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Donec ut nisl rutrum</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>90%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-3-1.jpg" alt="">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-3-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Music</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Nullam dapibus pharetra</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>50%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$138.85 </span>
                                        <span class="old-price">$255.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-4-1.jpg" alt="">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-4-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">Best Sell</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Watch</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Morbi dictum finibus</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>95%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$338.85 </span>
                                        <span class="old-price">$445.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-5-1.jpg" alt="">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-5-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Music</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Nunc volutpat massa</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$123.85 </span>
                                        <span class="old-price">$235.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-6-1.jpg" alt="">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-6-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-30%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Speaker</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Nullam ultricies luctus</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$28.85 </span>
                                        <span class="old-price">$45.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-7-1.jpg" alt="">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-7-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-22%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Camera</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Nullam mattis enim</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-8-1.jpg" alt="">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-8-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Phone</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Vivamus sollicitudin</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>98%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$1275.85 </span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                        <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-9-1.jpg" alt="">
                                        <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-9-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Accessories </a>
                                    </div>
                                    <h2><a href="shop-product-right.html"> Donec ut nisl rutrum</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End product-grid-4-->
                </div>
                <!--En tab three (New added)-->
            </div>
            <!--End tab-content-->
        </div>
    </section>
    @include('frontend._partials.heightlightImage')

    @include('frontend._partials.popular_categories')

    @include('frontend._partials.bannerSection')
    @include('frontend._partials.productCategories')

    <section class="deals section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 deal-co">
                    <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0" style="background-image: url('{{ asset('frontend') }}/assets/imgs/banner/menu-banner-7.jpg');">
                        <div class="deal-top">
                            <h2 class="text-brand">Deal of the Day</h2>
                            <h5>Limited quantities.</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden Design</a></h6>
                            <div class="product-price"><span class="new-price">$139.00</span><span class="old-price">$160.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                            <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 deal-co">
                    <div class="deal wow fadeIn animated" style="background-image: url('{{ asset('frontend') }}/assets/imgs/banner/menu-banner-8.jpg');">
                        <div class="deal-top">
                            <h2 class="text-brand">Men Clothing</h2>
                            <h5>Shirt & Bag</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="shop-product-right.html">Try something new on vacation</a></h6>
                            <div class="product-price"><span class="new-price">$178.00</span><span class="old-price">$256.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="2026/03/25 00:00:00"></div>
                            <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend._partials.brandSection')
    <section class="bg-grey-9 section-padding">
        <div class="container pt-25 pb-25">
            <div class="heading-tab d-flex">
                <div class="heading-tab-left wow fadeIn animated">
                    <h3 class="section-title mb-20"><span>Monthly</span> Best Sell</h3>
                </div>
                <div class="heading-tab-right wow fadeIn animated">
                    <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 d-none d-lg-flex">
                    <div class="banner-img style-2 wow fadeIn animated">
                        <img src="{{ asset('frontend') }}/assets/imgs/banner/banner-9.jpg" alt="">
                        <div class="banner-text">
                            <span>Woman Area</span>
                            <h4 class="mt-5">Save 17% on <br>Clothing</h4>
                            <a href="shop-grid-right.html" class="text-white">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-1-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-1-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Nulla</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Maecenas eget</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-2-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Duis </a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Luctus suscipit</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$138.85 </span>
                                                <span class="old-price">$145.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-3-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="best">Best Sell</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Fusce </a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Aliquam ac</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$152.85 </span>
                                                <span class="old-price">$156.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-4-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">-12%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Nunc </a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Fusce et ligula</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-11-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-11-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Aliquam</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Morbi lacinia</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End tab-pane-->
                        <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-6-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Cotton Leaf Printed 2</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-7-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-7-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$138.85 </span>
                                                <span class="old-price">$145.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-5-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-5-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="best">Best Sell</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Hugy Speaker</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$152.85 </span>
                                                <span class="old-price">$156.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-10-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-10-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">-12%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-12-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-12-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                            <div class="carausel-4-columns-cover arrow-center position-relative">
                                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-8-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-13-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-13-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$138.85 </span>
                                                <span class="old-price">$145.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-14-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-14-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="best">Best Sell</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Hugy Speaker</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$152.85 </span>
                                                <span class="old-price">$156.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-15-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-15-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">-12%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-wrap">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-11-1.jpg" alt="">
                                                <img class="hover-img" src="{{ asset('frontend') }}/assets/imgs/shop/product-11-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="shop-grid-right.html">Watch</a>
                                            </div>
                                            <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                <span>70%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$238.85 </span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End tab-content-->
                </div>
                <!--End Col-lg-9-->
            </div>
        </div>
    </section>

    <section class="mb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                    <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
                        <img src="{{ asset('frontend') }}/assets/imgs/banner/banner-10.jpg" alt="">
                        <div class="banner-text">
                            <span>Shoes Zone</span>
                            <h4>Save 17% on <br>All Items</h4>
                            <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">Deals & Outlet</h4>
                    <div class="product-list-small wow fadeIn animated">
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-3.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Fish Print Patched T-shirt</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-4.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Vintage Floral Print Dress</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-5.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Multi-color Stripe Circle Print T-Shirt</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">Top Selling</h4>
                    <div class="product-list-small wow fadeIn animated">
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-6.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Geometric Printed Long Sleeve Blosue</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-7.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Print Patchwork Maxi Dress</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-8.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Daisy Floral Print Straps Jumpsuit</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">Hot Releases</h4>
                    <div class="product-list-small wow fadeIn animated">
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-9.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Floral Print Casual Cotton Dress</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-1.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Ruffled Solid Long Sleeve Blouse</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                        <article class="row align-items-center">
                            <figure class="col-md-4 mb-0">
                                <a href="shop-product-right.html"><img src="{{ asset('frontend') }}/assets/imgs/shop/thumbnail-2.jpg" alt=""></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h4 class="title-small">
                                    <a href="shop-product-right.html">Multi-color Print V-neck T-Shirt</a>
                                </h4>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
