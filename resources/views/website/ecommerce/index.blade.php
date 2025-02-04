@extends('website.ecommerce.layouts.ecommerce')
@section('content')
    <!-- slider area start -->
    @include('website.ecommerce.home_include.slider', ['latest_products' =>  $latestProducts])

    <div class="all-product-area mtb-45" id="productList">
        <div class="container-fluid overflow-auto">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-12">

                    @include('website.ecommerce.home_include.latest_deal')

                    <!-- featured-area start -->
                    @include('website.ecommerce.home_include.featured')
                    <!-- featured-area end -->
                    <!-- testimonils-area start -->
                    @include('website.ecommerce.home_include.testimonial')
                    <!-- testimonils-area end -->
                    <!-- blog-area start -->
                    {{-- @include('website.ecommerce.home_include.blog') --}}
                    <!-- blog-area end -->
                    <!-- newsletter-area start -->
                    @include('website.ecommerce.home_include.newsletter')
                    <!-- newsletter-area start -->
                </div>

                <!-- product-area start -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-12 order-first order-lg-last">

                    <!-- tab-area start -->
                    <div class="tab-area box-shadow bg-fff">
                        <div class="product-title home3-bg text-uppercase">
                            <i class="fa fa-check-square-o icon home3-bg2"></i>
                            <h3>Produits Récents</h3>
                            <div class="tab-menu home3-tab-menu floatright hidden-xs">
                                <ul class="nav">
                                    <li><a href="#product1_list" data-toggle="pill" class="active">Electroniques</a>
                                    </li>
                                    <li><a href="#product2_list" data-toggle="pill">Smartphone</a></li>
                                    <li><a href="#product3_list" data-toggle="pill">Tablettes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="product1_list" class="tab-pane fade in active show" style="padding: 0px 15px;">
                                <product-single-body></product-single-body>
                            </div>
                            <div id="product2_list" class="tab-pane fade" style="padding: 0px 15px;">
                                <product-single-body></product-single-body>
                            </div>
                            <div id="product3_list" class="tab-pane fade" style="padding: 0px 15px;">
                                <product-single-body></product-single-body>
                            </div>
                        </div>
                    </div>
                    <!-- tab-area end -->

                    <!-- banner-area start -->
                    <div class="banner-area mtb-35">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/banner/1.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/banner/2.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-area end -->

                    <!-- tab-area start -->
                    <div class="tab-area box-shadow bg-fff">
                        <div class="product-title home3-bg text-uppercase">
                            <i class="fa fa-check-square-o icon home3-bg2"></i>
                            <h3>Catégorie de produits</h3>
                            <div class="tab-menu home3-tab-menu floatright hidden-xs">
                                <ul class="nav">
                                    <li><a href="#category1_products" data-toggle="tab" class="active">Electroniques</a></li>
                                    <li><a href="#category2_products" data-toggle="tab">Smartphone</a></li>
                                    <li><a href="#category3_products" data-toggle="tab">Tablettes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active show" id="category1_products">
                                <x-products.list-by-category slug="Clothing"/>
                            </div>
                            <div class="tab-pane fade" id="category2_products">
                                <x-products.list-by-category slug="Saree"/>
                            </div>
                            <div class="tab-pane fade" id="category3_products">
                                <x-products.list-by-category slug="Cream"/>
                            </div>
                        </div>
                    </div>
                    <!-- tab-area end -->

                    <!-- banner-area start -->
                    <div class="banner-area mtb-35">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/banner/4.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/banner/5.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-area end -->

                    <!-- mostviewed-area start -->
                    <div class="mostviewed-area mt-35 box-shadow bg-fff">
                        <div class="product-title home3-bg text-uppercase">
                            <i class="fa fa-check-square-o icon home3-bg2"></i>
                            <h3>Populaires</h3>
                        </div>
                        <x-products.list-by-category slug="Clothing"/>
                    </div>
                    <!-- mostviewed-area end -->
                </div>
                <!-- product-area end -->

                <div class="modal fade" id="productViewModal" style="z-index: 99999999999;" tabindex="-1"
                    aria-labelledby="productViewModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productViewModalLabel">Détails</h5>
                                <button type="button" class="btn-close" data-dismiss="modal"
                                    aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <product-details></product-details>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- brand-area start -->
    <div class="brand-area mb-35">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="brand-active box-shadow p-15 bg-fff">
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/6.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/7.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="{{ asset('contents/website') }}/img/brand/8.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->
@endsection
