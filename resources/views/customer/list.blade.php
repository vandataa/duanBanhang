@extends('adminlayout.layout')

@section('content')
    <!-- main content start -->
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>All Customer</h5>
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
                                            <input class="form-check-input" type="checkbox" id="showName" checked>
                                            <label class="form-check-label" for="showName">
                                                Name
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showUsername" checked>
                                            <label class="form-check-label" for="showUsername">
                                                Role
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showDateRegistered" checked>
                                            <label class="form-check-label" for="showDateRegistered">
                                                Date Registered
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showEmail" checked>
                                            <label class="form-check-label" for="showEmail">
                                                Email
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showOrders" checked>
                                            <label class="form-check-label" for="showOrders">
                                                Orders
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="showTotalSpend" checked>
                                            <label class="form-check-label" for="showTotalSpend">
                                                Total Spend
                                            </label>
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
                            <div class="btn-box d-md-flex d-none gap-2">
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
                                                    <select class="form-control form-control-sm"
                                                        data-placeholder="Bulk action">
                                                        <option value="">Bulk action</option>
                                                        <option value="0">Move to trash</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <button class="btn btn-sm btn-primary">Apply</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <select class="form-control form-control-sm">
                                                <option value="0">Active</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Inactive</option>
                                                <option value="3">Hold</option>
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
                                                                id="filterStatus" checked>
                                                            <label class="form-check-label" for="filterStatus">
                                                                Status
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="filterDate" checked>
                                                            <label class="form-check-label" for="filterDate">
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
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Date Registered</th>
                                    <th>Email</th>
                                    <th>Orders</th>
                                    <th>Country / Region</th>
                                    <th>City</th>
                                    <th>Region</th>
                                    <th>Postal Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $cus)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td><a href="{{ route('customer.fix', $cus->id) }}">{{ $cus->name }}</a></td>
                                        <td>{{ $cus->nameRole }}</td>
                                        <td>{{ $cus->created_at }}</td>
                                        <td><a href="#">{{ $cus->email }}</a></td>
                                        <td>2</td>
                                        <td>
                                            <form class="row" action="{{ route('customer.update', $cus->id) }}"
                                                method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="col">
                                                    <select class="form-control form-control-sm select2-hidden-accessible"
                                                        name="role" id="">
                                                        <option>change role</option>
                                                        <option value="1">User</option>
                                                        <option value="2">Quản trị</option>
                                                        <option value="3">Admin</option>
                                                    </select>
                                                    <input type="hidden" name="id" value="{{ $cus->id }}"
                                                        id="">
                                                </div>
                                                <div class="col">
                                                    <button class="btn btn-sm btn-primary w-100"
                                                        type="submit">change</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>Dhaka</td>
                                        <td>CA</td>
                                        <td>12563</td>
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
