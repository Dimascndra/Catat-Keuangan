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
            <div class="alert-text">A datepicker for twitter bootstrap (@twbs). For more info please visit the plugin's
                <a class="font-weight-bold" href="https://uxsolutions.github.io/bootstrap-datepicker/" target="_blank">Demo
                    Page</a>or
                <a class="font-weight-bold" href="https://github.com/uxsolutions/bootstrap-datepicker"
                    target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap Tanggal Picker Examples</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
                    <!--begin::Code-->
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
               Bootstrap Tanggal Picker Examples
              &lt;/h3&gt;
             &lt;/div&gt;
             &lt;!--begin::Form--&gt;
             &lt;form class="form"&gt;
              &lt;div class="card-body"&gt;
               &lt;div class="form-group row"&gt;
                &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Minimum Setup&lt;/label&gt;
                &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
                 &lt;input type="text" class="form-control" readonly placeholder="Select date"/&gt;
                &lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="form-group row"&gt;
                &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Input Group Setup&lt;/label&gt;
                &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
                 &lt;div class="input-group date"&gt;
                  &lt;input type="text" class="form-control" readonly  placeholder="Select date"/&gt;
                  &lt;div class="input-group-append"&gt;
                   &lt;span class="input-group-text"&gt;
                    &lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;
                   &lt;/span&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                &lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="form-group row"&gt;
                &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Enable Helper Buttons&lt;/label&gt;
                &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
                 &lt;div class="input-group date" &gt;
                  &lt;input type="text" class="form-control" readonly  value="05/20/2017" id="kt_datepicker_3"/&gt;
                  &lt;div class="input-group-append"&gt;
                   &lt;span class="input-group-text"&gt;
                    &lt;i class="la la-calendar"&gt;&lt;/i&gt;
                   &lt;/span&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                 &lt;span class="form-text text-muted"&gt;Enable clear and today helper buttons&lt;/span&gt;
                &lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="form-group row"&gt;
                &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Orientation&lt;/label&gt;
                &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
                 &lt;div class="input-group date mb-2" &gt;
                  &lt;input type="text" class="form-control" placeholder="Top left" id="kt_datepicker_4_1"/&gt;
                  &lt;div class="input-group-append"&gt;
                  &lt;span class="input-group-text"&gt;
                   &lt;i class="la la-bullhorn"&gt;&lt;/i&gt;
                   &lt;/span&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;

                 &lt;div class="input-group date mb-2"&gt;
                  &lt;input type="text" class="form-control" placeholder="Top right" id="kt_datepicker_4_2"/&gt;
                  &lt;div class="input-group-append"&gt;
                   &lt;span class="input-group-text"&gt;
                   &lt;i class="la la-clock-o"&gt;&lt;/i&gt;
                   &lt;/span&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;

                 &lt;div class="input-group date mb-2"&gt;
                  &lt;input type="text" class="form-control" placeholder="Bottom left"  id="kt_datepicker_4_3"/&gt;
                  &lt;div class="input-group-append"&gt;
                   &lt;span class="input-group-text"&gt;
                   &lt;i class="la la-check"&gt;&lt;/i&gt;
                   &lt;/span&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;

                 &lt;div class="input-group date"&gt;
                  &lt;input type="text" class="form-control" placeholder="Bottom right" id="kt_datepicker_4_4"/&gt;
                  &lt;div class="input-group-append"&gt;
                   &lt;span class="input-group-text"&gt;
                   &lt;i class="la la-check-circle-o"&gt;&lt;/i&gt;
                   &lt;/span&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;
                &lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="form-group row"&gt;
                &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Range Picker&lt;/label&gt;
                &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
                 &lt;div class="input-daterange input-group" id="kt_datepicker_5"&gt;
                  &lt;input type="text" class="form-control" name="start"/&gt;
                  &lt;div class="input-group-append"&gt;
                   &lt;span class="input-group-text"&gt;&lt;i class="la la-ellipsis-h"&gt;&lt;/i&gt;&lt;/span&gt;
                  &lt;/div&gt;
                  &lt;input type="text" class="form-control" name="end"/&gt;
                 &lt;/div&gt;
                 &lt;span class="form-text text-muted"&gt;Linked pickers for date range selection&lt;/span&gt;
                &lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="form-group row"&gt;
                &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Inline Mode&lt;/label&gt;
                &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
                 &lt;div class id="kt_datepicker_6"&gt;&lt;/div&gt;
                &lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="form-group row"&gt;
                &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
                &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
                 &lt;a href="#" class="btn font-weight-bold btn-light-primary" data-toggle="modal" data-target="#kt_datepicker_modal"&gt;Launch modal datepickers&lt;/a&gt;
                &lt;/div&gt;
               &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="card-footer"&gt;
               &lt;div class="form-group row"&gt;
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

            var KTBootstrapDatepicker = function () {

             var arrows;
             if (KTUtil.isRTL()) {
              arrows = {
               leftArrow: '&lt;i class="la la-angle-right"&gt;&lt;/i&gt;',
               rightArrow: '&lt;i class="la la-angle-left"&gt;&lt;/i&gt;'
              }
             } else {
              arrows = {
               leftArrow: '&lt;i class="la la-angle-left"&gt;&lt;/i&gt;',
               rightArrow: '&lt;i class="la la-angle-right"&gt;&lt;/i&gt;'
              }
             }

             // Private functions
             var demos = function () {
              // minimum setup
              $('#kt_datepicker_1').datepicker({
               rtl: KTUtil.isRTL(),
               todayHighlight: true,
               orientation: "bottom left",
               templates: arrows
              });

              // minimum setup for modal demo
              $('#kt_datepicker_1_modal').datepicker({
               rtl: KTUtil.isRTL(),
               todayHighlight: true,
               orientation: "bottom left",
               templates: arrows
              });

              // input group layout
              $('#kt_datepicker_2').datepicker({
               rtl: KTUtil.isRTL(),
               todayHighlight: true,
               orientation: "bottom left",
               templates: arrows
              });

              // input group layout for modal demo
              $('#kt_datepicker_2_modal').datepicker({
               rtl: KTUtil.isRTL(),
               todayHighlight: true,
               orientation: "bottom left",
               templates: arrows
              });

              // enable clear button
              $('#kt_datepicker_3, #kt_datepicker_3_validate').datepicker({
               rtl: KTUtil.isRTL(),
               todayBtn: "linked",
               clearBtn: true,
               todayHighlight: true,
               templates: arrows
              });

              // enable clear button for modal demo
              $('#kt_datepicker_3_modal').datepicker({
               rtl: KTUtil.isRTL(),
               todayBtn: "linked",
               clearBtn: true,
               todayHighlight: true,
               templates: arrows
              });

              // orientation
              $('#kt_datepicker_4_1').datepicker({
               rtl: KTUtil.isRTL(),
               orientation: "top left",
               todayHighlight: true,
               templates: arrows
              });

              $('#kt_datepicker_4_2').datepicker({
               rtl: KTUtil.isRTL(),
               orientation: "top right",
               todayHighlight: true,
               templates: arrows
              });

              $('#kt_datepicker_4_3').datepicker({
               rtl: KTUtil.isRTL(),
               orientation: "bottom left",
               todayHighlight: true,
               templates: arrows
              });

              $('#kt_datepicker_4_4').datepicker({
               rtl: KTUtil.isRTL(),
               orientation: "bottom right",
               todayHighlight: true,
               templates: arrows
              });

              // range picker
              $('#kt_datepicker_5').datepicker({
               rtl: KTUtil.isRTL(),
               todayHighlight: true,
               templates: arrows
              });

               // inline picker
              $('#kt_datepicker_6').datepicker({
               rtl: KTUtil.isRTL(),
               todayHighlight: true,
               templates: arrows
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
             KTBootstrapDatepicker.init();
            });
            </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control" id="kt_datepicker_1" readonly="readonly"
                                placeholder="Select date" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Input Group Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control" id="kt_datepicker_2" readonly="readonly"
                                    placeholder="Select date" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Enable Helper Buttons</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly="readonly" value="05/20/2017"
                                    id="kt_datepicker_3" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Enable clear and today helper buttons</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Orientation</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date mb-2">
                                <input type="text" class="form-control" placeholder="Top left"
                                    id="kt_datepicker_4_1" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-bullhorn"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input-group date mb-2">
                                <input type="text" class="form-control" placeholder="Top right"
                                    id="kt_datepicker_4_2" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input-group date mb-2">
                                <input type="text" class="form-control" placeholder="Bottom left"
                                    id="kt_datepicker_4_3" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="input-group date">
                                <input type="text" class="form-control" placeholder="Bottom right"
                                    id="kt_datepicker_4_4" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-check-circle-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Range Picker</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-daterange input-group" id="kt_datepicker_5">
                                <input type="text" class="form-control" name="start" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-ellipsis-h"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="end" />
                            </div>
                            <span class="form-text text-muted">Linked pickers for date range selection</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Inline Mode</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="" id="kt_datepicker_6"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="#" class="btn font-weight-bold btn-light-primary" data-toggle="modal"
                                data-target="#kt_datepicker_modal">Launch modal datepickers</a>
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
        <div class="modal fade" id="kt_datepicker_modal" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bootstrap Tanggal Picker Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" id="kt_datepicker_1_modal"
                                        readonly="readonly" placeholder="Select date" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Input Group Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" readonly="readonly"
                                            placeholder="Select date" id="kt_datepicker_2_modal" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Enable Helper Buttons</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date">
                                        <input type="text" class="form-control" value="05/20/2017"
                                            id="kt_datepicker_3_modal" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Enable clear and today helper buttons</span>
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
                    <!--begin::Code-->
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
        &lt;h3 class="card-title"&gt;
         Validation State Examples
        &lt;/h3&gt;
       &lt;/div&gt;
       &lt;!--begin::Form--&gt;
       &lt;form class="form"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Valid State&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group date"&gt;
            &lt;input type="text" class="form-control is-valid" readonly  placeholder="Select date"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;
             &lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="valid-feedback"&gt;
               Success! You"ve done it.
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Invalid State&lt;/label&gt;
          &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group date" &gt;
            &lt;input type="text" class="form-control is-invalid" readonly  placeholder="Select date"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;
             &lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="invalid-feedback"&gt;
             Sorry, the date is taken. Try another date?
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="card-footer"&gt;
         &lt;div class="form-group row"&gt;
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

      var KTBootstrapDatepicker = function () {

       var arrows;
       if (KTUtil.isRTL()) {
        arrows = {
         leftArrow: '&lt;i class="la la-angle-right"&gt;&lt;/i&gt;',
         rightArrow: '&lt;i class="la la-angle-left"&gt;&lt;/i&gt;'
        }
       } else {
        arrows = {
         leftArrow: '&lt;i class="la la-angle-left"&gt;&lt;/i&gt;',
         rightArrow: '&lt;i class="la la-angle-right"&gt;&lt;/i&gt;'
        }
       }

       // Private functions
       var demos = function () {
        // minimum setup
        $('#kt_datepicker_1_validate').datepicker({
         rtl: KTUtil.isRTL(),
         todayHighlight: true,
         orientation: "bottom left",
         templates: arrows
        });

        // input group layout
        $('#kt_datepicker_2_validate').datepicker({
         rtl: KTUtil.isRTL(),
         todayHighlight: true,
         orientation: "bottom left",
         templates: arrows
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
       KTBootstrapDatepicker.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Valid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control is-valid" readonly="readonly"
                                    placeholder="Select date" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                                <div class="valid-feedback">Success! You"ve done it.</div>
                            </div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Invalid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date">
                                <input type="text" class="form-control is-invalid" readonly="readonly"
                                    placeholder="Select date" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                                <div class="invalid-feedback">Sorry, the date is taken. Try another date?</div>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>
@endsection
