@extends('layouts.index')
@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            {{ trim($__env->yieldContent('title')) ?: getPageTitle() }}
        @endslot
        @slot('breadcrumb')
            @slot('li_1')
                Features
            @endslot
            @slot('li_2')
                Miscellaneous
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
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
            <div class="alert-text">Dual Listbox is a pure JavaScript plugin that converts the normal select box into a
                searchable dual list box where the users are able to move options between two selection panels.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://www.cssscript.com/demo/pure-js-dual-list-box-component/"
                    target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/maykinmedia/dual-listbox" target="_blank">GitHub</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin: Row-->
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-custom card-stretch gutter-b example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Default Dual Listbox</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <select id="kt_dual_listbox_1" class="dual-listbox" multiple="multiple">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                            <option value="10">Ten</option>
                        </select>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
                            &lt;select id="kt_dual_listbox_1" class="dual-listbox" multiple&gt;
                 &lt;option value="1"&gt;One&lt;/option&gt;
                 &lt;option value="2"&gt;Two&lt;/option&gt;
                 &lt;option value="3"&gt;Three&lt;/option&gt;
                 &lt;option value="4"&gt;Four&lt;/option&gt;
                 &lt;option value="5"&gt;Five&lt;/option&gt;
                 &lt;option value="6"&gt;Six&lt;/option&gt;
                 &lt;option value="7"&gt;Seven&lt;/option&gt;
                 &lt;option value="8"&gt;Eight&lt;/option&gt;
                 &lt;option value="9"&gt;Nine&lt;/option&gt;
                 &lt;option value="10"&gt;Ten&lt;/option&gt;
                &lt;/select&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_js">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition
                            var KTDualListbox = function() {
                                // Private functions
                                var demo1 = function () {
         // Dual Listbox
         var listBox = $('#kt_dual_listbox_1');

         var $this = listBox;

         // get options
         var options = [];
         $this.children('option').each(function () {
          var value = $(this).val();
          var label = $(this).text();
          options.push({
           text: label,
           value: value
          });
         });

         // init dual listbox
         var dualListBox = new DualListbox($this.get(0), {
          addEvent: function (value) {
           console.log(value);
          },
          removeEvent: function (value) {
           console.log(value);
          },
          availableTitle: 'Available options',
          selectedTitle: 'Selected options',
          addButtonText: 'Add',
          removeButtonText: 'Remove',
          addAllButtonText: 'Add All',
          removeAllButtonText: 'Remove All',
          options: options,
         });
        };

                                return {
                                    // public functions
                                    init: function() {
                                        demo1();
                                    },
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTDualListbox.init();
                            });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom card-stretch gutter-b example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Dual Listbox with Custom Labels</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <select id="kt_dual_listbox_2" class="dual-listbox" multiple="multiple"
                            data-available-title="Sumber Options" data-selected-title="Destination Options"
                            data-add="&lt;i class='flaticon2-next'&gt;&lt;/i&gt;"
                            data-remove="&lt;i class='flaticon2-back'&gt;&lt;/i&gt;"
                            data-add-all="&lt;i class='flaticon2-fast-next'&gt;&lt;/i&gt;"
                            data-remove-all="&lt;i class='flaticon2-fast-back'&gt;&lt;/i&gt;">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                            <option value="10">Ten</option>
                        </select>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_2_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_2_js">JS</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_2_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
                            &lt;select id="kt_dual_listbox_2" class="dual-listbox" multiple
                 data-available-title="Sumber Options"
                 data-selected-title="Destination Options"
                 data-add="&lt;i class='flaticon2-next'&gt;&lt;/i&gt;"
                 data-remove="&lt;i class='flaticon2-back'&gt;&lt;/i&gt;"
                 data-add-all="&lt;i class='flaticon2-fast-next'&gt;&lt;/i&gt;"
                 data-remove-all="&lt;i class='flaticon2-fast-back'&gt;&lt;/i&gt;"&gt;
                 &lt;option value="1"&gt;One&lt;/option&gt;
                 &lt;option value="2"&gt;Two&lt;/option&gt;
                 &lt;option value="3"&gt;Three&lt;/option&gt;
                 &lt;option value="4"&gt;Four&lt;/option&gt;
                 &lt;option value="5"&gt;Five&lt;/option&gt;
                 &lt;option value="6"&gt;Six&lt;/option&gt;
                 &lt;option value="7"&gt;Seven&lt;/option&gt;
                 &lt;option value="8"&gt;Eight&lt;/option&gt;
                 &lt;option value="9"&gt;Nine&lt;/option&gt;
                 &lt;option value="10"&gt;Ten&lt;/option&gt;
                &lt;/select&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_2_js">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition
                            var KTDualListbox = function() {
                                // Private functions
                                var demo2 = function () {
         // Dual Listbox
         var $this = $('#kt_dual_listbox_2');

         // get options
         var options = [];
         $this.children('option').each(function () {
          var value = $(this).val();
          var label = $(this).text();
          options.push({
           text: label,
           value: value
          });
         });

         // init dual listbox
         var dualListBox = new DualListbox($this.get(0), {
          addEvent: function (value) {
           console.log(value);
          },
          removeEvent: function (value) {
           console.log(value);
          },
          availableTitle: "Sumber Options",
          selectedTitle: "Destination Options",
          addButtonText: "&lt;i class='flaticon2-next'&gt;&lt;/i&gt;",
          removeButtonText: "&lt;i class='flaticon2-back'&gt;&lt;/i&gt;",
          addAllButtonText: "&lt;i class='flaticon2-fast-next'&gt;&lt;/i&gt;",
          removeAllButtonText: "&lt;i class='flaticon2-fast-back'&gt;&lt;/i&gt;",
          options: options,
         });
        };

                                return {
                                    // public functions
                                    init: function() {
                                        demo2();
                                    },
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTDualListbox.init();
                            });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
            </div>
        </div>
        <!--end: Row-->
        <!--begin: Row-->
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-custom card-stretch example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Dual Listbox with Pre-Selection</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <select id="kt_dual_listbox_3" class="dual-listbox" multiple="multiple">
                            <option value="1">One</option>
                            <option value="2" selected="selected">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6" selected="selected">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                            <option value="10">Ten</option>
                        </select>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_3_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_3_js">JS</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_3_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
                            &lt;select id="kt_dual_listbox_3" class="dual-listbox" multiple&gt;
                 &lt;option value="1"&gt;One&lt;/option&gt;
                 &lt;option value="2" selected&gt;Two&lt;/option&gt;
                 &lt;option value="3"&gt;Three&lt;/option&gt;
                 &lt;option value="4"&gt;Four&lt;/option&gt;
                 &lt;option value="5"&gt;Five&lt;/option&gt;
                 &lt;option value="6" selected&gt;Six&lt;/option&gt;
                 &lt;option value="7"&gt;Seven&lt;/option&gt;
                 &lt;option value="8"&gt;Eight&lt;/option&gt;
                 &lt;option value="9"&gt;Nine&lt;/option&gt;
                 &lt;option value="10"&gt;Ten&lt;/option&gt;
                &lt;/select&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_3_js">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition
                            var KTDualListbox = function() {
                                // Private functions
                                var demo3 = function () {
         // Dual Listbox
         var $this = $('#kt_dual_listbox_3');

         // get options
         var options = [];
         $this.children('option').each(function () {
          var value = $(this).val();
          var label = $(this).text();
          options.push({
           text: label,
           value: value
          });
         });

         // init dual listbox
         var dualListBox = new DualListbox($this.get(0), {
          addEvent: function (value) {
           console.log(value);
          },
          removeEvent: function (value) {
           console.log(value);
          },
          availableTitle: 'Available options',
          selectedTitle: 'Selected options',
          addButtonText: 'Add',
          removeButtonText: 'Remove',
          addAllButtonText: 'Add All',
          removeAllButtonText: 'Remove All',
          options: options,
         });
        };

                                return {
                                    // public functions
                                    init: function() {
                                        demo3();
                                    },
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTDualListbox.init();
                            });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom card-stretch example example-compact">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Dual Listbox without Cari</h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <select id="kt_dual_listbox_4" class="dual-listbox" data-search="false" multiple="multiple">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                            <option value="10">Ten</option>
                        </select>
                        <!--begin::Code example-->
                        <div class="example-code mt-10">
                            <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#example_code_4_html">HTML</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#example_code_4_js">JS</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="example_code_4_html" role="tabpanel">
                                    <div class="example-highlight">
                                        <pre>
