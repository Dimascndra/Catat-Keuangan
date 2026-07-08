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
                Todo
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Todo-->
        <div class="d-flex flex-row">
            <!--begin::Aside-->
            <div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="kt_todo_aside">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <!--begin::Body-->
                    <div class="card-body px-5">
                        <!--begin:Nav-->
                        <div
                            class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link active">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Inbox</span>
                                    <span class="navi-label">
                                        <span class="label label-rounded label-light-success font-weight-bolder">3</span>
                                    </span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Half-star.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Marked</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Draft</span>
                                    <span class="navi-label">
                                        <span class="label label-rounded label-light-warning font-weight-bolder">5</span>
                                    </span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Sending.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M8,13.1668961 L20.4470385,11.9999863 L8,10.8330764 L8,5.77181995 C8,5.70108058 8.01501031,5.63114635 8.04403925,5.56663761 C8.15735832,5.31481744 8.45336217,5.20254012 8.70518234,5.31585919 L22.545552,11.5440255 C22.6569791,11.5941677 22.7461882,11.6833768 22.7963304,11.794804 C22.9096495,12.0466241 22.7973722,12.342628 22.545552,12.455947 L8.70518234,18.6841134 C8.64067359,18.7131423 8.57073936,18.7281526 8.5,18.7281526 C8.22385763,18.7281526 8,18.504295 8,18.2281526 L8,13.1668961 Z"
                                                        fill="#000000" />
                                                    <path
                                                        d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M4,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L4,8 C3.44771525,8 3,7.55228475 3,7 C3,6.44771525 3.44771525,6 4,6 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Sent</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Trash</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Section-->
                            <div class="navi-section mt-7 mb-2 font-size-h6 font-weight-bold pb-0">Projects</div>
                            <!--end:Section-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                        transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">BPP Extranet</span>
                                    <span class="navi-label">
                                        <span class="label label-rounded label-light-success font-weight-bold">4</span>
                                    </span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                        transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Dipro CRM</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                        transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">IBO Billing</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <i class="fa flaticon2-plus icon-1x"></i>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Add Project</span>
                                </a>
                            </div>
                            <!--begin:Section-->
                            <div class="navi-section mt-7 mb-2 font-size-h6 font-weight-bold pb-0">Tags</div>
                            <!--end:Section-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <i class="fa fa-genderless text-danger"></i>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Custom Work</span>
                                    <span class="navi-label">
                                        <span class="label label-rounded label-light-danger font-weight-bolder">6</span>
                                    </span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <i class="fa fa-genderless text-success"></i>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Partnership</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <i class="fa fa-genderless text-info"></i>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">In Progres</span>
                                </a>
                            </div>
                            <!--end:Item-->
                            <!--begin:Item-->
                            <div class="navi-item my-2">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon mr-4">
                                        <i class="fa flaticon2-plus icon-1x"></i>
                                    </span>
                                    <span class="navi-text font-weight-bolder font-size-lg">Add Label</span>
                                </a>
                            </div>
                            <!--end:Item-->
                        </div>
                        <!--end:Nav-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Aside-->
            <!--begin::List-->
            <div class="flex-row-fluid ml-lg-8">
                <div class="d-flex flex-column flex-grow-1">
                    <!--begin::Head-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex align-items-center justify-content-between flex-wrap py-3">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center mr-2 py-2">
                                <!--begin::Title-->
                                <h3 class="font-weight-bold mb-0 mr-10">BPP Extranet</h3>
                                <!--end::Title-->
                                <!--begin::Navigation-->
                                <div class="d-flex mr-3">
                                    <!--begin::Navi-->
                                    <div class="navi navi-hover navi-active navi-link-rounded navi-bold d-flex flex-row">
                                        <!--begin::Item-->
                                        <div class="navi-item mr-2">
                                            <a href="/custom/apps/todo/tasks" class="navi-link active">
                                                <span class="navi-text">Tasks</span>
                                            </a>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="navi-item mr-2">
                                            <a href="/custom/apps/todo/docs" class="navi-link">
                                                <span class="navi-text">Docs</span>
                                            </a>
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="navi-item mr-2">
                                            <a href="/custom/apps/todo/files" class="navi-link">
                                                <span class="navi-text">Files</span>
                                            </a>
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Navi-->
                                    <!--begin::Dropdown-->
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-clean btn-icon" data-toggle="dropdown">
                                            <i class="ki ki-bold-more-hor font-size-md"></i>
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
                                    <!--end::Dropdown-->
                                </div>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover py-2">
                                <div class="symbol symbol-30" data-toggle="tooltip" data-placement="top"
                                    title="Alice Stone">
                                    <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                </div>
                                <div class="symbol symbol-30" data-toggle="tooltip" data-placement="top"
                                    title="Anna Krox">
                                    <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                </div>
                                <div class="symbol symbol-30" data-toggle="tooltip" data-placement="top"
                                    title="Nick Nilson">
                                    <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                </div>
                                <div class="symbol symbol-30" data-toggle="tooltip" data-placement="top"
                                    title="Ana Tor">
                                    <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                </div>
                                <div class="symbol symbol-30 symbol-light-primary" data-toggle="tooltip"
                                    data-placement="top" title="New user" role="button">
                                    <span class="symbol-label font-weight-bold">
                                        <i class="fa flaticon2-plus font-size-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Head-->
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-xl-6">
                            <!--begin::Card-->
                            <div class="card card-custom card-stretch" id="kt_todo_list">
                                <!--begin::Header-->
                                <div class="card-header align-items-center flex-wrap py-6 border-0 h-auto">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="d-flex align-items-center mr-1 my-2">
                                            <label data-inbox="group-select"
                                                class="checkbox checkbox-inline checkbox-primary mr-3">
                                                <input type="checkbox" />
                                                <span class="symbol-label"></span>
                                            </label>
                                            <div class="btn-group">
                                                <span class="btn btn-clean btn-icon btn-sm mr-1" data-toggle="dropdown"
                                                    role="button">
                                                    <i class="ki ki-bold-arrow-down icon-sm"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-left p-0 m-0 dropdown-menu-sm">
                                                    <ul class="navi py-3">
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">All</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">Read</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">Unread</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">Starred</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">Unstarred</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="btn btn-clean btn-icon btn-sm mr-2" data-toggle="tooltip"
                                                title="Reload list">
                                                <i class="ki ki-refresh icon-1x"></i>
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center mr-1 my-2">
                                            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip"
                                                title="Archive">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip"
                                                title="Spam">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Warning-1-circle.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <circle fill="#000000" opacity="0.3" cx="12"
                                                                cy="12" r="10" />
                                                            <rect fill="#000000" x="11" y="7" width="2"
                                                                height="8" rx="1" />
                                                            <rect fill="#000000" x="11" y="16" width="2"
                                                                height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip"
                                                title="Move">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Media-folder.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M10.782158,17.5100514 L15.1856088,14.5000448 C15.4135806,14.3442132 15.4720618,14.0330791 15.3162302,13.8051073 C15.2814587,13.7542388 15.2375842,13.7102355 15.1868178,13.6753149 L10.783367,10.6463273 C10.5558531,10.489828 10.2445489,10.5473967 10.0880496,10.7749107 C10.0307022,10.8582806 10,10.9570884 10,11.0582777 L10,17.097272 C10,17.3734143 10.2238576,17.597272 10.5,17.597272 C10.6006894,17.597272 10.699033,17.566872 10.782158,17.5100514 Z"
                                                                fill="#000000" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center my-2">
                                        <div class="dropdown mr-2" data-toggle="tooltip" title="Sort">
                                            <span class="btn btn-default btn-icon btn-sm" data-toggle="dropdown">
                                                <i class="flaticon2-console icon-1x"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-sm">
                                                <ul class="navi py-3">
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link active">
                                                            <span class="navi-text">Newest</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">Olders</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">Unread</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown" data-toggle="tooltip" title="Settings">
                                            <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="dropdown">
                                                <i class="ki ki-bold-more-hor icon-1x"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-md">
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
                                        <span class="btn btn-light-success btn-sm text-uppercase font-weight-bolder"
                                            data-toggle="tooltip" title="Previose page">New Task</span>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body p-0">
                                    <!--begin::Responsive container-->
                                    <div class="table-responsive">
                                        <!--begin::Items-->
                                        <div class="list list-hover min-w-500px" data-inbox="list">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#"
                                                            class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Digital PPV Customer
                                                        Confirmation</div>
                                                    <!--end::Title-->
                                                    <!--begin::Labels-->
                                                    <div class="mt-2">
                                                        <span
                                                            class="label label-light-primary font-weight-bold label-inline">inbox</span>
                                                    </div>
                                                    <!--end::Labels-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bolder" data-toggle="view">8:30 PM</div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <span class="symbol symbol-30 ml-3">
                                                        <span class="symbol-label"
                                                            style="background-image: url('assets/media/users/100_13.jpg')"></span>
                                                    </span>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Your iBuy.com grocery shopping
                                                        confirmation</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bolder" data-toggle="view">day ago</div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <div class="symbol symbol-light-danger symbol-30 ml-3">
                                                        <span class="symbol-label font-weight-bolder">OJ</span>
                                                    </div>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Your Order #224820998666029
                                                        has been Confirmed</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">
                                                        11:20PM</div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <div class="symbol symbol-light-primary symbol-30 ml-3">
                                                        <span class="symbol-label font-weight-bolder">EF</span>
                                                    </div>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#"
                                                            class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Payment Notification
                                                        DLOP2329KD</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bolder" data-toggle="view">2 days ago
                                                    </div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <span class="symbol symbol-30 ml-3">
                                                        <span class="symbol-label"
                                                            style="background-image: url('assets/media/users/100_2.jpg')"></span>
                                                    </span>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Congratulations on your iRun
                                                        Coach subscription</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">Jul 25
                                                    </div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <div class="symbol symbol-light-success symbol-30 ml-3">
                                                        <span class="symbol-label font-weight-bolder">MP</span>
                                                    </div>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Pay bills &amp; win up to 600$
                                                        Cashback!</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">July
                                                        24</div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <span class="symbol symbol-30 ml-3">
                                                        <span class="symbol-label"
                                                            style="background-image: url('assets/media/users/100_4.jpg')"></span>
                                                    </span>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#"
                                                            class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Activate your LIPO Account
                                                        today</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bolder" data-toggle="view">Jun 13</div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <span class="symbol symbol-30 ml-3">
                                                        <span class="symbol-label"
                                                            style="background-image: url('assets/media/users/100_12.jpg')"></span>
                                                    </span>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">About your request for
                                                        PalmLake</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">25 May
                                                    </div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <div class="symbol symbol-light symbol-30 ml-3">
                                                        <span class="symbol-label font-weight-bolder">WE</span>
                                                    </div>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Verification of your card
                                                        transaction</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">May 23
                                                    </div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <span class="symbol symbol-30 ml-3">
                                                        <span class="symbol-label"
                                                            style="background-image: url('assets/media/users/100_6.jpg')"></span>
                                                    </span>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Payment Notification
                                                        (DE223232034)</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">Apr 12
                                                    </div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <span class="symbol symbol-30 ml-3">
                                                        <span class="symbol-label"
                                                            style="background-image: url('assets/media/users/100_8.jpg')"></span>
                                                    </span>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Welcome, Patty</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">Mar 1
                                                    </div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <span class="symbol symbol-30 ml-3">
                                                        <span class="symbol-label"
                                                            style="background-image: url('assets/media/users/100_9.jpg')"></span>
                                                    </span>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="checkbox checkbox-inline checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right" title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Optimize with Recommendations,
                                                        now used by most</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bold text-muted" data-toggle="view">Feb 11
                                                    </div>
                                                    <!--end::Datetime-->
                                                    <!--begin::User Photo-->
                                                    <div class="symbol symbol-light-warning symbol-30 ml-3">
                                                        <span class="symbol-label font-weight-bolder">RW</span>
                                                    </div>
                                                    <!--end::User Photo-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Responsive container-->
                                    <!--begin::Pagination-->
                                    <div class="d-flex align-items-center my-2 my-6 card-spacer-x justify-content-end">
                                        <div class="d-flex align-items-center mr-2" data-toggle="tooltip"
                                            title="Records per page">
                                            <span class="text-muted font-weight-bold mr-2" data-toggle="dropdown">1 -
                                                50 of 235</span>
                                            <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-sm">
                                                <ul class="navi py-3">
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">20 per page</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link active">
                                                            <span class="navi-text">50 par page</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">100 per page</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip"
                                            title="Previose page">
                                            <i class="ki ki-bold-arrow-back icon-sm"></i>
                                        </span>
                                        <span class="btn btn-default btn-icon btn-sm" data-toggle="tooltip"
                                            title="Next page">
                                            <i class="ki ki-bold-arrow-next icon-sm"></i>
                                        </span>
                                    </div>
                                    <!--end::Pagination-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-xl-6 pt-10 pt-xl-0">
                            <!--begin::Card-->
                            <div class="card card-custom card-stretch" id="kt_todo_view">
                                <!--begin::Header-->
                                <div
                                    class="card-header align-items-center flex-wrap justify-content-between border-0 py-6 h-auto">
                                    <!--begin::Left-->
                                    <div class="d-flex align-items-center my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35 mr-3">
                                                <div class="symbol-label"
                                                    style="background-image: url('assets/media/users/100_12.jpg')">
                                                </div>
                                            </div>
                                            <a href="#"
                                                class="text-dark-75 font-size-lg text-hover-primary font-weight-bolder">Dave
                                                Stone</a>
                                        </div>
                                    </div>
                                    <!--end::Left-->
                                    <!--begin::Right-->
                                    <div class="d-flex align-items-center justify-content-end text-right my-2">
                                        <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip"
                                            title="Archive">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip"
                                            title="Mark as read">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Duplicate.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M15.9956071,6 L9,6 C7.34314575,6 6,7.34314575 6,9 L6,15.9956071 C4.70185442,15.9316381 4,15.1706419 4,13.8181818 L4,6.18181818 C4,4.76751186 4.76751186,4 6.18181818,4 L13.8181818,4 C15.1706419,4 15.9316381,4.70185442 15.9956071,6 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M10.1818182,8 L17.8181818,8 C19.2324881,8 20,8.76751186 20,10.1818182 L20,17.8181818 C20,19.2324881 19.2324881,20 17.8181818,20 L10.1818182,20 C8.76751186,20 8,19.2324881 8,17.8181818 L8,10.1818182 C8,8.76751186 8.76751186,8 10.1818182,8 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip"
                                            title="Move">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Media-folder.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M10.782158,17.5100514 L15.1856088,14.5000448 C15.4135806,14.3442132 15.4720618,14.0330791 15.3162302,13.8051073 C15.2814587,13.7542388 15.2375842,13.7102355 15.1868178,13.6753149 L10.783367,10.6463273 C10.5558531,10.489828 10.2445489,10.5473967 10.0880496,10.7749107 C10.0307022,10.8582806 10,10.9570884 10,11.0582777 L10,17.097272 C10,17.3734143 10.2238576,17.597272 10.5,17.597272 C10.6006894,17.597272 10.699033,17.566872 10.782158,17.5100514 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="btn btn-light-danger btn-sm text-uppercase font-weight-bolder mr-2"
                                            data-toggle="tooltip" title="Change due date">May 5</span>
                                        <span class="btn btn-light-success btn-sm text-uppercase font-weight-bolder"
                                            data-toggle="tooltip" title="Mark as complete">Complete</span>
                                    </div>
                                    <!--end::Right-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body p-0">
                                    <!--begin::Header-->
                                    <div
                                        class="d-flex align-items-center justify-content-between flex-wrap card-spacer-x py-3">
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column mr-2 py-2">
                                            <a href="#"
                                                class="text-dark text-hover-primary font-weight-bold font-size-h4 mr-3">Company
                                                Meeting Agenda</a>
                                            <div class="d-flex align-items-center py-1">
                                                <a href="#"
                                                    class="d-flex align-items-center text-muted text-hover-primary mr-2">
                                                    <span class="fa fa-genderless text-danger icon-md mr-2"></span>In
                                                    progress</a>
                                                <a href="#"
                                                    class="d-flex align-items-center text-muted text-hover-primary">
                                                    <span
                                                        class="fa fa-genderless text-success icon-md mr-2"></span>Urgent</a>
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Toolbar-->
                                        <div class="d-flex py-2">
                                            <span class="btn btn-default btn-sm btn-icon" data-dismiss="modal">
                                                <i class="flaticon2-fax"></i>
                                            </span>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Messages-->
                                    <div class="mb-3">
                                        <!--begin::Message-->
                                        <div class="cursor-pointer shadow-xs toggle-on" data-inbox="message">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-start card-spacer-x py-4">
                                                <!--begin::User Photo-->
                                                <span class="symbol symbol-35 mr-3 mt-1">
                                                    <span class="symbol-label"
                                                        style="background-image: url('assets/media/users/100_13.jpg')"></span>
                                                </span>
                                                <!--end::User Photo-->
                                                <!--begin::User Details-->
                                                <div class="d-flex flex-column flex-grow-1 flex-wrap mr-2">
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="font-size-lg font-weight-bolder text-dark-75 text-hover-primary mr-2">Chris
                                                            Muller</a>
                                                        <div class="font-weight-bold text-muted">
                                                            <span class="label label-success label-dot mr-2"></span>1
                                                            Day ago
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <div class="toggle-off-item">
                                                            <span class="font-weight-bold text-muted cursor-pointer"
                                                                data-toggle="dropdown">to me
                                                                <i
                                                                    class="flaticon2-down icon-xs ml-1 text-dark-50"></i></span>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-md dropdown-menu-left p-5">
                                                                <table>
                                                                    <tr>
                                                                        <td class="text-muted w-75px py-2">From</td>
                                                                        <td>Mark Andre</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted py-2">Tanggal:</td>
                                                                        <td>11:27 PM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted py-2">Subject:</td>
                                                                        <td>Trip Reminder. Thank you for flying with us!
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted py-2">Reply to:</td>
                                                                        <td>mark.andre@gmail.com</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="text-muted font-weight-bold toggle-on-item"
                                                            data-inbox="toggle">With resrpect, i must disagree with
                                                            Mr.Zinsser. We all know the most part of important part....
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="font-weight-bold text-muted mr-2">11:19AM</div>
                                                    <div class="d-flex align-items-center" data-inbox="toolbar">
                                                        <span class="btn btn-clean btn-xs btn-icon mr-2"
                                                            data-toggle="tooltip" data-placement="top" title="Star">
                                                            <i class="flaticon-star icon-1x text-warning"></i>
                                                        </span>
                                                        <span class="btn btn-clean btn-xs btn-icon"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button icon-1x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::User Details-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Comment-->
                                            <div class="card-spacer-x pt-2 pb-5 toggle-off-item">
                                                <!--begin::Text-->
                                                <div class="mb-1">
                                                    <p>Hi Bob,</p>
                                                    <p>With resrpect, i must disagree with Mr.Zinsser. We all know the
                                                        most part of important part of any article is the title.Without
                                                        a compelleing title, your reader won't even get to the first
                                                        sentence.</p>
                                                    <p>Best regards,
                                                        <br />Jason Muller
                                                    </p>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Attachments-->
                                                <div class="d-flex flex-column font-size-sm font-weight-bold">
                                                    <a href="#"
                                                        class="d-flex align-items-center text-muted text-hover-primary py-1">
                                                        <span
                                                            class="flaticon2-clip-symbol text-warning icon-1x mr-2"></span>Agreement
                                                        Samle.pdf</a>
                                                    <a href="#"
                                                        class="d-flex align-items-center text-muted text-hover-primary py-1">
                                                        <span
                                                            class="flaticon2-clip-symbol text-warning icon-1x mr-2"></span>Requirements.docx</a>
                                                </div>
                                                <!--end::Attachments-->
                                            </div>
                                            <!--end::Comment-->
                                        </div>
                                        <!--end::Message-->
                                        <!--begin::Message-->
                                        <div class="cursor-pointer shadow-xs toggle-off" data-inbox="message">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-start card-spacer-x py-4">
                                                <!--begin::User Photo-->
                                                <span class="symbol symbol-35 mr-3 mt-1">
                                                    <span class="symbol-label"
                                                        style="background-image: url('assets/media/users/100_10.jpg')"></span>
                                                </span>
                                                <!--end::User Photo-->
                                                <!--begin::User Details-->
                                                <div class="d-flex flex-column flex-grow-1 flex-wrap mr-2">
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="font-size-lg font-weight-bolder text-dark-75 text-hover-primary mr-2">Ana
                                                            Stone</a>
                                                        <div class="font-weight-bold text-muted">
                                                            <span class="label label-success label-dot mr-2"></span>3
                                                            Day ago
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <div class="toggle-off-item">
                                                            <span class="font-weight-bold text-muted cursor-pointer"
                                                                data-toggle="dropdown">to me
                                                                <i
                                                                    class="flaticon2-down icon-xs ml-1 text-dark-50"></i></span>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-md dropdown-menu-left p-5">
                                                                <table>
                                                                    <tr>
                                                                        <td class="text-muted w-75px py-2">From</td>
                                                                        <td>Mark Andre</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted py-2">Tanggal:</td>
                                                                        <td>11:27 PM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted py-2">Subject:</td>
                                                                        <td>Trip Reminder. Thank you for flying with us!
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-muted py-2">Reply to:</td>
                                                                        <td>mark.andre@gmail.com</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="text-muted font-weight-bold toggle-on-item"
                                                            data-inbox="toggle">Compelleing title, your reader won't
                                                            even get to the first</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="font-weight-bold text-muted mr-2">10:30AM</div>
                                                    <div class="d-flex align-items-center" data-inbox="toolbar">
                                                        <span class="btn btn-clean btn-xs btn-icon mr-2"
                                                            data-toggle="tooltip" data-placement="top" title="Star">
                                                            <i class="flaticon-star icon-1x text-warning"></i>
                                                        </span>
                                                        <span class="btn btn-clean btn-xs btn-icon"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Mark as important">
                                                            <i class="flaticon-add-label-button icon-1x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end::User Details-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Comment-->
                                            <div class="card-spacer-x pt-2 pb-5 toggle-off-item">
                                                <!--begin::Text-->
                                                <div class="mb-1">
                                                    <p>Hi Bob,</p>
                                                    <p>With resrpect, i must disagree with Mr.Zinsser. We all know the
                                                        most part of important part of any article is the title.Without
                                                        a compelleing title, your reader won't even get to the first
                                                        sentence.</p>
                                                    <p>Best regards,
                                                        <br />Jason Muller
                                                    </p>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Attachments-->
                                                <div class="d-flex flex-column font-size-sm font-weight-bold">
                                                    <a href="#"
                                                        class="d-flex align-items-center text-muted text-hover-primary py-1">
                                                        <span
                                                            class="flaticon2-clip-symbol text-warning icon-1x mr-2"></span>Agreement
                                                        Samle.pdf</a>
                                                    <a href="#"
                                                        class="d-flex align-items-center text-muted text-hover-primary py-1">
                                                        <span
                                                            class="flaticon2-clip-symbol text-warning icon-1x mr-2"></span>Requirements.docx</a>
                                                </div>
                                                <!--end::Attachments-->
                                            </div>
                                            <!--end::Comment-->
                                        </div>
                                        <!--end::Message-->
                                    </div>
                                    <!--end::Messages-->
                                    <!--begin::Reply-->
                                    <div class="card-spacer-x pb-10 pt-5" id="kt_todo_reply">
                                        <div class="card card-custom shadow-sm">
                                            <div class="card-body p-0">
                                                <!--begin::Form-->
                                                <form id="kt_todo_reply_form">
                                                    <!--begin::Body-->
                                                    <div class="d-block">
                                                        <!--begin::Message-->
                                                        <div id="kt_todo_reply_editor" class="border-0"
                                                            style="height: 200px"></div>
                                                        <!--end::Message-->
                                                        <!--begin::Attachments-->
                                                        <div class="dropzone dropzone-multi px-8 py-4"
                                                            id="kt_todo_reply_attachments">
                                                            <div class="dropzone-items">
                                                                <div class="dropzone-item" style="display:none">
                                                                    <div class="dropzone-file">
                                                                        <div class="dropzone-filename"
                                                                            title="some_image_file_name.jpg">
                                                                            <span
                                                                                data-dz-name="">some_image_file_name.jpg</span>
                                                                            <strong>(
                                                                                <span
                                                                                    data-dz-size="">340kb</span>)</strong>
                                                                        </div>
                                                                        <div class="dropzone-error"
                                                                            data-dz-errormessage=""></div>
                                                                    </div>
                                                                    <div class="dropzone-progress">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" aria-valuemin="0"
                                                                                aria-valuemax="100" aria-valuenow="0"
                                                                                data-dz-uploadprogress=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropzone-toolbar">
                                                                        <span class="dropzone-delete" data-dz-remove="">
                                                                            <i class="flaticon2-cross"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Attachments-->
                                                    </div>
                                                    <!--end::Body-->
                                                    <!--begin::Footer-->
                                                    <div
                                                        class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-top">
                                                        <!--begin::Actions-->
                                                        <div class="d-flex align-items-center mr-3">
                                                            <!--begin::Send-->
                                                            <div class="btn-group mr-4">
                                                                <span
                                                                    class="btn btn-primary font-weight-bold px-6">Send</span>
                                                                <span
                                                                    class="btn btn-primary font-weight-bold dropdown-toggle dropdown-toggle-split"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" role="button"></span>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropup p-0 m-0 dropdown-menu-right">
                                                                    <ul class="navi py-3">
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="flaticon2-writing"></i>
                                                                                </span>
                                                                                <span class="navi-text">Schedule
                                                                                    Send</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i
                                                                                        class="flaticon2-medical-records"></i>
                                                                                </span>
                                                                                <span class="navi-text">Simpan &amp;
                                                                                    archive</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-icon">
                                                                                    <i class="flaticon2-hourglass-1"></i>
                                                                                </span>
                                                                                <span class="navi-text">Batal</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--end::Send-->
                                                            <!--begin::Other-->
                                                            <span class="btn btn-icon btn-sm btn-clean mr-2"
                                                                id="kt_todo_reply_attachments_select">
                                                                <i class="flaticon2-clip-symbol"></i>
                                                            </span>
                                                            <span class="btn btn-icon btn-sm btn-clean">
                                                                <i class="flaticon2-pin"></i>
                                                            </span>
                                                            <!--end::Other-->
                                                        </div>
                                                        <!--end::Actions-->
                                                        <!--begin::Toolbar-->
                                                        <div class="d-flex align-items-center">
                                                            <span class="btn btn-icon btn-sm btn-clean mr-2"
                                                                data-toggle="tooltip" title="More actions">
                                                                <i class="flaticon2-settings"></i>
                                                            </span>
                                                            <span class="btn btn-icon btn-sm btn-clean"
                                                                data-inbox="dismiss" data-toggle="tooltip"
                                                                title="Dismiss reply">
                                                                <i class="flaticon2-rubbish-bin-delete-button"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Toolbar-->
                                                    </div>
                                                    <!--end::Footer-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Reply-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
            </div>
            <!--end::List-->
        </div>
        <!--end::Todo-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/custom/todo/todo.js') }}"></script>
@endsection
