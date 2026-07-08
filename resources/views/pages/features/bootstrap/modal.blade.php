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
                Bootstrap
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
            <div class="alert-text">Metronic extends
                <code>Bootstrap Modal</code>component with a variety of options to provide unique looking Modal components
                that matches Metronic's design standards.
                <br />For more info on Bootstrap Modal please visit the official
                <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/components/modal/"
                    target="_blank">Bootstrap Documentation</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Example</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Below is a static modal example (meaning its position and display have been overridden).</p>
                            <div class="example-preview">
                                <div class="modal position-relative d-block" style="z-index: 0" tabindex="-1"
                                    role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Simpan changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="modal position-relative d-block" tabindex="-1" role="dialog"&gt;
                            &lt;div class="modal-dialog" role="document"&gt;
                                &lt;div class="modal-content"&gt;
                                    &lt;div class="modal-header"&gt;
                                        &lt;h5 class="modal-title"&gt;Modal Title&lt;/h5&gt;
                                        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                            &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-body"&gt;
                                        &lt;p&gt;Modal body text goes here.&lt;/p&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-footer"&gt;
                                        &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                        &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Live Demo</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from
                                the top of the page.</p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">Launch demo modal</button>
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!-- Button trigger modal--&gt;
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"&gt;
                            Launch demo modal
                        &lt;/button&gt;

                        &lt;!-- Modal--&gt;
                        &lt;div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog" role="document"&gt;
                                &lt;div class="modal-content"&gt;
                                    &lt;div class="modal-header"&gt;
                                        &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal Title&lt;/h5&gt;
                                        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                            &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-body"&gt;
                                        ...
                                    &lt;/div&gt;
                                    &lt;div class="modal-footer"&gt;
                                        &lt;button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                        &lt;button type="button" class="btn btn-primary font-weight-bold"&gt;Save changes&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Static Backdrop</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>When backdrop is set to static, the modal will not close when clicking outside it. Click the
                                button below to try it.</p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#staticBackdrop">Launch demo modal</button>
                                <!-- Modal-->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!-- Button trigger modal--&gt;
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"&gt;
                            Launch demo modal
                        &lt;/button&gt;

                        &lt;!-- Modal--&gt;
                        &lt;div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog" role="document"&gt;
                                &lt;div class="modal-content"&gt;
                                    &lt;div class="modal-header"&gt;
                                        &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal Title&lt;/h5&gt;
                                        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                            &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-body"&gt;
                                        ...
                                    &lt;/div&gt;
                                    &lt;div class="modal-footer"&gt;
                                        &lt;button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                        &lt;button type="button" class="btn btn-primary font-weight-bold"&gt;Save changes&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Sizes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Modals have three optional sizes, available via modifier classes to be placed on a
                                <code>.modal-dialog</code>. These sizes triggers on at certain breakpoints to avoid
                                horizontal scrollbars on narrower viewports.
                            </p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                                    data-target="#exampleModalSizeSm">Modal - sm</button>
                                <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                                    data-target="#exampleModalSizeDefault">Modal - default</button>
                                <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                                    data-target="#exampleModalSizeLg">Modal - lg</button>
                                <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                                    data-target="#exampleModalSizeXl">Modal - xl</button>
                                <!--begin::Modal-->
                                <div class="modal fade" id="exampleModalSizeSm" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalSizeSm" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal-->
                                <!--begin::Modal-->
                                <div class="modal fade" id="exampleModalSizeDefault" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalSizeDefault" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal-->
                                <!--begin::Modal-->
                                <div class="modal fade" id="exampleModalSizeLg" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalSizeLg" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal-->
                                <!--begin::Modal-->
                                <div class="modal fade" id="exampleModalSizeXl" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalSizeXl" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal-->
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;div class="modal fade" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog modal-dialog-centered modal-sm" role="document"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="modal fade" id="exampleModalSizeLg" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="modal fade" id="exampleModalSizeLg" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog modal-dialog-centered modal-lg" role="document"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="modal fade" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog modal-dialog-centered modal-xl" role="document"&gt;
                                ...
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Scrolling Long Content</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>When modals become too long for the user’s viewport or device, they scroll independently from
                                the page itself. Try the demo below.</p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalLong">Launch demo modal</button>
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!-- Button trigger modal--&gt;
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"&gt;
                            Launch demo modal
                        &lt;/button&gt;

                        &lt;!-- Modal--&gt;
                        &lt;div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog" role="document"&gt;
                                &lt;div class="modal-content"&gt;
                                    &lt;div class="modal-header"&gt;
                                        &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal Title&lt;/h5&gt;
                                        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                            &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-body"&gt;
                                        ...
                                    &lt;/div&gt;
                                    &lt;div class="modal-footer"&gt;
                                        &lt;button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                        &lt;button type="button" class="btn btn-primary font-weight-bold"&gt;Save changes&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <p>Create a scrollable modal body by adding
                                <code>.modal-dialog-scrollable</code>to
                                <code>.modal-dialog</code>.
                            </p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalScrollable">Launch demo modal</button>
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalScrollable" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="height: 300px;">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!-- Button trigger modal--&gt;
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"&gt;
                            Launch demo modal
                        &lt;/button&gt;

                        &lt;!-- Modal--&gt;
                        &lt;div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog modal-dialog-scrollable" role="document"&gt;
                                &lt;div class="modal-content"&gt;
                                    &lt;div class="modal-header"&gt;
                                        &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal Title&lt;/h5&gt;
                                        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                            &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-body" style="height: 300px;"&gt;
                                        ...
                                    &lt;/div&gt;
                                    &lt;div class="modal-footer"&gt;
                                        &lt;button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                        &lt;button type="button" class="btn btn-primary font-weight-bold"&gt;Save changes&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Example-->
                        <div class="example">
                            <p>Add
                                <code>data-scroll="true"</code>and
                                <code>data-height="300"</code>attributes to
                                <code>.modal-body</code>to use
                                <a href="" class="font-weight-bold">Perfect Scrollbar</a>based scrolling.
                            </p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCustomScrollable">Launch demo modal</button>
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCustomScrollable" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div data-scroll="true" data-height="300">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen book. It has survived not
                                                        only five centuries, but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!-- Button trigger modal--&gt;
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCustomScrollable"&gt;
                            Launch demo modal
                        &lt;/button&gt;

                        &lt;!-- Modal--&gt;
                        &lt;div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog modal-dialog-scrollable" role="document"&gt;
                                &lt;div class="modal-content"&gt;
                                    &lt;div class="modal-header"&gt;
                                        &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal Title&lt;/h5&gt;
                                        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                                            &lt;i aria-hidden="true" class="ki ki-close"&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-body"&gt;
                                        &lt;div data-scroll="true" data-height="300"&gt;
                                            ...
                                        &lt;div&gt;
                                    &lt;/div&gt;
                                    &lt;div class="modal-footer"&gt;
                                        &lt;button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal"&gt;Close&lt;/button&gt;
                                        &lt;button type="button" class="btn btn-primary font-weight-bold"&gt;Save changes&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Vertically Centered</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Add
                                <code>.modal-dialog-centered</code>to
                                <code>.modal-dialog</code>to vertically center the modal.
                            </p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter">Launch demo modal</button>
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="example-code">
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;!-- Button trigger modal--&gt;
                        &lt;button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"&gt;
                            Launch demo modal
                        &lt;/button&gt;

                        &lt;!-- Modal--&gt;
                        &lt;div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true"&gt;
                            &lt;div class="modal-dialog modal-dialog-centered" role="document"&gt;
                                &lt;div class="modal-content"&gt;
                                    ...
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;</code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Tooltips And Popovers</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <p>Tooltips and popovers can be placed within modals as needed. When modals are closed, any
                                tooltips and popovers within are also automatically dismissed.</p>
                            <div class="example-preview">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalPopovers">Launch demo modal</button>
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModalPopovers" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Popover in a modal</h5>
                                                <p>This
                                                    <a href="#" role="button" class="btn btn-secondary"
                                                        data-toggle="popover" title="Popover title"
                                                        data-content="Popover body content is set in this attribute.">button</a>triggers
                                                    a popover on click.
                                                </p>
                                                <hr>
                                                <h5>Tooltips in a modal</h5>
                                                <p>
                                                    <a href="#" title="Tooltip" data-toggle="tooltip">This
                                                        link</a>and
                                                    <a href="#" title="Tooltip" data-toggle="tooltip">that
                                                        link</a>have tooltips on hover.
                                                </p>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary font-weight-bold">Simpan
                                                        changes</button>
                                                </div>
                                                <div class="example-code">
                                                    <span class="example-copy" data-toggle="tooltip"
                                                        title="Copy code"></span>
                                                    <div class="example-highlight">
                                                        <pre>
<code class="language-html">
                        &lt;div class="modal-body"&gt;
                            &lt;h5&gt;Popover in a modal&lt;/h5&gt;
                            &lt;p&gt;
                                This &lt;a href="#" role="button" class="btn btn-secondary" data-toggle="popover" title="Popover title" data-content="Popover body content is set in this attribute."&gt;button&lt;/a&gt; triggers a popover on click.
                            &lt;/p&gt;
                            &lt;hr&gt;

                            &lt;h5&gt;Tooltips in a modal&lt;/h5&gt;
                            &lt;p&gt;
                                &lt;a href="#" title="Tooltip" data-toggle="tooltip"&gt;This link&lt;/a&gt; and
                                &lt;a href="#" title="Tooltip" data-toggle="tooltip"&gt;that link&lt;/a&gt; have tooltips on hover.
                            &lt;/p&gt;
                        &lt;/div&gt;</code>
</pre>
                                                    </div>
                                                </div>
                                                <!--end::Example-->
                                                <!--end::Card-->
                                                <!--end::Row-->
                                                </hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
@endsection
