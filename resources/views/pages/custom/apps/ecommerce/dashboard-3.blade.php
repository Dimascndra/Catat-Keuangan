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
                        <!--begin::Forms Widget 15-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Form-->
                                <form>
                                    <!--begin::Categories-->
                                    <div class="form-group mb-11">
                                        <label class="font-size-h3 font-weight-bolder text-dark mb-7">Categories</label>
                                        <!--begin::Checkbox list-->
                                        <div class="checkbox-list">
                                            <label class="checkbox checkbox-lg mb-7">
                                                <input type="checkbox" name="electronics" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">Electronics</div>
                                                <div class="ml-auto text-muted font-weight-bold">28</div>
                                            </label>
                                            <label class="checkbox checkbox-lg mb-7">
                                                <input type="checkbox" name="sportsequipment" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">Sports Equipments
                                                </div>
                                                <div class="ml-auto text-muted font-weight-bold">307</div>
                                            </label>
                                            <label class="checkbox checkbox-lg mb-7">
                                                <input type="checkbox" name="appliances" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">Appliances</div>
                                                <div class="ml-auto text-muted font-weight-bold">54</div>
                                            </label>
                                            <label class="checkbox checkbox-lg mb-7">
                                                <input type="checkbox" name="appliances" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">Software Solutions
                                                </div>
                                                <div class="ml-auto text-muted font-weight-bold">762</div>
                                            </label>
                                            <label class="checkbox checkbox-lg">
                                                <input type="checkbox" name="appliances" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">Food &amp; Groceries
                                                </div>
                                                <div class="ml-auto text-muted font-weight-bold">95</div>
                                            </label>
                                        </div>
                                        <!--end::Checkbox list-->
                                    </div>
                                    <!--end::Categories-->
                                    <!--begin::Prices-->
                                    <div class="form-group mb-7">
                                        <label class="font-size-h3 font-weight-bolder text-dark mb-7">Price</label>
                                        <!--begin::Radio list-->
                                        <div class="radio-list">
                                            <label class="radio radio-lg mb-7">
                                                <input type="radio" name="price" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">All</div>
                                                <div class="ml-auto text-muted font-weight-bold">2047</div>
                                            </label>
                                            <label class="radio radio-lg mb-7">
                                                <input type="radio" name="price" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">0$ - 99$</div>
                                                <div class="ml-auto text-muted font-weight-bold">1403</div>
                                            </label>
                                            <label class="radio radio-lg mb-7">
                                                <input type="radio" name="price" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">100$ - 999$</div>
                                                <div class="ml-auto text-muted font-weight-bold">570</div>
                                            </label>
                                            <label class="radio radio-lg">
                                                <input type="radio" name="price" />
                                                <span></span>
                                                <div class="font-size-lg text-dark-75 font-weight-bold">1000$ &amp; Above
                                                </div>
                                                <div class="ml-auto text-muted font-weight-bold">38</div>
                                            </label>
                                        </div>
                                        <!--end::Radio list-->
                                    </div>
                                    <!--end::Prices-->
                                    <!--begin::Price Slider-->
                                    <div class="form-group mb-13">
                                        <div class="text-muted font-weight-bolder font-size-lg mb-5">Pricing Slider</div>
                                        <div id="kt_price_slider"
                                            class="nouislider nouislider-light nouislider-handle-primary nouislider-bg-light-primary nouislider-shadowless nouislider-borderless">
                                        </div>
                                    </div>
                                    <!--end::Price Slider-->
                                    <!--begin::Color-->
                                    <div class="form-group">
                                        <label class="font-size-h3 font-weight-bolder text-dark mb-7">Color</label>
                                        <div class="radio-inline mb-11">
                                            <label class="radio radio-accent radio-danger mr-0">
                                                <input type="radio" name="color-selector" checked="checked" />
                                                <span></span>
                                            </label>
                                            <label class="radio radio-accent radio-primary mr-0">
                                                <input type="radio" name="color-selector" />
                                                <span></span>
                                            </label>
                                            <label class="radio radio-accent radio-success mr-0">
                                                <input type="radio" name="color-selector" />
                                                <span></span>
                                            </label>
                                            <label class="radio radio-accent radio-info mr-0">
                                                <input type="radio" name="color-selector" />
                                                <span></span>
                                            </label>
                                            <label class="radio radio-accent radio-dark mr-0">
                                                <input type="radio" name="color-selector" />
                                                <span></span>
                                            </label>
                                            <label class="radio radio-accent radio-secondary mr-0">
                                                <input type="radio" name="color-selector" />
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Color-->
                                    <button type="submit"
                                        class="btn btn-primary font-weight-bolder mr-2 px-8">Reset</button>
                                    <button type="reset"
                                        class="btn btn-clear font-weight-bolder text-muted px-8">Setup</button>
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Forms Widget 15-->
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
                        <div class="card card-custom card-stretch gutter-b">
                            <div class="card-body">
                                <!--begin::Section-->
                                <div class="card card-custom">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Featured Category-->
                                                <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                                    <div class="card-body p-0 d-flex rounded"
                                                        style="background:radial-gradient(94.09% 94.09% at 50% 50%, rgba(255, 255, 255, 0.45) 0%, rgba(255, 255, 255, 0) 100%), #FFA800;">
                                                        <div class="row m-0">
                                                            <div class="col-7 p-0">
                                                                <div
                                                                    class="card card-custom card-stretch card-transparent card-shadowless">
                                                                    <div
                                                                        class="card-body d-flex flex-column justify-content-center pr-0">
                                                                        <h3
                                                                            class="font-size-h4 font-size-h1-sm font-size-h4-lg font-size-h1-xl mb-0">
                                                                            <a href="#"
                                                                                class="text-white font-weight-bolder">Smart
                                                                                Watches</a>
                                                                        </h3>
                                                                        <div
                                                                            class="font-size-lg font-size-h4-sm font-size-h6-lg font-size-h4-xl text-dark">
                                                                            Make It Amazing</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-center col-5 p-0">
                                                                <img src="assets/media/products/1.png"
                                                                    class="d-flex flex-row-fluid w-100"
                                                                    style="transform: scale(1.3);" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Featured Category-->
                                                <!--begin::Featured Category-->
                                                <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                                    <div class="card-body p-0 d-flex rounded"
                                                        style="background: radial-gradient(110.23% 110.23% at 50% 50%, rgba(255, 255, 255, 0.27) 0%, rgba(255, 255, 255, 0) 100%), #8950FC;">
                                                        <div class="row m-0">
                                                            <div class="col-7 p-0">
                                                                <div
                                                                    class="card card-custom card-stretch card-transparent card-shadowless">
                                                                    <div
                                                                        class="card-body d-flex flex-column justify-content-center pr-0">
                                                                        <h3
                                                                            class="font-size-h4 font-size-h1-sm font-size-h4-lg font-size-h1-xl mb-0">
                                                                            <a href="#"
                                                                                class="text-white font-weight-bolder">Headphones</a>
                                                                        </h3>
                                                                        <div
                                                                            class="font-size-lg font-size-h4-sm font-size-h6-lg font-size-h4-xl text-dark">
                                                                            Make It Amazing</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-5 p-0 d-flex flex-center">
                                                                <img src="assets/media/products/21.png"
                                                                    class="d-flex flex-row-fluid w-100"
                                                                    style="transform: scale(1.3);" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Featured Category-->
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Featured Category-->
                                                <div class="card card-custom card-stretch gutter-b">
                                                    <div class="card-body d-flex flex-column rounded justify-content-between p-14"
                                                        style="background: radial-gradient(83.15% 83.15% at 50% 50%, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 100%), #1BC5BD;">
                                                        <img src="assets/media/products/22.png" class="w-100"
                                                            style="transform: scale(1.2);" />
                                                        <div class="text-center">
                                                            <h3 class="font-size-h1 mb-0">
                                                                <a href="#"
                                                                    class="text-white font-weight-bolder">Smart Toys</a>
                                                            </h3>
                                                            <div class="font-size-h4 text-dark">Get Amazing Toys</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Featured Category-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="row">
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <div class="card card-custom gutter-b card-stretch">
                                            <div
                                                class="card-body d-flex flex-column rounded bg-light justify-content-between">
                                                <div class="text-center rounded mb-7">
                                                    <img src="assets/media/products/15.png" class="mw-100 w-200px" />
                                                </div>
                                                <div>
                                                    <h4 class="font-size-h5">
                                                        <a href="#" class="text-dark-75 font-weight-bolder">Bose
                                                            Headphones 700</a>
                                                    </h4>
                                                    <div class="font-size-h6 text-muted font-weight-bolder">$370.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Product-->
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <div class="card card-custom gutter-b card-stretch">
                                            <div
                                                class="card-body d-flex flex-column rounded bg-light justify-content-between">
                                                <div class="text-center rounded mb-7">
                                                    <img src="assets/media/products/16.png" class="mw-100 w-200px" />
                                                </div>
                                                <div>
                                                    <h4 class="font-size-h5">
                                                        <a href="#" class="text-dark-75 font-weight-bolder">Amazon
                                                            Bip Home</a>
                                                    </h4>
                                                    <div class="font-size-h6 text-muted font-weight-bolder">$370.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Product-->
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <div class="card card-custom gutter-b card-stretch">
                                            <div
                                                class="card-body d-flex flex-column rounded bg-light justify-content-between">
                                                <div class="text-center rounded mb-7">
                                                    <img src="assets/media/products/17.png" class="mw-100 w-200px" />
                                                </div>
                                                <div>
                                                    <h4 class="font-size-h5">
                                                        <a href="#" class="text-dark-75 font-weight-bolder">Black
                                                            &amp; White Vases</a>
                                                    </h4>
                                                    <div class="font-size-h6 text-muted font-weight-bolder">$370.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Product-->
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <div class="card card-custom gutter-b card-stretch">
                                            <div
                                                class="card-body d-flex flex-column rounded bg-light justify-content-between">
                                                <div class="text-center rounded mb-7">
                                                    <img src="assets/media/products/18.png" class="mw-100 w-200px" />
                                                </div>
                                                <div>
                                                    <h4 class="font-size-h5">
                                                        <a href="#" class="text-dark-75 font-weight-bolder">Spine
                                                            Friendly Chair</a>
                                                    </h4>
                                                    <div class="font-size-h6 text-muted font-weight-bolder">$370.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Product-->
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <div class="card card-custom gutter-b card-stretch">
                                            <div
                                                class="card-body d-flex flex-column rounded bg-light justify-content-between">
                                                <div class="text-center rounded mb-7">
                                                    <img src="assets/media/products/19.png" class="mw-100 w-200px" />
                                                </div>
                                                <div>
                                                    <h4 class="font-size-h5">
                                                        <a href="#" class="text-dark-75 font-weight-bolder">Yellow
                                                            Kettle</a>
                                                    </h4>
                                                    <div class="font-size-h6 text-muted font-weight-bolder">$370.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Product-->
                                    <!--begin::Product-->
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <div class="card card-custom gutter-b card-stretch">
                                            <div
                                                class="card-body d-flex flex-column rounded bg-light justify-content-between">
                                                <div class="text-center rounded mb-7">
                                                    <img src="assets/media/products/20.png" class="mw-100 w-200px" />
                                                </div>
                                                <div>
                                                    <h4 class="font-size-h5">
                                                        <a href="#" class="text-dark-75 font-weight-bolder">Amazing
                                                            Mats</a>
                                                    </h4>
                                                    <div class="font-size-h6 text-muted font-weight-bolder">$370.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Product-->
                                </div>
                                <!--end::Section-->
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
@section('scripts')
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
@endsection
