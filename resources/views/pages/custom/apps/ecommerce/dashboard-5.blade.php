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
                    </div>
                    <!--end::Aside-->
                    <!--begin::Layout-->
                    <div class="flex-row-fluid ml-lg-8">
                        <!--begin::Section-->
                        <!--begin::Charts Widget 9-->
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b gutter-b">
                            <!--begin::Polygon Background-->
                            <div class="rounded bgi-position-x-right bgi-position-y-bottom bgi-no-repeat position-absolute top-0 left-0 right-0 bottom-0"
                                style="background-image:url(assets/media/svg/shapes/abstract-6.svg);"></div>
                            <!--end::Polygon Background-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column flex-md-row flex-lg-column flex-xxl-row px-12 py-11">
                                <div class="d-flex flex-column flex-root">
                                    <div class="mb-11 d-flex align-items-end">
                                        <h3 class="font-size-h1 text-dark font-weight-bolder mr-3 mb-0">Nike Shoes</h3>
                                        <div class="font-size-h3 text-muted">SKU: 25-45673</div>
                                    </div>
                                    <div id="kt_charts_widget_9_chart"></div>
                                </div>
                                <div class="d-flex flex-root">
                                    <img src="assets/media/products/13.png"
                                        style="width: 100%; transform: scale(1.1) translateY(30px);" />
                                </div>
                            </div>
                            <!--end:: Card body-->
                        </div>
                        <!--end:: Card-->
                        <!--end:: Charts Widget 9-->
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xxl-4">
                                <!--begin::Stats Widget 33-->
                                <!--begin::Card-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Card Body-->
                                    <div class="card-body">
                                        <h3 class="font-weight-bold font-size-h4 text-dark-75 mb-3">Product Details</h3>
                                        <div class="text-muted font-weight-bold font-size-sm mb-6">More than 400+ new
                                            members</div>
                                        <div class="font-size-sm mb-6">Outlines keep you honest. They stop you from
                                            indulging in poorly to metaphorsy about driving ought out</div>
                                        <!--begin::Info-->
                                        <div class="d-flex mb-3">
                                            <span class="text-dark-50 flex-root font-weight-bold">Shoes Brand</span>
                                            <span class="text-dark flex-root font-weight-bold">Nike</span>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <span class="text-dark-50 flex-root font-weight-bold">SKU</span>
                                            <span class="text-dark flex-root font-weight-bold">NF3535</span>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <span class="text-dark-50 flex-root font-weight-bold">Color</span>
                                            <span class="text-dark flex-root font-weight-bold">White</span>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <span class="text-dark-50 flex-root font-weight-bold">Collection</span>
                                            <span class="text-dark flex-root font-weight-bold">2020 Spring</span>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <span class="text-dark-50 flex-root font-weight-bold">In Stock</span>
                                            <span class="text-dark flex-root font-weight-bold">280</span>
                                        </div>
                                        <div class="d-flex">
                                            <span class="text-dark-50 flex-root font-weight-bold">Unit Price</span>
                                            <span class="text-dark flex-root font-weight-bold">$79.00</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card Body-->
                                </div>
                                <!--end::Card-->
                                <!--end::Stats Widget 33-->
                            </div>
                            <div class="col-md-8 col-lg-12 col-xxl-8">
                                <!--begin::List Widget 19-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-6 mb-2">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3">Stock
                                                Info</span>
                                            <span class="text-muted font-weight-bold font-size-sm">4 of 2,770 Total
                                                Items</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <a href="#"
                                                class="btn btn-light-info btn-sm font-weight-bolder font-size-sm py-3 px-6">Upload</a>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <!--begin::Item-->
                                                    <tr>
                                                        <td class="w-40px align-middle pb-6 pl-0 pr-2">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40 symbol-light-success">
                                                                <span class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-success">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                                <path
                                                                                    d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                                                    fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                        </td>
                                                        <td
                                                            class="font-size-lg font-weight-bolder text-dark-75 align-middle w-150px pb-6">
                                                            Top Authors</td>
                                                        <td
                                                            class="font-weight-bold text-muted text-right align-middle pb-6">
                                                            ReactJS, HTML</td>
                                                        <td
                                                            class="font-weight-bold text-muted text-right align-middle pb-6">
                                                            4600 Users</td>
                                                        <td
                                                            class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">
                                                            5.4MB</td>
                                                    </tr>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <tr>
                                                        <td class="w-40px pb-6 pl-0 pr-2">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40 symbol-light-danger align-middle">
                                                                <span class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <rect fill="#000000" x="4" y="4"
                                                                                    width="7" height="7"
                                                                                    rx="1.5" />
                                                                                <path
                                                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                        </td>
                                                        <td
                                                            class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">
                                                            Popular Authors</td>
                                                        <td
                                                            class="font-weight-bold text-muted text-right align-middle pb-6">
                                                            Python, MySQL</td>
                                                        <td
                                                            class="font-weight-bold text-muted text-right align-middle pb-6">
                                                            7200 Users</td>
                                                        <td
                                                            class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">
                                                            2.8MB</td>
                                                    </tr>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <tr>
                                                        <td class="w-40px pb-6 pl-0 pr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-40 symbol-light-primary align-middle">
                                                                <span class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <path
                                                                                    d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                                <path
                                                                                    d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                                    fill="#000000" fill-rule="nonzero" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                        </td>
                                                        <td
                                                            class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">
                                                            New Users</td>
                                                        <td
                                                            class="font-weight-bold text-muted text-right align-middle pb-6">
                                                            Laravel, Symphony</td>
                                                        <td
                                                            class="font-weight-bold text-muted text-right align-middle pb-6">
                                                            890 Users</td>
                                                        <td
                                                            class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">
                                                            1.5MB</td>
                                                    </tr>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <tr>
                                                        <td class="w-40px pl-0 pr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-40 symbol-light-warning align-middle">
                                                                <span class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-warning">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                    fill="#000000" />
                                                                                <rect fill="#000000" opacity="0.3"
                                                                                    transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                                                    x="16.3255682" y="2.94551858"
                                                                                    width="3" height="18"
                                                                                    rx="1" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                        </td>
                                                        <td
                                                            class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">
                                                            Active Customers</td>
                                                        <td class="font-weight-bold text-muted text-right align-middle">
                                                            AngularJS, C#</td>
                                                        <td class="font-weight-bold text-muted text-right align-middle">
                                                            6370 Users</td>
                                                        <td
                                                            class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">
                                                            890KB</td>
                                                    </tr>
                                                    <!--end::Item-->
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List Widget 19-->
                            </div>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <!--begin::Advance Table Widget 10-->
                        <div class="card card-custom">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new
                                        members</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-info font-weight-bolder font-size-sm">New Report</a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-vertical-center"
                                        id="kt_advance_table_widget_4">
                                        <thead>
                                            <tr class="text-left">
                                                <th class="pl-0" style="width: 30px">
                                                    <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                                        <input type="checkbox" value="1" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th class="pl-0" style="min-width: 120px">Order id</th>
                                                <th style="min-width: 110px">Country</th>
                                                <th style="min-width: 110px">
                                                    <span class="text-info">Tanggal</span>
                                                    <span class="svg-icon svg-icon-sm svg-icon-primary">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Down-2.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" x="11" y="4"
                                                                    width="2" height="10" rx="1" />
                                                                <path
                                                                    d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </th>
                                                <th style="min-width: 120px">Company</th>
                                                <th style="min-width: 120px">Status</th>
                                                <th class="pr-0 text-right" style="min-width: 160px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pl-0 py-6">
                                                    <label class="checkbox checkbox-lg checkbox-inline">
                                                        <input type="checkbox" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">Brasil</span>
                                                    <span class="text-muted font-weight-bold">Code: BR</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-info font-weight-bolder d-block font-size-lg">05/28/2020</span>
                                                    <span class="text-muted font-weight-bold">Lunas</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                                    <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="label label-lg label-light-primary label-inline">Approved</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <path
                                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0 py-6">
                                                    <label class="checkbox checkbox-lg checkbox-inline">
                                                        <input type="checkbox" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">05822-FXSP</a>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">Belarus</span>
                                                    <span class="text-muted font-weight-bold">Code: BY</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-info font-weight-bolder d-block font-size-lg">02/04/2020</span>
                                                    <span class="text-muted font-weight-bold">Rejected</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
                                                    <span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
                                                </td>
                                                <td>
                                                    <span class="label label-lg label-light-warning label-inline">In
                                                        Progress</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <path
                                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0 py-6">
                                                    <label class="checkbox checkbox-lg checkbox-inline">
                                                        <input type="checkbox" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bolder text-hover-primary ont-size-lg">00347-BCLQ</a>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">Phillipines</span>
                                                    <span class="text-muted font-weight-bold">Code: PH</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-info font-weight-bolder d-block font-size-lg">23/12/2020</span>
                                                    <span class="text-muted font-weight-bold">Lunas</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
                                                    <span class="text-muted font-weight-bold">Transportation</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="label label-lg label-light-success label-inline">Success</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <path
                                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-0 py-6">
                                                    <label class="checkbox checkbox-lg checkbox-inline">
                                                        <input type="checkbox" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="#"
                                                        class="text-dark font-weight-bolder text-hover-primary font-size-lg">4472-QREX</a>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">Argentina</span>
                                                    <span class="text-muted font-weight-bold">Code: AR</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-info font-weight-bolder d-block font-size-lg">17/09/2021</span>
                                                    <span class="text-muted font-weight-bold">Pending</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The
                                                        Hill</span>
                                                    <span class="text-muted font-weight-bold">Insurance</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="label label-lg label-light-danger label-inline">Rejected</span>
                                                </td>
                                                <td class="pr-0 text-right">
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                        fill="#000000" />
                                                                    <path
                                                                        d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <path
                                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Advance Table Widget 10-->
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
@section('scripts')
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
@endsection
