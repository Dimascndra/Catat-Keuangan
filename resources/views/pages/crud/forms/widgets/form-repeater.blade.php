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
                Forms
            @endslot
            @slot('li_3')
                Widgets
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
            <div class="alert-text">Create a repeatable group of input elements.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://github.com/DubFriend/jquery.repeater" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Form Repeater Example</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
                    <!--begin: Code-->
                    <div class="example-code mb-10">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
                            &lt;div class="card card-custom"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;div class="row"&gt;
                                        &lt;h3 class="card-title"&gt;
                                            Form Repeater Example
                                        &lt;/h3&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!--begin::Form--&gt;
                                &lt;form class="form"&gt;
                                    &lt;div class="card-body"&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-lg-2 col-form-label text-right"&gt;Full Name:&lt;/label&gt;
                                            &lt;div class="col-lg-4"&gt;
                                                &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-lg-2 col-form-label text-right"&gt;Email address:&lt;/label&gt;
                                            &lt;div class="col-lg-4"&gt;
                                                &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
                                                &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-lg-2 col-form-label text-right"&gt;Contact&lt;/label&gt;
                                            &lt;div class="col-lg-4"&gt;
                                                &lt;div class="input-group"&gt;
                                                    &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-chain"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
                                                    &lt;input type="text" class="form-control" placeholder="Phone number"/&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row align-items-center"&gt;
                                            &lt;label class="col-lg-2 col-form-label text-right"&gt;Communication:&lt;/label&gt;
                                            &lt;div class="col-xl-8 col-lg-8 col-sm-12 col-md-12 d-flex align-items-center"&gt;
                                                &lt;div class="checkbox-inline"&gt;
                                                    &lt;label class="checkbox"&gt;
                                                        &lt;input type="checkbox"/&gt; Email
                                                        &lt;span&gt;&lt;/span&gt;
                                                    &lt;/label&gt;
                                                    &lt;label class="checkbox"&gt;
                                                        &lt;input type="checkbox"/&gt; SMS
                                                        &lt;span&gt;&lt;/span&gt;
                                                    &lt;/label&gt;
                                                    &lt;label class="checkbox"&gt;
                                                        &lt;input type="checkbox"/&gt; Phone
                                                        &lt;span&gt;&lt;/span&gt;
                                                    &lt;/label&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;

                                        &lt;div class="separator separator-dashed my-8"&gt;&lt;/div&gt;

                                        &lt;div id="kt_repeater_1"&gt;
                                            &lt;div class="form-group row" id="kt_repeater_1"&gt;
                                                &lt;label class="col-lg-2 col-form-label text-right"&gt;Contacts:&lt;/label&gt;
                                                &lt;div data-repeater-list="" class="col-lg-10"&gt;
                                                    &lt;div data-repeater-item class="form-group row align-items-center"&gt;
                                                        &lt;div class="col-md-3"&gt;
                                                            &lt;label&gt;Name:&lt;/label&gt;
                                                            &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
                                                            &lt;div class="d-md-none mb-2"&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class="col-md-3"&gt;
                                                            &lt;label&gt;Number:&lt;/label&gt;
                                                            &lt;input type="email" class="form-control" placeholder="Enter contact number"/&gt;
                                                            &lt;div class="d-md-none mb-2"&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class="col-md-2"&gt;
                                                            &lt;div class="radio-inline"&gt;
                                                                &lt;label class="checkbox checkbox-success"&gt;
                                                                    &lt;input type="checkbox"/&gt; Primary
                                                                    &lt;span&gt;&lt;/span&gt;
                                                                &lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class="col-md-4"&gt;
                                                            &lt;a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger"&gt;
                                                                &lt;i class="la la-trash-o"&gt;&lt;/i&gt;Delete
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class="form-group row"&gt;
                                                &lt;label class="col-lg-2 col-form-label text-right"&gt;&lt;/label&gt;
                                                &lt;div class="col-lg-4"&gt;
                                                    &lt;a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary"&gt;
                                                        &lt;i class="la la-plus"&gt;&lt;/i&gt;Add
                                                    &lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;div class="card-footer"&gt;
                                        &lt;div class="row"&gt;
                                            &lt;div class="col-lg-2"&gt;&lt;/div&gt;
                                            &lt;div class="col-lg-2"&gt;
                                                &lt;button type="reset" class="btn font-weight-bold btn-success mr-2"&gt;Submit&lt;/button&gt;
                                                &lt;button type="reset" class="btn font-weight-bold btn-secondary"&gt;Cancel&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/form&gt;
                                &lt;!--end::Form--&gt;
                            &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_js">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
                        // Class definition
                        var KTFormRepeater = function() {

                            // Private functions
                            var demo1 = function() {
                                $('#kt_repeater_1').repeater({
                                    initEmpty: false,

                                    defaultValues: {
                                        'text-input': 'foo'
                                    },

                                    show: function () {
                                        $(this).slideDown();
                                    },

                                    hide: function (deleteElement) {
                                        $(this).slideUp(deleteElement);
                                    }
                                });
                            }

                            return {
                                // public functions
                                init: function() {
                                    demo1();
                                }
                            };
                        }();

                        jQuery(document).ready(function() {
                            KTFormRepeater.init();
                        });

                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label text-right">Full Name:</label>
                        <div class="col-lg-4">
                            <input type="email" class="form-control" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label text-right">Email address:</label>
                        <div class="col-lg-4">
                            <input type="email" class="form-control" placeholder="Enter email" />
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label text-right">Contact</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-chain"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone number" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-2 col-form-label text-right">Communication:</label>
                        <div class="col-xl-8 col-lg-8 col-sm-12 col-md-12 d-flex align-items-center">
                            <div class="checkbox-inline">
                                <label class="checkbox">
                                    <input type="checkbox" />Email
                                    <span></span></label>
                                <label class="checkbox">
                                    <input type="checkbox" />SMS
                                    <span></span></label>
                                <label class="checkbox">
                                    <input type="checkbox" />Phone
                                    <span></span></label>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-8"></div>
                    <div id="kt_repeater_1">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-right">Contacts:</label>
                            <div data-repeater-list="" class="col-lg-10">
                                <div data-repeater-item="" class="form-group row align-items-center">
                                    <div class="col-md-3">
                                        <label>Name:</label>
                                        <input type="email" class="form-control" placeholder="Enter full name" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Number:</label>
                                        <input type="email" class="form-control" placeholder="Enter contact number" />
                                        <div class="d-md-none mb-2"></div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="radio-inline">
                                            <label class="checkbox checkbox-success">
                                                <input type="checkbox" />Primary
                                                <span></span></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="javascript:;" data-repeater-delete=""
                                            class="btn btn-sm font-weight-bolder btn-light-danger">
                                            <i class="la la-trash-o"></i>Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-right"></label>
                            <div class="col-lg-4">
                                <a href="javascript:;" data-repeater-create=""
                                    class="btn btn-sm font-weight-bolder btn-light-primary">
                                    <i class="la la-plus"></i>Add</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2">
                            <button type="reset" class="btn font-weight-bold btn-success mr-2">Kirim</button>
                            <button type="reset" class="btn font-weight-bold btn-secondary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Form Repeater Example</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Full Name:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Email address:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter email" />
                                    <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-3 col-form-label text-right">Communication:</label>
                                <div class="col-lg-12 col-xl-8">
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" />Email
                                            <span></span></label>
                                        <label class="checkbox">
                                            <input type="checkbox" />SMS
                                            <span></span></label>
                                        <label class="checkbox">
                                            <input type="checkbox" />Phone
                                            <span></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Credit Card</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="creditcard"
                                            placeholder="Enter card number" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-credit-card"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="kt_repeater_2">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-right">Contact:</label>
                                    <div data-repeater-list="" class="col-lg-6">
                                        <div data-repeater-item="" class="mb-2">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-phone"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter telephone" />
                                                <div class="input-group-append">
                                                    <a href="javascript:;"
                                                        class="btn font-weight-bold btn-danger btn-icon">
                                                        <i class="la la-close"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3"></div>
                                    <div class="col">
                                        <div data-repeater-create="" class="btn font-weight-bold btn-warning">
                                            <i class="la la-plus"></i>Add
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html2">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_js2">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html2" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
                                    &lt;div class="card card-custom"&gt;
                                        &lt;div class="card-header"&gt;
                                            &lt;div class="row"&gt;
                                                &lt;h3 class="card-title"&gt;
                                                    Form Repeater Example
                                                &lt;/h3&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;!--begin::Form--&gt;
                                        &lt;form class="form"&gt;
                                            &lt;div class="card-body"&gt;
                                                &lt;div class="form-group row"&gt;
                                                    &lt;label class="col-lg-3 col-form-label text-right"&gt;Full Name:&lt;/label&gt;
                                                    &lt;div class="col-lg-6"&gt;
                                                        &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
                                                        &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row"&gt;
                                                    &lt;label class="col-lg-3 col-form-label text-right"&gt;Email address:&lt;/label&gt;
                                                    &lt;div class="col-lg-6"&gt;
                                                        &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
                                                        &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row align-items-center"&gt;
                                                    &lt;label class="col-lg-3 col-form-label text-right"&gt;Communication:&lt;/label&gt;
                                                    &lt;div class="col-lg-12 col-xl-8"&gt;
                                                        &lt;div class="checkbox-inline"&gt;
                                                            &lt;label class="checkbox"&gt;
                                                                &lt;input type="checkbox"/&gt; Email
                                                                &lt;span&gt;&lt;/span&gt;
                                                            &lt;/label&gt;
                                                            &lt;label class="checkbox"&gt;
                                                                &lt;input type="checkbox"/&gt; SMS
                                                                &lt;span&gt;&lt;/span&gt;
                                                            &lt;/label&gt;
                                                            &lt;label class="checkbox"&gt;
                                                                &lt;input type="checkbox"/&gt; Phone
                                                                &lt;span&gt;&lt;/span&gt;
                                                            &lt;/label&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row"&gt;
                                                    &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Credit Card&lt;/label&gt;
                                                    &lt;div class="col-lg-6 "&gt;
                                                        &lt;div class="input-group"&gt;
                                                            &lt;input type="text" class="form-control" name="creditcard" placeholder="Enter card number"/&gt;
                                                            &lt;div class="input-group-append"&gt;
                                                                &lt;span class="input-group-text"&gt;&lt;i class="la la-credit-card"&gt;&lt;/i&gt;&lt;/span&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div id="kt_repeater_2"&gt;
                                                    &lt;div class="form-group row"&gt;
                                                        &lt;label class="col-lg-3 col-form-label text-right"&gt;Contact:&lt;/label&gt;
                                                        &lt;div data-repeater-list="" class="col-lg-6"&gt;
                                                            &lt;div data-repeater-item class="mb-2"&gt;
                                                                &lt;div class="input-group"&gt;
                                                                    &lt;div class="input-group-prepend"&gt;
                                                                        &lt;span class="input-group-text"&gt;
                                                                            &lt;i class="la la-phone"&gt;&lt;/i&gt;
                                                                        &lt;/span&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;input type="text" class="form-control" placeholder="Enter telephone"/&gt;
                                                                    &lt;div class="input-group-append"&gt;
                                                                        &lt;a href="javascript:;" class="btn font-weight-bold btn-danger btn-icon"&gt;
                                                                            &lt;i class="la la-close"&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class="form-group row"&gt;
                                                        &lt;div class="col-lg-3"&gt;&lt;/div&gt;
                                                        &lt;div class="col"&gt;
                                                            &lt;div data-repeater-create="" class="btn font-weight-bold btn-warning"&gt;
                                                                &lt;i class="la la-plus"&gt;&lt;/i&gt;
                                                                Add
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                            &lt;/div&gt;
                                            &lt;div class="card-footer"&gt;
                                                &lt;div class="row"&gt;
                                                    &lt;div class="col-lg-3"&gt;&lt;/div&gt;
                                                    &lt;div class="col-lg-6"&gt;
                                                        &lt;button type="reset" class="btn font-weight-bold btn-primary mr-2"&gt;Submit&lt;/button&gt;
                                                        &lt;button type="reset" class="btn font-weight-bold btn-secondary"&gt;Cancel&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/form&gt;
                                        &lt;!--end::Form--&gt;
                                    &lt;/div&gt;
                                </code>
