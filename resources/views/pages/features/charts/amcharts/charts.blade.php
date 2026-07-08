@extends('layouts.index')
@section('styles')
    <link href="//www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
@endsection
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
                Charts
            @endslot
            @slot('li_3')
                AM Chart
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
            <div class="alert-icon align-self-start">
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
                <p>You can download and use all
                    <b>amCharts</b>for free. The only limitation of the free version is that a small link to this web site
                    will be displayed in the top left corner of your charts. If you would like to use charts without this
                    link, or you appreciate the software and would like to support its creators,
                    <a class="font-weight-bold" href="http://www.amcharts.com/online-store/" target="_blank">please purchase
                        a commercial license</a>
                </p>
                <p>
                    <span class="label label-danger label-inline">Exclusively for Metronic users:</span>
                    <br />After purchasing
                    <b>Metronic</b>you will get a promo code for
                    <span class="label label-primary label-border label-inline label-rounded">15% DISCOUNT</span>for the
                    commercial license of
                    <b>amChart</b>. To find the promo code please check the README file in the Metronic's purchased package.
                </p>
                <p>For more info please check
                    <a class="font-weight-bold" href="http://www.amcharts.com/demos/" target="_blank">Amcharts Home</a>.
                </p>
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Simple Column Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_1" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Column and Line mix</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_2" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Layered Column Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_3" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">3D Stacked Column Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_4" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Bar and line chart mix</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_5" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Tanggal Based Data</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_6" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Line Chart with Scroll and Zoom</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_7" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Duration on Value Axis</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_8" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Radar Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_9" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Polar Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_10" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Polar Scatter</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_11" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Simple Pie Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_12" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Animated Time-Line Pie Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_amcharts_13" style="height: 500px;"></div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
<!--begin::Page Vendors(used by this page)-->
		<script src="//www.amcharts.com/lib/3/amcharts.js"></script>
		<script src="//www.amcharts.com/lib/3/serial.js"></script>
		<script src="//www.amcharts.com/lib/3/radar.js"></script>
		<script src="//www.amcharts.com/lib/3/pie.js"></script>
		<script src="//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js"></script>
		<script src="//www.amcharts.com/lib/3/plugins/animate/animate.min.js"></script>
		<script src="//www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
		<script src="//www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="{{ asset('assets/js/pages/features/charts/amcharts/charts.js') }}"></script>
@endsection
