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
            <div class="alert-text">A JavaScript component for choosing date ranges, dates and times.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="http://www.daterangepicker.com/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/dangrossman/daterangepicker" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap Tanggal Range Picker Examples</h3>
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
         Bootstrap Tanggal Range Picker Examples
        &lt;/h3&gt;
       &lt;/div&gt;
       &lt;!--begin::Form--&gt;
       &lt;form class="form"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Minimum Setup&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;input type='text' class="form-control" id="kt_daterangepicker_1" readonly placeholder="Select time" type="text"/&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Input Group Setup&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class='input-group' id='kt_daterangepicker_2'&gt;
            &lt;input type='text' class="form-control" readonly  placeholder="Select date range"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Icon Input&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group" id='kt_daterangepicker_3'&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control " placeholder="Email"&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Date &amp; Time Picker&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class='input-group' id='kt_daterangepicker_4'&gt;
            &lt;input type='text' class="form-control" readonly  placeholder="Select date &amp; time range"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Date Picker&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class='input-group' id='kt_daterangepicker_5'&gt;
            &lt;input type='text' class="form-control" readonly  placeholder="Select date range"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Predefined Ranges&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class='input-group' id='kt_daterangepicker_6'&gt;
            &lt;input type='text' class="form-control" readonly  placeholder="Select date range"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal" data-target="#kt_daterangepicker_modal"&gt;Launch modal Tanggal Range Pickers&lt;/a&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="card-footer"&gt;
         &lt;div class="row"&gt;
          &lt;div class="col-lg-9 ml-lg-auto"&gt;
           &lt;button type="submit" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
           &lt;button type="submit" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
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

      var KTBootstrapDaterangepicker = function () {

       // Private functions
       var demos = function () {
        // minimum setup
        $('#kt_daterangepicker_1, #kt_daterangepicker_1_modal').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        });

        // input group and left alignment setup
        $('#kt_daterangepicker_2').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        }, function(start, end, label) {
         $('#kt_daterangepicker_2 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });

        $('#kt_daterangepicker_2_modal').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        }, function(start, end, label) {
         $('#kt_daterangepicker_2 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });

        // left alignment setup
        $('#kt_daterangepicker_3').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        }, function(start, end, label) {
         $('#kt_daterangepicker_3 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });

        $('#kt_daterangepicker_3_modal').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        }, function(start, end, label) {
         $('#kt_daterangepicker_3 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });


        // date &amp; time
        $('#kt_daterangepicker_4').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary',

         timePicker: true,
         timePickerIncrement: 30,
         locale: {
          format: 'MM/DD/YYYY h:mm A'
         }
        }, function(start, end, label) {
         $('#kt_daterangepicker_4 .form-control').val( start.format('MM/DD/YYYY h:mm A') + ' / ' + end.format('MM/DD/YYYY h:mm A'));
        });

        // date picker
        $('#kt_daterangepicker_5').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary',

         singleDatePicker: true,
         showDropdowns: true,
         locale: {
          format: 'MM/DD/YYYY'
         }
        }, function(start, end, label) {
         $('#kt_daterangepicker_5 .form-control').val( start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
        });

        // predefined ranges
        var start = moment().subtract(29, 'days');
        var end = moment();

        $('#kt_daterangepicker_6').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary',

         startDate: start,
         endDate: end,
         ranges: {
         'Today': [moment(), moment()],
         'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
         'This Month': [moment().startOf('month'), moment().endOf('month')],
         'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
         }
        }, function(start, end, label) {
         $('#kt_daterangepicker_6 .form-control').val( start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
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
       KTBootstrapDaterangepicker.init();
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
                            <input class="form-control" id="kt_daterangepicker_1" readonly="readonly"
                                placeholder="Select time" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Input Group Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group' id='kt_daterangepicker_2'>
                                <input type='text' class="form-control" readonly="readonly"
                                    placeholder="Select date range" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Icon Input</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group" id='kt_daterangepicker_3'>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal &amp; Time Picker</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group' id='kt_daterangepicker_4'>
                                <input type='text' class="form-control" readonly="readonly"
                                    placeholder="Select date &amp; time range" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Picker</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group' id='kt_daterangepicker_5'>
                                <input type='text' class="form-control" readonly="readonly"
                                    placeholder="Select date range" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Predefined Ranges</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group' id='kt_daterangepicker_6'>
                                <input type='text' class="form-control" readonly="readonly"
                                    placeholder="Select date range" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                                data-target="#kt_daterangepicker_modal">Launch modal Tanggal Range Pickers</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                            <button type="submit" class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_daterangepicker_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bootstrap Tanggal Range Picker Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input class="form-control" id="kt_daterangepicker_1_modal" readonly="readonly"
                                        placeholder="Select time" type="text" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Input Group Setup</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class='input-group' id='kt_daterangepicker_2_modal'>
                                        <input type='text' class="form-control" readonly="readonly"
                                            placeholder="Select date range" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Icon Input</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group" id='kt_daterangepicker_3_modal'>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email" />
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
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Success State&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class='input-group' id='kt_daterangepicker_1_validate'&gt;
            &lt;input type='text' class="form-control is-valid" readonly  placeholder="Select date range"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Danger State&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class='input-group' id='kt_daterangepicker_2_validate'&gt;
            &lt;input type='text' class="form-control is-invalid" readonly  placeholder="Select date range"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="invalid-feedback"&gt;Sorry, that username's taken. Try another?&lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="card-footer"&gt;
         &lt;div class="row"&gt;
          &lt;div class="col-lg-9 ml-lg-auto"&gt;
           &lt;button type="submit" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
           &lt;button type="submit" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
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

      var KTBootstrapDaterangepicker = function () {

       // Private functions
       var validationDemos = function() {
        // input group and left alignment setup
        $('#kt_daterangepicker_1_validate').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        }, function(start, end, label) {
         $('#kt_daterangepicker_1_validate .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });

        // input group and left alignment setup
        $('#kt_daterangepicker_2_validate').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        }, function(start, end, label) {
         $('#kt_daterangepicker_3_validate .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });

        // input group and left alignment setup
        $('#kt_daterangepicker_3_validate').daterangepicker({
         buttonClasses: ' btn',
         applyClass: 'btn-primary',
         cancelClass: 'btn-secondary'
        }, function(start, end, label) {
         $('#kt_daterangepicker_3_validate .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });
       }

       return {
        // public functions
        init: function() {
         validationDemos();
        }
       };
      }();

      jQuery(document).ready(function() {
       KTBootstrapDaterangepicker.init();
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
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group' id='kt_daterangepicker_1_validate'>
                                <input type='text' class="form-control is-valid" readonly="readonly"
                                    placeholder="Select date range" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                            </div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Danger State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group' id='kt_daterangepicker_2_validate'>
                                <input type='text' class="form-control is-invalid" readonly="readonly"
                                    placeholder="Select date range" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                                <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
                            </div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                            <button type="submit" class="btn btn-secondary">Batal</button>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js') }}"></script>
@endsection