</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="example_code_js2">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-js">
                                // Class definition
                                var KTFormRepeater = function() {

                                    // Private functions
                                    var demo2 = function() {
                                        $('#kt_repeater_2').repeater({
                                            initEmpty: false,

                                            defaultValues: {
                                                'text-input': 'foo'
                                            },

                                            show: function() {
                                                $(this).slideDown();
                                            },

                                            hide: function(deleteElement) {
                                                if(confirm('Are you sure you want to delete this element?')) {
                                                    $(this).slideUp(deleteElement);
                                                }
                                            }
                                        });
                                    }
                                    return {
                                        // public functions
                                        init: function() {
                                            demo2();
                                        }
                                    };
                                }();

                                jQuery(document).ready(function() {
                                    KTFormRepeater.init();
                                });

                                </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="reset" class="btn font-weight-bold btn-primary mr-2">Kirim</button>
                                    <button type="reset" class="btn font-weight-bold btn-secondary">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Form Repeater Example</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Full Name:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Email address:</label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Enter email" />
                                    <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-3 col-form-label text-right">Communication:</label>
                                <div class="col-lg-12 col-xl-8">
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" />Email
                                            <span></span></label>
                                        <label class="checkbox">
                                            <input type="checkbox" />SMS
                                            <span></span></label>
                                        <label class="checkbox">
                                            <input type="checkbox" />Phone
                                            <span></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Credit Card</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="creditcard"
                                            placeholder="Enter card number" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-credit-card"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="kt_repeater_3">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-right">Contact:</label>
                                    <div data-repeater-list="" class="col-lg-9">
                                        <div data-repeater-item="" class="form-group row">
                                            <div class="col-lg-5">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Phone" />
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-envelope"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="javascript:;" data-repeater-delete=""
                                                    class="btn font-weight-bold btn-danger btn-icon">
                                                    <i class="la la-remove"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3"></div>
                                    <div class="col">
                                        <div data-repeater-create="" class="btn font-weight-bold btn-primary">
                                            <i class="la la-plus"></i>Add
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html3">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_js3">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html3" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
                                    &lt;div class="card card-custom"&gt;
                                        &lt;div class="card-header"&gt;
                                            &lt;div class="row"&gt;
                                                &lt;h3 class="card-title"&gt;
                                                    Form Repeater Example
                                                &lt;/h3&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;!--begin::Form--&gt;
                                        &lt;form class="form"&gt;
                                            &lt;div class="card-body"&gt;
                                                &lt;div class="form-group row"&gt;
                                                    &lt;label class="col-lg-3 col-form-label text-right"&gt;Full Name:&lt;/label&gt;
                                                    &lt;div class="col-lg-6"&gt;
                                                        &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
                                                        &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row"&gt;
                                                    &lt;label class="col-lg-3 col-form-label text-right"&gt;Email address:&lt;/label&gt;
                                                    &lt;div class="col-lg-6"&gt;
                                                        &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
                                                        &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row align-items-center"&gt;
                                                    &lt;label class="col-lg-3 col-form-label text-right"&gt;Communication:&lt;/label&gt;
                                                    &lt;div class="col-lg-12 col-xl-8"&gt;
                                                        &lt;div class="checkbox-inline"&gt;
                                                            &lt;label class="checkbox"&gt;
                                                                &lt;input type="checkbox"/&gt; Email
                                                                &lt;span&gt;&lt;/span&gt;
                                                            &lt;/label&gt;
                                                            &lt;label class="checkbox"&gt;
                                                                &lt;input type="checkbox"/&gt; SMS
                                                                &lt;span&gt;&lt;/span&gt;
                                                            &lt;/label&gt;
                                                            &lt;label class="checkbox"&gt;
                                                                &lt;input type="checkbox"/&gt; Phone
                                                                &lt;span&gt;&lt;/span&gt;
                                                            &lt;/label&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class="form-group row"&gt;
                                                    &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Credit Card&lt;/label&gt;
                                                    &lt;div class="col-lg-6 "&gt;
                                                        &lt;div class="input-group"&gt;
                                                            &lt;input type="text" class="form-control" name="creditcard" placeholder="Enter card number"/&gt;
                                                            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-credit-card"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div id="kt_repeater_3"&gt;
                                                    &lt;div class="form-group row"&gt;
                                                        &lt;label class="col-lg-3 col-form-label text-right"&gt;Contact:&lt;/label&gt;
                                                        &lt;div data-repeater-list="" class="col-lg-9"&gt;
                                                            &lt;div data-repeater-item class="form-group row"&gt;
                                                                &lt;div class="col-lg-5"&gt;
                                                                    &lt;div class="input-group"&gt;
                                                                        &lt;div class="input-group-prepend"&gt;
                                                                            &lt;span class="input-group-text"&gt;
                                                                                &lt;i class="la la-phone"&gt;&lt;/i&gt;
                                                                            &lt;/span&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;input type="text" class="form-control" placeholder="Phone"/&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class="col-lg-5"&gt;
                                                                    &lt;div class="input-group"&gt;
                                                                        &lt;div class="input-group-prepend"&gt;
                                                                            &lt;span class="input-group-text"&gt;
                                                                                &lt;i class="la la-envelope"&gt;&lt;/i&gt;
                                                                            &lt;/span&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;input type="text" class="form-control" placeholder="Email"/&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class="col-lg-2"&gt;
                                                                    &lt;a href="javascript:;" data-repeater-delete="" class="btn font-weight-bold btn-danger btn-icon"&gt;
                                                                        &lt;i class="la la-remove"&gt;&lt;/i&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class="form-group row"&gt;
                                                        &lt;div class="col-lg-3"&gt;&lt;/div&gt;
                                                        &lt;div class="col"&gt;
                                                            &lt;div data-repeater-create="" class="btn font-weight-bold btn-primary"&gt;
                                                                &lt;i class="la la-plus"&gt;&lt;/i&gt;
                                                                Add
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class="card-footer"&gt;
                                                &lt;div class="row"&gt;
                                                    &lt;div class="col-lg-3"&gt;&lt;/div&gt;
                                                    &lt;div class="col-lg-6"&gt;
                                                        &lt;button type="reset" class="btn font-weight-bold btn-primary btn-shadow mr-2"&gt;Submit&lt;/button&gt;
                                                        &lt;button type="reset" class="btn font-weight-bold btn-secondary btn-shadow"&gt;Cancel&lt;/button&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/form&gt;
                                        &lt;!--end::Form--&gt;
                                    &lt;/div&gt;
                                </code>
</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="example_code_js3">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-js">
                                // Class definition
                                var KTFormRepeater = function() {

                                    // Private functions
                                    var demo3 = function() {
                                        $('#kt_repeater_3').repeater({
                                            initEmpty: false,

                                            defaultValues: {
                                                'text-input': 'foo'
                                            },

                                            show: function() {
                                                $(this).slideDown();
                                            },

                                            hide: function(deleteElement) {
                                                if(confirm('Are you sure you want to delete this element?')) {
                                                    $(this).slideUp(deleteElement);
                                                }
                                            }
                                        });
                                    }

                                    return {
                                        // public functions
                                        init: function() {
                                            demo3();
                                        }
                                    };
                                }();

                                jQuery(document).ready(function() {
                                    KTFormRepeater.init();
                                });


                                </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="reset"
                                        class="btn font-weight-bold btn-primary btn-shadow mr-2">Kirim</button>
                                    <button type="reset"
                                        class="btn font-weight-bold btn-secondary btn-shadow">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}"></script>
@endsection
