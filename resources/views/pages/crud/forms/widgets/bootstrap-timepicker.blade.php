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
            <div class="alert-text">Easily select a time for a text input using your mouse or keyboards arrow keys.
                <br />For more info please visit the plugin's
                <a href="http://jdewit.github.io/bootstrap-timepicker/" class="font-weight-bold" target="_blank">Demo
                    Page</a>or
                <a class="font-weight-bold" href="https://github.com/jdewit/bootstrap-timepicker" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap Time Picker Examples</h3>
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
        &lt;div class="card-title"&gt;
         &lt;h3 class="card-title"&gt;
          Bootstrap Time Picker Examples
         &lt;/h3&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;!--begin::Form--&gt;
       &lt;form class="form"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Minimum Setup&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;input class="form-control" id="kt_timepicker_1" readonly placeholder="Select time" type="text"/&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Current Time&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group timepicker"&gt;
            &lt;input class="form-control" id="kt_timepicker_2" readonly placeholder="Select time" type="text"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;i class="la la-clock-o"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Default Time&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group timepicker"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;i class="la la-clock-o"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;input class="form-control" id="kt_timepicker_3" readonly placeholder="Select time" type="text"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Preset Time&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group timepicker"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;i class="la la-exclamation-circle"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;input class="form-control" id="kt_timepicker_4" readonly value="10:30:20 AM" type="text"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;a href="" class="btn btn-light-success font-weight-bold" data-toggle="modal" data-target="#kt_timepicker_modal"&gt;Launch modal timepickers&lt;/a&gt;
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

      var KTBootstrapTimepicker = function () {

       // Private functions
       var demos = function () {
        // minimum setup
        $('#kt_timepicker_1, #kt_timepicker_1_modal').timepicker();

        // minimum setup
        $('#kt_timepicker_2, #kt_timepicker_2_modal').timepicker({
         minuteStep: 1,
         defaultTime: '',
         showSeconds: true,
         showMeridian: false,
         snapToStep: true
        });

        // default time
        $('#kt_timepicker_3, #kt_timepicker_3_modal').timepicker({
         defaultTime: '11:45:20 AM',
         minuteStep: 1,
         showSeconds: true,
         showMeridian: true
        });

        // default time
        $('#kt_timepicker_4, #kt_timepicker_4_modal').timepicker({
         defaultTime: '10:30:20 AM',
         minuteStep: 1,
         showSeconds: true,
         showMeridian: true
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
       KTBootstrapTimepicker.init();
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
                            <input class="form-control" id="kt_timepicker_1" readonly="readonly"
                                placeholder="Select time" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Current Time</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <input class="form-control" id="kt_timepicker_2" readonly="readonly"
                                    placeholder="Select time" type="text" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Default Time</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-clock-o"></i>
                                    </span>
                                </div>
                                <input class="form-control" id="kt_timepicker_3" readonly="readonly"
                                    placeholder="Select time" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Preset Time</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-exclamation-circle"></i>
                                    </span>
                                </div>
                                <input class="form-control" id="kt_timepicker_4" readonly="readonly" value="10:30:20 AM"
                                    type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-success font-weight-bold" data-toggle="modal"
                                data-target="#kt_timepicker_modal">Launch modal timepickers</a>
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
        <!--begin::Modal-->
        <div class="modal fade" id="kt_timepicker_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bootstrap Time Picker Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" id="kt_timepicker_1_modal" readonly="readonly"
                                        placeholder="Select time" type="text" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Current Time</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <input class="form-control" id="kt_timepicker_2_modal" readonly="readonly"
                                            placeholder="Select time" type="text" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Default Time</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-clock-o"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" id="kt_timepicker_3_modal" readonly="readonly"
                                            placeholder="Select time" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Preset Time</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group timepicker">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-exclamation-circle"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" id="kt_timepicker_4_modal" readonly="readonly"
                                            value="10:30:20 AM" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal-->
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
        &lt;div class="card-title"&gt;
         &lt;h3 class="card-title"&gt;
          Validation State Examples
         &lt;/h3&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;!--begin::Form--&gt;
       &lt;form class="form"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Valid State&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group timepicker"&gt;
            &lt;input class="form-control is-valid" id="kt_timepicker_1_validate" readonly placeholder="Select time" type="text"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-clock-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="valid-feedback"&gt;Success! You"ve done it.&lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row has-danger"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Error State&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group timepicker"&gt;
            &lt;input class="form-control is-invalid" id="kt_timepicker_2_validate" readonly placeholder="Select time" type="text"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-clock-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="invalid-feedback"&gt;Sorry, that username"s taken. Try another?&lt;/div&gt;
           &lt;/div&gt;
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
      // Class definition

      var KTBootstrapTimepicker = function () {

       // Private functions
       var demos = function () {
        // validation state demos
        // minimum setup
        $('#kt_timepicker_1_validate, #kt_timepicker_2_validate').timepicker({
         minuteStep: 1,
         showSeconds: true,
         showMeridian: false,
         snapToStep: true
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
       KTBootstrapTimepicker.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Valid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <input class="form-control is-valid" id="kt_timepicker_1_validate" readonly="readonly"
                                    placeholder="Select time" type="text" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-clock-o"></i>
                                    </span>
                                </div>
                                <div class="valid-feedback">Success! You"ve done it.</div>
                            </div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row has-danger">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Error State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group timepicker">
                                <input class="form-control is-invalid" id="kt_timepicker_2_validate" readonly="readonly"
                                    placeholder="Select time" type="text" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-clock-o"></i>
                                    </span>
                                </div>
                                <div class="invalid-feedback">Sorry, that username"s taken. Try another?</div>
                            </div>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js') }}"></script>
@endsection
