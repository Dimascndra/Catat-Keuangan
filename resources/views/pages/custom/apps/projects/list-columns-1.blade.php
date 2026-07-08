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
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                <img src="assets/media/project-logos/3.png" alt="image" />
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <a href="#"
                                    class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">Nexa
                                    - Next generation SAAS</a>
                                <span class="text-muted font-weight-bold">Creates Limitless possibilities</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mb-auto">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
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
                        </div>
                        <!--end::Section-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap mt-14">
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Start Tanggal</span>
                                <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14 Jan,
                                    16</span>
                            </div>
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Jatuh Tempo</span>
                                <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">21 Nov,
                                    18</span>
                            </div>
                            <!--begin::Progress-->
                            <div class="flex-row-fluid mb-7">
                                <span class="d-block font-weight-bold mb-4">Progress</span>
                                <div class="d-flex align-items-center pt-2">
                                    <div class="progress progress-xs mt-2 mb-2 w-100">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 78%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-3 font-weight-bolder">78%</span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Text-->
                        <p class="mb-7 mt-3">I distinguish three main text objectives.First, your objective could be merely
                            to inform people.A second be to persuade people.</p>
                        <!--end::Text-->
                        <!--begin::Blog-->
                        <div class="d-flex flex-wrap">
                            <!--begin: Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Budget</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>249,500</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Expenses</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>439,500</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bolder mb-4">Members</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Blog-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex align-items-center">
                        <div class="d-flex">
                            <div class="d-flex align-items-center mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                fill="#000000" />
                                            <path
                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-bolder text-primary ml-2">72 Tasks</a>
                            </div>
                            <div class="d-flex align-items-center mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-bolder text-primary ml-2">648 Comments</a>
                            </div>
                        </div>
                        <button type="button"
                            class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</button>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                <img src="assets/media/project-logos/4.png" alt="image" />
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <a href="#"
                                    class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">B
                                    &amp; Q - Food Company</a>
                                <span class="text-muted font-weight-bold">Tasty food for everyone</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mb-auto">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
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
                        </div>
                        <!--end::Section-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap mt-14">
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Start Tanggal</span>
                                <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14 Jan,
                                    16</span>
                            </div>
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Jatuh Tempo</span>
                                <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">21 Nov,
                                    18</span>
                            </div>
                            <!--begin::Progress-->
                            <div class="flex-row-fluid mb-7">
                                <span class="d-block font-weight-bold mb-4">Progress</span>
                                <div class="d-flex align-items-center pt-2">
                                    <div class="progress progress-xs mt-2 mb-2 w-100">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-3 font-weight-bolder">65%</span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Text-->
                        <p class="mb-7 mt-3">I distinguish three main text objectives.First, your objective could be merely
                            to inform people.A second be to persuade people.</p>
                        <!--end::Text-->
                        <!--begin::Blog-->
                        <div class="d-flex flex-wrap">
                            <!--begin: Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Budget</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>249,500</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Expenses</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>439,700</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bolder mb-4">Members</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Blog-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
                        <div class="d-flex">
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                fill="#000000" />
                                            <path
                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">45 Tasks</a>
                            </div>
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">875 Comments</a>
                            </div>
                        </div>
                        <button type="button"
                            class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</button>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                <img src="assets/media/project-logos/1.png" alt="image" />
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <a href="#"
                                    class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">Air
                                    B &amp; B - Real Estate</a>
                                <span class="text-muted font-weight-bold">Unlimited Flexibility</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mb-auto">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
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
                        </div>
                        <!--end::Section-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap mt-14">
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Start Tanggal</span>
                                <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14 Jan,
                                    16</span>
                            </div>
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Jatuh Tempo</span>
                                <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">21 Nov,
                                    18</span>
                            </div>
                            <!--begin::Progress-->
                            <div class="flex-row-fluid mb-7">
                                <span class="d-block font-weight-bold mb-4">Progress</span>
                                <div class="d-flex align-items-center pt-2">
                                    <div class="progress progress-xs mt-2 mb-2 w-100">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 97%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-3 font-weight-bolder">97%</span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Text-->
                        <p class="mb-7 mt-3">I distinguish three main text objectives.First, your objective could be merely
                            to inform people.A second be to persuade people.</p>
                        <!--end::Text-->
                        <!--begin::Blog-->
                        <div class="d-flex flex-wrap">
                            <!--begin: Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Budget</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>429,500</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Expenses</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>349,300</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bolder mb-4">Members</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Blog-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
                        <div class="d-flex">
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                fill="#000000" />
                                            <path
                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">72 Tasks</a>
                            </div>
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">648 Comments</a>
                            </div>
                        </div>
                        <button type="button"
                            class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</button>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                <img src="assets/media/project-logos/2.png" class="rounded-circle" alt="image" />
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <a href="#"
                                    class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">Ad
                                    Brand - Luxury Footwear</a>
                                <span class="text-muted font-weight-bold">Global Trendsetter</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mb-auto">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
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
                        </div>
                        <!--end::Section-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap mt-14">
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Start Tanggal</span>
                                <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">14 Jan,
                                    16</span>
                            </div>
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Jatuh Tempo</span>
                                <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">21 Nov,
                                    18</span>
                            </div>
                            <!--begin::Progress-->
                            <div class="flex-row-fluid mb-7">
                                <span class="d-block font-weight-bold mb-4">Progress</span>
                                <div class="d-flex align-items-center pt-2">
                                    <div class="progress progress-xs mt-2 mb-2 w-100">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-3 font-weight-bolder">88%</span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Text-->
                        <p class="mb-7 mt-3">I distinguish three main text objectives.First, your objective could be merely
                            to inform people.A second be to persuade people.</p>
                        <!--end::Text-->
                        <!--begin::Blog-->
                        <div class="d-flex flex-wrap">
                            <!--begin: Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Budget</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>532,100</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Expenses</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>249,500</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bolder mb-4">Members</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Blog-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
                        <div class="d-flex">
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                fill="#000000" />
                                            <path
                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">102 Tasks</a>
                            </div>
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">899 Comments</a>
                            </div>
                        </div>
                        <button type="button"
                            class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</button>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                <img src="assets/media/project-logos/6.png" alt="image" />
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <a href="#"
                                    class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">Nexa
                                    - Next generation SAAS</a>
                                <span class="text-muted font-weight-bold">Creates Limitless possibilities</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mb-auto">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
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
                        </div>
                        <!--end::Section-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap mt-14">
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Start Tanggal</span>
                                <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">17 Jan,
                                    16</span>
                            </div>
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Jatuh Tempo</span>
                                <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">24 Nov,
                                    13</span>
                            </div>
                            <!--begin::Progress-->
                            <div class="flex-row-fluid mb-7">
                                <span class="d-block font-weight-bold mb-4">Progress</span>
                                <div class="d-flex align-items-center pt-2">
                                    <div class="progress progress-xs mt-2 mb-2 w-100">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 55%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-3 font-weight-bolder">55%</span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Text-->
                        <p class="mb-7 mt-3">I distinguish three main text objectives.First, your objective could be merely
                            to inform people.A second be to persuade people.</p>
                        <!--end::Text-->
                        <!--begin::Blog-->
                        <div class="d-flex flex-wrap">
                            <!--begin: Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Budget</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>549,400</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Expenses</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>219,500</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bolder mb-4">Members</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Blog-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex align-items-center">
                        <div class="d-flex">
                            <div class="d-flex align-items-center mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                fill="#000000" />
                                            <path
                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-bolder text-primary ml-2">65 Tasks</a>
                            </div>
                            <div class="d-flex align-items-center mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-bolder text-primary ml-2">644 Comments</a>
                            </div>
                        </div>
                        <button type="button"
                            class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</button>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                <img src="assets/media/project-logos/6.png" alt="image" />
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column mr-auto">
                                <!--begin: Title-->
                                <a href="#"
                                    class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">B
                                    &amp; Q - Food Company</a>
                                <span class="text-muted font-weight-bold">Tasty food for everyone</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar mb-auto">
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                    data-placement="left">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
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
                        </div>
                        <!--end::Section-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap mt-14">
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Start Tanggal</span>
                                <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">24 Jan,
                                    13</span>
                            </div>
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="d-block font-weight-bold mb-4">Jatuh Tempo</span>
                                <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">23 Nov,
                                    11</span>
                            </div>
                            <!--begin::Progress-->
                            <div class="flex-row-fluid mb-7">
                                <span class="d-block font-weight-bold mb-4">Progress</span>
                                <div class="d-flex align-items-center pt-2">
                                    <div class="progress progress-xs mt-2 mb-2 w-100">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ml-3 font-weight-bolder">75%</span>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Text-->
                        <p class="mb-7 mt-3">I distinguish three main text objectives.First, your objective could be merely
                            to inform people.A second be to persuade people.</p>
                        <!--end::Text-->
                        <!--begin::Blog-->
                        <div class="d-flex flex-wrap">
                            <!--begin: Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Budget</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>549,600</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mr-12 d-flex flex-column mb-7">
                                <span class="font-weight-bolder mb-4">Expenses</span>
                                <span class="font-weight-bolder font-size-h5 pt-1">
                                    <span class="font-weight-bold text-dark-50">$</span>249,500</span>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bolder mb-4">Members</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip"
                                        title="Teresa Fox">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Blog-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex align-items-sm-center flex-wrap flex-column flex-sm-row">
                        <div class="d-flex">
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                fill="#000000" />
                                            <path
                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">45 Tasks</a>
                            </div>
                            <div class="d-flex mr-7">
                                <span class="svg-icon svg-icon-gray-500">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <a href="#" class="font-weight-boldest text-primary ml-2">875 Comments</a>
                            </div>
                        </div>
                        <button type="button"
                            class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</button>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
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
                <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
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
        <!--end::Pagination-->
    </div>
@endsection
