@extends('layouts.index')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/uppy/uppy.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Crud
            @endslot
            @slot('li_2')
                File Upload
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon">
                <span class="svg-icon svg-icon-primary svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                fill="#000000" opacity="0.3" />
                            <path
                                d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
            <div class="alert-text">Uppy is a sleek, modular open source JavaScript file uploader.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://uppy.io/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/transloadit/uppy" target="_blank">GitHub</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row mb-6">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Auto Upload With External Sources</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="uppy" id="kt_uppy_1">
                            <div class="uppy-dashboard"></div>
                            <div class="uppy-progress"></div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Manual Upload Without External Sources &amp; File Limitations</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="uppy" id="kt_uppy_2">
                            <div class="uppy-dashboard"></div>
                            <div class="uppy-progress"></div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row mb-6">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Quick Drag &amp; Drop Upload</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="uppy" id="kt_uppy_3">
                            <div class="uppy-drag"></div>
                            <div class="uppy-informer"></div>
                            <div class="uppy-progress"></div>
                            <div class="uppy-thumbnails"></div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Upload</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="uppy" id="kt_uppy_4">
                            <div class="uppy-drag"></div>
                            <div class="uppy-informer"></div>
                            <div class="uppy-progress"></div>
                            <div class="uppy-thumbnails"></div>
                            <button class="uppy-btn btn btn-light-primary font-weight-bold btn-sm mt-4">Upload
                                File(s)</button>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">File Uplaod Example In Form Layout</h3>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Full Name:</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Enter full name"
                                        name="name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Email:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" />
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Message:</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Please enter your message"></textarea>
                                    <span class="form-text text-muted">We'll never share your message with anyone
                                        else.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Upload File:</label>
                                <div class="col-lg-6">
                                    <div class="uppy" id="kt_uppy_5">
                                        <div class="uppy-wrapper"></div>
                                        <div class="uppy-list"></div>
                                        <div class="uppy-status"></div>
                                        <div class="uppy-informer uppy-informer-min"></div>
                                    </div>
                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is
                                        5.</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="reset" class="btn btn-primary">Kirim</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Popup Upload</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="uppy" id="kt_uppy_6">
                            <button class="uppy-btn btn btn-light-success font-weight-bold">Open Popup Window</button>
                            <div class="uppy-dashboard"></div>
                            <div class="uppy-progress"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/uppy/uppy.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/file-upload/uppy.js') }}"></script>
@endsection
