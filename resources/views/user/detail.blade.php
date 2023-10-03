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
                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
            </div>
        </section>
        <!-- END: Banner Section -->
        <!-- START: Product List Section -->
        <section class="product-list-section">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <!-- Product Details Image -->
                    <div class="col-md-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="st-tabs st-fade-tabs st-style4">
                            <div class="tab-content st-lightgallery">
                                <div id="product1" class="st-tab active">
                                    <img src="{{ asset('storage/images/' . $product->thunm) }}" alt="">
                                    <a href="{{ asset('storage/images/' . $product->thunm) }}"
                                        class="st-product-preview-btn st-lightbox-item"><i class="far fa-eye"></i></a>
                                    <span class="st-product-label">Sale</span>
                                </div>
                                <div id="product2" class="st-tab">
                                    <img src="{{ asset('storage/images/' . $product->galery) }}" alt="">
                                    <a href="{{ asset('storage/images/' . $product->galery) }}"
                                        class="st-product-preview-btn st-lightbox-item"><i class="far fa-eye"></i></a>
                                    <span class="st-product-label">Sale</span>
                                </div>

                            </div>
                            <ul class="st-tab-links st-style4 st-mp0">

                            </ul>
                        </div><!-- .st-tabs -->
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div>
                    <!-- Product Details Description -->
                    <div class="col-md-7 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="st-product-info">
                            <!-- Product Details Title -->
                            <h2 class="st-product-details-title"><a href="#">{{ $product->title }}l</a></h2>
                            <p class="st-product-price st-offer">{{ $product->price }} <span
                                    class="st-previous-price">{{ $product->price }} </span></p>
                            <!-- Product Details Review -->
                            <ul class="st-mp0 st-product-info-list">
                                <li>
                                    <b>Product No:</b> {{ $product->productCode }}
                                </li>
                                <li class="align-items-center">
                                    <b>Reviews:</b>
                                    <div class="st-star" data-star="4">
                                        <div class="st-star-in"></div>
                                    </div>
                                </li>
                                <li><b>Available:</b>{{ $product->inventory }} </li>
                                <li><b>Product type:</b> Casual Shoe</li>
                                <li><b>Brand:</b> Apparel</li>
                                <li>
                                    <b>Product details</b>
                                    <p>{{ $product->description }} </p>
                                </li>

                                <li class="align-items-center st-quantity-wrap">
                                    <b>Quantity:</b>
                                    {{-- <form action="{{ route('shop_cart.add_to_cart', $product->id) }}" method="get"> --}}
                                        @csrf
                                        <div class="st-quantity">
                                            <input type="text" value="01">
                                            <button class="st-quantity-btn st-add" max='{{ $product->inventory }}'></button>
                                            <button class="st-quantity-btn st-minus"></button>
                                        </div>
                                        <button type="submit" class="btn st-btn-custom st-accent">Add to cart</button>
                                    {{-- </form> --}}
                                </li>
                            </ul>
                            <div class="st-height-b30 st-height-lg-b30"></div>
                            <div class="st-product-share">
                                <h4 class="st-product-share-title">Shares:</h4>
                                <ul class="st-product-share-links st-mp0">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="st-height-b45 st-height-lg-b45"></div>
                <!-- Product Description Tab -->
                <div class="st-tabs st-fade-tabs st-style5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <ul class="st-tab-links st-style5 st-mp0">
                        <li class="st-tab-title active ">
                            <a href="#Description" class="st-tab-link">Description</a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Reviews" class="st-tab-link">Reviews (3)</a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#AdditionalInformation" class="st-tab-link">Additional information</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="Description" class="st-tab active">
                            <div class="st-product-description">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris
                                    nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in
                                    voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident.
                                </p>
                                <ul>
                                    <li>Sunt in culpa qui officia deserunt mollit anim id est laborum</li>
                                    <li>Consectetur adipiscing elit, sed do eiusmod tempor incid</li>
                                    <li>Idunt ut labore et dolore magna aliqua imad minim veniam</li>
                                    <li>Quis nostrud exercitation ullamco laboris nisiut</li>
                                </ul>
                            </div><!-- st-product-isotop-item 1 -->
                        </div>
                        <div id="Reviews" class="st-tab">
                            <div class="comments-area st-style1">
                                <div class="comment-list-outer">
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <div class="comment-author">
                                                        <img src="assets/img/testimonial-sm1.jpg" alt="comment1"
                                                            class="avatar">
                                                        <a href="#" class="nm">Smith Jhon</a>
                                                    </div><!-- .comment-author -->
                                                    <div class="st-star" data-star="4">
                                                        <div class="st-star-in"></div>
                                                    </div>
                                                </div><!-- .comment-meta -->
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="comment-meta">
                                                            <div class="comment-author">
                                                                <img src="assets/img/testimonial-sm2.jpg" alt="comment1"
                                                                    class="avatar">
                                                                <span class="nm"><a href="#">Robat
                                                                        Newman</a></span>
                                                            </div><!-- .comment-author -->
                                                            <div class="st-star" data-star="4">
                                                                <div class="st-star-in"></div>
                                                            </div>
                                                        </div><!-- .comment-meta -->
                                                        <div class="comment-content">
                                                            <p>Consectetuer adipiscing elit. Lorem ipsum dolor sit amet,
                                                                consectetuer.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol><!-- .children -->
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <div class="comment-author">
                                                        <img src="assets/img/testimonial-sm3.jpg" alt="comment1"
                                                            class="avatar">
                                                        <span class="nm"><a href="#">Hannibal Lecter</a></span>
                                                    </div><!-- .comment-author -->
                                                    <div class="st-star" data-star="4">
                                                        <div class="st-star-in"></div>
                                                    </div>
                                                </div><!-- .comment-meta -->
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet. Lorem ipsum adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div id="AdditionalInformation" class="st-tab">
                            <table class="table table-bordered st-table st-style4">
                                <tbody>
                                    <tr>
                                        <td>Color</td>
                                        <td>Red</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>Large</td>
                                    </tr>
                                    <tr>
                                        <td>Trail</td>
                                        <td>6 days</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- .st-tabs -->
                <div class="st-height-b85 st-height-lg-b45"></div>
                <h4 class="st-widget-title st-size-md wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <span>Related Product</span>
                </h4>
                <div class="st-height-b10 st-height-lg-b10"></div>
                <div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    @foreach ($sameproduct as $same)
                        <div class="col-lg-3 col-sm-6">
                            <div class="st-product st-style1">
                                <div class="st-product-in">
                                    <!-- Product Image -->
                                    <div class="st-product-thumb">
                                        <a href='{{ route('shop.detail', $same->id) }}'><img
                                                src="{{ asset('storage/images/') }}" alt="Product"></a>
                                        <div class="st-product-tools">
                                            <ul>
                                                <li><a href="{{ route('shop.detail', $same->id) }}" tabindex="0"><i
                                                            class="fas fa-eye"></i></a></li>
                                                <li><a href="#" tabindex="0"><i
                                                            class="fas fa-shopping-cart"></i></a></li>
                                                <li><a href="#" tabindex="0"><i class="fas fa-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Name and Price -->
                                    <div class="st-product-details">
                                        <h4 class="st-product-title"><a
                                                href='{{ route('shop.detail', $same->id) }}'>{{ $same->title }}</a></h4>
                                        <div class="st-product-label">
                                            <p class="st-product-price">$235</p>
                                            <div class="st-star" data-star="5">
                                                <div class="st-star-in"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="st-height-b0 st-height-lg-b30"></div>
                        </div><!-- .col -->
                    @endforeach
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b50"></div>
        </section>
        <!-- END: Product List Section -->
    </div>
@endsection