<code class="language-html">
                            &lt;select id="kt_dual_listbox_4" class="dual-listbox" data-search="false" multiple&gt;
                 &lt;option value="1"&gt;One&lt;/option&gt;
                 &lt;option value="2"&gt;Two&lt;/option&gt;
                 &lt;option value="3"&gt;Three&lt;/option&gt;
                 &lt;option value="4"&gt;Four&lt;/option&gt;
                 &lt;option value="5"&gt;Five&lt;/option&gt;
                 &lt;option value="6"&gt;Six&lt;/option&gt;
                 &lt;option value="7"&gt;Seven&lt;/option&gt;
                 &lt;option value="8"&gt;Eight&lt;/option&gt;
                 &lt;option value="9"&gt;Nine&lt;/option&gt;
                 &lt;option value="10"&gt;Ten&lt;/option&gt;
                &lt;/select&gt;
       </code>
</pre>
                                    </div>
                                </div>
                                <div class="tab-pane" id="example_code_4_js">
                                    <div class="example-highlight">
                                        <pre style="height:400px">
<code class="language-js">
                            // Class definition
                            var KTDualListbox = function() {
                                // Private functions
        var demo4 = function () {
         // Dual Listbox
         var $this = $('#kt_dual_listbox_4');

         // get options
         var options = [];
         $this.children('option').each(function () {
          var value = $(this).val();
          var label = $(this).text();
          options.push({
           text: label,
           value: value
          });
         });

         // init dual listbox
         var dualListBox = new DualListbox($this.get(0), {
          addEvent: function (value) {
           console.log(value);
          },
          removeEvent: function (value) {
           console.log(value);
          },
          availableTitle: 'Available options',
          selectedTitle: 'Selected options',
          addButtonText: 'Add',
          removeButtonText: 'Remove',
          addAllButtonText: 'Add All',
          removeAllButtonText: 'Remove All',
          options: options,
         });

         // hide search
         dualListBox.search.classList.add('dual-listbox__search--hidden');
        };

                                return {
                                    // public functions
                                    init: function() {
                                        demo4();
                                    },
                                };
                            }();

                            jQuery(document).ready(function() {
                                KTDualListbox.init();
                            });
       </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/features/miscellaneous/dual-listbox.js') }}"></script>
@endsection
