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
            <div class="alert-text">noUiSlider is a lightweight JavaScript range slider library with full multi-touch
                support. It fits wonderfully in responsive designs and has no dependencies.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://refreshless.com/nouislider/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/leongersen/noUiSlider" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap noUiSlider Examples</h3>
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
          Bootstrap noUiSlider Examples
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row mb-6"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Basic Setup&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-12 col-sm-12"&gt;
            &lt;div class="row align-items-center"&gt;
             &lt;div class="col-4"&gt;
              &lt;input type="text" class="form-control" id="kt_nouislider_1_input"  placeholder="Quantity"/&gt;
             &lt;/div&gt;
             &lt;div class="col-8"&gt;
              &lt;div id="kt_nouislider_1" class="nouislider-drag-danger"&gt;&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted mt-6"&gt;Input control is attached to slider&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row mb-6"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Currency Formatting&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-12 col-sm-12"&gt;
            &lt;div class="row align-items-center"&gt;
             &lt;div class="col-4"&gt;
              &lt;input type="text" class="form-control" id="kt_nouislider_2_input"  placeholder="Currency"/&gt;
             &lt;/div&gt;
             &lt;div class="col-8"&gt;
              &lt;div id="kt_nouislider_2" class="nouislider nouislider-handle-danger"&gt;&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted mt-6"&gt;To format the slider output, noUiSlider offers a  format option.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row mb-6"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Slider With Tooltip&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-12 col-sm-12"&gt;
            &lt;div class="row align-items-center"&gt;
             &lt;div class="col-2"&gt;
              &lt;input type="text" class="form-control" id="kt_nouislider_3_input"  placeholder="Quantity"/&gt;
             &lt;/div&gt;
             &lt;div class="col-2"&gt;
              &lt;input type="text" class="form-control" id="kt_nouislider_3.1_input"  placeholder="Quantity"/&gt;
             &lt;/div&gt;
             &lt;div class="col-8"&gt;
              &lt;div id="kt_nouislider_3" class="nouislider"&gt;&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted mt-6"&gt;Slider with tooltips to show slider values.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row mb-6"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Slider State Colors&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-12 col-sm-12"&gt;
            &lt;div class="row align-items-center"&gt;
             &lt;div class="col-2"&gt;
              &lt;select class="form-control" id="kt_nouislider_input_select"&gt;&lt;/select&gt;
             &lt;/div&gt;
             &lt;div class="col-2"&gt;
              &lt;input type="number" class="form-control" id="kt_nouislider_input_number"  placeholder="Quantity"/&gt;
             &lt;/div&gt;
             &lt;div class="col-8"&gt;
              &lt;div id="kt_nouislider_4" class="nouislider nouislider-handle-primary nouislider-connect-warning"&gt;&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted mt-6"&gt;Use state classes to change the slider's connect path and handle colors.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row mb-6"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Soft Limits&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-12 col-sm-12"&gt;
            &lt;div class="row align-items-center"&gt;
             &lt;div class="col-4"&gt;
              &lt;input type="text" class="form-control" id="kt_nouislider_5_input"  placeholder="Quantity"/&gt;
             &lt;/div&gt;
             &lt;div class="col-8"&gt;
              &lt;div id="kt_nouislider_5"&gt;&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted mt-8"&gt;Disables the edges of slider where handler bounces back when released&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row mb-6"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Vertical Slider&lt;/label&gt;
           &lt;div class="col-lg-6 col-md-12 col-sm-12"&gt;
            &lt;div class="row"&gt;
             &lt;div class="col-4"&gt;
              &lt;input type="text" class="form-control" id="kt_nouislider_6_input"  placeholder="Quantity"/&gt;
             &lt;/div&gt;
             &lt;div class="col-8"&gt;
              &lt;div id="kt_nouislider_6"&gt;&lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Vertical orientation slider example&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row mb-6"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
            &lt;a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal" data-target="#kt_nouislider_modal"&gt;Launch modal examples&lt;/a&gt;
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
      var KTnoUiSliderDemos = function() {

       // Private functions
       var demo1 = function() {
        // init slider
        var slider = document.getElementById('kt_nouislider_1');

        noUiSlider.create(slider, {
         start: [ 0 ],
         step: 2,
         range: {
          'min': [ 0 ],
          'max': [ 10 ]
         },
         format: wNumb({
          decimals: 0
         })
        });

        // init slider input
        var sliderInput = document.getElementById('kt_nouislider_1_input');

        slider.noUiSlider.on('update', function( values, handle ) {
         sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
         slider.noUiSlider.set(this.value);
        });
       }

       var demo2 = function() {
        // init slider
        var slider = document.getElementById('kt_nouislider_2');

        noUiSlider.create(slider, {
         start: [ 20000 ],
         connect: [true, false],
         step: 1000,
         range: {
          'min': [ 20000 ],
          'max': [ 80000 ]
         },
         format: wNumb({
          decimals: 3,
          thousand: '.',
          postfix: ' (US $)',
         })
        });

        // init slider input
        var sliderInput = document.getElementById('kt_nouislider_2_input');

        slider.noUiSlider.on('update', function( values, handle ) {
         sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
         slider.noUiSlider.set(this.value);
        });
       }

       var demo3 = function() {
        // init slider
        var slider = document.getElementById('kt_nouislider_3');

        noUiSlider.create(slider, {
         start: [20, 80],
         connect: true,
         direction: 'rtl',
         tooltips: [true, wNumb({ decimals: 1 })],
         range: {
          'min': [0],
          '10%': [10, 10],
          '50%': [80, 50],
          '80%': 150,
          'max': 200
         }
        });


        // init slider input
        var sliderInput0 = document.getElementById('kt_nouislider_3_input');
        var sliderInput1 = document.getElementById('kt_nouislider_3.1_input');
        var sliderInputs = [sliderInput1, sliderInput0];

        slider.noUiSlider.on('update', function( values, handle ) {
         sliderInputs[handle].value = values[handle];
        });
       }

       var demo4 = function() {

       var slider = document.getElementById('kt_nouislider_input_select');

        // Append the option elements
        for ( var i = -20; i &lt;= 40; i++ ){

         var option = document.createElement('option');
          option.text = i;
          option.value = i;

         slider.appendChild(option);
        }

        // init slider
        var html5Slider = document.getElementById('kt_nouislider_4');

        noUiSlider.create(html5Slider, {
         start: [ 10, 30 ],
         connect: true,
         range: {
          'min': -20,
          'max': 40
         }
        });

        // init slider input
        var inputNumber = document.getElementById('kt_nouislider_input_number');

        html5Slider.noUiSlider.on('update', function( values, handle ) {

         var value = values[handle];

         if ( handle ) {
          inputNumber.value = value;
         } else {
          slider.value = Math.round(value);
         }
        });

        slider.addEventListener('change', function(){
         html5Slider.noUiSlider.set([this.value, null]);
        });

        inputNumber.addEventListener('change', function(){
         html5Slider.noUiSlider.set([null, this.value]);
        });
       }

       var demo5 = function() {
        // init slider
        var slider = document.getElementById('kt_nouislider_5');

        noUiSlider.create(slider, {
         start: 20,
         range: {
          min: 0,
          max: 100
         },
         pips: {
          mode: 'values',
          values: [20, 80],
          density: 4
         }
        });

        var sliderInput = document.getElementById('kt_nouislider_5_input');

        slider.noUiSlider.on('update', function( values, handle ) {
         sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
         slider.noUiSlider.set(this.value);
        });

        slider.noUiSlider.on('change', function ( values, handle ) {
         if ( values[handle] &lt; 20 ) {
          slider.noUiSlider.set(20);
         } else if ( values[handle] &gt; 80 ) {
          slider.noUiSlider.set(80);
         }
        });
       }

       var demo6 = function() {
        // init slider

        var verticalSlider = document.getElementById('kt_nouislider_6');

        noUiSlider.create(verticalSlider, {
         start: 40,
         orientation: 'vertical',
         range: {
          'min': 0,
          'max': 100
         }
        });

        // init slider input
        var sliderInput = document.getElementById('kt_nouislider_6_input');

        verticalSlider.noUiSlider.on('update', function( values, handle ) {
         sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
         verticalSlider.noUiSlider.set(this.value);
        });
       }

       // Modal demo

       var modaldemo1 = function() {
        var slider = document.getElementById('kt_nouislider_modal1');

        noUiSlider.create(slider, {
         start: [ 0 ],
         step: 2,
         range: {
          'min': [ 0 ],
          'max': [ 10 ]
         },
         format: wNumb({
          decimals: 0
         })
        });

        // init slider input
        var sliderInput = document.getElementById('kt_nouislider_modal1_input');

        slider.noUiSlider.on('update', function( values, handle ) {
         sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
         slider.noUiSlider.set(this.value);
        });
       }

       var modaldemo2 = function() {
        var slider = document.getElementById('kt_nouislider_modal2');

        noUiSlider.create(slider, {
         start: [ 20000 ],
         connect: [true, false],
         step: 1000,
         range: {
          'min': [ 20000 ],
          'max': [ 80000 ]
         },
         format: wNumb({
          decimals: 3,
          thousand: '.',
          postfix: ' (US $)',
         })
        });

        // init slider input
        var sliderInput = document.getElementById('kt_nouislider_modal2_input');

        slider.noUiSlider.on('update', function( values, handle ) {
         sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
         slider.noUiSlider.set(this.value);
        });
       }

       var modaldemo3 = function() {
        var slider = document.getElementById('kt_nouislider_modal3');

        noUiSlider.create(slider, {
         start: [20, 80],
         connect: true,
         direction: 'rtl',
         tooltips: [true, wNumb({ decimals: 1 })],
         range: {
          'min': [0],
          '10%': [10, 10],
          '50%': [80, 50],
          '80%': 150,
          'max': 200
         }
        });


        // init slider input
        var sliderInput0 = document.getElementById('kt_nouislider_modal1.1_input');
        var sliderInput1 = document.getElementById('kt_nouislider_modal1.2_input');
        var sliderInputs = [sliderInput1, sliderInput0];

        slider.noUiSlider.on('update', function( values, handle ) {
         sliderInputs[handle].value = values[handle];
        });
       }
       return {
        // public functions
        init: function() {
         demo1();
         demo2();
         demo3();
         demo4();
         demo5();
         demo6();
         modaldemo1();
         modaldemo2();
         modaldemo3();
        }
       };
      }();

      jQuery(document).ready(function() {
       KTnoUiSliderDemos.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row mb-6">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Setup</label>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <input type="text" class="form-control" id="kt_nouislider_1_input"
                                        placeholder="Quantity" />
                                </div>
                                <div class="col-8">
                                    <div id="kt_nouislider_1" class="nouislider-drag-danger"></div>
                                </div>
                            </div>
                            <span class="form-text text-muted mt-6">Input control is attached to slider</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mb-6">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Currency Formatting</label>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <input type="text" class="form-control" id="kt_nouislider_2_input"
                                        placeholder="Currency" />
                                </div>
                                <div class="col-8">
                                    <div id="kt_nouislider_2" class="nouislider nouislider-handle-danger"></div>
                                </div>
                            </div>
                            <span class="form-text text-muted mt-6">To format the slider output, noUiSlider offers a format
                                option.</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mb-6">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Slider With Tooltip</label>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <input type="text" class="form-control" id="kt_nouislider_3_input"
                                        placeholder="Quantity" />
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control" id="kt_nouislider_3.1_input"
                                        placeholder="Quantity" />
                                </div>
                                <div class="col-8">
                                    <div id="kt_nouislider_3" class="nouislider"></div>
                                </div>
                            </div>
                            <span class="form-text text-muted mt-6">Slider with tooltips to show slider values.</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mb-6">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Slider State Colors</label>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <select class="form-control" id="kt_nouislider_input_select"></select>
                                </div>
                                <div class="col-2">
                                    <input type="number" class="form-control" id="kt_nouislider_input_number"
                                        placeholder="Quantity" />
                                </div>
                                <div class="col-8">
                                    <div id="kt_nouislider_4"
                                        class="nouislider nouislider-handle-primary nouislider-connect-warning"></div>
                                </div>
                            </div>
                            <span class="form-text text-muted mt-6">Use state classes to change the slider's connect path
                                and handle colors.</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mb-6">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Soft Limits</label>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <input type="text" class="form-control" id="kt_nouislider_5_input"
                                        placeholder="Quantity" />
                                </div>
                                <div class="col-8">
                                    <div id="kt_nouislider_5"></div>
                                </div>
                            </div>
                            <span class="form-text text-muted mt-8">Disables the edges of slider where handler bounces back
                                when released</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mb-6">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Vertical Slider</label>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control" id="kt_nouislider_6_input"
                                        placeholder="Quantity" />
                                </div>
                                <div class="col-8">
                                    <div id="kt_nouislider_6"></div>
                                </div>
                            </div>
                            <span class="form-text text-muted">Vertical orientation slider example</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mb-6">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                                data-target="#kt_nouislider_modal">Launch modal examples</a>
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
        <div class="modal fade" id="kt_nouislider_modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="form-group row mb-6">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Basic Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="kt_nouislider_modal1_input"
                                                placeholder="Quantity" />
                                        </div>
                                        <div class="col-6">
                                            <div id="kt_nouislider_modal1" class="nouislider-drag-danger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row mb-6">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Currency Formatting</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="kt_nouislider_modal2_input"
                                                placeholder="Quantity" />
                                        </div>
                                        <div class="col-6">
                                            <div id="kt_nouislider_modal2" class="nouislider-drag-danger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row mb-6">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Slider With Tooltip</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <input type="text" class="form-control" id="kt_nouislider_modal1.1_input"
                                                placeholder="Quantity" />
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control" id="kt_nouislider_modal1.2_input"
                                                placeholder="Quantity" />
                                        </div>
                                        <div class="col-6">
                                            <div id="kt_nouislider_modal3" class="nouislider"></div>
                                        </div>
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
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/nouislider.js') }}"></script>
@endsection
