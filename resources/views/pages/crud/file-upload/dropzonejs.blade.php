@extends('layouts.index')
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
            <div class="alert-text">DropzoneJS is an open source library that provides drag’n’drop file uploads with image
                previews. It’s lightweight, doesn’t depend on any other library (like jQuery) and is highly customizable.
                For more info please visit the plugin's
                <a class="font-weight-bold" href="https://www.dropzonejs.com/" target="_blank">Demo Page</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Dropzone File Upload Examples</h3>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-right">Single File Upload</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropzone dropzone-default" id="kt_dropzone_1">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                    <span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are
                                        <strong>not</strong>actually uploaded.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-right">Multiple File Upload</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_2">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                    <span class="dropzone-msg-desc">Upload up to 10 files</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-lg-right">File Tipe Validation</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropzone dropzone-default dropzone-success" id="kt_dropzone_3">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                    <span class="dropzone-msg-desc">Only image, pdf and psd files are allowed for
                                        upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                            <button type="reset" class="btn btn-light-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-primary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Manual Multiple File Upload</h3>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Full Name:</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" placeholder="Enter full name"
                                        name="name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Email:</label>
                                <div class="col-lg-7">
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" />
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Message:</label>
                                <div class="col-lg-7">
                                    <textarea class="form-control" rows="3" placeholder="Please enter your message"></textarea>
                                    <span class="form-text text-muted">We'll never share your message with anyone
                                        else.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Upload Files:</label>
                                <div class="col-lg-9">
                                    <div class="dropzone dropzone-multi" id="kt_dropzone_4">
                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach
                                                files</a>
                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload
                                                All</a>
                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove
                                                All</a>
                                        </div>
                                        <div class="dropzone-items">
                                            <div class="dropzone-item" style="display:none">
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                        <strong>(
                                                            <span data-dz-size="">340kb</span>)</strong>
                                                    </div>
                                                    <div class="dropzone-error" data-dz-errormessage=""></div>
                                                </div>
                                                <div class="dropzone-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
                                                            data-dz-uploadprogress=""></div>
                                                    </div>
                                                </div>
                                                <div class="dropzone-toolbar">
                                                    <span class="dropzone-start">
                                                        <i class="flaticon2-arrow"></i>
                                                    </span>
                                                    <span class="dropzone-cancel" data-dz-remove=""
                                                        style="display: none;">
                                                        <i class="flaticon2-cross"></i>
                                                    </span>
                                                    <span class="dropzone-delete" data-dz-remove="">
                                                        <i class="flaticon2-cross"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is
                                        5.</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9">
                                    <button type="reset" class="btn btn-light-primary mr-2">Kirim</button>
                                    <button type="reset" class="btn btn-primary">Batal</button>
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
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Automatic Multiple File Upload</h3>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Full Name:</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" placeholder="Enter full name"
                                        name="name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Email:</label>
                                <div class="col-lg-7">
                                    <input type="email" class="form-control" placeholder="Enter email"
                                        name="email" />
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Message:</label>
                                <div class="col-lg-7">
                                    <textarea class="form-control" rows="3" placeholder="Please enter your message"></textarea>
                                    <span class="form-text text-muted">We'll never share your message with anyone
                                        else.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Upload Files:</label>
                                <div class="col-lg-9">
                                    <div class="dropzone dropzone-multi" id="kt_dropzone_5">
                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach
                                                files</a>
                                        </div>
                                        <div class="dropzone-items">
                                            <div class="dropzone-item" style="display:none">
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                        <strong>(
                                                            <span data-dz-size="">340kb</span>)</strong>
                                                    </div>
                                                    <div class="dropzone-error" data-dz-errormessage=""></div>
                                                </div>
                                                <div class="dropzone-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
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
                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is
                                        5.</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9">
                                    <button type="reset" class="btn btn-light-primary mr-2">Kirim</button>
                                    <button type="reset" class="btn btn-primary">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/file-upload/dropzonejs.js') }}"></script>
@endsection
