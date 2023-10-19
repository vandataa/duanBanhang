@extends('layout.layout')
@section('content')
    <div class="st-content">
        <!-- START: Banner Section -->
        <div class="st-height-b80 st-height-lg-b80"></div>
        <section class="st-page-head st-bg st-style1 text-center st-overlay wow fadeIn" data-wow-duration="1s"
            data-wow-delay="0.2s" data-src="assets/img/page-head9.jpg">
            <div class="container">
                <h1 class="st-page-title">Checkout</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </section>
        <!-- END: Banner Section -->

        <!-- START: Checkout Section -->
        <section class="st-contact-section">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <form action="{{ route('shop_cart.donebill') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="st-othentication-card">

                                <h4 class="st-widget-title st-size-md"><span>Billing Information</span></h4>
                                <div class="form-group">
                                    <input type="text" placeholder="Full name" name="name"
                                        value="{{ Auth::user()->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Email address" name="email"
                                        value="{{ Auth::user()->email }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Phone (Optional)"
                                        name="phone"value="{{ Auth::user()->phone }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Address" name="address"
                                        value="{{ Auth::user()->address }}" class="form-control">
                                </div>
                            </div>
                            <div class="st-height-b0 st-height-lg-b30"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="st-othentication-card">

                                <h4 class="st-widget-title st-size-md"><span>Your order</span></h4>
                                <table class="table st-table st-style1 table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                            $total_product = 0;
                                        @endphp
                                        @foreach ((array) session('cart') as $id => $details)
                                            @php
                                                $total += $details['price'] * $details['quantity'];
                                            @endphp
                                        @endforeach
                                        @if (session('cart'))
                                            @foreach (session('cart') as $details)
                                                <tr>
                                                    <td>{{ $details['product_name'] }}</td>
                                                    <td>$ {{ $details['price'] * $details['quantity'] }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>Total </td>
                                            <td>$ {{ $total }}</td>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <div class="st-height-b30 st-height-lg-b30"></div>
                            <div class="st-othentication-card">
                                <h4 class="st-widget-title st-size-md"><span>Payment Method</span></h4>
                                <div class="st-payment-options">
                                    {{-- <div class="custom-control custom-radio payment-option">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Direct bank transfer</label>
                                        <p class="bank-payment-note">Make your payment directly into our bank account.
                                            Please use your Order
                                            ID as the payment reference.</p>
                                    </div> --}}
                                    <div class="custom-control custom-radio payment-option">
                                        <input type="radio" value="cash on" id="customRadio" name="pay"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio">Cash on delivery</label>
                                    </div>
                                    {{-- <div class="custom-control custom-radio payment-option">
                                        <input type="radio" id="customRadio4" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">Paypal</label>
                                    </div>
                                    <div class="custom-control custom-radio payment-option">
                                        <input type="radio" id="customRadio5" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio5">Credit card</label>
                                    </div> --}}
                                </div>
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                    <label class="custom-control-label" for="customControlAutosizing1">I’ve read and
                                        accept the terms & conditions</label>
                                </div>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="">
                                @php
                                    $cart_name = '';
                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                    $date = date('d/m/y-H:i:s');
                                @endphp
                                @foreach ((array) session('cart') as $id => $details)
                                    @php
                                        $cart_name .= $details['product_name'] .= ' x'. $details['quantity']. ','  ;
                                        $total_product += $details['quantity'];
                                    @endphp
                                @endforeach
                                <input type="hidden" name="date" value="{{ $date }}" id="">
                                <input type="hidden" name="cart_bill" value="{{ $cart_name }}" id="">
                                <input type="hidden" name="total" value="{{ $total }}" id="">
                                <input type="hidden" name="product" value="{{ $total_product }}" id="">
                                <div class="st-height-b20 st-height-lg-b20"></div>
                                <button type="submit" class="btn st-btn-custom st-accent btn-md">Place Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- END: Checkout Section -->
    </div>
@endsection
