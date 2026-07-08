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
            <div class="alert-text">Select2 is a jQuery based replacement for select boxes. It supports searching, remote
                data sets, and infinite scrolling of results. Select2 gives you a customizable select box with support for
                searching, tagging, remote data sets, infinite scrolling, and many other highly used options.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://select2.org/getting-started/basic-usage" target="_blank">Demo
                    Page</a>or
                <a class="font-weight-bold" href="https://github.com/select2/select2" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Select2 Examples</h3>
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
          Select2 Examples
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Basic Example&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_1" name="param"&gt;
             &lt;option value="AK"&gt;Alaska&lt;/option&gt;
             &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
             &lt;option value="CA"&gt;California&lt;/option&gt;
             &lt;option value="NV"&gt;Nevada&lt;/option&gt;
             &lt;option value="OR"&gt;Oregon&lt;/option&gt;
             &lt;option value="WA"&gt;Washington&lt;/option&gt;
             &lt;option value="AZ"&gt;Arizona&lt;/option&gt;
             &lt;option value="CO"&gt;Colorado&lt;/option&gt;
             &lt;option value="ID"&gt;Idaho&lt;/option&gt;
             &lt;option value="MT"&gt;Montana&lt;/option&gt;
             &lt;option value="NE"&gt;Nebraska&lt;/option&gt;
             &lt;option value="NM"&gt;New Mexico&lt;/option&gt;
             &lt;option value="ND"&gt;North Dakota&lt;/option&gt;
             &lt;option value="UT"&gt;Utah&lt;/option&gt;
             &lt;option value="WY"&gt;Wyoming&lt;/option&gt;
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
            &lt;/select&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Nested Example&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_2" name="param"&gt;
             &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
              &lt;option value="AK"&gt;Alaska&lt;/option&gt;
              &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
             &lt;/optgroup&gt;
             &lt;optgroup label="Pacific Time Zone"&gt;
              &lt;option value="CA"&gt;California&lt;/option&gt;
              &lt;option value="NV" selected&gt;Nevada&lt;/option&gt;
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
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Multi Select&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_3" name="param" multiple="multiple"&gt;
             &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
              &lt;option value="AK" selected&gt;Alaska&lt;/option&gt;
              &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
             &lt;/optgroup&gt;
             &lt;optgroup label="Pacific Time Zone"&gt;
              &lt;option value="CA"&gt;California&lt;/option&gt;
              &lt;option value="NV" selected&gt;Nevada&lt;/option&gt;
              &lt;option value="OR"&gt;Oregon&lt;/option&gt;
              &lt;option value="WA"&gt;Washington&lt;/option&gt;
             &lt;/optgroup&gt;
             &lt;optgroup label="Mountain Time Zone"&gt;
              &lt;option value="AZ"&gt;Arizona&lt;/option&gt;
              &lt;option value="CO"&gt;Colorado&lt;/option&gt;
              &lt;option value="ID"&gt;Idaho&lt;/option&gt;
              &lt;option value="MT" selected&gt;Montana&lt;/option&gt;
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
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Placeholder&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_4" name="param"&gt;
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
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Array Data&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_5" name="param"&gt;
             &lt;option value="2" selected="selected"&gt;Duplicate&lt;/option&gt;
            &lt;/select&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Remote Data&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_6" name="param"&gt;
             &lt;option label="Label"&gt;&lt;/option&gt;
            &lt;/select&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Disabled Mode&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_7" disabled="disabled" name="param"&gt;
             &lt;option label="Label"&gt;&lt;/option&gt;
             &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
              &lt;option value="AK"&gt;Alaska&lt;/option&gt;
              &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
             &lt;/optgroup&gt;
             &lt;optgroup label="Pacific Time Zone"&gt;
              &lt;option value="CA"&gt;California&lt;/option&gt;
              &lt;option value="NV" selected&gt;Nevada&lt;/option&gt;
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
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Disabled Results&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_8" name="param"&gt;
             &lt;option label="Label"&gt;&lt;/option&gt;
             &lt;option value="one"&gt;First&lt;/option&gt;
             &lt;option value="two" disabled="disabled"&gt;Second (disabled)&lt;/option&gt;
             &lt;option value="three"&gt;Third&lt;/option&gt;
            &lt;/select&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Limiting Selections&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_9" name="param" multiple&gt;
             &lt;option label="Label"&gt;&lt;/option&gt;
             &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
              &lt;option value="AK"&gt;Alaska&lt;/option&gt;
              &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
             &lt;/optgroup&gt;
             &lt;optgroup label="Pacific Time Zone"&gt;
              &lt;option value="CA"&gt;California&lt;/option&gt;
              &lt;option value="NV" selected&gt;Nevada&lt;/option&gt;
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
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Hiding Cari box&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_10" name="param"&gt;
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
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Tagging Support&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;select class="form-control select2" id="kt_select2_11" multiple name="param"&gt;
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
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
           &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal" data-target="#kt_select2_modal"&gt;Launch modal select2&lt;/a&gt;
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
      var KTSelect2 = function() {
       // Private functions
       var demos = function() {
        // basic
        $('#kt_select2_1').select2({
         placeholder: "Select a state"
        });

        // nested
        $('#kt_select2_2').select2({
         placeholder: "Select a state"
        });

        // multi select
        $('#kt_select2_3').select2({
         placeholder: "Select a state",
        });

        // basic
        $('#kt_select2_4').select2({
         placeholder: "Select a state",
         allowClear: true
        });

        // loading data from array
        var data = [{
         id: 0,
         text: 'Enhancement'
        }, {
         id: 1,
         text: 'Bug'
        }, {
         id: 2,
         text: 'Duplicate'
        }, {
         id: 3,
         text: 'Invalid'
        }, {
         id: 4,
         text: 'Wontfix'
        }];

        $('#kt_select2_5').select2({
         placeholder: "Select a value",
         data: data
        });

        // loading remote data

        function formatRepo(repo) {
         if (repo.loading) return repo.text;
         var markup = "&lt;div class='select2-result-repository clearfix'&gt;" +
          "&lt;div class='select2-result-repository__meta'&gt;" +
          "&lt;div class='select2-result-repository__title'&gt;" + repo.full_name + "&lt;/div&gt;";
         if (repo.description) {
          markup += "&lt;div class='select2-result-repository__description'&gt;" + repo.description + "&lt;/div&gt;";
         }
         markup += "&lt;div class='select2-result-repository__statistics'&gt;" +
          "&lt;div class='select2-result-repository__forks'&gt;&lt;i class='fa fa-flash'&gt;&lt;/i&gt; " + repo.forks_count + " Forks&lt;/div&gt;" +
          "&lt;div class='select2-result-repository__stargazers'&gt;&lt;i class='fa fa-star'&gt;&lt;/i&gt; " + repo.stargazers_count + " Stars&lt;/div&gt;" +
          "&lt;div class='select2-result-repository__watchers'&gt;&lt;i class='fa fa-eye'&gt;&lt;/i&gt; " + repo.watchers_count + " Watchers&lt;/div&gt;" +
          "&lt;/div&gt;" +
          "&lt;/div&gt;&lt;/div&gt;";
         return markup;
        }

        function formatRepoSelection(repo) {
         return repo.full_name || repo.text;
        }

        $("#kt_select2_6").select2({
         placeholder: "Cari for git repositories",
         allowClear: true,
         ajax: {
          url: "https://api.github.com/search/repositories",
          dataType: 'json',
          delay: 250,
          data: function(params) {
           return {
            q: params.term, // search term
            page: params.page
           };
          },
          processResults: function(data, params) {
           // parse the results into the format expected by Select2
           // since we are using custom formatting functions we do not need to
           // alter the remote JSON data, except to indicate that infinite
           // scrolling can be used
           params.page = params.page || 1;

           return {
            results: data.items,
            pagination: {
             more: (params.page * 30) &lt; data.total_count
            }
           };
          },
          cache: true
         },
         escapeMarkup: function(markup) {
          return markup;
         }, // let our custom formatter work
         minimumInputLength: 1,
         templateResult: formatRepo, // omitted for brevity, see the source of this page
         templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });

        // custom styles

        // tagging support
        $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
         placeholder: "Select an option",
        });

        // disabled mode
        $('#kt_select2_7').select2({
         placeholder: "Select an option"
        });

        // disabled results
        $('#kt_select2_8').select2({
         placeholder: "Select an option"
        });

        // limiting the number of selections
        $('#kt_select2_9').select2({
         placeholder: "Select an option",
         maximumSelectionLength: 2
        });

        // hiding the search box
        $('#kt_select2_10').select2({
         placeholder: "Select an option",
         minimumResultsForSearch: Infinity
        });

        // tagging support
        $('#kt_select2_11').select2({
         placeholder: "Add a tag",
         tags: true
        });

        // disabled results
        $('.kt-select2-general').select2({
         placeholder: "Select an option"
        });
       }

       var modalDemos = function() {
        $('#kt_select2_modal').on('shown.bs.modal', function () {
         // basic
         $('#kt_select2_1_modal').select2({
          placeholder: "Select a state"
         });

         // nested
         $('#kt_select2_2_modal').select2({
          placeholder: "Select a state"
         });

         // multi select
         $('#kt_select2_3_modal').select2({
          placeholder: "Select a state",
         });

         // basic
         $('#kt_select2_4_modal').select2({
          placeholder: "Select a state",
          allowClear: true
         });
        });
       }

       // Public functions
       return {
        init: function() {
         demos();
         modalDemos();
        }
       };
      }();

      // Initialization
      jQuery(document).ready(function() {
       KTSelect2.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Example</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control" id="kt_select2_1" name="param">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
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
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Nested Example</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_2" name="param">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV" selected="selected">Nevada</option>
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Multi Select</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_3" name="param" multiple="multiple">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK" selected="selected">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV" selected="selected">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT" selected="selected">Montana</option>
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Placeholder</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_4" name="param">
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Array Data</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_5" name="param">
                                <option value="2" selected="selected">Duplicate</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Remote Data</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_6" name="param">
                                <option label="Label"></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Disabled Mode</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_7" disabled="disabled" name="param">
                                <option label="Label"></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV" selected="selected">Nevada</option>
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Disabled Results</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_8" name="param">
                                <option label="Label"></option>
                                <option value="one">First</option>
                                <option value="two" disabled="disabled">Second (disabled)</option>
                                <option value="three">Third</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Limiting Selections</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_9" name="param" multiple="multiple">
                                <option label="Label"></option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV" selected="selected">Nevada</option>
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Hiding Cari box</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_10" name="param">
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Tagging Support</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_11" multiple="multiple"
                                name="param">
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                                data-target="#kt_select2_modal">Launch modal select2</a>
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
        <div class="modal fade" id="kt_select2_modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select2 Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Example</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control select2" id="kt_select2_1_modal" name="param">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
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
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Nested Example</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control select2" id="kt_select2_2_modal" name="param">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV" selected="selected">Nevada</option>
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Multi Select</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control select2" id="kt_select2_3_modal" name="param"
                                        multiple="multiple">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK" selected="selected">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV" selected="selected">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT" selected="selected">Montana</option>
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Placeholder</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control select2" id="kt_select2_4_modal" name="param">
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
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="example-highlight">
                            <pre style="height:400px">
<code class="language-html">
    &lt;div class="form-group row"&gt;
     &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Valid State&lt;/label&gt;
     &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
      &lt;select class="form-control select2 is-valid" id="kt_select2_1_validate" name="param"&gt;
       &lt;option value="AK"&gt;&lt;/option&gt;
       &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
       &lt;option value="CA"&gt;California&lt;/option&gt;
       &lt;option value="NV"&gt;Nevada&lt;/option&gt;
       &lt;option value="OR"&gt;Oregon&lt;/option&gt;
       &lt;option value="WA"&gt;Washington&lt;/option&gt;
       &lt;option value="AZ"&gt;Arizona&lt;/option&gt;
       &lt;option value="CO"&gt;Colorado&lt;/option&gt;
       &lt;option value="ID"&gt;Idaho&lt;/option&gt;
       &lt;option value="MT"&gt;Montana&lt;/option&gt;
       &lt;option value="NE"&gt;Nebraska&lt;/option&gt;
       &lt;option value="NM"&gt;New Mexico&lt;/option&gt;
       &lt;option value="ND"&gt;North Dakota&lt;/option&gt;
       &lt;option value="UT"&gt;Utah&lt;/option&gt;
       &lt;option value="WY"&gt;Wyoming&lt;/option&gt;
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
      &lt;/select&gt;
      &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
      &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
     &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group row"&gt;
     &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Invalid State&lt;/label&gt;
     &lt;div class=" col-lg-4 col-md-9 col-sm-12"&gt;
      &lt;select class="form-control select2 is-invalid" id="kt_select2_2_validate" name="param"&gt;
       &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
        &lt;option value="AK"&gt;Alaska&lt;/option&gt;
        &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
       &lt;/optgroup&gt;
       &lt;optgroup label="Pacific Time Zone"&gt;
        &lt;option value="CA"&gt;California&lt;/option&gt;
        &lt;option value="NV" selected&gt;Nevada&lt;/option&gt;
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
      &lt;div class="invalid-feedback"&gt;Shucks, check the formatting of that and try again.&lt;/div&gt;
      &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
     &lt;/div&gt;
    &lt;/div&gt;
    </code>
</pre>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Valid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2 is-valid" id="kt_select2_1_validate" name="param">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
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
                            </select>
                            <div class="valid-feedback">Success! You've done it.</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Invalid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control select2 is-invalid" id="kt_select2_2_validate" name="param">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV" selected="selected">Nevada</option>
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
                            <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js') }}"></script>
@endsection
