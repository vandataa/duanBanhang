@extends('layout.layout')
@section('content')
    <div class="st-content">
        <!-- START: Banner Section -->
        <div class="st-height-b80 st-height-lg-b80"></div>
        <section class="st-page-head st-bg st-style1 text-center st-overlay" data-src="assets/img/page-head11.jpg">
            <div class="container">
                <h1 class="st-page-title">Shopping cart</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
                </ol>
            </div>
        </section>
        <!-- END: Banner Section -->

        <!-- START: Shopping Cart Section -->
        <section>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table st-table st-style2" id="cart"">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp
                            @foreach ((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            @if (session('cart'))
                                @foreach (session('cart') as $details)
                                    <tr data-id="{{ $id }}">
                                        <td>

                                            <div class="st-table-img"><img
                                                    src="{{ asset('storage/images/' . $details['photo']) }}" alt="product1">
                                            </div>
                                        </td>
                                        <td data-th="Product">{{ $details['product_name'] }}
                                        <td data-th="Price">{{ $details['price'] }}</td>
                                        <td data-th="Quantity">
                                            <div class="st-quantity">
                                                <input type="text" class="quantity cart_update"
                                                    value="{{ $details['quantity'] }}">

                                            </div>
                                        </td>
                                        <td data-th="Subtotal">{{ $details['price'] * $details['quantity'] }}</td>

                                        <td class="actions text-center" data-th="">
                                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>
                                                Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- Coupon Cart Update Button -->
                <div class="st-coupon-area">

                    <div class="st-card-btns actions" data-th="">
                        <button type="submit" class="btn st-btn-custom st-accent btn-md cart_update">Update Cart</button>
                    </div>
                </div>
                <div class="st-height-b60 st-height-lg-b60"></div>

                <div class="col-lg-6">
                    <div class="st-othentication-card">
                        <h4 class="st-widget-title st-size-md"><span>Cart Totals</span></h4>
                        <table class="table st-table st-style3 table-borderless">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="text-right">${{ $total }}</td>
                                </tr>
                                <tr>
                                    <td>Shipping cost</td>
                                    <td class="text-right">$00.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Order Total</td>
                                    <td class="text-right">${{ $total }}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="text-right">

                            <a href="{{ route('shop_cart.check-out') }}" type="submit"
                                class="btn st-btn-custom st-accent btn-md">Proceed to
                                Checkout</a>

                        </div>
                    </div>
                </div><!-- .col -->
            </div>
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
    <!-- END: Checkout Section -->
    </div>
@endsection
