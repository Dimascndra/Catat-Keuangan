@extends('layouts.index')
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Projects
        @endslot
        @slot('other')
            <div class="d-flex align-items-center" id="kt_subheader_search">
                <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">54 Total</span>
                <form class="ml-5">
                    <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                        <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..." />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <span class="svg-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        @endslot
        @slot('action')
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class=""></a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="/custom/apps/projects/add-project" class="btn btn-light-primary font-weight-bold ml-2">Add Project</a>
                <!--end::Button-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-success svg-icon-2x">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        <!--begin::Naviigation-->
                        <ul class="navi">
                            <li class="navi-header font-weight-bold py-5">
                                <span class="font-size-lg">Add New:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right"
                                    title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="flaticon2-shopping-cart-1"></i>
                                    </span>
                                    <span class="navi-text">Order</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="navi-icon flaticon2-calendar-8"></i>
                                    </span>
                                    <span class="navi-text">Members</span>
                                    <span class="navi-label">
                                        <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="navi-icon flaticon2-telegram-logo"></i>
                                    </span>
                                    <span class="navi-text">Project</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="navi-icon flaticon2-new-email"></i>
                                    </span>
                                    <span class="navi-text">Record</span>
                                    <span class="navi-label">
                                        <span class="label label-light-success label-rounded font-weight-bold">5</span>
                                    </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer pt-5 pb-4">
                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip"
                                    data-placement="right" title="Click to learn more...">Learn more</a>
                            </li>
                        </ul>
                        <!--end::Naviigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                data-placement="left">
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
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/project-logos/1.png" alt="image" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Air B</a>
                                <span class="text-muted font-weight-bold">Head of Development</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">I distinguish three main text objectives. First, your objective
                            <a href="#" class="text-primary pr-1">#xrs-54pq</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Budget:</span>
                                <a href="#" class="text-muted text-hover-primary">$249,500</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Expences:</span>
                                <a href="#" class="text-muted text-hover-primary">$76,810</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Jatuh Tempo:</span>
                                <span class="text-muted font-weight-bold">21.05.2016</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#"
                            class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">write
                            message</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                data-placement="left">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header pb-1">
                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                                new:</span>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                </span>
                                                <span class="navi-text">Order</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-calendar-8"></i>
                                                </span>
                                                <span class="navi-text">Event</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-graph-1"></i>
                                                </span>
                                                <span class="navi-text">Report</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                <span class="navi-text">Post</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-writing"></i>
                                                </span>
                                                <span class="navi-text">File</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/project-logos/2.png" alt="image" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Ad Brand</a>
                                <span class="text-muted font-weight-bold">PR Manager</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">I distinguish three main text objectives. First, your objective
                            <a href="#" class="text-primary pr-1">#xrs-54pq</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Budget:</span>
                                <a href="#" class="text-muted text-hover-primary">$249,500</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Expences:</span>
                                <a href="#" class="text-muted text-hover-primary">$76,810</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Jatuh Tempo:</span>
                                <span class="text-muted font-weight-bold">21.05.2016</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#"
                            class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4">write
                            message</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                data-placement="left">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Naviigation-->
                                    <ul class="navi">
                                        <li class="navi-header font-weight-bold py-5">
                                            <span class="font-size-lg">Add New:</span>
                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                                data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="navi-separator mb-3 opacity-70"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                </span>
                                                <span class="navi-text">Order</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-calendar-8"></i>
                                                </span>
                                                <span class="navi-text">Members</span>
                                                <span class="navi-label">
                                                    <span
                                                        class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-telegram-logo"></i>
                                                </span>
                                                <span class="navi-text">Project</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-new-email"></i>
                                                </span>
                                                <span class="navi-text">Record</span>
                                                <span class="navi-label">
                                                    <span
                                                        class="label label-light-success label-rounded font-weight-bold">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-separator mt-3 opacity-70"></li>
                                        <li class="navi-footer pt-5 pb-4">
                                            <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More
                                                options</a>
                                            <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#"
                                                data-toggle="tooltip" data-placement="right"
                                                title="Click to learn more...">Learn more</a>
                                        </li>
                                    </ul>
                                    <!--end::Naviigation-->
                                </div>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/project-logos/3.png" alt="image" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Nexa</a>
                                <span class="text-muted font-weight-bold">Python Developer</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">I distinguish three main text objectives. First, your objective
                            <a href="#" class="text-primary pr-1">#xrs-54pq</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Budget:</span>
                                <a href="#" class="text-muted text-hover-primary">$249,500</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Expences:</span>
                                <a href="#" class="text-muted text-hover-primary">$76,810</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Jatuh Tempo:</span>
                                <span class="text-muted font-weight-bold">21.05.2016</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#"
                            class="btn btn-block btn-sm btn-light-info font-weight-bolder text-uppercase py-4">write
                            message</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                data-placement="left">
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
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/project-logos/5.png" alt="image" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Citrix</a>
                                <span class="text-muted font-weight-bold">Project Manager</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">I distinguish three main text objectives. First, your objective
                            <a href="#" class="text-primary pr-1">#xrs-54pq</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Budget:</span>
                                <a href="#" class="text-muted text-hover-primary">$249,500</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Expences:</span>
                                <a href="#" class="text-muted text-hover-primary">$76,810</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Jatuh Tempo:</span>
                                <span class="text-muted font-weight-bold">21.05.2016</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#"
                            class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">write
                            message</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                data-placement="left">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover">
                                        <li class="navi-header pb-1">
                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add
                                                new:</span>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                </span>
                                                <span class="navi-text">Order</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-calendar-8"></i>
                                                </span>
                                                <span class="navi-text">Event</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-graph-1"></i>
                                                </span>
                                                <span class="navi-text">Report</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                <span class="navi-text">Post</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-writing"></i>
                                                </span>
                                                <span class="navi-text">File</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/project-logos/6.png" alt="image" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Gap</a>
                                <span class="text-muted font-weight-bold">Frontend Developer</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">I distinguish three main text objectives. First, your objective
                            <a href="#" class="text-primary pr-1">#xrs-54pq</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Budget:</span>
                                <a href="#" class="text-muted text-hover-primary">$249,500</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Expences:</span>
                                <a href="#" class="text-muted text-hover-primary">$76,810</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Jatuh Tempo:</span>
                                <span class="text-muted font-weight-bold">21.05.2016</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#"
                            class="btn btn-block btn-sm btn-light-info font-weight-bolder text-uppercase py-4">write
                            message</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                data-placement="left">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Naviigation-->
                                    <ul class="navi">
                                        <li class="navi-header font-weight-bold py-5">
                                            <span class="font-size-lg">Add New:</span>
                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                                data-placement="right" title="Click to learn more..."></i>
                                        </li>
                                        <li class="navi-separator mb-3 opacity-70"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                </span>
                                                <span class="navi-text">Order</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-calendar-8"></i>
                                                </span>
                                                <span class="navi-text">Members</span>
                                                <span class="navi-label">
                                                    <span
                                                        class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-telegram-logo"></i>
                                                </span>
                                                <span class="navi-text">Project</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-new-email"></i>
                                                </span>
                                                <span class="navi-text">Record</span>
                                                <span class="navi-label">
                                                    <span
                                                        class="label label-light-success label-rounded font-weight-bold">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="navi-separator mt-3 opacity-70"></li>
                                        <li class="navi-footer pt-5 pb-4">
                                            <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More
                                                options</a>
                                            <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#"
                                                data-toggle="tooltip" data-placement="right"
                                                title="Click to learn more...">Learn more</a>
                                        </li>
                                    </ul>
                                    <!--end::Naviigation-->
                                </div>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4">
                                <div class="symbol symbol-circle symbol-lg-75">
                                    <img src="assets/media/project-logos/7.png" alt="image" />
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Nokia</a>
                                <span class="text-muted font-weight-bold">App Developer</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::User-->
                        <!--begin::Desc-->
                        <p class="mb-7">I distinguish three main text objectives. First, your objective
                            <a href="#" class="text-primary pr-1">#xrs-54pq</a>
                        </p>
                        <!--end::Desc-->
                        <!--begin::Info-->
                        <div class="mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Budget:</span>
                                <a href="#" class="text-muted text-hover-primary">$249,500</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-cente my-1">
                                <span class="text-dark-75 font-weight-bolder mr-2">Expences:</span>
                                <a href="#" class="text-muted text-hover-primary">$76,810</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-dark-75 font-weight-bolder mr-2">Jatuh Tempo:</span>
                                <span class="text-muted font-weight-bold">21.05.2016</span>
                            </div>
                        </div>
                        <!--end::Info-->
                        <a href="#"
                            class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write
                            message</a>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:: Card-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Pagination-->
        <div class="card card-custom">
            <div class="card-body py-7">
                <!--begin::Pagination-->
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-wrap mr-3">
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                        <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <select
                            class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                            style="width: 75px;">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span class="text-muted">Displaying 10 of 230 records</span>
                    </div>
                </div>
                <!--end:: Pagination-->
            </div>
        </div>
        <!--end::Pagination-->
    </div>
    <!--end::Container-->
@endsection
