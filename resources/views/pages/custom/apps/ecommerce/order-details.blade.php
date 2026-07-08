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
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-body p-0">
                                <!-- begin: Invoice-->
                                <!-- begin: Invoice header-->
                                <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                                    <div class="col-md-10">
                                        <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                            <h1 class="display-4 font-weight-boldest mb-10">ORDER DETAILS</h1>
                                            <div class="d-flex flex-column align-items-md-end px-0">
                                                <!--begin::Logo-->
                                                <a href="#" class="mb-5">
                                                    <img src="assets/media/logos/logo-dark.png" alt="" />
                                                </a>
                                                <!--end::Logo-->
                                                <span class="d-flex flex-column align-items-md-end opacity-70">
                                                    <span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
                                                    <span>Mississippi 96522</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="border-bottom w-100"></div>
                                        <div class="d-flex justify-content-between pt-6">
                                            <div class="d-flex flex-column flex-root">
                                                <span class="font-weight-bolder mb-2">ORDER TANGGAL</span>
                                                <span class="opacity-70">Jan 07, 2020</span>
                                            </div>
                                            <div class="d-flex flex-column flex-root">
                                                <span class="font-weight-bolder mb-2">ORDER NO.</span>
                                                <span class="opacity-70">64616-103</span>
                                            </div>
                                            <div class="d-flex flex-column flex-root">
                                                <span class="font-weight-bolder mb-2">DELIVERED TO.</span>
                                                <span class="opacity-70">Iris Watson, P.O. Box 283 8562 Fusce RD.
                                                    <br />Fredrick Nebraska 20620</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Invoice header-->
                                <!-- begin: Invoice body-->
                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                    <div class="col-md-10">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">Ordered
                                                            Items</th>
                                                        <th class="text-right font-weight-bold text-muted text-uppercase">
                                                            Qty</th>
                                                        <th class="text-right font-weight-bold text-muted text-uppercase">
                                                            Unit Price</th>
                                                        <th
                                                            class="text-right pr-0 font-weight-bold text-muted text-uppercase">
                                                            Nominal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="font-weight-boldest">
                                                        <td class="border-0 pl-0 pt-7 d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                                <div class="symbol-label"
                                                                    style="background-image: url('assets/media/products/11.png')">
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            Street Sneakers
                                                        </td>
                                                        <td class="text-right pt-7 align-middle">2</td>
                                                        <td class="text-right pt-7 align-middle">$90.00</td>
                                                        <td class="text-primary pr-0 pt-7 text-right align-middle">$180.00
                                                        </td>
                                                    </tr>
                                                    <tr class="font-weight-boldest border-bottom-0">
                                                        <td class="border-top-0 pl-0 py-4 d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                                <div class="symbol-label"
                                                                    style="background-image: url('assets/media/products/2.png')">
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            Headphones
                                                        </td>
                                                        <td class="border-top-0 text-right py-4 align-middle">1</td>
                                                        <td class="border-top-0 text-right py-4 align-middle">$449.00</td>
                                                        <td
                                                            class="text-primary border-top-0 pr-0 py-4 text-right align-middle">
                                                            $449.00</td>
                                                    </tr>
                                                    <tr class="font-weight-boldest border-bottom-0">
                                                        <td class="border-top-0 pl-0 py-4 d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                                <div class="symbol-label"
                                                                    style="background-image: url('assets/media/products/1.png')">
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            Smartwatch
                                                        </td>
                                                        <td class="border-top-0 text-right py-4 align-middle">1</td>
                                                        <td class="border-top-0 text-right py-4 align-middle">$160.00</td>
                                                        <td
                                                            class="text-primary border-top-0 pr-0 py-4 text-right align-middle">
                                                            $160.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Invoice body-->
                                <!-- begin: Invoice footer-->
                                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0">
                                    <div class="col-md-10">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="font-weight-bold text-muted text-uppercase">PAYMENT TYPE
                                                        </th>
                                                        <th class="font-weight-bold text-muted text-uppercase">PAYMENT
                                                            STATUS</th>
                                                        <th class="font-weight-bold text-muted text-uppercase">PAYMENT TANGGAL
                                                        </th>
                                                        <th class="font-weight-bold text-muted text-uppercase text-right">
                                                            TOTAL PAID</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="font-weight-bolder">
                                                        <td>Credit Card</td>
                                                        <td>Success</td>
                                                        <td>Jan 07, 2020</td>
                                                        <td
                                                            class="text-primary font-size-h3 font-weight-boldest text-right">
                                                            $789.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Invoice footer-->
                                <!-- begin: Invoice action-->
                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                    <div class="col-md-10">
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                                onclick="window.print();">Download Order Details</button>
                                            <button type="button" class="btn btn-primary font-weight-bold"
                                                onclick="window.print();">Print Order Details</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Invoice action-->
                                <!-- end: Invoice-->
                            </div>
                        </div>
                        <!--end::Card-->
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
