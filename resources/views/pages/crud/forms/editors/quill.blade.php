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
            <div class="alert-text">Quill is an, open source WYSIWYG editor built for the modern web. With its modular
                architecture and expressive API, it is completely customizable to fit any need.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://quilljs.com/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/quilljs/quill" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Basic Demo</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_quil_1" style="height: 325px">Compose a message</div>
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
                                        Basic Demo
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div id="kt_quil_1" style="height: 325px"&gt;
                                        Compose a message
                                    &lt;/div&gt;
                                &lt;/div&gt;
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
                            var KTQuilDemos = function() {

                                // Private functions
                                var demo1 = function() {
                                    var quill = new Quill('#kt_quil_1', {
                                        modules: {
                                            toolbar: [
                                                [{
                                                    header: [1, 2, false]
                                                }],
                                                ['bold', 'italic', 'underline'],
                                                ['image', 'code-block']
                                            ]
                                        },
                                        placeholder: 'Tipe your text here...',
                                        theme: 'snow' // or 'bubble'
                                    });
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demo1();
                                        demo2();
                                    }
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTQuilDemos.init();
                            });

                            </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Auto Simpan</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="kt_quil_2" style="height: 325px">Compose a message</div>
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
                                        Auto Simpan
                                    &lt;/h3&gt;
                                &lt;/div&gt;
                                &lt;div class="card-body"&gt;
                                    &lt;div id="kt_quil_2" style="height: 325px"&gt;
                                        Compose a message
                                    &lt;/div&gt;
                                &lt;/div&gt;
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
                            var KTQuilDemos = function() {

                                // Private functions
                                var demo2 = function() {
                                    var Delta = Quill.import('delta');
                                    var quill = new Quill('#kt_quil_2', {
                                        modules: {
                                            toolbar: true
                                        },
                                        placeholder: 'Tipe your text here...',
                                        theme: 'snow'
                                    });

                                    // Store accumulated changes
                                    var change = new Delta();
                                    quill.on('text-change', function(delta) {
                                        change = change.compose(delta);
                                    });

                                    // Simpan periodically
                                    setInterval(function() {
                                        if (change.length() &gt; 0) {
                                            console.log('Saving changes', change);
                                            /*
                                            Send partial changes
                                            $.post('/your-endpoint', {
                                            partial: JSON.stringify(change)
                                            });

                                            Send entire document
                                            $.post('/your-endpoint', {
                                            doc: JSON.stringify(quill.getContents())
                                            });
                                            */
                                            change = new Delta();
                                        }
                                    }, 5 * 1000);

                                    // Check for unsaved data
                                    window.onbeforeunload = function() {
                                        if (change.length() &gt; 0) {
                                            return 'There are unsaved changes. Are you sure you want to leave?';
                                        }
                                    }
                                }

                                return {
                                    // public functions
                                    init: function() {
                                        demo2();
                                    }
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTQuilDemos.init();
                            });

                            </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Code-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/editors/quill.js') }}"></script>
    <!--end::Page Scripts-->
@endsection
