@extends('layout.layout')
@section('content')
    <div class="st-content">
        <!-- START: Banner Section -->
        <div class="st-height-b80 st-height-lg-b80"></div>
        <section class="st-page-head st-bg st-style1 text-center st-overlay" data-src="assets/img/page-head9.jpg">
            <div class="container">
                <h1 class="st-page-title">My Account</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <li class="st-tab-title active ">
                                <a href="#Dashboard" class="st-tab-link"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li class="st-tab-title">
                                <a href="#Orders" class="st-tab-link"><i class="fas fa-shopping-basket"></i>Orders</a>
                            </li>
                            <li class="st-tab-title">
                                <a href="#Address" class="st-tab-link"><i class="fas fa-map-signs"></i>Address</a>
                            </li>
                            <li class="st-tab-title">
                                <a href="#AccountDetails" class="st-tab-link"><i class="fas fa-user"></i>Account Details</a>
                            </li>
                            <li class="st-tab-title">
                                <a href='{{ route('logout') }}'><i class="fas fa-sign-out-alt"></i>Logout</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="Dashboard" class="st-tab active">
                                <div class="st-MyAccount-content">
                                    <p>
                                        Hello <strong>{{ Auth::user()->name }}</strong>
                                        @if (Auth::user()->role == 2)
                                            (<strong></strong><a href="/admin">Admin</a>)
                                            @elseif (Auth::user()->role == 3)
                                            (<strong></strong><a href="/admin">Admin</a>)</p>
                                            @endif
                                    </p>


                                    <p>
                                        From your account dashboard you can view your <a
                                            href="https://wordpress-197386-766779.cloudwaysapps.com/shop/my-account/orders/">recent
                                            orders</a>, manage your <a
                                            href="https://wordpress-197386-766779.cloudwaysapps.com/shop/my-account/edit-address/">shipping
                                            and billing addresses</a>, and <a
                                            href="https://wordpress-197386-766779.cloudwaysapps.com/shop/my-account/edit-account/">edit
                                            your password and account details</a>.</p>
                                </div>
                            </div>
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
                            <div id="Address" class="st-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="st-tab-address">
                                            <h3>Billing Address<a href="#" class="st-address-edit"><i
                                                        class="fas fa-pencil-alt"></i></a></h3>
                                            <p>Jhon Mark<br>
                                                Company Name<br>
                                                34/A Wintheiser Circles <br>
                                                Lake Jordanmouth <br>
                                                Jordan</p>
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="st-tab-address">
                                            <h3>Billing Address<a href="#" class="st-address-edit"><i
                                                        class="fas fa-pencil-alt"></i></a></h3>
                                            <p>Jhon Mark<br>
                                                Company Name<br>
                                                34/A Wintheiser Circles <br>
                                                Lake Jordanmouth <br>
                                                Jordan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="AccountDetails" class="st-tab">
                                <form action="{{ route('account.update', Auth::user()->id) }}" enctype="multipart/form-data"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="">
                                    <div class="st-othentication-card">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" placeholder="First name *" name="name"
                                                    value="{{ Auth::user()->name }}" class="form-control">
                                            </div>
                                        </div><!-- .form-row -->

                                        <div class="form-group">
                                            <input type="text" placeholder="Email address *"
                                                value="{{ Auth::user()->email }}" name="email" disabled
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="Password *" disabled
                                                value="{{ Auth::user()->password }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address" value="{{ Auth::user()->address }}"
                                                placeholder=" Address " class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" value="{{ Auth::user()->phone }}"
                                                placeholder=" Phone " class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image" placeholder=" image "
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="newp" placeholder=" New Password "
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Confirm password " value=""
                                                class="form-control">
                                        </div>
                                        <button type="submit" class="btn st-btn-custom st-accent btn-md">Save
                                            changes</button>
                                    </div>
                                </form>
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
