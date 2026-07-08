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
            <div class="alert-text">This plugin integrates by default with Twitter bootstrap using badges to display the
                maximum length of the field where the user is inserting text. Uses the HTML5 attribute "maxlength" to work.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="http://mimo84.github.io/bootstrap-maxlength/" target="_blank">Demo
                    Page</a>or
                <a class="font-weight-bold" href="https://github.com/mimo84/bootstrap-maxlength" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap Maxlength Examples</h3>
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
          Bootstrap Maxlength Examples
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Default Usage&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_1" maxlength="3"  placeholder="" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;The badge will show up by default when the remaining chars are 3 or less&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Threshold Demo&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_2" maxlength="7"  placeholder="" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Set threshold value to show there are 5 chars or less&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Always Show&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_3" maxlength="6"  placeholder="" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Show the counter on input focus&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Custom Text&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_4" maxlength="8"  placeholder="" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;Display custom text on input focus&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Textarea Example&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;textarea class="form-control" id="kt_maxlength_5" maxlength="8"  placeholder="" rows="6"&gt;&lt;/textarea&gt;
            &lt;span class="form-text text-muted"&gt;Bootstrap maxlength supports textarea as well as inputs&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Positions&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_6_1" maxlength="8"  placeholder="Top left" type="text"/&gt;
            &lt;div class="mt-3"&gt;&lt;/div&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_6_2" maxlength="8"  placeholder="Top right" type="text"/&gt;
            &lt;div class="mt-3"&gt;&lt;/div&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_6_3" maxlength="8"  placeholder="Bottom left" type="text"/&gt;
            &lt;div class="mt-3"&gt;&lt;/div&gt;
            &lt;input type='text' class="form-control" id="kt_maxlength_6_4" maxlength="8"  placeholder="Bottom right" type="text"/&gt;
            &lt;span class="form-text text-muted"&gt;The field counter can be positioned at the top, bottom, left or right.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal" data-target="#kt_maxlength_modal"&gt;Launch maxlength inputs on modal&lt;/a&gt;
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

      var KTBootstrapMaxlength = function () {

       // Private functions
       var demos = function () {
        // minimum setup
        $('#kt_maxlength_1').maxlength({
         warningClass: "label label-warning label-rounded label-inline",
         limitReachedClass: "label label-success label-rounded label-inline"
        });

        // threshold value
        $('#kt_maxlength_2').maxlength({
         threshold: 5,
         warningClass: "label label-warning label-rounded label-inline",
         limitReachedClass: "label label-success label-rounded label-inline"
        });

        // always show
        $('#kt_maxlength_3').maxlength({
         alwaysShow: true,
         threshold: 5,
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-primary label-rounded label-inline"
        });

        // custom text
        $('#kt_maxlength_4').maxlength({
         threshold: 3,
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-success label-rounded label-inline",
         separator: ' of ',
         preText: 'You have ',
         postText: ' chars remaining.',
         validate: true
        });

        // textarea example
        $('#kt_maxlength_5').maxlength({
         threshold: 5,
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-primary label-rounded label-inline"
        });

        // position examples
        $('#kt_maxlength_6_1').maxlength({
         alwaysShow: true,
         threshold: 5,
         placement: 'top-left',
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-primary label-rounded label-inline"
        });

        $('#kt_maxlength_6_2').maxlength({
         alwaysShow: true,
         threshold: 5,
         placement: 'top-right',
         warningClass: "label label-success label-rounded label-inline",
         limitReachedClass: "label label-primary label-rounded label-inline"
        });

        $('#kt_maxlength_6_3').maxlength({
         alwaysShow: true,
         threshold: 5,
         placement: 'bottom-left',
         warningClass: "label label-warning label-rounded label-inline",
         limitReachedClass: "label label-primary label-rounded label-inline"
        });

        $('#kt_maxlength_6_4').maxlength({
         alwaysShow: true,
         threshold: 5,
         placement: 'bottom-right',
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-primary label-rounded label-inline"
        });

        // Modal Examples

        // minimum setup
        $('#kt_maxlength_1_modal').maxlength({
         warningClass: "label label-warning label-rounded label-inline",
         limitReachedClass: "label label-success label-rounded label-inline",
         appendToParent: true
        });

        // threshold value
        $('#kt_maxlength_2_modal').maxlength({
         threshold: 5,
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-success label-rounded label-inline",
         appendToParent: true
        });

        // always show
        // textarea example
        $('#kt_maxlength_5_modal').maxlength({
         threshold: 5,
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-primary label-rounded label-inline",
         appendToParent: true
        });

        // custom text
        $('#kt_maxlength_4_modal').maxlength({
         threshold: 3,
         warningClass: "label label-danger label-rounded label-inline",
         limitReachedClass: "label label-success label-rounded label-inline",
         appendToParent: true,
         separator: ' of ',
         preText: 'You have ',
         postText: ' chars remaining.',
         validate: true
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
       KTBootstrapMaxlength.init();
      });

      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Default Usage</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_maxlength_1" maxlength="3" placeholder=""
                                type="text" />
                            <span class="form-text text-muted">The badge will show up by default when the remaining chars
                                are 3 or less</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Threshold Demo</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_maxlength_2" maxlength="7" placeholder=""
                                type="text" />
                            <span class="form-text text-muted">Set threshold value to show there are 5 chars or less</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Always Show</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_maxlength_3" maxlength="6" placeholder=""
                                type="text" />
                            <span class="form-text text-muted">Show the counter on input focus</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Custom Text</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_maxlength_4" maxlength="8" placeholder=""
                                type="text" />
                            <span class="form-text text-muted">Display custom text on input focus</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Textarea Example</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <textarea class="form-control" id="kt_maxlength_5" maxlength="8" placeholder="" rows="6"></textarea>
                            <span class="form-text text-muted">Bootstrap maxlength supports textarea as well as
                                inputs</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Positions</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input class="form-control" id="kt_maxlength_6_1" maxlength="8" placeholder="Top left"
                                type="text" />
                            <div class="mt-3"></div>
                            <input class="form-control" id="kt_maxlength_6_2" maxlength="8" placeholder="Top right"
                                type="text" />
                            <div class="mt-3"></div>
                            <input class="form-control" id="kt_maxlength_6_3" maxlength="8" placeholder="Bottom left"
                                type="text" />
                            <div class="mt-3"></div>
                            <input class="form-control" id="kt_maxlength_6_4" maxlength="8" placeholder="Bottom right"
                                type="text" />
                            <span class="form-text text-muted">The field counter can be positioned at the top, bottom, left
                                or right.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                                data-target="#kt_maxlength_modal">Launch maxlength inputs on modal</a>
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
        <div class="modal fade" id="kt_maxlength_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bootstrap Maxlength Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form form--fit">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Default Usage</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" id="kt_maxlength_1_modal" maxlength="3" placeholder=""
                                        type="text" />
                                    <span class="form-text text-muted">The badge will show up by default when the remaining
                                        chars are 3 or less</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Threshold Demo</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" id="kt_maxlength_2_modal" maxlength="7" placeholder=""
                                        type="text" />
                                    <span class="form-text text-muted">Set threshold value to show there are 5 chars or
                                        less</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Textarea Example</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <textarea class="form-control" id="kt_maxlength_5_modal" maxlength="8" placeholder="" rows="6"></textarea>
                                    <span class="form-text text-muted">Bootstrap maxlength supports textarea as well as
                                        inputs</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Custom Text</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input class="form-control" id="kt_maxlength_4_modal" maxlength="8" placeholder=""
                                        type="text" />
                                    <span class="form-text text-muted">Display custom text on input focus</span>
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
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-maxlength.js') }}"></script>
@endsection
