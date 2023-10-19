@extends('adminlayout.layout')
@section('content')
    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Add New Product</h2>
            <div class="btn-box">
                <a href="{{route('products.index')}}" class="btn btn-sm btn-primary">View All</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xxl-9 col-lg-8">
                <div class="panel mb-25">
                    <div class="panel-body product-title-input">
                        <label class="form-label">Write Title</label>
                        <input type="text" class="form-control" id="productTitle" placeholder="Title for product">
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
                        <div class="editor"></div>
                    </div>
                </div>
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Product Data</h5>
                        <div class="panel-header-right">
                            <div class="form-check d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="generalProductData">
                                    <label class="form-check-label" for="generalProductData">
                                        General
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="DownloadableProductData">
                                    <label class="form-check-label" for="DownloadableProductData">
                                        Downloadable
                                    </label>
                                </div>
                            </div>
                        </div>
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
                                <button class="btn btn-sm btn-outline-primary" id="nav-inventory-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-inventory" type="button" role="tab"
                                    aria-controls="nav-inventory" aria-selected="false">Inventory</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-price-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-price" type="button" role="tab" aria-controls="nav-price"
                                    aria-selected="false">Price</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-attribute-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-attribute" type="button" role="tab"
                                    aria-controls="nav-attribute" aria-selected="false">Attribute</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-shipping-info-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-shipping-info" type="button" role="tab"
                                    aria-controls="nav-shipping-info" aria-selected="false">Shipping info</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-video-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video"
                                    aria-selected="false">Video</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-shipping-configuration-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-shipping-configuration" type="button"
                                    role="tab" aria-controls="nav-shipping-configuration"
                                    aria-selected="false">Shipping Configuration</button>
                                <button class="btn btn-sm btn-outline-primary" id="nav-offer-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-offer" type="button" role="tab" aria-controls="nav-offer"
                                    aria-selected="false">Offer</button>
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
                                            <input type="text" class="image-input" name="thumn" id="thumbUpload">
                                        </div>
                                    </div>
                                    <div class="col-xxl-9 col-md-8 col-7 col-xs-12">
                                        <div class="add-gallery-img product-image-upload">
                                            <div class="part-txt">
                                                <h5>Add gallery <span>(jpeg/png)</span></h5>
                                            </div>
                                            <input type="text" class="image-input" name="image[]" id="galleryUpload" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-inventory" role="tabpanel"
                                aria-labelledby="nav-inventory-tab" tabindex="0">
                                <form>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">SKU <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-sm" id="SKU">
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Manage Stock?</label>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="manageStock">
                                                <label class="form-check-label" for="manageStock">
                                                    Manage stock level (quantity)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Stock Status <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <select class="form-control form-control-sm">
                                                <option value="0">In stock</option>
                                                <option value="1">Out of stock</option>
                                                <option value="2">On backorder</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Sold individually <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="soldIndividually">
                                                <label class="form-check-label" for="soldIndividually">
                                                    Limit purchases to 1 item per order
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Product Code <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control-sm" id="productCode">
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="lowStockWarning" class="col-md-2 col-form-label col-form-label-sm">Low
                                            Stock Warning</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control form-control-sm"
                                                id="lowStockWarning">
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="showStockQuantity"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Show Stock
                                            Quantity</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="showStockQuantity">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="showStockWithText"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Show Stock With
                                            Text</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="showStockWithText">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3">
                                        <label for="hideStock"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Hide Stock</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="hideStock">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-price" role="tabpanel" aria-labelledby="nav-price-tab"
                                tabindex="0">
                                <form>
                                    <div class="row g-3 mb-3">
                                        <label for="regularPrice"
                                            class="col-md-2 col-form-label col-form-label-sm">Regular Price ($)</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control form-control-sm" id="regularPrice">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <label for="salePrice" class="col-md-2 col-form-label col-form-label-sm">Discount
                                            ($)</label>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control form-control-sm" id="salePrice">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-control-sm p-0">
                                                <select class="form-control form-control-sm">
                                                    <option value="1">Flat</option>
                                                    <option value="2">Discount</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <label for="PriceDateStart" class="col-md-2 col-form-label col-form-label-sm">Sale
                                            price dates</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control form-control-sm dateRangePicker"
                                                id="PriceDateStart" placeholder="DD MMMM YYYY - HH:MM">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control form-control-sm dateRangePicker"
                                                id="PriceDateEnd" placeholder="DD MMMM YYYY - HH:MM">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-attribute" role="tabpanel"
                                aria-labelledby="nav-attribute-tab" tabindex="0">
                                <div class="add-product-attribute">
                                    <div class="form-group">
                                        <select class="form-control form-control-sm">
                                            <option value="">Custom Product Attribute</option>
                                            <option value="">Brand</option>
                                            <option value="">Color</option>
                                            <option value="">Size</option>
                                        </select>
                                        <button class="btn btn-sm btn-icon btn-primary" id="addAttr"><i
                                                class="fa-light fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-shipping-info" role="tabpanel"
                                aria-labelledby="nav-shipping-info-tab" tabindex="0">
                                <form>
                                    <div class="row g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Weight (kg) <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control form-control-sm" id="weight"
                                                placeholder="0">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Dimensions (cm) <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <div class="row g-3">
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control form-control-sm"
                                                        id="Dimensions" placeholder="Length">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control form-control-sm"
                                                        placeholder="Width">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control form-control-sm"
                                                        placeholder="Height">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Shipping Class <span
                                                class="btn-flush fs-14" data-bs-toggle="tooltip"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i
                                                    class="fa-solid fa-circle-question"></i></span></label>
                                        <div class="col-md-10">
                                            <select class="form-control form-control-sm">
                                                <option value="0">No Shipping Class</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab"
                                tabindex="0">
                                <form>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Video Provider</label>
                                        <div class="col-md-10">
                                            <select class="form-control form-control-sm"
                                                data-placeholder="Select Provider">
                                                <option value="">Select Provider</option>
                                                <option value="0">Youtube</option>
                                                <option value="1">Vimeo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <label class="col-md-2 col-form-label col-form-label-sm">Video Link</label>
                                        <div class="col-md-10">
                                            <input type="url" class="form-control form-control-sm" name="video_link"
                                                placeholder="Video Link">
                                            <span class="input-additional-txt">Use proper link without extra parameter.
                                                Don't use short share link/embeded iframe code.</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-shipping-configuration" role="tabpanel"
                                aria-labelledby="nav-shipping-configuration-tab" tabindex="0">
                                <form>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="estimateShippingTime"
                                            class="col-md-2 col-form-label col-form-label-sm">Estimate Shipping
                                            Time</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <input type="number" class="form-control form-control-sm"
                                                    id="estimateShippingTime">
                                                <span class="input-group-text">Days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="freeShipping"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Free Shipping</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="freeShipping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="flatRate" class="col-md-2 col-8 col-form-label col-form-label-sm">Flat
                                            Rate</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flatRate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="QuantityMulitiply"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Quantity
                                            Mulitiply</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="QuantityMulitiply">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3">
                                        <label for="cashOnDelivery"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Cash On
                                            Delivery</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="cashOnDelivery">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-offer" role="tabpanel" aria-labelledby="nav-offer-tab"
                                tabindex="0">
                                <form>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="flashDeal"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Flash Deal</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flashDeal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3 mb-3">
                                        <label for="todaysDeal"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Today's Deal</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="todaysDeal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center g-3">
                                        <label for="featured"
                                            class="col-md-2 col-8 col-form-label col-form-label-sm">Featured</label>
                                        <div class="col-md-10 col-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="featured">
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                        <form>
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
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 add-product-sidebar">
                <div class="mb-25 w-100">
                    <a href="#" class="btn btn-primary d-block">Preview Changed</a>
                </div>
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
                            <div class="col-6">
                                <label class="form-label">Status</label>
                                <select class="form-control form-control-sm">
                                    <option value="0">Published</option>
                                    <option value="1">Draft</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Visibility</label>
                                <select class="form-control form-control-sm">
                                    <option value="0">Public</option>
                                    <option value="1">Pass. Protected</option>
                                    <option value="2">Private</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="publish-date">
                                    <label>Published on: </label>
                                    <input class="input-flush" type="text" id="publishDate">
                                    <label for="publishDate" class="cursor-pointer text-primary"><i
                                            class="fa-light fa-pen-to-square"></i></label>
                                </div>
                                <div class="btn-box d-flex justify-content-end gap-2">
                                    <button class="btn btn-sm btn-outline-primary">Save</button>
                                    <button class="btn btn-sm btn-primary">Publish</button>
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
                                    <input class="form-check-input" type="checkbox" id="catBag">
                                    <label class="form-check-label" for="catBag">
                                        {{ $cate->categoryName }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="border-top"></div>

                </div>
                <div class="panel">
                    <div class="panel-header">
                        <h5>Products Tags</h5>
                        <div class="btn-box d-flex gap-2">
                            <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                    class="fa-light fa-arrows-rotate"></i></button>
                            <button class="btn btn-sm btn-icon btn-outline-primary panel-close"><i
                                    class="fa-light fa-angle-up"></i></button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="product-tag-area">
                            <div class="row g-3">
                                <div class="col-9">
                                    <input type="text" class="input-flush" id="productTags">
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-sm btn-primary w-100" id="addTags">Add</button>
                                </div>
                            </div>
                            <span class="input-txt">Use commas to separate tags</span>
                            <div class="all-tags" id="allTags"></div>
                            <div class="tag-history">
                                <span class="choose-used-tag input-txt">Choose from most use tags</span>
                                <div class="all-tags used-tags active">
                                    <div class="item d-inline-block" data-value="mobile">mobile<span class="close-tag"><i
                                                class="fa-regular fa-xmark"></i></span></div>
                                    <div class="item d-inline-block" data-value="tab">tab<span class="close-tag"><i
                                                class="fa-regular fa-xmark"></i></span></div>
                                    <div class="item d-inline-block" data-value="watch">watch<span class="close-tag"><i
                                                class="fa-regular fa-xmark"></i></span></div>
                                    <div class="item d-inline-block" data-value="t-shirt">t-shirt<span
                                            class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                    <div class="item d-inline-block" data-value="shirt">shirt<span class="close-tag"><i
                                                class="fa-regular fa-xmark"></i></span></div>
                                    <div class="item d-inline-block" data-value="book">book<span class="close-tag"><i
                                                class="fa-regular fa-xmark"></i></span></div>
                                    <div class="item d-inline-block" data-value="monitor">monitor<span
                                            class="close-tag"><i class="fa-regular fa-xmark"></i></span></div>
                                    <div class="item d-inline-block" data-value="cloth">cloth<span class="close-tag"><i
                                                class="fa-regular fa-xmark"></i></span></div>
                                </div>
                            </div>
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
