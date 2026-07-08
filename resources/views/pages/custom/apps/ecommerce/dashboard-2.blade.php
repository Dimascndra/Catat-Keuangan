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
                                <!--begin::Engage Widget 15-->
                                <div class="card card-custom gutter-b">
                                    <div class="card-body rounded p-0 d-flex bg-light">
                                        <div
                                            class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-650px py-10 py-md-14 px-10 px-md-20 pr-lg-0">
                                            <h1 class="font-weight-bolder text-dark mb-0">Cari Goods</h1>
                                            <div class="font-size-h4 mb-8">Get Amazing Gadgets</div>
                                            <!--begin::Form-->
                                            <form class="d-flex flex-center py-2 px-6 bg-white rounded">
                                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <input type="text" class="form-control border-0 font-weight-bold pl-2"
                                                    placeholder="Cari Goods" />
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover"
                                            style="background-image: url(assets/media/svg/illustrations/copy.svg);"></div>
                                    </div>
                                </div>
                                <!--end::Engage Widget 15-->
                                <!--begin::Section-->
                                <div class="row">
                                    <div class="col-md-8 col-lg-12 col-xxl-8">
                                        <!--begin::Engage Widget 12-->
                                        <div
                                            class="card card-custom card-stretch card-stretch-half gutter-b overflow-hidden">
                                            <div class="card-body p-0 d-flex rounded bg-light-success">
                                                <div class="py-18 px-12">
                                                    <h3 class="font-size-h1">
                                                        <a href="#" class="text-dark font-weight-bolder">Nike
                                                            Sneakers</a>
                                                    </h3>
                                                    <div class="font-size-h4 text-success">Get Amazing Nike Sneakers</div>
                                                </div>
                                                <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover"
                                                    style="transform: scale(1.5) rotate(-26deg); background-image: url('assets/media/products/13.png')">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Engage Widget 12-->
                                        <!--begin::Engage Widget 12-->
                                        <div
                                            class="card card-custom card-stretch card-stretch-half gutter-b overflow-hidden">
                                            <div class="card-body p-0 d-flex rounded bg-light-danger">
                                                <div class="py-18 px-12">
                                                    <h3 class="font-size-h1">
                                                        <a href="#" class="text-dark font-weight-bolder">Nike
                                                            Sneakers</a>
                                                    </h3>
                                                    <div class="font-size-h4 text-danger">Get Amazing Nike Sneakers</div>
                                                </div>
                                                <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover"
                                                    style="transform: scale(1.5) rotate(-26deg); background-image: url('assets/media/products/12.png')">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Engage Widget 12-->
                                    </div>
                                    <div class="col-md-4 col-lg-12 col-xxl-4">
                                        <!--begin::Featured Product-->
                                        <div class="card card-custom card-stretch gutter-b">
                                            <div
                                                class="card-body d-flex flex-column rounded bg-light-primary justify-content-between">
                                                <div class="rounded text-center mb-7 pt-7">
                                                    <img src="assets/media/products/14.png" class="mw-100 w-200px"
                                                        style="transform: scale(1.4);" />
                                                </div>
                                                <div class="text-center">
                                                    <h3 class="font-size-h1">
                                                        <a href="#" class="text-dark font-weight-bolder">Kanken</a>
                                                    </h3>
                                                    <div class="font-size-h4 text-primary">Amazing Backpack</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Featured Product-->
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
