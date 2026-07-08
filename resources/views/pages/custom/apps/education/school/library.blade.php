@extends('layouts.index')
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Apps
            @endslot
            @slot('li_2')
                Education
            @endslot
            @slot('li_3')
                School
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Education-->
        <div class="d-flex flex-column flex-md-row">
            <!--begin::Aside-->
            <div class="flex-md-row-auto w-md-275px w-xl-325px">
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
                                        class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius The
                                        Great</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
                                        <br />Darius greatness</span>
                                    <!--end::Text-->
                                    <!--begin::Action-->
                                    <div>
                                        <button type="button"
                                            class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
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
                                    <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
                                        <br />Darius greatness</span>
                                    <!--end::Text-->
                                    <!--begin::Action-->
                                    <div>
                                        <button type="button"
                                            class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
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
                                    <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
                                        <br />Darius greatness</span>
                                    <!--end::Text-->
                                    <!--begin::Action-->
                                    <div>
                                        <button type="button"
                                            class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
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
                <!--begin::List Widget 9-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-4">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="font-weight-bolder text-dark">My Activity</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header font-weight-bold py-4">
                                            <span class="font-size-lg">Choose Label:</span>
                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                                data-placement="right" title="Click to learn more..."></i>
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
                                                    <span class="label label-xl label-inline label-light-dark">Staff</span>
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
                    <div class="card-body pt-4">
                        <!--begin::Timeline-->
                        <div class="timeline timeline-6 mt-3">
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep
                                    you honest. And keep structure</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Content-->
                                <div class="timeline-content d-flex">
                                    <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make
                                    deposit
                                    <a href="#" class="text-primary">USD 700</a>. to ESL
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in
                                    poorly driving and keep structure keep great</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order
                                    placed
                                    <a href="#" class="text-primary">#XF-2356</a>.
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-info icon-xl"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep
                                    and you honest. Indulging in poorly driving</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Timeline-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end: List Widget 9-->
            </div>
            <!--end::Aside-->
            <!--begin::Content-->
            <div class="flex-md-row-fluid ml-md-6 ml-lg-8">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Library</span>
                            <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 10,200 books</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title=""
                                data-placement="left" data-original-title="Quick actions">
                                <a href="#" class="btn btn-success font-weight-bolder font-size-sm dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">New Book</a>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
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
                    <div class="card-body">
                        <!--begin: Cari Form-->
                        <!--begin::Search Form-->
                        <div class="mb-10">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Search..." id="kt_datatable_search_query" />
                                                <span>
                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <select class="form-control form-control-solid"
                                                id="kt_datatable_search_status">
                                                <option value="">Status</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <select class="form-control form-control-solid" id="kt_datatable_search_type">
                                                <option value="">Tipe</option>
                                                <option value="4">Success</option>
                                                <option value="5">Info</option>
                                                <option value="6">Danger</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Cari</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--end: Cari Form-->
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                        <!--end: Datatable-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Education-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/custom/education/school/library.js') }}"></script>
@endsection
