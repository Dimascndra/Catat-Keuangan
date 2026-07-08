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
            <div class="alert-text">Bootstrap TouchSpin is a mobile and touch friendly input spinner component for Bootstrap
                3 &amp; 4. It supports the mousewheel and the up/down keys.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://www.virtuosoft.eu/code/bootstrap-touchspin/" target="_blank">Demo
                    Page</a>or
                <a class="font-weight-bold" href="https://github.com/istvan-ujjmeszaros/bootstrap-touchspin"
                    target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap Touchspin Examples</h3>
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
         &lt;h3 class="card-title"&gt;Bootstrap Touchspin Examples&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Minimum Setup&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input id="kt_touchspin_1" type="text" class="form-control" value="55" name="demo0" placeholder="Select time"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;With Prefix&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input id="kt_touchspin_2" type="text" class="form-control" value="0" name="demo0" placeholder="Select time"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;With Postfix&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input id="kt_touchspin_3" type="text" class="form-control" value="0" name="demo0" placeholder="Select time"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Vertical Icons:&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input id="kt_touchspin_4" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="" name="demo0" placeholder="40"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Vertical Custom Icons:&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input id="kt_touchspin_5" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="" name="demo0" placeholder="30"/&gt;
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
      "use strict";
      // Class definition
      var KTKBootstrapTouchspin = function() {

       // Private functions
       var demos = function() {
        // minimum setup
        $('#kt_touchspin_1, #kt_touchspin_2_1').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',

         min: 0,
         max: 100,
         step: 0.1,
         decimals: 2,
         boostat: 5,
         maxboostedstep: 10,
        });

        // with prefix
        $('#kt_touchspin_2, #kt_touchspin_2_2').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',

         min: -1000000000,
         max: 1000000000,
         stepinterval: 50,
         maxboostedstep: 10000000,
         prefix: '$'
        });

        // vertical button alignment:
        $('#kt_touchspin_3, #kt_touchspin_2_3').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',

         min: -1000000000,
         max: 1000000000,
         stepinterval: 50,
         maxboostedstep: 10000000,
         postfix: '$'
        });

        // vertical buttons with custom icons:
        $('#kt_touchspin_4, #kt_touchspin_2_4').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',
         verticalbuttons: true,
         verticalup: '&lt;i class="ki ki-plus"&gt;&lt;/i&gt;',
         verticaldown: '&lt;i class="ki ki-minus"&gt;&lt;/i&gt;'
        });

        // vertical buttons with custom icons:
        $('#kt_touchspin_5, #kt_touchspin_2_5').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',
         verticalbuttons: true,
         verticalup: '&lt;i class="ki ki-arrow-up"&gt;&lt;/i&gt;',
         verticaldown: '&lt;i class="ki ki-arrow-down"&gt;&lt;/i&gt;'
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
       KTKBootstrapTouchspin.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input id="kt_touchspin_1" type="text" class="form-control" value="55"
                                name="demo0" placeholder="Select time" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">With Prefix</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input id="kt_touchspin_2" type="text" class="form-control" value="0"
                                name="demo0" placeholder="Select time" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">With Postfix</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input id="kt_touchspin_3" type="text" class="form-control" value="0"
                                name="demo0" placeholder="Select time" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Vertical Icons:</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input id="kt_touchspin_4" type="text"
                                class="form-control bootstrap-touchspin-vertical-btn" value="" name="demo0"
                                placeholder="40" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Vertical Custom Icons:</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input id="kt_touchspin_5" type="text"
                                class="form-control bootstrap-touchspin-vertical-btn" value="" name="demo0"
                                placeholder="30" />
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
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Validation State Examples</h3>
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
         &lt;h3 class="card-title"&gt;Validation State Examples&lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Success State&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12 validate"&gt;
            &lt;input id="kt_touchspin_1_validate" type="text" class="form-control is-valid" value="" name="demo0" placeholder="40"/&gt;
            &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Error State&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12 validate"&gt;
            &lt;input id="kt_touchspin_2_validate" type="text" class="form-control is-invalid" value="" name="demo2" placeholder="40"/&gt;
            &lt;div class="invalid-feedback"&gt;Sorry, that username's taken. Try another?&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
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
                            <div class="tab-pane" id="example_code_js2">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
      "use strict";
      // Class definition
      var KTKBootstrapTouchspin = function() {

       // Private functions
       var validationStateDemos = function() {
        // validation state demos
        $('#kt_touchspin_1_validate').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',

         min: -1000000000,
         max: 1000000000,
         stepinterval: 50,
         maxboostedstep: 10000000,
         prefix: '$'
        });

        // vertical buttons with custom icons:
        $('#kt_touchspin_2_validate').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',

         min: 0,
         max: 100,
         step: 0.1,
         decimals: 2,
         boostat: 5,
         maxboostedstep: 10,
        });

        $('#kt_touchspin_3_validate').TouchSpin({
         buttondown_class: 'btn btn-secondary',
         buttonup_class: 'btn btn-secondary',
         verticalbuttons: true,
         verticalupclass: 'ki ki-plus',
         verticaldownclass: 'ki ki-minus'
        });
       }

       return {
        // public functions
        init: function() {
         validationStateDemos();
        }
       };
      }();

      jQuery(document).ready(function() {
       KTKBootstrapTouchspin.init();
      });

      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Success State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 validate">
                            <input id="kt_touchspin_1_validate" type="text" class="form-control is-valid"
                                value="" name="demo0" placeholder="40" />
                            <div class="valid-feedback">Success! You've done it.</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Error State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 validate">
                            <input id="kt_touchspin_2_validate" type="text" class="form-control is-invalid"
                                value="" name="demo2" placeholder="40" />
                            <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-touchspin.js') }}"></script>
@endsection
