@extends('layout.layout')
@section('content')
    <div class="st-content">
        <!-- START: Banner Section -->
        <div class="st-height-b80 st-height-lg-b80"></div>
        <section class="st-page-head st-bg st-style1 text-center st-overlay wow fadeIn" data-wow-duration="1s"
            data-wow-delay="0.2s" data-src="assets/img/page-head4.jpg">
            <div class="container">
                <h1 class="st-page-title">Awesome products</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product list</li>
                </ol>
            </div>
        </section>
        <!-- END: Banner Section -->

        <!-- START: Product List Section -->
        <section class="product-list-section">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row st-products-with-left-sidebar">
                    <div class="col-lg-4 col-xl-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="st-product-list-left-in">
                            <div class="st-widget">
                                <h4 class="st-widget-title"><span>Categories</span></h4>
                                <ul class="st-catagory-list">
                                    @foreach ($category as $cate)
                                        <li><a href="{{route('shop.shopsame',$cate->id)}}">{{ $cate->categoryName }} <span
                                                    class="st-catagory-count">(10)</span></a></li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="st-height-b50 st-height-lg-b50"></div>
                            <div class="st-widget">
                                <h4 class="st-widget-title"><span>Price</span></h4>
                                <div class="st-range-slider-wrap">
                                    <div id="slider-range"></div>
                                    <div class="st-amount-wrap">
                                        <input type="text" id="amount" readonly>
                                        <button class="st-filter-btn">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="st-height-b50 st-height-lg-b50"></div>
                            <div class="st-widget">
                                <h4 class="st-widget-title"><span>Color</span></h4>
                                <div class="st-color-picker-wrap">
                                    <button class="st-color-picker st-color1"></button>
                                    <button class="st-color-picker st-color2"></button>
                                    <button class="st-color-picker st-color3"></button>
                                    <button class="st-color-picker st-color4"></button>
                                    <button class="st-color-picker st-color5"></button>
                                    <button class="st-color-picker st-color6"></button>
                                    <button class="st-color-picker st-with-border st-color7"></button>
                                    <button class="st-color-picker st-color8"></button>
                                    <button class="st-color-picker st-color9"></button>
                                    <button class="st-color-picker st-color10"></button>
                                    <button class="st-color-picker st-color11"></button>
                                    <button class="st-color-picker st-color12"></button>
                                </div>
                            </div>
                            <div class="st-height-b50 st-height-lg-b50"></div>
                            <!-- Product Tags Tab -->
                            <div class="st-widget">
                                <h4 class="st-widget-title"><span>Recent products</span></h4>
                                <ul class="st-recent-product-list">
                                    <li>
                                        <div class="st-recent-product st-style1">
                                            <a href="#" class="st-recent-product-thumb st-zoom">
                                                <img src="assets/img/product/recent-product1.jpg" class="st-zoom-in"
                                                    alt="product1">
                                            </a>
                                            <div class="st-recent-product-info">
                                                <h2 class="st-recent-product-title">
                                                    <a href="#">Valentino garavani</a>
                                                </h2>
                                                <div class="st-recent-product-price">$199.00</div>
                                            </div>
                                        </div><!-- st-recent-product -->
                                    </li>
                                    <li>
                                        <div class="st-recent-product st-style1">
                                            <a href="#" class="st-recent-product-thumb st-zoom">
                                                <img src="assets/img/product/recent-product2.jpg" class="st-zoom-in"
                                                    alt="product2">
                                            </a>
                                            <div class="st-recent-product-info">
                                                <h2 class="st-recent-product-title">
                                                    <a href="#">Alexander mcoueen</a>
                                                </h2>
                                                <div class="st-recent-product-price">$250.00</div>
                                            </div>
                                        </div><!-- st-recent-product -->
                                    </li>
                                    <li>
                                        <div class="st-recent-product st-style1">
                                            <a href="#" class="st-recent-product-thumb st-zoom">
                                                <img src="assets/img/product/recent-product3.jpg" class="st-zoom-in"
                                                    alt="product3">
                                            </a>
                                            <div class="st-recent-product-info">
                                                <h2 class="st-recent-product-title">
                                                    <a href="product-list.html">React vision shoe</a>
                                                </h2>
                                                <div class="st-recent-product-price">$85.99</div>
                                            </div>
                                        </div><!-- st-recent-product -->
                                    </li>
                                </ul>
                            </div>
                            <div class="st-height-b50 st-height-lg-b50"></div>
                            <div class="st-widget">
                                <h4 class="st-widget-title"><span>Tags</span></h4>
                                <div class="st-tag-wrap">
                                    <a href="#" class="st-tag">Clothing</a>
                                    <a href="#" class="st-tag">Sports</a>
                                    <a href="#" class="st-tag">Socks</a>
                                    <a href="#" class="st-tag">Jackets</a>
                                    <a href="#" class="st-tag">Shoes</a>
                                    <a href="#" class="st-tag">Hoodies</a>
                                    <a href="#" class="st-tag">Sportswear</a>
                                    <a href="#" class="st-tag">T-shirt</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="st-products-head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="st-products-head-left">
                                <div class="st-product-view-btns">
                                    <span>View:</span>
                                    <button class="st-product-view-btn st-grid-view active"><i
                                            class="fas fa-th"></i></button>
                                    <button class="st-product-view-btn st-list-view"><i
                                            class="fas fa-list-ul"></i></button>
                                </div>
                            </div>
                            <div class="st-products-head-right">
                                <span class="page-view">Showing 1 to 12 of 30 </span>
                                <select class="st_select1" data-placeholder="Default Sorting">
                                    <!-- <option></option> -->
                                    <option value="1">Sort By Name</option>
                                    <option value="2">Sort By Low Price</option>
                                    <option value="2">Sort By High Price</option>
                                    <option value="3">Sort By Review</option>
                                </select>
                            </div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                        <div class="st-product-list st-three-column">
                            @foreach ($product as $pro)
                                <div class="st-product st-style1 wow fadeIn" data-wow-duration="1s"
                                    data-wow-delay="0.3s">
                                    <div class="st-product-in">
                                        <!-- Product Image -->
                                        <div class="st-product-thumb">
                                            <a href='{{ route('shop.detail', $pro->id) }}'><img src="{{ asset('storage/images/' . $pro->thunm) }}" width="200px" height="400px" alt="Product"></a>
                                            <div class="st-product-tools">
                                                <ul>
                                                    <li><a href='{{ route('shop.detail', $pro->id) }}' tabindex='0'><i
                                                                class="fas fa-eye"></i></a></li>
                                                    <li><a href='{{route('shop_cart.add_to_cart',$pro->id)}}' tabindex='0'><i
                                                                class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" tabindex="0"><i class="fas fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Product Name and Price -->
                                        <div class="st-product-details">
                                            <div class="st-product-label">
                                                <p class="st-product-price">{{ $pro->price }}</p>
                                                <div class="st-star" data-star="5">
                                                    <div class="st-star-in"></div>
                                                </div>
                                            </div>
                                            <h4 class="st-product-title"><a
                                                    href='{{ route('shop.detail', $pro->id) }}'>{{ $pro->title }}</a>
                                            </h4>
                                            <div class="st-product-desc">Lorem ipsum dolor sit amet, consectetuer
                                                adipiscing elit.
                                                Aenean commodo ligula eget dolor. Aenean massa.</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- .row -->
                        <div class="st-height-b40 st-height-lg-b40"></div>
                        <!-- Product List Pagination -->
                        <ul class="page-numbers">
                            <li><span class="page-number current">1</span></li>
                            <li><a class="page-number" href="#">2</a></li>
                            <li><a class="page-number" href="#">3</a></li>
                            <li><span class="page-number dotted"><i class="fas fa-ellipsis-h"></i></span></li>
                            <li><a class="page-number" href="#">8</a></li>
                            <li><a class="next page-number" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Product List Section -->
    </div>
@endsection
