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
            <div class="alert-text">A modern approach to copy text to clipboard. No Flash. No frameworks. Just 3kb gzipped.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://clipboardjs.com/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/zenorocha/clipboard.js" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Clipboard Examples</h3>
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
           Clipboard Examples
          &lt;/h3&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Basic Demo&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" id="kt_clipboard_1" placeholder="Tipe some value to copy"/&gt;
             &lt;div class="input-group-append"&gt;
              &lt;a href="#" class="btn btn-secondary" data-clipboard="true" data-clipboard-target="#kt_clipboard_1"&gt;&lt;i class="la la-copy"&gt;&lt;/i&gt;&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Copy From Textarea&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;textarea class="form-control" id="kt_clipboard_2" rows="6"&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.&lt;/textarea&gt;
            &lt;div class="mt-4"&gt;&lt;/div&gt;
            &lt;a href="#" class="btn btn-secondary" data-clipboard="true" data-clipboard-target="#kt_clipboard_2"&gt;&lt;i class="la la-clipboard"&gt;&lt;/i&gt; Copy to clipboard&lt;/a&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Cut From Textarea&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;textarea class="form-control" id="kt_clipboard_3" rows="6"&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.&lt;/textarea&gt;
            &lt;div class="mt-4"&gt;&lt;/div&gt;
            &lt;a href="#" class="btn btn-primary" data-clipboard="true" data-clipboard-action="cut" data-clipboard-target="#kt_clipboard_3"&gt;&lt;i class="la la-cut"&gt;&lt;/i&gt;  Cut to clipboard&lt;/a&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Copy From Element&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-9 col-sm-12"&gt;
            &lt;div id="kt_clipboard_4" style="border: 4px solid #eaeaea; padding: 10px;"&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.&lt;/div&gt;
            &lt;div class="mt-4"&gt;&lt;/div&gt;
            &lt;a href="#" class="btn btn-primary" data-clipboard="true" data-clipboard-target="#kt_clipboard_4"&gt;&lt;i class="la la-cut"&gt;&lt;/i&gt;  Copy to clipboard&lt;/a&gt;
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

       var KTClipboardDemo = function () {

        // Private functions
        var demos = function () {
         // basic example
         new ClipboardJS('[data-clipboard=true]').on('success', function(e) {
          e.clearSelection();
          alert('Copied!');
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
        KTClipboardDemo.init();
       });

      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Demo</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <div class="input-group">
                                <input type="text" class="form-control" id="kt_clipboard_1"
                                    placeholder="Tipe some value to copy" />
                                <div class="input-group-append">
                                    <a href="#" class="btn btn-secondary" data-clipboard="true"
                                        data-clipboard-target="#kt_clipboard_1">
                                        <i class="la la-copy"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Copy From Textarea</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <textarea class="form-control" id="kt_clipboard_2" rows="6">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
                            <div class="mt-4"></div>
                            <a href="#" class="btn btn-secondary" data-clipboard="true"
                                data-clipboard-target="#kt_clipboard_2">
                                <i class="la la-clipboard"></i>Copy to clipboard</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Cut From Textarea</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <textarea class="form-control" id="kt_clipboard_3" rows="6">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
                            <div class="mt-4"></div>
                            <a href="#" class="btn btn-primary" data-clipboard="true" data-clipboard-action="cut"
                                data-clipboard-target="#kt_clipboard_3">
                                <i class="la la-cut"></i>Cut to clipboard</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Copy From Element</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <div id="kt_clipboard_4" class="rounded bg-gray-100 p-5">Mussum ipsum cacilds, vidis litro
                                abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis,
                                filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra
                                quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</div>
                            <div class="mt-4"></div>
                            <a href="#" class="btn btn-primary" data-clipboard="true"
                                data-clipboard-target="#kt_clipboard_4">
                                <i class="la la-cut"></i>Copy to clipboard</a>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/clipboard.js') }}"></script>
@endsection
