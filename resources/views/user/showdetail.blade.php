@extends('layout.layout')
@section('content')
    <div class="st-content">
        <!-- START: Banner Section -->
        <div class="st-height-b80 st-height-lg-b80"></div>
        <section class="st-page-head st-bg st-style1 text-center st-overlay" data-src="assets/img/page-head9.jpg">
            <div class="container">
                <h1 class="st-page-title">My detail</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My account</li>
                </ol>
            </div>
        </section>
        <!-- END: Banner Section -->
        <!-- START: Login - Register Section -->
        <div class="st-height-b120 st-height-lg-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st-tabs st-fade-tabs st-style3 st-type1">
                        <ul class="st-tab-links st-style3 st-mp0">
                            <li class="st-tab-title active">
                                <a href="#Address" class="st-tab-link"><i class="fas fa-map-signs"></i>Bill</a>
                            </li>
                            <li class="st-tab-title">
                                <a href="#Orders" class="st-tab-link"><i class="fas fa-shopping-basket"></i>Orders</a>
                            </li>
                            <li class="st-tab-title">
                                <a href='{{ route('account.index') }}'><i class="fas fa-sign-out-alt"></i>Back</a>
                            </li>
                        </ul>
                        <div id="Orders" class="st-tab">
                            <div class="table-responsive">
                                <table class="table st-table st-style2">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $order)
                                            <tr>
                                                <td>#{{ $order->billcode }}</td>
                                                <td>{{ $order->date }}</td>
                                                <td>{{ $order->paymain }}</td>
                                                <td>${{ $order->total }} for {{ $order->product }} items</td>
                                                <td><a href="{{ route('account.detailBill', $order->id) }}"
                                                        class="btn st-btn-custom st-accent btn-sm">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="Address" class="st-tab active">
                                <div class="row">
                                    {{-- <a href="#" class="st-address-edit"><i
                                        class="fas fa-pencil-alt"></i></a> --}}

                                    <div class="col-lg-6">
                                        <div class="st-tab-address">
                                            <h3>{{ $bill->billcode }}</h3>
                                            <p>{{ $bill->name }}<br>
                                                {{ $bill->email }}<br>
                                                {{ $bill->address }}<br>
                                                {{ $bill->paymain }}<br>
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="st-tab-address">
                                            <table style="border-radius: 20px ; width:fit-content" border="1px">
                                                <tr>
                                                    <th style="width: 50px ;text-align: center">STT</th>
                                                    <th style="width: 820px ;text-align: center">Name product</th>
                                                    <th style="width: 100px ;text-align: center">Price</th>
                                                    <th style="width: 80px ;text-align: center">Quantity</th>
                                                </tr>
                                                @php
                                                    $stt = 0;
                                                    $bills = array_diff(explode(',', $bill->cart_bill), ['']);
                                                @endphp
                                                @foreach ($bills as $bills)
                                                    <tr>
                                                        @php
                                                            $stt++;
                                                            $name = explode('x', $bills);

                                                        @endphp
                                                        <td>{{ $stt }}</td>
                                                        <td style="text-align: center">{{ $name[0] }}</td>
                                                        <td style="text-align: center">{{ $name[1] }}</td>
                                                        <td style="text-align: center">{{ $name[2] }}</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td></td>
                                                    <td style="	grid-column: span 2 / span 4;text-align: center">Total</td>
                                                    <td style="text-align: center">{{ $bill->product }}</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td style="	grid-column: span 2 / span 2;text-align: center">Price</td>
                                                    <td style="text-align: center">{{ $bill->total }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .st-tabs -->
                </div><!-- .col -->
            </div>
        </div>
        <div class="st-height-b120 st-height-lg-b80"></div>
        <!-- END: Login - Register Section -->
    </div>
@endsection
