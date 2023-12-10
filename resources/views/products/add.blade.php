@extends('adminlayout.layout')
@section('content')
    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Add New Product</h2>
            <div class="btn-box">
                <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">View All</a>
            </div>
        </div>
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-xxl-9 col-lg-8">
                    <div class="panel mb-25">
                        <div class="panel-body product-title-input">
                            <label class="form-label">Write Title</label>
                            <input type="text" class="form-control" id="productTitle" name="title"
                                placeholder="Title for product">
                            <p class="perma-txt" hidden>
                                Permalink: <span data-link="https://example.com/" class="site-link text-primary"
                                    id="productPermalink">https://example.com/</span><input type="text"
                                    class="form-control form-control-sm" hidden id="editPermalink">
                                <button class="btn-flush bg-primary" id="editPermaBtn">Edit</button>
                                <button class="btn-flush bg-success" id="createPerma" hidden>OK</button>
                                <button class="btn-flush bg-danger" id="cancelPerma" hidden>Cancel</button>
                            </p>
                        </div>
                    </div>
                    <div class="panel mb-25">
                        <div class="panel-header">
                            <h5>Product Description</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <textarea name="description" id="" cols="107" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="panel mb-25">
                        <div class="panel-header">
                            <h5>Product Data</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <nav>
                                <div class="btn-box d-flex flex-wrap gap-1 mb-25" id="nav-tab" role="tablist">
                                    <button class="btn btn-sm btn-outline-primary active" id="nav-media-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-media" type="button" role="tab"
                                        aria-controls="nav-media" aria-selected="true">Media</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-inventory-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-inventory" type="button" role="tab"
                                        aria-controls="nav-inventory" aria-selected="false">Inventory</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-price-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-price" type="button" role="tab" aria-controls="nav-price"
                                        aria-selected="false">Price</button>
                                    <button class="btn btn-sm btn-outline-primary" id="nav-video-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video"
                                        aria-selected="false">Video</button>
                                </div>
                            </nav>
                            <div class="tab-content product-data-tab" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-media" role="tabpanel"
                                    aria-labelledby="nav-media-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xxl-3 col-md-4 col-5 col-xs-12">
                                            <div class="add-thumbnail product-image-upload">
                                                <div class="part-txt">
                                                    <h5>Add thumbnail <span>(jpeg/png)</span></h5>
                                                </div>
                                                <input type="file" class="form-control" name="thumn"  id="thumbUpload">
                                            </div>
                                        </div>
                                        <div class="col-xxl-9 col-md-8 col-7 col-xs-12">
                                            <div class="add-gallery-img product-image-upload">
                                                <div class="part-txt">
                                                    <h5>Add gallery <span>(jpeg/png)</span></h5>
                                                </div>
                                                <input type="file" name="image[]" class="form-control" multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-inventory" role="tabpanel"
                                    aria-labelledby="nav-inventory-tab" tabindex="0">
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">SKU <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-sm" name="SKU"
                                                id="SKU">
                                        </div>
                                    </div>


                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Product Code <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-sm" name="productCode"
                                                id="productCode">
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="lowStockWarning"
                                            class="col-md-2 col-form-label col-form-label-sm">Quantiry</label>
                                        <div class="col-md-10">
                                            <input type="number" name="inventory" class="form-control form-control-sm"
                                                id="lowStockWarning">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-price" role="tabpanel"
                                    aria-labelledby="nav-price-tab" tabindex="0">
                                    <div class="row g-3 mb-3">
                                        <label for="regularPrice"
                                            class="col-md-2 col-form-label col-form-label-sm">Regular
                                            Price ($)</label>
                                        <div class="col-md-10">
                                            <input type="number" name="regularPrice"
                                                class="form-control form-control-sm" id="regularPrice">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <label for="salePrice" class="col-md-2 col-form-label col-form-label-sm">Discount
                                            ($)</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control form-control-sm" name="discount"
                                                id="salePrice">
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-video" role="tabpanel"
                                    aria-labelledby="nav-video-tab" tabindex="0">
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Video Provider</label>
                                        <div class="col-md-10">
                                            <select class="form-control form-control-sm"
                                                data-placeholder="Select Provider">
                                                <option value="">Select Provider</option>
                                                <option value="0">Youtube</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Video Link</label>
                                        <div class="col-md-10">
                                            <input type="url" class="form-control form-control-sm" name="video"
                                                placeholder="Video Link">
                                            <span class="input-additional-txt">Use proper link without extra parameter.
                                                Don't use short share link/embeded iframe code.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header">
                            <h5>SEO Data</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="row g-3 mb-3">
                                <label class="col-xxl-2 col-md-3 col-form-label col-form-label-sm pe-0">Focus keyphrase
                                    <span class="btn-flush fs-14" data-bs-toggle="tooltip"
                                        data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                            class="fa-solid fa-circle-question"></i></span></label>
                                <div class="col-xxl-10 col-md-9">
                                    <input type="text" class="form-control form-control-sm" id="focusKeyphrase">
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <label for="metaTitle" class="col-xxl-2 col-md-3 col-form-label col-form-label-sm">Meta
                                    Title</label>
                                <div class="col-xxl-10 col-md-9">
                                    <input type="text" class="form-control form-control-sm" id="metaTitle">
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <label for="slugText"
                                    class="col-xxl-2 col-md-3 col-form-label col-form-label-sm">Slug</label>
                                <div class="col-xxl-10 col-md-9">
                                    <input type="text" class="form-control form-control-sm" id="slugText">
                                </div>
                            </div>
                            <div class="row g-3">
                                <label for="metaDscr" class="col-xxl-2 col-md-3 col-form-label col-form-label-sm">Meta
                                    Description</label>
                                <div class="col-xxl-10 col-md-9">
                                    <textarea class="form-control" rows="5" id="metaDscr"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 add-product-sidebar">

                    <div class="panel mb-25">
                        <div class="panel-header">
                            <h5>Published</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="hidden" name="id_create" value="{{Auth::user()->id}}" id="">
                                    <div class="btn-box d-flex justify-content-end gap-2">
                                        <button class="btn btn-sm btn-outline-primary">Save</button>
                                        <button class=" btn-sm btn-primary" type="submit">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel mb-25">
                        <div class="panel-header">
                            <h5>Category</h5>
                            <div class="btn-box d-flex gap-2">
                                <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                        class="fa-light fa-arrows-rotate"></i></button>
                                <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                        class="fa-light fa-angle-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="input-group-with-icon mb-20">
                                <span class="input-icon"><i class="fa-light fa-magnifying-glass"></i></span>
                                <input type="search" placeholder="Search category">
                            </form>
                            <div class="product-categories">
                                @foreach ($category as $cate)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value=" {{ $cate->id }}"
                                            name="category">
                                        <label class="form-check-label" for="catBag">
                                            {{ $cate->categoryName }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="border-top"></div>

                    </div>

                </div>
            </div>
        </form>

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
