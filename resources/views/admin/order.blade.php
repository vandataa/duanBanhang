@extends('adminlayout.layout')
@section('content')
    <!-- main content start -->
    <div class="main-content">
        <div class="row g-4">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>All Order</h5>
                        <div class="btn-box d-flex gap-2">
                            <div id="tableSearch"></div>
                            <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                    class="fa-light fa-arrows-rotate"></i></button>
                            <div class="digi-dropdown dropdown">
                                <button class="btn btn-sm btn-icon btn-outline-primary" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false"><i
                                        class="fa-regular fa-ellipsis-vertical"></i></button>
                                <ul class="digi-dropdown-menu dropdown-menu">
                                    <li class="dropdown-title">Show Table Title</li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showOrderId" checked>
                                            <label class="form-check-label" for="showOrderId">
                                                Order ID
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showCustomer" checked>
                                            <label class="form-check-label" for="showCustomer">
                                                Customer
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showStatus" checked>
                                            <label class="form-check-label" for="showStatus">
                                                Status
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showProduct" checked>
                                            <label class="form-check-label" for="showProduct">
                                                Product
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showPrice" checked>
                                            <label class="form-check-label" for="showPrice">
                                                Price
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showPaymentMethod" checked>
                                            <label class="form-check-label" for="showPaymentMethod">
                                                Payment Method
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showDeliveryStatus" checked>
                                            <label class="form-check-label" for="showDeliveryStatus">
                                                Delivery Status
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showOrderDate" checked>
                                            <label class="form-check-label" for="showOrderDate">
                                                Order Date
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showAction" checked>
                                            <label class="form-check-label" for="showAction">
                                                Action
                                            </label>
                                        </div>
                                    </li>
                                    <li class="dropdown-title pb-1">Showing</li>
                                    <li>
                                        <div class="input-group">
                                            <input type="number" class="form-control form-control-sm w-50" value="10">
                                            <button class="btn btn-sm btn-primary w-50">Apply</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="product-table-quantity d-flex justify-content-between align-items-center mb-20">
                            <ul class="mb-0">
                                <li class="text-white">All (23)</li>
                                <li>Pending (19)</li>
                                <li>Draft (05)</li>
                                <li>Trush (05)</li>
                            </ul>
                            <div class="btn-box d-lg-flex d-none gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary" title="Download Excel"
                                    id="downloadExcel"><i class="fa-light fa-file-spreadsheet"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary" title="Download PDF"
                                    id="downloadPdf"><i class="fa-light fa-file-pdf"></i></button>
                            </div>
                        </div>
                        <div class="table-filter-option">
                            <div class="row g-3">
                                <div class="col-xl-10 col-9 col-xs-12">
                                    <div class="row g-3">
                                        <div class="col">
                                            <form class="row g-2">
                                                <div class="col">
                                                    <select class="form-control form-control-sm">
                                                        <option value="0">Bulk action</option>
                                                        <option value="1">Move to trash</option>
                                                        <option value="2">Change Status to processing</option>
                                                        <option value="3">Change Status to on-hold</option>
                                                        <option value="4">Change Status to completed</option>
                                                        <option value="5">Change Status to cancelled</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <button class="btn btn-sm btn-primary w-100">Apply</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <select class="form-control form-control-sm">
                                                <option value="0">All Orders</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Cancel</option>
                                                <option value="4">Return</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" name="basic"
                                                id="orderTableFilter" readonly>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-sm btn-primary"><i class="fa-light fa-filter"></i>
                                                Filter</button>
                                        </div>
                                        <div class="col">
                                            <div class="digi-dropdown dropdown">
                                                <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="dropdown"
                                                    data-bs-auto-close="outside" aria-expanded="false"><i
                                                        class="fa-regular fa-plus"></i></button>
                                                <ul class="digi-dropdown-menu dropdown-menu">
                                                    <li class="dropdown-title">Filter Options</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="filterDeliveryStatus" checked>
                                                            <label class="form-check-label" for="filterDeliveryStatus">
                                                                Delivery Status
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="filterDateRange" checked>
                                                            <label class="form-check-label" for="filterDateRange">
                                                                Date Range
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                                    <div id="productTableLength"></div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped"
                            id="allProductTable">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="markAllProduct">
                                        </div>
                                    </th>
                                    <th>Order ID</th>
                                    <th>Customer</th>

                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Payment Method</th>
                                    <th>Delivery Status</th>
                                    <th>Order Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $order)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td><a
                                                href="{{ route('admin.invoices', $order->billcode) }}">#{{ $order->billcode }}</a>
                                        </td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->product }}</td>
                                        <td>${{ $order->total }}</td>
                                        <td>{{ $order->paymain }}</td>
                                        <td><span>{{ $order->nameStatus }}</span></td>
                                        <td>{{ $order->date }}</td>
                                        <td>
                                            <div class="btn-box" style="margin-right: 40px">
                                                <form action="{{ route('order.destroy', $order->idbill) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"><i class="fa-light fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
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
