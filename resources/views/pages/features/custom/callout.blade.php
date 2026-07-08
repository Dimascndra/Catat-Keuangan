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
            <div class="alert-text">Metronic's Callout examples include icons, text and action buttons with a background
                color effect.</div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row mb-10">
            <div class="col-lg-6">
                <!--begin::Callout-->
                <div class="card card-custom mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Get In Touch</a>
                                <p class="text-dark-50">There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6">Kirim a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center p-5"&gt;
                   &lt;div class="mr-6"&gt;
                    &lt;span class="svg-icon svg-icon-2x"&gt;
                     &lt;svg&gt;
                      ...
                     &lt;/svg&gt;
                    &lt;/span&gt;
                   &lt;/div&gt;
                   &lt;div class="d-flex flex-column"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                        Get Started
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     ...
                    &lt;/p&gt;
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
            <div class="col-lg-6">
                <!--begin::Callout-->
                <div class="card card-custom mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Customer Support</a>
                                <p class="text-dark-50">There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-success py-4 px-6">Make A Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact mt-2">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b"&gt;
                 &lt;div class="card-body"&gt;
                        &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                            &lt;div class="d-flex flex-column mr-5"&gt;
                                &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                                    Customer Support
                                &lt;/a&gt;
                                &lt;p class="text-dark-50"&gt;
                                    ...
                                &lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                                &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-success py-4 px-6"&gt;
                                    Make A Call
                                &lt;/a&gt;
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
        <div class="row mb-10">
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-light-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Get In Touch</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-light-primary"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                            &lt;div class="d-flex flex-column mr-5"&gt;
                                &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                                    Get In Touch
                                &lt;/a&gt;
                                &lt;p class="text-dark-50"&gt;
                                    There are many variations of Lorem Ipsum available.
                                &lt;/p&gt;
                            &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6"&gt;
                    Contact Us
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-light-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Customer Support</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-success py-4 px-6">Make A Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-light-success"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                        Customer Support
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of passages of Lorem Ipsum.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-success py-4 px-6"&gt;
                    Make A Call
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-light-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Online Chat</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-danger py-4 px-6">Start Chat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-light-danger"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                        Online Chat
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of passages of Lorem Ipsum available.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-danger py-4 px-6"&gt;
                        Start Chat
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-diagonal">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Get In Touch</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-light-primary py-4 px-6">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-primary"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                    Get In Touch
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of Lorem Ipsum available.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6"&gt;
                    Contact Us
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-diagonal">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Customer Support</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-light-success py-4 px-6">Make A
                                    Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-diagonal"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                    Customer Support
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of passages of Lorem Ipsum.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-light-success py-4 px-6"&gt;
                    Make A Call
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-diagonal">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Online Chat</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-light-warning py-4 px-6">Start
                                    Chat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-diagonal"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                    Online Chat
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of passages of Lorem Ipsum available.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-light-warning py-4 px-6"&gt;
                    Start Chat
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Get In Touch</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-primary"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                    Get In Touch
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of Lorem Ipsum available.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6"&gt;
                    Contact Us
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4 mb-10">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Customer Support</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-success py-4 px-6">Make A Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-success"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                    Customer Support
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of passages of Lorem Ipsum.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-success py-4 px-6"&gt;
                    Make A Call
                    &lt;/a&gt;
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
            <div class="col-lg-6 col-xl-4">
                <!--begin::Callout-->
                <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">Online Chat</a>
                                <p class="text-dark-50">There are many variations of Lorem Ipsum available.</p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <a href="/custom/apps/support-center/feedback" target="_blank"
                                    class="btn font-weight-bolder text-uppercase btn-warning py-4 px-6">Start Chat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Callout-->
                <!--begin::Code example-->
                <div class="example example-compact">
                    <div class="example-tools">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    </div>
                    <div class="example-code">
                        <div class="example-highlight">
                            <pre>
<code class="language-html">
                &lt;div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-warning"&gt;
                 &lt;div class="card-body"&gt;
                  &lt;div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap"&gt;
                   &lt;div class="d-flex flex-column mr-5"&gt;
                    &lt;a href="#" class="h4 text-dark text-hover-primary mb-5"&gt;
                    Online Chat
                    &lt;/a&gt;
                    &lt;p class="text-dark-50"&gt;
                     There are many variations of passages of Lorem Ipsum available.
                    &lt;/p&gt;
                   &lt;/div&gt;
                   &lt;div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0"&gt;
                    &lt;a href="#" target="_blank" class="btn font-weight-bolder text-uppercase btn-warning py-4 px-6"&gt;
                    Start Chat
                    &lt;/a&gt;
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
    </div>
    <!--end::Container-->
@endsection
