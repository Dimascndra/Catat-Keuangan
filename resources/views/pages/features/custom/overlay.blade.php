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
                Custom
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
            <div class="alert-text">Use
                <code>.overlay</code>component to have multi-purpose overlay components.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-1.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn font-weight-bold btn-primary btn-shadow">Explore</a>
                            <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                          &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-1.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer"&gt;
                            &lt;a href="#" class="btn font-weight-bold btn-primary btn-shadow" &gt;Explore&lt;/a&gt;
                            &lt;a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2"&gt;Purchase&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-2.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer align-items-end justify-content-center">
                            <div class="d-flex flex-grow-1 flex-center bg-white-o-5 py-5">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow">Explore</a>
                                <a href="#"
                                    class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-2.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer align-items-end justify-content-center"&gt;
                            &lt;div class="d-flex flex-grow-1 flex-center bg-white-o-5 py-5"&gt;
                                &lt;a href="#" class="btn font-weight-bold btn-primary btn-shadow"&gt;Explore&lt;/a&gt;
                                &lt;a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2"&gt;Purchase&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-3.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer align-items-start justify-content-center">
                            <div class="d-flex flex-grow-1 flex-center bg-white-o-5 py-5">
                                <a href="#" class="btn font-weight-bold btn-primary btn-shadow">Explore</a>
                                <a href="#"
                                    class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-3.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer align-items-start justify-content-center"&gt;
                            &lt;div class="d-flex flex-grow-1 flex-center bg-white-o-5 py-5"&gt;
                                &lt;a href="#" class="btn font-weight-bold btn-primary btn-shadow"&gt;Explore&lt;/a&gt;
                                &lt;a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2"&gt;Purchase&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-4.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer align-items-end justify-content-end pb-5 pr-5">
                            <a href="#" class="btn btn-clean btn-icon mr-2">
                                <i class="flaticon2-notification icon-lg text-primary"></i>
                            </a>
                            <a href="#" class="btn btn-clean btn-icon">
                                <i class="flaticon2-plus icon-lg text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-4.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer align-items-end justify-content-end pb-5 pr-5"&gt;
                            &lt;a href="#" class="btn btn-clean btn-icon mr-2"&gt;&lt;i class="flaticon2-notification icon-lg text-primary"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;a href="#" class="btn btn-clean btn-icon"&gt;&lt;i class="flaticon2-plus icon-lg text-primary"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-5.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer align-items-start justify-content-end pt-5 pr-5">
                            <a href="#" class="btn btn-clean btn-icon mr-2" target="_blank">
                                <i class="flaticon2-notification icon-lg text-primary"></i>
                            </a>
                            <a href="#" class="btn btn-clean btn-icon" target="_blank">
                                <i class="flaticon2-plus icon-lg text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-5.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer align-items-start justify-content-end pt-5 pr-5"&gt;
                            &lt;a href="#" class="btn btn-clean btn-icon mr-2"&gt;&lt;i class="flaticon2-notification icon-lg text-primary"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;a href="#" class="btn btn-clean btn-icon"&gt;&lt;i class="flaticon2-plus icon-lg text-primary"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-6.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer align-items-start justify-content-start pt-5 pl-5">
                            <a href="#" class="btn btn-clean btn-icon mr-2">
                                <i class="flaticon2-notification icon-lg text-primary"></i>
                            </a>
                            <a href="#" class="btn btn-clean btn-icon">
                                <i class="flaticon2-plus icon-lg text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-6.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer align-items-start justify-content-start pt-5 pl-5"&gt;
                            &lt;a href="#" class="btn btn-clean btn-icon mr-2"&gt;&lt;i class="flaticon2-notification icon-lg text-primary"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;a href="#" class="btn btn-clean btn-icon"&gt;&lt;i class="flaticon2-plus icon-lg text-primary"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-7.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer m-5 rounded align-items-end justify-content-start">
                            <div class="d-flex flex-column align-items-start mb-5 ml-5">
                                <span class="label label-success label-xl label-inline mb-1">Shop</span>
                                <a href="#"
                                    class="font-size-h4 font-weight-bolder text-white text-hover-primary">Deal of the
                                    Day</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-7.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer m-5 rounded align-items-end justify-content-start"&gt;
                            &lt;div class="d-flex flex-column align-items-start mb-5 ml-5"&gt;
                                &lt;span class="label label-success label-xl label-inline mb-1"&gt;Shop&lt;/span&gt;
                                &lt;a href="#" class="font-size-h4 font-weight-bolder text-white text-hover-primary"&gt;Deal of the Day&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-8.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer m-5 rounded flex-center">
                            <div class="d-flex flex-column flex-center">
                                <span class="label label-danger label-xl label-inline mb-1">Shop</span>
                                <a href="#"
                                    class="font-size-h4 font-weight-bolder text-white text-hover-primary">Deal of the
                                    Day</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-8.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer m-5 rounded flex-center"&gt;
                            &lt;div class="d-flex flex-column flex-center"&gt;
                                &lt;span class="label label-danger label-xl label-inline mb-1"&gt;Shop&lt;/span&gt;
                                &lt;a href="#" class="font-size-h4 font-weight-bolder text-white text-hover-primary"&gt;Deal of the Day&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay">
                    <div class="card-body p-0">
                        <div class="overlay-wrapper">
                            <img src="assets/media/stock-600x400/img-9.jpg" alt="" class="w-100 rounded" />
                        </div>
                        <div class="overlay-layer m-5 rounded align-items-start justify-content-end">
                            <div class="d-flex flex-column mt-5 mr-5 align-items-end">
                                <span class="label label-warning label-xl label-inline mb-1">Shop</span>
                                <a href="#"
                                    class="font-size-h4 font-weight-bolder text-white text-hover-primary">Deal of the
                                    Day</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay"&gt;
                    &lt;div class="card-body p-0"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;img src="&lt;?php echo Page::getMediaPath();?&gt;stock-600x400/img-9.jpg" alt="" class="w-100 rounded"/&gt;
                        &lt;/div&gt;
                        &lt;div class="overlay-layer m-5 rounded align-items-start justify-content-end"&gt;
                            &lt;div class="d-flex flex-column mt-5 mr-5 align-items-end"&gt;
                                &lt;span class="label label-warning label-xl label-inline mb-1"&gt;Shop&lt;/span&gt;
                                &lt;a href="#" class="font-size-h4 font-weight-bolder text-white text-hover-primary"&gt;Deal of the Day&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom overlay overlay-block">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Card Blocking</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="overlay-wrapper">
                            <div class="form-group">
                                <label>Address Line 1</label>
                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    name="address1" placeholder="Address Line 1" />
                                <span class="form-text text-muted">Please enter your Address.</span>
                            </div>
                            <div class="form-group">
                                <label>Address Line 2</label>
                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    name="address1" placeholder="Address Line 1" />
                                <span class="form-text text-muted">Please enter your Address 2.</span>
                            </div>
                        </div>
                        <div class="overlay-layer bg-dark-o-10">
                            <div class="spinner spinner-primary"></div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom overlay overlay-block"&gt;
                    &lt;div class="card-header"&gt;
                        &lt;div class="card-title"&gt;
                            &lt;h3 class="card-label"&gt;Card Blocking&lt;/h3&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        &lt;div class="overlay-wrapper"&gt;
                            &lt;div class="form-group"&gt;
              &lt;label&gt;Address Line 1&lt;/label&gt;
              &lt;input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1"/&gt;
                 &lt;span class="form-text text-muted"&gt;Please enter your Address.&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="form-group"&gt;
              &lt;label&gt;Address Line 2&lt;/label&gt;
              &lt;input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1"/&gt;
                 &lt;span class="form-text text-muted"&gt;Please enter your Address 2.&lt;/span&gt;
                            &lt;/div&gt;
               &lt;/div&gt;
               &lt;div class="overlay-layer bg-dark-o-10"&gt;
                            &lt;div class="spinner spinner-primary"&gt;&lt;/div&gt;
               &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Content Blocking</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="overlay overlay-block rounded">
                            <div class="overlay-wrapper p-5">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s, when an unknown printer took a galley of type and scrambled it to.</div>
                            <div class="overlay-layer rounded bg-primary-o-20">
                                <div class="spinner spinner-primary"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="overlay overlay-block rounded"&gt;
                    &lt;div class="overlay-wrapper p-5"&gt;
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to.
                    &lt;/div&gt;
                    &lt;div class="overlay-layer rounded bg-primary-o-20"&gt;
                        &lt;div class="spinner spinner-primary"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Modal Blocking</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Toggle a working modal demo by clicking the button below.</p>
                        <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                            data-target="#exampleModal">Modal Body Overlay</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModal2">Entire Modal Overlay</button>
                        <!--begin::Modal Body Overlay-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <!--begin::Overlay-->
                                    <div class="modal-body overlay overlay-block">Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five centuries,
                                        but also the leap into electronic typesetting, remaining essentially unchanged.
                                        <!--begin::Overlay Layer-->
                                        <div class="overlay-layer bg-transparent">
                                            <div class="spinner spinner-lg spinner-warning"></div>
                                        </div>
                                        <!--end::Overlay Layer-->
                                    </div>
                                    <!--end::Overlay-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                            changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Modal Body Overlay-->
                        <!--begin::Entire Modal Overlay-->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <!--begin::Overlay-->
                                    <div class="overlay overlay-block">
                                        <!--begin::Modal Content-->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                            ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged.</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                changes</button>
                                        </div>
                                        <!--end::Modal Content-->
                                        <!--begin::Overlay Layer-->
                                        <div class="overlay-layer bg-success-o-20">
                                            <div class="spinner spinner-lg spinner-danger"></div>
                                        </div>
                                        <!--end::Overlay Layer-->
                                    </div>
                                    <!--end::Overlay-->
                                </div>
                            </div>
                        </div>
                        <!--end::Entire Modal Overlay-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2 mb-7">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;!--begin::Modal Body Overlay--&gt;
                &lt;div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
                    &lt;div class="modal-dialog" role="document"&gt;
                        &lt;div class="modal-content"&gt;
                            &lt;div class="modal-header"&gt;
                                &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal Title&lt;/h5&gt;
                                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                    &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                &lt;/button&gt;
                            &lt;/div&gt;

                            &lt;!--begin::Overlay--&gt;
                            &lt;div class="modal-body overlay overlay-block"&gt;
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.

                                &lt;!--begin::Overlay Layer--&gt;
                                &lt;div class="overlay-layer bg-transparent"&gt;
                                    &lt;div class="spinner spinner-lg spinner-warning"&gt;&lt;/div&gt;
                       &lt;/div&gt;
                                &lt;!--end::Overlay Layer--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Overlay--&gt;

                            &lt;div class="modal-footer"&gt;
                                &lt;button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                &lt;button type="button" class="btn btn-primary font-weight-bold"&gt;Save changes&lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Modal Body Overlay--&gt;

                &lt;!--begin::Entire Modal Overlay--&gt;
                &lt;div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
                    &lt;div class="modal-dialog" role="document"&gt;
                        &lt;div class="modal-content"&gt;
                            &lt;!--begin::Overlay--&gt;
                            &lt;div class="overlay overlay-block"&gt;
                                &lt;!--begin::Modal Content--&gt;
                                &lt;div class="modal-header"&gt;
                                    &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal Title&lt;/h5&gt;
                                    &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                        &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                    &lt;/button&gt;
                                &lt;/div&gt;
                                &lt;div class="modal-body"&gt;
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged.
                                &lt;/div&gt;
                                &lt;div class="modal-footer"&gt;
                                    &lt;button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                    &lt;button type="button" class="btn btn-primary font-weight-bold"&gt;Save changes&lt;/button&gt;
                                &lt;/div&gt;
                                &lt;!--end::Modal Content--&gt;

                                &lt;!--begin::Overlay Layer--&gt;
                                &lt;div class="overlay-layer bg-success-o-20"&gt;
                                    &lt;div class="spinner spinner-lg spinner-danger"&gt;&lt;/div&gt;
                                &lt;/div&gt;
                                &lt;!--end::Overlay Layer--&gt;
                            &lt;/div&gt;
                            &lt;!--end::Overlay--&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!--end::Entire Modal Overlay--&gt;
                </code>
</pre>
                        </div>
                    </div>
                </div>
                <!--end::Code example-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
