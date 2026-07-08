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
                Controls
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Basic Example</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
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
                                    <div class="alert-text">Use any icon in input group from
                                        <a class="font-weight-bold" href="?page=components/icons/flaticon">Flaticon</a>,
                                        <a class="font-weight-bold" href="?page=components/icons/fontawesome5">Fontawesome
                                            5</a>,
                                        <a class="font-weight-bold" href="?page=components/icons/duo-tone">Duotone</a>,
                                        <a class="font-weight-bold"
                                            href="?page=components/icons/lineawesome">Lineawesome</a>or
                                        <a class="font-weight-bold"
                                            href="?page=components/icons/socicons">Socicons</a>icons.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" />
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Right Addon</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">@example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-8"></div>
                            <div class="form-group">
                                <label>Joint Addons</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Nominal (to the nearest dollar)" />
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label>Left &amp; Right Addons</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">#</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Units" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">px</span>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Basic Example
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Use any icon in input group from &lt;a  class="font-weight-bold" href="&lt;?php echo Util::getUrl( 'components/icons/flaticon' ) ?&gt;"&gt;Flaticon&lt;/a&gt;,
             &lt;a  class="font-weight-bold" href="&lt;?php echo Util::getUrl( 'components/icons/fontawesome5' ) ?&gt;"&gt;Fontawesome 5&lt;/a&gt;,
             &lt;a  class="font-weight-bold" href="&lt;?php echo Util::getUrl( 'components/icons/duo-tone' ) ?&gt;"&gt;Duotone&lt;/a&gt;,
             &lt;a  class="font-weight-bold" href="&lt;?php echo Util::getUrl( 'components/icons/lineawesome' ) ?&gt;"&gt;Lineawesome&lt;/a&gt; or
             &lt;a  class="font-weight-bold" href="&lt;?php echo Util::getUrl( 'components/icons/socicons' ) ?&gt;"&gt;Socicons&lt;/a&gt; icons.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;@&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Email" /&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;@example.com&lt;/span&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="separator separator-dashed my-8"&gt;&lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Joint Addons&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;$&lt;/span&gt;
             &lt;span class="input-group-text"&gt;0.00&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Nominal (to the nearest dollar)"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-2"&gt;
           &lt;label&gt;Left &amp; Right Addons&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;#&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Units" /&gt;
            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;px&lt;/span&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">With Icons</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
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
                                    <div class="alert-text">Easily extend form controls by adding text, buttons, icons, or
                                        button groups on either side of the input.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-exclamation-triangle icon-lg"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" />
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Right Addon</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-group icon-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-8"></div>
                            <div class="form-group">
                                <label>Joint Addons</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="0.00"
                                        aria-label="Nominal (to the nearest dollar)" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-registered icon-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Both Addons</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="flaticon-refresh"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="flaticon-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Duotone Icons</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text line-height-0 py-0">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text line-height-0 py-0">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label>Keenthemes Icons</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text line-height-0 py-0">
                                            <i class="ki ki-arrow-back icon-sm"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text line-height-0 py-0">
                                            <i class="ki ki-arrow-next icon-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          With Icons
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;?php echo Page::getSVG(Page::getMediaPath() . "svg/icons/Tools/Compass.svg", "svg-icon-primary svg-icon-xl");?&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Easily extend form controls by adding text, buttons, icons, or button groups on either side of the input.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-exclamation-triangle icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Email" /&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-group icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-8"&gt;&lt;/div&gt;

          &lt;div class="form-group"&gt;
           &lt;label&gt;Joint Addons&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;$&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="0.00" aria-label="Nominal (to the nearest dollar)"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="la la-registered"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Both Addons&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="flaticon-refresh"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="flaticon-user"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Duotone Icons&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text line-height-0 py-0"&gt;
              &lt;?php echo Page::getSVG(Page::getMediaPath() . "svg/icons/General/Search.svg");?&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text line-height-0 py-0"&gt;
              &lt;?php echo Page::getSVG(Page::getMediaPath() . "svg/icons/Code/Compiling.svg");?&gt;
             &lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-2"&gt;
           &lt;label&gt;Keenthemes Icons&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text line-height-0 py-0"&gt;
              &lt;i class="ki ki-arrow-back icon-sm"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text line-height-0 py-0"&gt;
              &lt;i class="ki ki-arrow-next icon-sm"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Sizing</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
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
                                    <div class="alert-text">Add the relative form sizing classes to the
                                        <code>.input-group</code>itself and contents within will automatically resize.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Large Input Group</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-exclamation-triangle"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Large size" />
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Large Input Group</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="flaticon-refresh"></i>
                                        </span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Large size" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Small Input Group</label>
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Small size"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-group"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Small Input Group</label>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Small size"
                                        aria-describedby="basic-addon2" />
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label>Small Input Group</label>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Small size"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-group"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Sizing
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Add the relative form sizing classes to the &lt;code&gt;.input-group&lt;/code&gt; itself and contents within
             will automatically resize.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Large Input Group&lt;/label&gt;
           &lt;div class="input-group input-group-lg"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-exclamation-triangle "&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Large size" /&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Large Input Group&lt;/label&gt;
           &lt;div class="input-group input-group-lg"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="flaticon-refresh"&gt;&lt;/i&gt;&lt;/span&gt;
             &lt;span class="input-group-text"&gt;0.00&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Large size"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Small Input Group&lt;/label&gt;
           &lt;div class="input-group input-group-sm"&gt;
            &lt;input type="text" class="form-control" placeholder="Small size" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-group"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Small Input Group&lt;/label&gt;
           &lt;div class="input-group input-group-sm"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="fa fa-paper-plane" aria-hidden="true"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Small size" aria-describedby="basic-addon2"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-2"&gt;
           &lt;label&gt;Small Input Group&lt;/label&gt;
           &lt;div class="input-group input-group-sm"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="fa fa-paper-plane" aria-hidden="true"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Small size" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-group"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Input Icons</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
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
                                    <div class="alert-text">Use custom icon input component to place icon inside input
                                        control.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Icon Input</label>
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." />
                                    <span>
                                        <i class="flaticon2-search-1 icon-md"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Right Icon Input</label>
                                <div class="input-icon input-icon-right">
                                    <input type="text" class="form-control" placeholder="Search..." />
                                    <span>
                                        <i class="flaticon2-search-1 icon-md"></i>
                                    </span>
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Input Icons
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;Use custom icon input component to place icon inside input control.&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Icon Input&lt;/label&gt;
           &lt;div class="input-icon"&gt;
            &lt;input type="text" class="form-control" placeholder="Search..."/&gt;
            &lt;span&gt;&lt;i class="flaticon2-search-1 icon-md"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Icon Input&lt;/label&gt;
           &lt;div class="input-icon input-icon-right"&gt;
            &lt;input type="text" class="form-control" placeholder="Search..."/&gt;
            &lt;span&gt;&lt;i class="flaticon2-search-1 icon-md"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-md-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Checkboxes and Radio addons</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
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
                                    <div class="alert-text">Place any checkbox or radio option within an input group’s
                                        addon instead of text.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Checkbox Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <label class="checkbox checkbox-inline checkbox-success">
                                                <input type="checkbox" checked="checked" />
                                                <span></span>
                                            </label>
                                        </span>
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Right Checkbox Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <label class="checkbox checkbox-inline checkbox-primary">
                                                <input type="checkbox" checked="checked" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Right &amp; Left Checkbox Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <label class="checkbox checkbox-inline">
                                                <input type="checkbox" checked="checked" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <label class="checkbox checkbox-inline">
                                                <input type="checkbox" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Radio Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <label class="radio radio-single radio-success">
                                                <input type="radio" checked="checked" />
                                                <span></span>
                                            </label>
                                        </span>
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with radio" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Right Radio Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with radio" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <label class="radio radio-single radio-primary">
                                                <input type="radio" checked="checked" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label>Right &amp; Left Radio Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <label class="radio radio-single">
                                                <input type="radio" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with radio" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <label class="radio radio-single">
                                                <input type="radio" />
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Checkboxes and Radio addons
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Place any checkbox or radio option within an input group’s addon instead of text.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Checkbox Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="checkbox checkbox-inline checkbox-success"&gt;
               &lt;input type="checkbox" checked=""/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
             &lt;span class="input-group-text"&gt;$&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with checkbox"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Checkbox Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;$&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with checkbox"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="checkbox checkbox-inline checkbox-primary"&gt;
               &lt;input type="checkbox" checked=""/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right &amp; Left Checkbox Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="checkbox checkbox-inline"&gt;
               &lt;input type="checkbox" checked="checked"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with checkbox"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="checkbox checkbox-inline"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Radio Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="radio radio-single radio-success"&gt;
               &lt;input type="radio" checked=""/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
             &lt;span class="input-group-text"&gt;$&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with radio"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Radio Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;$&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with radio"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="radio radio-single radio-primary"&gt;
               &lt;input type="radio" checked=""/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-2"&gt;
           &lt;label&gt;Right &amp; Left Radio Addon&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="radio radio-single"&gt;
               &lt;input type="radio"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with radio"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;label class="radio radio-single"&gt;
               &lt;input type="radio"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/label&gt;
             &lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Button Addons</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
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
                                    <div class="alert-text">Buttons in input groups must wrapped in a
                                        <code>.input-group-prepend</code>or
                                        <code>.input-group-append</code>for proper alignment and sizing. This is required
                                        due to default browser styles that cannot be overridden.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Addon Button</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Cari for..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Right Addon Button</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari for..." />
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left &amp; Right Addon Button</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Cari for..." />
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Addon Button</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Go!</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Cari for..." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Right Addon Button</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari for..." />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Go!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label>Left &amp; Right Addon Button</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-success" type="button">Go!</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Cari for..." />
                                    <div class="input-group-append">
                                        <button class="btn btn-warning" type="button">Go!</button>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Button Addons
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Buttons in input groups must wrapped in a &lt;code&gt;.input-group-prepend&lt;/code&gt; or &lt;code&gt;.input-group-append&lt;/code&gt; for proper alignment and sizing.
            This is required due to default browser styles that cannot be overridden.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Addon Button&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button class="btn btn-secondary" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Cari for..."/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Addon Button&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;input type="text" class="form-control" placeholder="Cari for..."/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button class="btn btn-secondary" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left &amp; Right Addon Button&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button class="btn btn-secondary" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Cari for..."/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button class="btn btn-secondary" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Addon Button&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button class="btn btn-primary" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Cari for..."/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Addon Button&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;input type="text" class="form-control" placeholder="Cari for..."/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button class="btn btn-primary" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-2"&gt;
           &lt;label&gt;Left &amp; Right Addon Button&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button class="btn btn-success" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Cari for..."/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button class="btn btn-warning" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Buttons With Dropdowns</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
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
                                    <div class="alert-text">The example form below demonstrates common HTML form elements
                                        that receive updated styles from Bootstrap with additional classes.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Button Dropdown</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button" />
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Right Button Dropdown</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group mb-2">
                                <label>Left &amp; Right Button Dropdown</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Buttons With Dropdowns
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Button Dropdown&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"/&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Button Dropdown&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-2"&gt;
           &lt;label&gt;Left &amp; Right Button Dropdown&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Solid Style</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="alert alert-custom alert-default" role="alert">
                                    <div class="alert-icon">
                                        <span class="svg-icon svg-icon-primary svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
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
                                    <div class="alert-text">The example form below demonstrates common HTML form elements
                                        that receive updated styles from Bootstrap with additional classes.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Addon</label>
                                <div class="input-group input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-exclamation-triangle icon-lg"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" />
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Right Addon</label>
                                <div class="input-group input-group-solid">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-group icon-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Left Button Dropdown</label>
                                <div class="input-group input-group-solid">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button" />
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Right Button Dropdown</label>
                                <div class="input-group input-group-solid">
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <div class="form-group">
                                <label>Left &amp; Right Button Dropdown</label>
                                <div class="input-group input-group-solid">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Some help content goes here</span>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Solid Style
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Addon&lt;/label&gt;
           &lt;div class="input-group input-group-solid"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-exclamation-triangle icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="Email" /&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Addon&lt;/label&gt;
           &lt;div class="input-group input-group-solid"&gt;
            &lt;input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2"/&gt;
            &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-group icon-lg"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left Button Dropdown&lt;/label&gt;
           &lt;div class="input-group input-group-solid"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"/&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Right Button Dropdown&lt;/label&gt;
           &lt;div class="input-group input-group-solid"&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu dropdown-menu-right"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Left &amp; Right Button Dropdown&lt;/label&gt;
           &lt;div class="input-group input-group-solid"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" aria-label="Text input with dropdown button"/&gt;
            &lt;div class="input-group-append"&gt;
             &lt;button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
             Action
             &lt;/button&gt;
             &lt;div class="dropdown-menu dropdown-menu-right"&gt;
              &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
              &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
              &lt;div role="separator" class="dropdown-divider"&gt;&lt;/div&gt;
              &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Some help content goes here&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
