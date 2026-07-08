@extends('layouts.index', ['isNoSubheader' => true])
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Page Layout-->
                <div class="d-flex flex-row">
                    <!--begin::Aside-->
                    <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                        <!--begin::List Widget 17-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">Books to Pickup</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">24 Books to Return</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                        data-placement="left">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover py-5">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-drop"></i>
                                                        </span>
                                                        <span class="navi-text">New Group</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-list-3"></i>
                                                        </span>
                                                        <span class="navi-text">Contacts</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-rocket-1"></i>
                                                        </span>
                                                        <span class="navi-text">Groups</span>
                                                        <span class="navi-link-badge">
                                                            <span
                                                                class="label label-light-primary label-inline font-weight-bold">new</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-bell-2"></i>
                                                        </span>
                                                        <span class="navi-text">Calls</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-gear"></i>
                                                        </span>
                                                        <span class="navi-text">Settings</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator my-3"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-magnifier-tool"></i>
                                                        </span>
                                                        <span class="navi-text">Help</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-bell-2"></i>
                                                        </span>
                                                        <span class="navi-text">Privacy</span>
                                                        <span class="navi-link-badge">
                                                            <span
                                                                class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Container-->
                                <div>
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                style="background-image: url('assets/media/books/4.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius
                                                The Great</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story
                                                About
                                                <br />Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                    class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                style="background-image: url('assets/media/books/12.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Wild
                                                Blues</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story
                                                About
                                                <br />Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                    class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                style="background-image: url('assets/media/books/13.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Simple
                                                Thinking</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story
                                                About
                                                <br />Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                    class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 17-->
                        <!--begin::List Widget 21-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span class="card-label font-weight-bolder text-dark mb-1">Recent Products</span>
                                    <span class="text-muted mt-2 font-weight-bold font-size-sm">New Arrivals</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Choose Label:</span>
                                                    <i class="flaticon2-information icon-md text-muted"
                                                        data-toggle="tooltip" data-placement="right"
                                                        title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-success">Customer</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-danger">Partner</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-primary">Member</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-dark">Staff</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer py-4">
                                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <div class="d-flex mb-8">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="d-flex flex-column">
                                            <div class="symbol-label mb-3"
                                                style="background-image: url('assets/media/stock-600x400/img-23.jpg')">
                                            </div>
                                            <a href="#"
                                                class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Ubah</a>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Darius
                                            the Great</a>
                                        <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank
                                            credibility is one glaring error</span>
                                        <span class="text-muted font-weight-bold font-size-lg">Price:
                                            <span class="text-dark-75 font-weight-bolder">99.00$</span></span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="d-flex flex-column">
                                            <div class="symbol-label mb-3"
                                                style="background-image: url('assets/media/stock-600x400/img-25.jpg')">
                                            </div>
                                            <a href="#"
                                                class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Ubah</a>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Nike
                                            Airmax</a>
                                        <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank
                                            credibility is one glaring error</span>
                                        <span class="text-muted font-weight-bold font-size-lg">Price:
                                            <span class="text-dark-75 font-weight-bolder">99.00$</span></span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 21-->
                    </div>
                    <!--end::Aside-->
                    <!--begin::Layout-->
                    <div class="flex-row-fluid ml-lg-8">
                        <!--begin::Section-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder font-size-h3 text-dark">My Shopping
                                        Cart</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-primary font-weight-bolder font-size-sm">Continue
                                            Shopping</a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <div class="card-body">
                                <!--begin::Shopping Cart-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <!--begin::Cart Header-->
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-center">Qty</th>
                                                <th class="text-right">Price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <!--end::Cart Header-->
                                        <tbody>
                                            <!--begin::Cart Content-->
                                            <tr>
                                                <td class="d-flex align-items-center font-weight-bolder">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-60 flex-shrink-0 mr-4 bg-light">
                                                        <div class="symbol-label"
                                                            style="background-image: url('assets/media/products/11.png')">
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <a href="#" class="text-dark text-hover-primary">Street
                                                        Sneakers</a>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="javascript:;"
                                                        class="btn btn-xs btn-light-success btn-icon mr-2">
                                                        <i class="ki ki-minus icon-xs"></i>
                                                    </a>
                                                    <span class="mr-2 font-weight-bolder">1</span>
                                                    <a href="javascript:;" class="btn btn-xs btn-light-success btn-icon">
                                                        <i class="ki ki-plus icon-xs"></i>
                                                    </a>
                                                </td>
                                                <td class="text-right align-middle font-weight-bolder font-size-h5">$90.00
                                                </td>
                                                <td class="text-right align-middle">
                                                    <a href="#"
                                                        class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center font-weight-bolder">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-60 flex-shrink-0 mr-4 bg-light">
                                                        <div class="symbol-label"
                                                            style="background-image: url('assets/media/products/2.png')">
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <a href="#" class="text-dark text-hover-primary">Headphones</a>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="javascript:;"
                                                        class="btn btn-xs btn-light-success btn-icon mr-2">
                                                        <i class="ki ki-minus icon-xs"></i>
                                                    </a>
                                                    <span class="mr-2 font-weight-bolder">1</span>
                                                    <a href="javascript:;" class="btn btn-xs btn-light-success btn-icon">
                                                        <i class="ki ki-plus icon-xs"></i>
                                                    </a>
                                                </td>
                                                <td class="text-right align-middle font-weight-bolder font-size-h5">$449.00
                                                </td>
                                                <td class="text-right align-middle">
                                                    <a href="#"
                                                        class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center font-weight-bolder">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-60 flex-shrink-0 mr-4 bg-light">
                                                        <div class="symbol-label"
                                                            style="background-image: url('assets/media/products/1.png')">
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <a href="#" class="text-dark text-hover-primary">Smartwatch</a>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="javascript:;"
                                                        class="btn btn-xs btn-light-success btn-icon mr-2">
                                                        <i class="ki ki-minus icon-xs"></i>
                                                    </a>
                                                    <span class="mr-2 font-weight-bolder">1</span>
                                                    <a href="javascript:;" class="btn btn-xs btn-light-success btn-icon">
                                                        <i class="ki ki-plus icon-xs"></i>
                                                    </a>
                                                </td>
                                                <td class="text-right align-middle font-weight-bolder font-size-h5">$999.00
                                                </td>
                                                <td class="text-right align-middle">
                                                    <a href="#"
                                                        class="btn btn-danger font-weight-bolder font-size-sm">Remove</a>
                                                </td>
                                            </tr>
                                            <!--end::Cart Content-->
                                            <!--begin::Cart Footer-->
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="font-weight-bolder font-size-h4 text-right">Subtotal</td>
                                                <td class="font-weight-bolder font-size-h4 text-right">$1538.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="border-0 text-muted text-right pt-0">Excludes
                                                    Delivery. GST Included</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="border-0 pt-10">
                                                    <form>
                                                        <div class="form-group row">
                                                            <div class="col-md-3 d-flex align-items-center">
                                                                <label class="font-weight-bolder">Apply Voucher</label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="input-group w-100">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Voucher Code" />
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-secondary"
                                                                            type="button">Apply</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td colspan="2" class="border-0 text-right pt-10">
                                                    <a href="#"
                                                        class="btn btn-success font-weight-bolder px-8">Proceed to
                                                        Checkout</a>
                                                </td>
                                            </tr>
                                            <!--end::Cart Footer-->
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Shopping Cart-->
                            </div>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="card card-custom">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="d-flex justify-content-between align-items-center mb-7">
                                    <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Related Products</h2>
                                    <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder">View All</a>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Products-->
                                <div class="row">
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-xxl-4 col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom card-shadowless">
                                            <div class="card-body p-0">
                                                <!--begin::Image-->
                                                <div class="overlay">
                                                    <div class="overlay-wrapper rounded bg-light text-center">
                                                        <img src="assets/media/products/1.png" alt=""
                                                            class="mw-100 w-200px" />
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#"
                                                            class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                            View</a>
                                                        <a href="#"
                                                            class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                                    </div>
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Details-->
                                                <div
                                                    class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                    <a href="#"
                                                        class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">Smart
                                                        Watches</a>
                                                    <span class="font-size-lg">Outlines keep poorly thought</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Product-->
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <!--begin::Card-->
                                        <div class="card card-custom card-shadowless">
                                            <div class="card-body p-0">
                                                <!--begin::Image-->
                                                <div class="overlay">
                                                    <div class="overlay-wrapper rounded bg-light text-center">
                                                        <img src="assets/media/products/2.png" alt=""
                                                            class="mw-100 w-200px" />
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#"
                                                            class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                            View</a>
                                                        <a href="#"
                                                            class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                                    </div>
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Details-->
                                                <div
                                                    class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                    <a href="#"
                                                        class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">Headphones</a>
                                                    <span class="font-size-lg">Outlines keep poorly thought</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Product-->
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <!--begin::Card-->
                                        <div class="card card-custom card-shadowless">
                                            <div class="card-body p-0">
                                                <!--begin::Image-->
                                                <div class="overlay">
                                                    <div class="overlay-wrapper rounded bg-light text-center">
                                                        <img src="assets/media/products/3.png" alt=""
                                                            class="mw-100 w-200px" />
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#"
                                                            class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick
                                                            View</a>
                                                        <a href="#"
                                                            class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>
                                                    </div>
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Details-->
                                                <div
                                                    class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                    <a href="#"
                                                        class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">Smart
                                                        Drones</a>
                                                    <span class="font-size-lg">Outlines keep poorly thought</span>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Product-->
                                </div>
                                <!--end::Products-->
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Page Layout-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
