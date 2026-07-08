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
            <div class="alert-text">jquery.inputmask is a jQuery plugin which create an input mask. An input mask helps the
                user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers,
                etc.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://robinherbots.github.io/Inputmask/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/RobinHerbots/Inputmask" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Input Mask Examples</h3>
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
         &lt;h3 class="card-title"&gt;
          Input Mask Examples
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Date&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_1" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Custom date format: &lt;code&gt;mm/dd/yyyy&lt;/code&gt;&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Custom Placeholder&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_2" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Date mask with custom placeholder: &lt;code&gt;mm/dd/yyyy&lt;/code&gt;&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Phone Number&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_3" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Phone number mask: &lt;code&gt;(999) 999-9999&lt;/code&gt;&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Empty Placeholder&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_4" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Phone number mask: &lt;code&gt;99-9999999&lt;/code&gt;&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Repeating Mask&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_5" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Mask &lt;code&gt;9&lt;/code&gt;, &lt;code&gt;99&lt;/code&gt; or ... &lt;code&gt;9999999999&lt;/code&gt;&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Right Align&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_6" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Right aligned numeric mask&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Currency&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_7" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Currency format &lt;code&gt;€ ___.__1.234,56&lt;/code&gt;&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;IP Address&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_8" type="text"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Email Address&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_inputmask_9" type="text"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-9 ml-lg-auto"&gt;
            &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
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

      var KTInputmask = function () {

       // Private functions
       var demos = function () {
        // date format
        $("#kt_inputmask_1").inputmask("99/99/9999", {
         "placeholder": "mm/dd/yyyy",
         autoUnmask: true
        });

        // custom placeholder
        $("#kt_inputmask_2").inputmask("99/99/9999", {
         "placeholder": "mm/dd/yyyy",
        });

        // phone number format
        $("#kt_inputmask_3").inputmask("mask", {
         "mask": "(999) 999-9999"
        });

        // empty placeholder
        $("#kt_inputmask_4").inputmask({
         "mask": "99-9999999",
         placeholder: "" // remove underscores from the input mask
        });

        // repeating mask
        $("#kt_inputmask_5").inputmask({
         "mask": "9",
         "repeat": 10,
         "greedy": false
        }); // ~ mask "9" or mask "99" or ... mask "9999999999"

        // decimal format
        $("#kt_inputmask_6").inputmask('decimal', {
         rightAlignNumerics: false
        });

        // currency format
        $("#kt_inputmask_7").inputmask('€ 999.999.999,99', {
         numericInput: true
        }); //123456  =&gt;  € ___.__1.234,56

        //ip address
        $("#kt_inputmask_8").inputmask({
         "mask": "999.999.999.999"
        });

        //email address
        $("#kt_inputmask_9").inputmask({
         mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
         greedy: false,
         onBeforePaste: function (pastedValue, opts) {
          pastedValue = pastedValue.toLowerCase();
          return pastedValue.replace("mailto:", "");
         },
         definitions: {
          '*': {
           validator: "[0-9A-Za-z!#$%&amp;'*+/=?^_`{|}~\-]",
           cardinality: 1,
           casing: "lower"
          }
         }
        });
       }

       return {
        // public functions
        init: function() {
         demos();
        }
       };
      }();

      jQuery(document).ready(function() {
       KTInputmask.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_1" type="text" />
                            <span class="form-text text-muted">Custom date format:
                                <code>mm/dd/yyyy</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Custom Placeholder</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_2" type="text" />
                            <span class="form-text text-muted">Tanggal mask with custom placeholder:
                                <code>mm/dd/yyyy</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Phone Number</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_3" type="text" />
                            <span class="form-text text-muted">Phone number mask:
                                <code>(999) 999-9999</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Empty Placeholder</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_4" type="text" />
                            <span class="form-text text-muted">Phone number mask:
                                <code>99-9999999</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Repeating Mask</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_5" type="text" />
                            <span class="form-text text-muted">Mask
                                <code>9</code>,
                                <code>99</code>or ...
                                <code>9999999999</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Right Align</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_6" type="text" />
                            <span class="form-text text-muted">Right aligned numeric mask</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Currency</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_7" type="text" />
                            <span class="form-text text-muted">Currency format
                                <code>€ ___.__1.234,56</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">IP Address</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_8" type="text" />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Email Address</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_inputmask_9" type="text" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/input-mask.js') }}"></script>
@endsection
