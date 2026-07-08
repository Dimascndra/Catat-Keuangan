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
                Editors
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
            <div class="alert-text">Super simple WYSIWYG editor.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://summernote.org/examples/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/summernote/summernote" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Summernote Examples</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Default Demo</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="summernote" id="kt_summernote_1"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                                data-target="#kt_summernote_modal">Launch modal examples</a>
                        </div>
                    </div>
                    <!--begin: Code-->
                    <div class="example-code mt-10">
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
          Summernote Examples
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Default Demo&lt;/label&gt;
           &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
            &lt;div class="summernote" id="kt_summernote_1"&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
           &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
            &lt;a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal" data-target="#kt_summernote_modal"&gt;Launch modal examples&lt;/a&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-3"&gt;&lt;/div&gt;
           &lt;div class="col-lg-9"&gt;
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

      var KTSummernoteDemo = function () {
       // Private functions
       var demos = function () {
        $('.summernote').summernote({
         height: 150
        });
       }

       return {
        // public functions
        init: function() {
         demos();
        }
       };
      }();

      // Initialization
      jQuery(document).ready(function() {
       KTSummernoteDemo.init();
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
                        <div class="col-lg-9">
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
        <div class="modal fade" id="kt_summernote_modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Summernote Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form form-label">
                        <div class="modal-body">
                            <div class="form-group row mt-2">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Default Demo</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="summernote"></div>
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
            <form class="form form-label">
                <div class="card-body">
                    <div class="form-group row is-valid">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Success State</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="summernote"></div>
                            <div class="valid-feedback">Success! You've done it.</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row is-invalid">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Error State</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="summernote"></div>
                            <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
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
         &lt;h3 class="card-title"&gt;
          Validation State Examples
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form form-label"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row is-valid"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Success State&lt;/label&gt;
           &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
            &lt;div class="summernote"&gt;&lt;/div&gt;
            &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row is-invalid"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Error State&lt;/label&gt;
           &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
            &lt;div class="summernote"&gt;&lt;/div&gt;
            &lt;div class="invalid-feedback"&gt;Sorry, that username's taken. Try another?&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-3"&gt;&lt;/div&gt;
           &lt;div class="col-lg-9"&gt;
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

      var KTSummernoteDemo = function () {
       // Private functions
       var demos = function () {
        $('.summernote').summernote({
         height: 150
        });
       }

       return {
        // public functions
        init: function() {
         demos();
        }
       };
      }();

      // Initialization
      jQuery(document).ready(function() {
       KTSummernoteDemo.init();
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
                        <div class="col-lg-9">
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
    <script src="{{ asset('assets/js/pages/crud/forms/editors/summernote.js') }}"></script>
    <!--end::Page Scripts-->
@endsection
