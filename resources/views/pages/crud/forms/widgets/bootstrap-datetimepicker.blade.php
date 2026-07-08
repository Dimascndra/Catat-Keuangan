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
            <div class="alert-text">
                <code>Bootstrap Datetimepicker</code>component to handle date and time data.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://tempusdominus.github.io/bootstrap-4/" target="_blank">Demo
                    Page</a>or
                <a class="font-weight-bold" href="https://github.com/tempusdominus/bootstrap-4" target="_blank">Github
                    Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap Tanggal Time Picker Examples</h3>
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
      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Basic Example&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_1"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_1" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Using Locales(DE)&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group date" id="kt_datetimepicker_2" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_2"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_2" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;span class="form-text text-muted pt-2"&gt;Use locals from &lt;a href="https://momentjs.com/"&gt;https://momentjs.com/&lt;/a&gt;&lt;/span&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Date Only&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_3"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Time Only&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_4"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_4" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-clock"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;No Icon&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
         &lt;input type="text" class="form-control form-control-solid datetimepicker-input" id="kt_datetimepicker_5" placeholder="Select date &amp; time"  data-toggle="datetimepicker" data-target="#kt_datetimepicker_5"/&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Enabled/Disabled Dates&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group date" id="kt_datetimepicker_6" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_6"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_6" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Linked Pickers&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div class="row"&gt;
         &lt;div class="col"&gt;
          &lt;div class="input-group date" id="kt_datetimepicker_7_1" data-target-input="nearest"&gt;
           &lt;input type="text" class="form-control datetimepicker-input" placeholder="Start date" data-target="#kt_datetimepicker_7_1"/&gt;
           &lt;div class="input-group-append" data-target="#kt_datetimepicker_7_1" data-toggle="datetimepicker"&gt;
            &lt;span class="input-group-text"&gt;
             &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
            &lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="col"&gt;
          &lt;div class="input-group date" id="kt_datetimepicker_7_2" data-target-input="nearest"&gt;
           &lt;input type="text" class="form-control datetimepicker-input" placeholder="End date" data-target="#kt_datetimepicker_7_2"/&gt;
           &lt;div class="input-group-append" data-target="#kt_datetimepicker_7_2" data-toggle="datetimepicker"&gt;
            &lt;span class="input-group-text"&gt;
             &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
            &lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Inline Mode&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div id="kt_datetimepicker_8" class="w-300px mb-2"&gt;&lt;/div&gt;
        &lt;span class="form-text text-muted"&gt;Enable clear and today helper buttons&lt;/span&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Examples&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;a href="#" class="btn font-weight-bold btn-light-primary" data-toggle="modal" data-target="#kt_datetimepicker_modal"&gt;Launch Modal Examples&lt;/a&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Base Example&lt;/label&gt;
       &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group date" id="kt_datetimepicker_9" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_9"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_9" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Date Picker&lt;/label&gt;
       &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group date" id="kt_datetimepicker_10" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_10"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_10" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;

      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Time Picker&lt;/label&gt;
       &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group date" id="kt_datetimepicker_11" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_11"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_11" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
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
      // Demo 1
      $('#kt_datetimepicker_1').datetimepicker();

      // Demo 2
      $('#kt_datetimepicker_2').datetimepicker({
          locale: 'de'
      });

      // Demo 3
      $('#kt_datetimepicker_3').datetimepicker({
          format: 'L'
      });

      // Demo 4
      $('#kt_datetimepicker_4').datetimepicker({
          format: 'LT'
      });

      // Demo 5
      $('#kt_datetimepicker_5').datetimepicker();

      // Demo 6
      $('#kt_datetimepicker_6').datetimepicker({
          defaultDate: '11/1/2020',
          disabledDates: [
              moment('12/25/2020'),
              new Date(2020, 11 - 1, 21),
              '11/22/2022 00:53'
          ]
      });

      // Demo 7
      $('#kt_datetimepicker_7_1').datetimepicker();
      $('#kt_datetimepicker_7_2').datetimepicker({
          useCurrent: false
      });

      $('#kt_datetimepicker_7_1').on('change.datetimepicker', function(e) {
          $('#kt_datetimepicker_7_2').datetimepicker('minDate', e.date);
      });
      $('#kt_datetimepicker_7_2').on('change.datetimepicker', function(e) {
          $('#kt_datetimepicker_7_1').datetimepicker('maxDate', e.date);
      });

      // Demo 8
      $('#kt_datetimepicker_8').datetimepicker({
          inline: true,
      });

      // Demo 9
      $('#kt_datetimepicker_9').datetimepicker();

      // Demo 10
      $('#kt_datetimepicker_10').datetimepicker({
          locale: 'de'
      });

      // Demo 11
      $('#kt_datetimepicker_11').datetimepicker({
          format: 'L'
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
                            <div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    placeholder="Select date &amp; time" data-target="#kt_datetimepicker_1" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_1"
                                    data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Using Locales(DE)</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date" id="kt_datetimepicker_2" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    placeholder="Select date &amp; time" data-target="#kt_datetimepicker_2" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_2"
                                    data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="form-text text-muted pt-2">Use locals from
                                <a href="https://momentjs.com/">https://momentjs.com/</a></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Only</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_3"
                                data-target-input="nearest">
                                <input type="text" class="form-control form-control-solid datetimepicker-input"
                                    placeholder="Select date &amp; time" data-target="#kt_datetimepicker_3" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_3"
                                    data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Time Only</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group input-group-solid date" id="kt_datetimepicker_4"
                                data-target-input="nearest">
                                <input type="text" class="form-control form-control-solid datetimepicker-input"
                                    placeholder="Select date &amp; time" data-target="#kt_datetimepicker_4" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_4"
                                    data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-clock"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">No Icon</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control form-control-solid datetimepicker-input"
                                id="kt_datetimepicker_5" placeholder="Select date &amp; time"
                                data-toggle="datetimepicker" data-target="#kt_datetimepicker_5" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Enabled/Disabled Dates</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date" id="kt_datetimepicker_6" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    placeholder="Select date &amp; time" data-target="#kt_datetimepicker_6" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_6"
                                    data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Linked Pickers</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group date" id="kt_datetimepicker_7_1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Start date" data-target="#kt_datetimepicker_7_1" />
                                        <div class="input-group-append" data-target="#kt_datetimepicker_7_1"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="ki ki-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="kt_datetimepicker_7_2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="End date" data-target="#kt_datetimepicker_7_2" />
                                        <div class="input-group-append" data-target="#kt_datetimepicker_7_2"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="ki ki-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Inline Mode</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div id="kt_datetimepicker_8" class="w-300px mb-2"></div>
                            <span class="form-text text-muted">Enable clear and today helper buttons</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Examples</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="#" class="btn font-weight-bold btn-light-primary" data-toggle="modal"
                                data-target="#kt_datetimepicker_modal">Launch Modal Examples</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success mr-2">Kirim</button>
                            <button type="submit" class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_datetimepicker_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bootstrap Tanggal Time Picker Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Base Example</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date" id="kt_datetimepicker_9" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Select date &amp; time" data-target="#kt_datetimepicker_9" />
                                        <div class="input-group-append" data-target="#kt_datetimepicker_9"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="ki ki-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Picker</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date" id="kt_datetimepicker_10" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Select date &amp; time" data-target="#kt_datetimepicker_10" />
                                        <div class="input-group-append" data-target="#kt_datetimepicker_10"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="ki ki-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Time Picker</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group date" id="kt_datetimepicker_11" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Select date &amp; time" data-target="#kt_datetimepicker_11" />
                                        <div class="input-group-append" data-target="#kt_datetimepicker_11"
                                            data-toggle="datetimepicker">
                                            <span class="input-group-text">
                                                <i class="ki ki-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                            <button type="reset" class="btn btn-secondary">Kirim</button>
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
      &lt;div class="form-group row"&gt;
       &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Valid State&lt;/label&gt;
       &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
        &lt;div class="input-group date" id="kt_datetimepicker_12" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control is-valid datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_12"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_12" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
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
        &lt;div class="input-group date" id="kt_datetimepicker_13" data-target-input="nearest"&gt;
         &lt;input type="text" class="form-control is-invalid datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_13"/&gt;
         &lt;div class="input-group-append" data-target="#kt_datetimepicker_12" data-toggle="datetimepicker"&gt;
          &lt;span class="input-group-text"&gt;
           &lt;i class="ki ki-calendar"&gt;&lt;/i&gt;
          &lt;/span&gt;
         &lt;/div&gt;
         &lt;div class="invalid-feedback"&gt;
          Sorry, the date is taken. Try another date?
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
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
      // Demo 12
      $('#kt_datetimepicker_12').datetimepicker();
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Valid State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="input-group date" id="kt_datetimepicker_12" data-target-input="nearest">
                                <input type="text" class="form-control is-valid datetimepicker-input"
                                    placeholder="Select date &amp; time" data-target="#kt_datetimepicker_12" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_12"
                                    data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-calendar"></i>
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
                            <div class="input-group date" id="kt_datetimepicker_13" data-target-input="nearest">
                                <input type="text" class="form-control is-invalid datetimepicker-input"
                                    placeholder="Select date &amp; time" data-target="#kt_datetimepicker_12" />
                                <div class="input-group-append" data-target="#kt_datetimepicker_12"
                                    data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-calendar"></i>
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
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js') }}"></script>
@endsection
