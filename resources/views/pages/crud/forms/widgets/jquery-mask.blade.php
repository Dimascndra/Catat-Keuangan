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
            <div class="alert-text">jquery-mask-plugin is a jQuery plugin which create an input mask. An input mask helps
                the user with the input by ensuring a predefined format.This can be useful for dates, numerics, phone
                numbers, etc.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold mx-2" href="https://igorescobar.github.io/jQuery-Mask-Plugin/"
                    target="_blank">Demo Page</a>or
                <a class="font-weight-bold mx-2" href="https://github.com/igorescobar/jQuery-Mask-Plugin"
                    target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">JQuery Mask Examples</h3>
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
                            &lt;div class="card card-custom example example-compact"&gt;
                                &lt;div class="card-header"&gt;
                                    &lt;h3 class="card-title"&gt;
                                        JQuery Mask Examples
                                    &lt;/h3&gt;
                                    &lt;div class="card-toolbar"&gt;
                                        &lt;div class="example-tools justify-content-center"&gt;
                                            &lt;span class="example-toggle" data-toggle="tooltip" title="View code"&gt;&lt;/span&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!--begin::Form--&gt;
                                &lt;form class="form"&gt;
                                    &lt;div class="card-body"&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Date&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                    &lt;input type="text" class="form-control date" id="kt_date_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Custom date format: &lt;code&gt;mm/dd/yyyy&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Hour&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control time" id="kt_time_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Custom time format: &lt;code&gt;hh:mm:ss&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Date &amp; Hour&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control date_time" id="kt_date_time_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Custom date &amp; time format: &lt;code&gt;mm/dd/yyyy hh:mm:ss&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;ZIP Code&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control cep" id="kt_cep_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Zip code mask: &lt;code&gt;99999-999&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Telephone&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control phone" id="kt_phone_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Telephone mask: &lt;code&gt;9999-9999&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Telephone with Code Area&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control phone_with_ddd" id="kt_phone_with_ddd_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Telephone with Code Area mask: &lt;code&gt;(99) 9999-9999&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;CPF&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control cpf" id="kt_cpf_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;CPF format: &lt;code&gt;999.999.999-99&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;CNPJ&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control cnpj" id="kt_cnpj_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;CNPJ format: &lt;code&gt;99.999.999/9999-99&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Money&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control money" id="kt_money_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Money format: &lt;code&gt;999.999.999.999.999,99&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Money 2&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control money2" id="kt_money2_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Money format: &lt;code&gt;_.__9,99&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Percent&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control percent" id="kt_percent_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Percent format: &lt;code&gt;__9,99%&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class="form-group row"&gt;
                                            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;With Clear If Not Match Option&lt;/label&gt;
                                            &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
                                                &lt;input type="text" class="form-control clear-if-not-match" id="kt_clear_if_not_match_input"/&gt;
                                                &lt;span class="form-text text-muted"&gt;Date format: &lt;code&gt;mm/dd/yyyy&lt;/code&gt;&lt;/span&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;


                                    &lt;/div&gt;
                                    &lt;div class="card-footer"&gt;
                                        &lt;div class="row"&gt;
                                            &lt;div class="col-lg-9 ml-lg-auto"&gt;
                                                &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
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

                            var KTMaskDemo = function () {

                                // private functions
                                var demos = function () {
                                    $('#kt_date_input').mask('00/00/0000', {
                                        placeholder: "dd/mm/yyyy"
                                    });

                                    $('#kt_time_input').mask('00:00:00', {
                                        placeholder: "hh:mm:ss"
                                    });

                                    $('#kt_date_time_input').mask('00/00/0000 00:00:00', {
                                        placeholder: "dd/mm/yyyy hh:mm:ss"
                                    });

                                    $('#kt_cep_input').mask('00000-000', {
                                        placeholder: "99999-999"
                                    });

                                    $('#kt_phone_input').mask('0000-0000', {
                                        placeholder: "9999-9999"
                                    });

                                    $('#kt_phone_with_ddd_input').mask('(00) 0000-0000', {
                                        placeholder: "(99) 9999-9999"
                                    });

                                    $('#kt_cpf_input').mask('000.000.000-00', {
                                        reverse: true
                                    });

                                    $('#kt_cnpj_input').mask('00.000.000/0000-00', {
                                        reverse: true
                                    });

                                    $('#kt_money_input').mask('000.000.000.000.000,00', {
                                        reverse: true
                                    });

                                    $('#kt_money2_input').mask("#.##0,00", {
                                        reverse: true
                                    });

                                    $('#kt_percent_input').mask('##0,00%', {
                                        reverse: true
                                    });

                                    $('#kt_clear_if_not_match_input').mask("00/00/0000", {
                                        clearIfNotMatch: true
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
                                KTMaskDemo.init();
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
                            <input type="text" class="form-control date" id="kt_date_input" />
                            <span class="form-text text-muted">Custom date format:
                                <code>mm/dd/yyyy</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Hour</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control time" id="kt_time_input" />
                            <span class="form-text text-muted">Custom time format:
                                <code>hh:mm:ss</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal &amp; Hour</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control date_time" id="kt_date_time_input" />
                            <span class="form-text text-muted">Custom date &amp; time format:
                                <code>mm/dd/yyyy hh:mm:ss</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">ZIP Code</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control cep" id="kt_cep_input" />
                            <span class="form-text text-muted">Zip code mask:
                                <code>99999-999</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Telephone</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control phone" id="kt_phone_input" />
                            <span class="form-text text-muted">Telephone mask:
                                <code>9999-9999</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Telephone with Code Area</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control phone_with_ddd" id="kt_phone_with_ddd_input" />
                            <span class="form-text text-muted">Telephone with Code Area mask:
                                <code>(99) 9999-9999</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">CPF</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control cpf" id="kt_cpf_input" />
                            <span class="form-text text-muted">CPF format:
                                <code>999.999.999-99</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">CNPJ</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control cnpj" id="kt_cnpj_input" />
                            <span class="form-text text-muted">CNPJ format:
                                <code>99.999.999/9999-99</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Money</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control money" id="kt_money_input" />
                            <span class="form-text text-muted">Money format:
                                <code>999.999.999.999.999,99</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Money 2</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control money2" id="kt_money2_input" />
                            <span class="form-text text-muted">Money format:
                                <code>_.__9,99</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Percent</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control percent" id="kt_percent_input" />
                            <span class="form-text text-muted">Percent format:
                                <code>__9,99%</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">With Clear If Not Match Option</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <input type="text" class="form-control clear-if-not-match"
                                id="kt_clear_if_not_match_input" />
                            <span class="form-text text-muted">Tanggal format:
                                <code>mm/dd/yyyy</code></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="reset" class="btn btn-success mr-2">Kirim</button>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/jquery-mask.js') }}"></script>
@endsection
