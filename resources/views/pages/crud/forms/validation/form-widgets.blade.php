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
                Validation
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
            <div class="alert-text">Metronic fully integrates FormValidation, the best Premium From Validation Library for
                JavaScript. Zero dependencies!
                <br />For more info please visit
                <a class="font-weight-bold" href="https://formvalidation.io/" target="_blank">FormValidation Home</a>
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Form Widgets Validation Examples</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="form" id="kt_form">
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
      &lt;form class="form" id="kt_form"&gt;
       &lt;div class="form-group"&gt;
        &lt;div class="alert alert-light-primary d-none mb-15" role="alert" id="kt_form_msg"&gt;
         &lt;div class="alert-icon"&gt;
          &lt;i class="la la-warning"&gt;&lt;/i&gt;
         &lt;/div&gt;
         &lt;div class="alert-text font-weight-bold"&gt;
          Oh snap! Change a few things up and try submitting again.
         &lt;/div&gt;
         &lt;div class="alert-close"&gt;
          &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;
           &lt;span&gt;&lt;i class="ki ki-close "&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;/button&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Bootstrap Tanggal Picker *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;div class="input-group"&gt;
          &lt;input type="text" class="form-control" name="date" placeholder="Select date" id="kt_datepicker"/&gt;
          &lt;div class="input-group-append"&gt;
           &lt;span class="input-group-text"&gt;
            &lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;
           &lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Select a date&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Bootstrap Tanggal Time Picker *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;div class="input-group date"&gt;
          &lt;input type="text" class="form-control" name="datetime" placeholder="Select date &amp; time" id="kt_datetimepicker"/&gt;
          &lt;div class="input-group-append"&gt;
           &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o glyphicon-th"&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Select a date time&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Bootstrap Time Picker *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;div class="input-group date"&gt;
          &lt;input class="form-control" id="kt_timepicker" placeholder="Select time" name="time" type="text"/&gt;
          &lt;div class="input-group-append"&gt;
           &lt;span class="input-group-text"&gt;&lt;i class="la la-clock-o"&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Select time&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Bootstrap Tanggal Range Picker *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;div class="input-group" id="kt_daterangepicker"&gt;
          &lt;input type="text" class="form-control" readonly name="daterangepicker" placeholder="Select date range"/&gt;
          &lt;div class="input-group-append"&gt;
           &lt;span class="input-group-text"&gt;&lt;i class="la la-calendar-check-o"&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Select a date range&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Bootstrap Switch *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;input data-switch="true" type="checkbox" name="switch" id="test" data-on-color="success"/&gt;
         &lt;span class="form-text text-muted"&gt;&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Bootstrap Select *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;select class="form-control" id="kt_bootstrap_select" multiple name="select"&gt;
          &lt;optgroup label="Picnic" data-max-options="2"&gt;
           &lt;option&gt;Mustard&lt;/option&gt;
           &lt;option&gt;Ketchup&lt;/option&gt;
           &lt;option&gt;Relish&lt;/option&gt;
          &lt;/optgroup&gt;
          &lt;optgroup label="Camping" data-max-options="2"&gt;
           &lt;option&gt;Tent&lt;/option&gt;
           &lt;option&gt;Flashlight&lt;/option&gt;
           &lt;option&gt;Toilet Paper&lt;/option&gt;
          &lt;/optgroup&gt;
         &lt;/select&gt;
         &lt;span class="form-text text-muted"&gt;Select at least 2 and maximum 4 options&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Select2 *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;select class="form-control select2" id="kt_select2" name="select2"&gt;
          &lt;option label="Label"&gt;&lt;/option&gt;
          &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
           &lt;option value="AK"&gt;Alaska&lt;/option&gt;
           &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
          &lt;/optgroup&gt;
          &lt;optgroup label="Pacific Time Zone"&gt;
           &lt;option value="CA"&gt;California&lt;/option&gt;
           &lt;option value="NV"&gt;Nevada&lt;/option&gt;
           &lt;option value="OR"&gt;Oregon&lt;/option&gt;
           &lt;option value="WA"&gt;Washington&lt;/option&gt;
          &lt;/optgroup&gt;
          &lt;optgroup label="Mountain Time Zone"&gt;
           &lt;option value="AZ"&gt;Arizona&lt;/option&gt;
           &lt;option value="CO"&gt;Colorado&lt;/option&gt;
           &lt;option value="ID"&gt;Idaho&lt;/option&gt;
           &lt;option value="MT"&gt;Montana&lt;/option&gt;
           &lt;option value="NE"&gt;Nebraska&lt;/option&gt;
           &lt;option value="NM"&gt;New Mexico&lt;/option&gt;
           &lt;option value="ND"&gt;North Dakota&lt;/option&gt;
           &lt;option value="UT"&gt;Utah&lt;/option&gt;
           &lt;option value="WY"&gt;Wyoming&lt;/option&gt;
          &lt;/optgroup&gt;
          &lt;optgroup label="Central Time Zone"&gt;
           &lt;option value="AL"&gt;Alabama&lt;/option&gt;
           &lt;option value="AR"&gt;Arkansas&lt;/option&gt;
           &lt;option value="IL"&gt;Illinois&lt;/option&gt;
           &lt;option value="IA"&gt;Iowa&lt;/option&gt;
           &lt;option value="KS"&gt;Kansas&lt;/option&gt;
           &lt;option value="KY"&gt;Kentucky&lt;/option&gt;
           &lt;option value="LA"&gt;Louisiana&lt;/option&gt;
           &lt;option value="MN"&gt;Minnesota&lt;/option&gt;
           &lt;option value="MS"&gt;Mississippi&lt;/option&gt;
           &lt;option value="MO"&gt;Missouri&lt;/option&gt;
           &lt;option value="OK"&gt;Oklahoma&lt;/option&gt;
           &lt;option value="SD"&gt;South Dakota&lt;/option&gt;
           &lt;option value="TX"&gt;Texas&lt;/option&gt;
           &lt;option value="TN"&gt;Tennessee&lt;/option&gt;
           &lt;option value="WI"&gt;Wisconsin&lt;/option&gt;
          &lt;/optgroup&gt;
          &lt;optgroup label="Eastern Time Zone"&gt;
           &lt;option value="CT"&gt;Connecticut&lt;/option&gt;
           &lt;option value="DE"&gt;Delaware&lt;/option&gt;
           &lt;option value="FL"&gt;Florida&lt;/option&gt;
           &lt;option value="GA"&gt;Georgia&lt;/option&gt;
           &lt;option value="IN"&gt;Indiana&lt;/option&gt;
           &lt;option value="ME"&gt;Maine&lt;/option&gt;
           &lt;option value="MD"&gt;Maryland&lt;/option&gt;
           &lt;option value="MA"&gt;Massachusetts&lt;/option&gt;
           &lt;option value="MI"&gt;Michigan&lt;/option&gt;
           &lt;option value="NH"&gt;New Hampshire&lt;/option&gt;
           &lt;option value="NJ"&gt;New Jersey&lt;/option&gt;
           &lt;option value="NY"&gt;New York&lt;/option&gt;
           &lt;option value="NC"&gt;North Carolina&lt;/option&gt;
           &lt;option value="OH"&gt;Ohio&lt;/option&gt;
           &lt;option value="PA"&gt;Pennsylvania&lt;/option&gt;
           &lt;option value="RI"&gt;Rhode Island&lt;/option&gt;
           &lt;option value="SC"&gt;South Carolina&lt;/option&gt;
           &lt;option value="VT"&gt;Vermont&lt;/option&gt;
           &lt;option value="VA"&gt;Virginia&lt;/option&gt;
           &lt;option value="WV"&gt;West Virginia&lt;/option&gt;
          &lt;/optgroup&gt;
         &lt;/select&gt;
         &lt;span class="form-text text-muted"&gt;Select an option&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Typeahead *&lt;/label&gt;
        &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;div class="typeahead"&gt;
          &lt;input class="form-control" id="kt_typeahead" type="text" name="typeahead" placeholder="States of USA"/&gt;
         &lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Please select a state&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

       &lt;div class="form-group row"&gt;
        &lt;label class="col-form-label col-lg-3 col-sm-12 text-right"&gt;Markdown *&lt;/label&gt;
        &lt;div class="col-lg-7 col-md-9 col-sm-12"&gt;
         &lt;textarea name="markdown" class="form-control" data-provide="markdown" rows="10"&gt;&lt;/textarea&gt;
         &lt;span class="form-text text-muted"&gt;Enter some markdown content&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="row"&gt;
        &lt;div class="col-lg-9 ml-lg-auto"&gt;
         &lt;button type="submit" class="btn btn-primary mr-2"&gt;Validate&lt;/button&gt;
         &lt;button type="reset" class="btn btn-light-primary"&gt;Cancel&lt;/button&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/form&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_js">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
      // Validation Rules
      validator = FormValidation.formValidation(
       document.getElementById('kt_form'),
       {
        fields: {
         date: {
          validators: {
           notEmpty: {
            message: 'Tanggal is required'
           }
          }
         },
         daterangepicker: {
          validators: {
           notEmpty: {
            message: 'Daterange is required'
           }
          }
         },
         datetime: {
          validators: {
           notEmpty: {
            message: 'Datetime is required'
           }
          }
         },
         time: {
          validators: {
           notEmpty: {
            message: 'Time is required'
           }
          }
         },
         select: {
          validators: {
           notEmpty: {
            message: 'Select is required'
           }
          }
         },
         select2: {
          validators: {
           notEmpty: {
            message: 'Select2 is required'
           }
          }
         },
         typeahead: {
          validators: {
           notEmpty: {
            message: 'Typeahead is required'
           }
          }
         },
         switch: {
          validators: {
           notEmpty: {
            message: 'Typeahead is required'
           }
          }
         },
         markdown: {
          validators: {
           notEmpty: {
            message: 'Typeahead is required'
           }
          }
         },
        },

        plugins: {
         trigger: new FormValidation.plugins.Trigger(),
         submitButton: new FormValidation.plugins.SubmitButton(),
         bootstrap: new FormValidation.plugins.Bootstrap({
          eleInvalidClass: '',
          eleValidClass: '',
         })
        }
       }
      );

      // Initialize Plugins
      // Datepicker
      $('#kt_datepicker').datepicker({
       todayHighlight: true,
       templates: {
        leftArrow: '&lt;i class="la la-angle-left"&gt;&lt;/i&gt;',
        rightArrow: '&lt;i class="la la-angle-right"&gt;&lt;/i&gt;'
       }
      }).on('changeDate', function(e) {
       // Revalidate field
       validator.revalidateField('date');
      });

      // Datetimepicker
      $('#kt_datetimepicker').datetimepicker({
       pickerPosition: 'bottom-left',
       todayHighlight: true,
       autoclose: true,
       format: 'yyyy.mm.dd hh:ii'
      });

      $('#kt_datetimepicker').change(function() {
       // Revalidate field
       validator.revalidateField('datetime');
      });

      // Timepicker
      $('#kt_timepicker').timepicker({
       minuteStep: 1,
       showSeconds: true,
       showMeridian: true
      });

      $('#kt_timepicker').change(function() {
       // Revalidate field
       validator.revalidateField('time');
      });

      // Daterangepicker
      $('#kt_daterangepicker').daterangepicker({
       buttonClasses: ' btn',
       applyClass: 'btn-primary',
       cancelClass: 'btn-light-primary'
      }, function(start, end, label) {
       var input = $('#kt_daterangepicker').find('.form-control');
       input.val( start.format('YYYY/MM/DD') + ' / ' + end.format('YYYY/MM/DD'));

       // Revalidate field
       validator.revalidateField('daterangepicker');
      });

      // Bootstrap Switch
      $('[data-switch=true]').bootstrapSwitch();
      $('[data-switch=true]').on('switchChange.bootstrapSwitch', function() {
       // Revalidate field
       validator.revalidateField('switch');
      });

      // Bootstrap Select
      $('#kt_bootstrap_select').selectpicker();
      $('#kt_bootstrap_select').on('changed.bs.select', function() {
       // Revalidate field
       validator.revalidateField('select');
      });

      // Select2
      $('#kt_select2').select2({
       placeholder: "Select a state",
      });

      $('#kt_select2').on('change', function(){
       // Revalidate field
       validator.revalidateField('select2');
      });

      // Typeahead
      var countries = new Bloodhound({
       datumTokenizer: Bloodhound.tokenizers.whitespace,
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       prefetch: HOST_URL + '/api/?file=typeahead/countries.json'
      });

      $('#kt_typeahead').typeahead(null, {
       name: 'countries',
       source: countries
      });

      $('#kt_typeahead').bind('typeahead:select', function(ev, suggestion) {
       // Revalidate field
       validator.revalidateField('typeahead');
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group">
                        <div class="alert alert-light-primary d-none mb-15" role="alert" id="kt_form_msg">
                            <div class="alert-icon">
                                <i class="la la-warning"></i>
                            </div>
                            <div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting
                                again.</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span>
                                        <i class="ki ki-close"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Bootstrap Tanggal Picker *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group">
                                <input type="text" class="form-control" name="date" placeholder="Select date"
                                    id='kt_datepicker' />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Select a date</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Bootstrap Tanggal Time Picker *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group date'>
                                <input type="text" class="form-control" name="datetime"
                                    placeholder="Select date &amp; time" id='kt_datetimepicker' />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o glyphicon-th"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Select a date time</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Bootstrap Time Picker *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class='input-group date'>
                                <input class="form-control" id='kt_timepicker' placeholder="Select time" name="time"
                                    type="text" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-clock-o"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Select time</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Bootstrap Tanggal Range Picker *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group" id='kt_daterangepicker'>
                                <input type="text" class="form-control" readonly="readonly" name="daterangepicker"
                                    placeholder="Select date range" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="form-text text-muted">Select a date range</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Bootstrap Switch *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input data-switch="true" type="checkbox" name="switch" id="test"
                                data-on-color="success" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Bootstrap Select *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control" id="kt_bootstrap_select" multiple="multiple" name="select">
                                <optgroup label="Picnic" data-max-options="2">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </optgroup>
                                <optgroup label="Camping" data-max-options="2">
                                    <option>Tent</option>
                                    <option>Flashlight</option>
                                    <option>Toilet Paper</option>
                                </optgroup>
                            </select>
                            <span class="form-text text-muted">Select at least 2 and maximum 4 options</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Select2 *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2" name="select2">
                                <option label="Label"></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                            <span class="form-text text-muted">Select an option</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Typeahead *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="typeahead">
                                <input class="form-control" id="kt_typeahead" type="text" name="typeahead"
                                    placeholder="States of USA" />
                            </div>
                            <span class="form-text text-muted">Please select a state</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-right">Markdown *</label>
                        <div class="col-lg-7 col-md-9 col-sm-12">
                            <textarea name="markdown" class="form-control" data-provide="markdown" rows="10"></textarea>
                            <span class="form-text text-muted">Enter some markdown content</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-primary mr-2">Validate</button>
                            <button type="reset" class="btn btn-light-primary">Batal</button>
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
    <script src="{{ asset('assets/js/pages/crud/forms/validation/form-widgets.js') }}"></script>
@endsection
