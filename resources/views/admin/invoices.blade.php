@extends('adminlayout.layout')
@section('content')
    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Invoices</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-xxl-7 col-xl-11">
                <div class="panel rounded-0">
                    <div class="panel-body invoice" id="invoiceBody">
                        <div class="invoice-header mb-25">
                            <div class="row justify-content-between align-items-end">
                                <div class="col-xl-4 col-lg-5 col-sm-6">
                                    <div class="shop-address">
                                        <div class="logo mb-20">
                                            <img src="{{ asset('assets/images/Artboard 5.png') }}" alt="Logo">
                                        </div>
                                        <div class="part-txt">
                                            <p class="mb-1">House: {{ $bill->address }}</p>
                                            <p class="mb-1">Email: {{ $bill->email }}</p>
                                            <p class="mb-1">Phone: {{ $bill->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex gap-xl-4 gap-3 status-row">
                                        <div class="w-50">
                                            <div class="payment-status">
                                                <label class="form-label">Payment Status:</label>
                                                <select class="form-control">
                                                    <option value="0">Paid</option>
                                                    <option value="1">Unpaid</option>
                                                    <option value="2">Partial</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w-50">
                                            <div class="Order-status">
                                                <label class="form-label">Order Status:</label>
                                                <select class="form-control">
                                                    <option value="0">Pending</option>
                                                    <option value="1">Delivered</option>
                                                    <option value="2">Canceled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-body">
                            <div class="info-card-wrap mb-25">
                                <div class="row">

                                </div>
                            </div>
                            <div class="table-responsive mb-25">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Products</th>
                                            <th>Price</th>
                                            <th>Qty.</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $stt = 0;
                                            $billz = array_diff(explode(',', $bill->cart_bill), ['']);
                                        @endphp
                                        @foreach ($billz as $billz)
                                            <tr>
                                                @php
                                                    $stt++;
                                                    $name = explode('x', $billz);
                                                @endphp
                                                <td>{{ $stt }}</td>
                                                <td>{{ $name[0] }}</td>
                                                <td>{{ $name[1] }}</td>
                                                <td>{{ $name[2] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="total-payment-area row justify-content-end mb-25">
                                <div class="col-md-4 col-sm-6">
                                    <ul>
                                        <li class="d-flex justify-content-between">Net
                                            Total:<span>{{ $bill->total }}</span></li>
                                        <li class="d-flex justify-content-between">Shipping Cost:<span>0</span></li>
                                        <li class="d-flex justify-content-between">Vat:<span>0</span></li>
                                        <li class="d-flex justify-content-between">Total:<span>{{$bill->total}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="invoice-note text-center mb-0">Please check your parcel carefully, Please check your
                                parcel carefully, Please check your parcel carefully</p>
                        </div>
                    </div>
                    <div class="panel-body border-top">
                        <div class="btn-box d-flex justify-content-end gap-2">
                            <button class="btn btn-sm btn-primary" id="printInvoice"><i class="fa-light fa-print"></i>
                                Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Digiboard</span>
            </p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->
@endsection
