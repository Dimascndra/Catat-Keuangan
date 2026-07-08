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
            <div class="alert-text">Metronic's advance
                <code>.navi</code>component comes with a variety of options to provide unique looking &amp; multi-purpose
                naviigations.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi</code>to have vertical navigations for inline and dropdown modes.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-item">
                                        <a class="navi-link active" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="navi-text">Active</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="navi-text">Example Link</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link disabled" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-calendar-8"></i>
                                            </span>
                                            <span class="navi-text">Disabled</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Another Link</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-5 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-sm">
                                        <ul class="navi">
                                            <li class="navi-item">
                                                <a class="navi-link active" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="navi-text">Active</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="navi-text">Example Link</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link disabled" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Disabled</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Another Link</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
      &lt;div class="dropdown"&gt;
       &lt;a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle" data-toggle="dropdown"&gt;
        Dropdown example
       &lt;/a&gt;
       &lt;div class="dropdown-menu dropdown-menu-sm"&gt;
        &lt;ul class="navi"&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link active" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Active&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers-1"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Example Link&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link disabled" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-calendar-8"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Disabled&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-rocket-1"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Another Link&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
        &lt;/ul&gt;
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
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Font Weight Options</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi</code>with
                                <code>.navi-{light|lighter|bold|bolder|boldest}</code>classes to set font weight.
                            </p>
                            <div class="example-preview">
                                <ul class="navi navi-bolder">
                                    <li class="navi-item">
                                        <a class="navi-link active" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="navi-text">Active</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="navi-text">Example Link</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link disabled" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-calendar-8"></i>
                                            </span>
                                            <span class="navi-text">Disabled</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Another Link</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-5 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-sm">
                                        <ul class="navi navi-bolder">
                                            <li class="navi-item">
                                                <a class="navi-link active" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="navi-text">Active</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="navi-text">Example Link</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link disabled" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Disabled</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Another Link</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
      &lt;div class="dropdown"&gt;
       &lt;a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle" data-toggle="dropdown"&gt;
        Dropdown example
       &lt;/a&gt;
       &lt;div class="dropdown-menu dropdown-menu-sm"&gt;
        &lt;ul class="navi navi-bolder"&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link active" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Active&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers-1"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Example Link&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link disabled" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-calendar-8"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Disabled&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
         &lt;li class="navi-item"&gt;
          &lt;a class="navi-link" href="#"&gt;
           &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-rocket-1"&gt;&lt;/i&gt;&lt;/span&gt;
           &lt;span class="navi-text"&gt;Another Link&lt;/span&gt;
          &lt;/a&gt;
         &lt;/li&gt;
        &lt;/ul&gt;
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
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Header And Footer</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-header</code>and
                                <code>.navi-footer</code>to have a header and footer.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-header font-weight-bold py-5">Jump to:
                                        <i class="flaticon2-information" data-toggle="tooltip" data-placement="right"
                                            title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-expand"></i>
                                            </span>
                                            <span class="navi-text">Support Center</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="navi-footer py-5 ml-5 d-flex justify-content-between">
                                    <a href="#" target="_blank"
                                        class="btn btn-light-primary font-weight-bold ml-1">Sign Out</a>
                                    <a href="#" target="_blank" class="btn btn-clean font-weight-bold">Upgrade
                                        Plan</a>
                                </div>
                                <div class="separator separator-dashed mt-3 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md p-0">
                                        <ul class="navi">
                                            <li class="navi-header font-weight-bold py-5">Jump to:
                                                <i class="flaticon2-information" data-toggle="tooltip"
                                                    data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-4"></li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-expand"></i>
                                                    </span>
                                                    <span class="navi-text">Support Center</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Profile</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-4"></li>
                                        </ul>
                                        <div class="navi-footer py-5 ml-1 d-flex justify-content-between">
                                            <a href="#" target="_blank"
                                                class="btn btn-light-primary font-weight-bold ml-5">Sign Out</a>
                                            <a href="#" target="_blank"
                                                class="btn btn-clean font-weight-bold">Upgrade Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi"&gt;
                            &lt;li class="navi-header font-weight-bold py-5"&gt;
                                Jump to:
                                &lt;i class="flaticon2-information" data-toggle="tooltip" data-placement="right" title="Click to learn more..."&gt;&lt;/i&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-separator mb-4"&gt;&lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-expand"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Support Center&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-rocket-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Profile&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-separator mt-4"&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;div class="navi-footer py-5 ml-5 d-flex justify-content-between"&gt;
                            &lt;a href="#" target="_blank" class="btn btn-light-primary font-weight-bold"&gt;Sign Out&lt;/a&gt;
                            &lt;a href="#" target="_blank" class="btn btn-clean font-weight-bold"&gt;Upgrade Plan&lt;/a&gt;
                        &lt;/div&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Labels</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-label</code>with
                                <code>.label</code>component to have label for navigation links.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span class="navi-label">
                                                <span class="label label-danger">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                            <span class="navi-label">
                                                <span
                                                    class="label label-inline label-light-primary font-weight-bold">Updated</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                            <span class="navi-label">
                                                <span class="label label-inline label-success">New</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-mail"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                            <span class="navi-label">
                                                <span class="label label-inline label-dark">On hold</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-5 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span class="navi-label">
                                                        <span class="label label-danger">2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-inline label-light-primary font-weight-bold">Updated</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Profile</span>
                                                    <span class="navi-label">
                                                        <span class="label label-inline label-success">New</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-mail"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                    <span class="navi-label">
                                                        <span class="label label-inline label-dark">On hold</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi"&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                   &lt;span class="label label-danger"&gt;2&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers-1"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                   &lt;span class="label label-inline label-light-primary font-weight-bold"&gt;Updated&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-rocket-1"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Profile&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                  &lt;span class="label label-inline label-success"&gt;New&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-mail"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                   &lt;span class="label label-inline label-dark"&gt;On hold&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Arrows</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-arrow</code>to have navigation links with arrows.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-chat-1"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span class="navi-label">
                                                <span class="label label-light-info font-weight-bold">2</span>
                                            </span>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers-1"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                            <span class="navi-label">
                                                <span
                                                    class="label label-inline label-light-primary font-weight-bold">Updated</span>
                                            </span>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                            <span class="navi-label">
                                                <span
                                                    class="label label-inline label-light-danger font-weight-bold">New</span>
                                            </span>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-mail"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                            <span class="navi-label">
                                                <span
                                                    class="label label-inline label-light-success font-weight-bold">Pending</span>
                                            </span>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-5 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-lg py-5">
                                        <ul class="navi">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span class="navi-label">
                                                        <span class="label label-light-info font-weight-bold">2</span>
                                                    </span>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-inline label-light-primary font-weight-bold">Updated</span>
                                                    </span>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Profile</span>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-inline label-light-danger font-weight-bold">New</span>
                                                    </span>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-mail"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-inline label-light-success font-weight-bold">Pending</span>
                                                    </span>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-chat-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-light-info font-weight-bold"&gt;2&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-arrow"&gt;&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-inline label-light-primary font-weight-bold"&gt;Updated&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-arrow"&gt;&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-rocket-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Profile&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-inline label-light-danger font-weight-bold"&gt;New&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-arrow"&gt;&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-mail"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-inline label-light-success font-weight-bold"&gt;Pending&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-arrow"&gt;&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Bullets</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-bullet</code>with
                                <code>.bullet</code>component navi links with line and dot bullets.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-bullet">
                                                <i class="bullet"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span class="navi-label">
                                                <span class="label label-danger">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-bullet">
                                                <i class="bullet"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span
                                                    class="label label-inline label-light-primary font-weight-bold">Updated</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-bullet">
                                                <i class="bullet bullet-dot"></i>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                            <span class="navi-label">
                                                <span class="label label-inline label-success">New</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-bullet">
                                                <i class="bullet bullet-dot"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                            <span class="navi-label">
                                                <span class="label label-rounded label-light-danger">3</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-5 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-bullet">
                                                        <i class="bullet"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span class="navi-label">
                                                        <span class="label label-danger">2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-bullet">
                                                        <i class="bullet"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-inline label-light-primary font-weight-bold">Updated</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-bullet">
                                                        <i class="bullet bullet-dot"></i>
                                                    </span>
                                                    <span class="navi-text">Profile</span>
                                                    <span class="navi-label">
                                                        <span class="label label-inline label-success">New</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-bullet">
                                                        <i class="bullet bullet-dot"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                    <span class="navi-label">
                                                        <span class="label label-rounded label-light-danger">3</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-bullet"&gt;
                                        &lt;i class="bullet"&gt;&lt;/i&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-danger"&gt;2&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-bullet"&gt;
                                        &lt;i class="bullet"&gt;&lt;/i&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-inline label-light-primary font-weight-bold"&gt;Updated&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-bullet"&gt;
                                        &lt;i class="bullet bullet-dot"&gt;&lt;/i&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Profile&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-inline label-success"&gt;New&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-bullet"&gt;
                                        &lt;i class="bullet bullet-dot"&gt;&lt;/i&gt;
                                    &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-rounded label-light-danger"&gt;3&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Sections</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-section</code>to have section for group of navi links.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-section text-primary text-uppercase font-weight-bolder pb-0">Section 1
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-analytics"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span class="navi-label">
                                                <span class="label label-danger label-rounded">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-pie-chart-2"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers"></i>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="navi-section mt-5 text-primary text-uppercase font-weight-bolder pb-0">
                                        Section 2</li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-box-1"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-file"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-sms"></i>
                                            </span>
                                            <span class="navi-text">Reports</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-5 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi">
                                            <li class="navi-section text-primary text-uppercase font-weight-bolder pb-0">
                                                Section 1</li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span class="navi-label">
                                                        <span class="label label-danger label-rounded">2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers"></i>
                                                    </span>
                                                    <span class="navi-text">Profile</span>
                                                </a>
                                            </li>
                                            <li
                                                class="navi-section mt-5 text-primary text-uppercase font-weight-bolder pb-0">
                                                Section 2</li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-file"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-sms"></i>
                                                    </span>
                                                    <span class="navi-text">Reports</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi"&gt;
                         &lt;li class="navi-section text-primary text-uppercase  font-weight-bolder pb-0"&gt;
                          Section 1
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                      &lt;span class="label label-danger label-rounded"&gt;2&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Profile&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-section mt-5 text-primary text-uppercase  font-weight-bolder pb-0"&gt;
                          Section 2
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                  &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-sms"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Reports&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Separator</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-separator</code>to have navi with separators.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-analytics"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span class="navi-label">
                                                <span class="label label-success label-rounded">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-pie-chart-2"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-4"></li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers"></i>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-box-1"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-info label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-4"></li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-file"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-sms"></i>
                                            </span>
                                            <span class="navi-text">Reports</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span class="navi-label">
                                                        <span class="label label-success label-rounded">2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers"></i>
                                                    </span>
                                                    <span class="navi-text">Profile</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-4"></li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-info label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-file"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-sms"></i>
                                                    </span>
                                                    <span class="navi-text">Reports</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi"&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                  &lt;span class="label label-success label-rounded"&gt;2&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Profile&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-separator my-4"&gt;&lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                              &lt;span class="navi-label"&gt;
                                  &lt;span class="label label-info label-rounded"&gt;5&lt;/span&gt;
                              &lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                         &lt;li class="navi-item"&gt;
                          &lt;a class="navi-link" href="#"&gt;
                              &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-sms"&gt;&lt;/i&gt;&lt;/span&gt;
                              &lt;span class="navi-text"&gt;Reports&lt;/span&gt;
                          &lt;/a&gt;
                         &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Link Hover And Active Styles</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-hover</code>and
                                <code>.navi-active</code>to have link background color for hover and active states
                                respectively.
                            </p>
                            <div class="example-preview">
                                <ul class="navi navi-hover navi-active">
                                    <li class="navi-item">
                                        <a class="navi-link active" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-analytics"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span class="navi-label">
                                                <span class="label label-danger label-rounded">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-pie-chart-2"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-layers"></i>
                                            </span>
                                            <span class="navi-text">Profile</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-box-1"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi navi-hover navi-active">
                                            <li class="navi-item">
                                                <a class="navi-link active" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span class="navi-label">
                                                        <span class="label label-danger label-rounded">2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-layers"></i>
                                                    </span>
                                                    <span class="navi-text">Profile</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-hover navi-active"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link active" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-danger label-rounded"&gt;2&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-layers"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Profile&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Link Border Radiuses</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi</code>with
                                <code>.navi-link-rounded</code>,
                                <code>.navi-link-rounded-lg</code>and
                                <code>.navi-link-rounded-xl</code>classes to have rounded links.
                            </p>
                            <div class="example-preview">
                                <ul class="navi navi-hover navi-link-rounded-lg">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-analytics text-danger"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span
                                                class="label label-light-danger font-weight-bold label-inline">new</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-pie-chart-2 text-warning"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-box-1 text-success"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-file text-primary"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi navi-hover navi-link-rounded-lg">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics text-danger"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span
                                                        class="label label-light-danger font-weight-bold label-inline">new</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1 text-success"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-file text-primary"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-hover"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics text-danger"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2  text-warning"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1  text-success"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file  text-primary"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                        </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Accent Style</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-accent</code>to have navi link active state with vertical bar ahead.
                            </p>
                            <div class="example-preview">
                                <ul class="navi navi-hover navi-accent navi-link-rounded-lg">
                                    <li class="navi-item">
                                        <a class="navi-link active" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-analytics"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span
                                                class="label label-light-danger font-weight-bold label-inline">new</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-pie-chart-2"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-box-1"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-file"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi navi-hover navi-active navi-accent">
                                            <li class="navi-item">
                                                <a class="navi-link active" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span
                                                        class="label label-light-danger font-weight-bold label-inline">new</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-file"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-hover navi-active navi-accent navi-link-rounded-lg"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link active" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                        <!--begin::Example-->
                        <div class="example example-basic mt-5">
                            <p>Use
                                <code>.navi-{color}</code>to change color with bootstrap colors.
                            </p>
                            <div class="example-preview">
                                <ul class="navi navi-hover navi-danger navi-accent">
                                    <li class="navi-item">
                                        <a class="navi-link active" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-analytics"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span
                                                class="label label-light-danger font-weight-bold label-inline">new</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-pie-chart-2"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-box-1"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-file"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi navi-hover navi-danger navi-accent">
                                            <li class="navi-item">
                                                <a class="navi-link active" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span
                                                        class="label label-light-danger font-weight-bold label-inline">new</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-file"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-hover navi-active navi-accent"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link active" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Circle Icon Style</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-circle-icon</code>to have navi link active state with vertical bar ahead.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 symbol-circle mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-analytics text-danger"></i>
                                                </span>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span
                                                class="label label-light-danger font-weight-bold label-inline">new</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 symbol-circle mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                </span>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 symbol-circle mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-box-1 text-success"></i>
                                                </span>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 symbol-circle mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-file text-primary"></i>
                                                </span>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 symbol-circle mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-analytics text-danger"></i>
                                                        </span>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span
                                                        class="label label-light-danger font-weight-bold label-inline">new</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 symbol-circle mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                        </span>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 symbol-circle mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-box-1 text-success"></i>
                                                        </span>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 symbol-circle mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-file text-primary"></i>
                                                        </span>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-hover navi-active"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 symbol-circle mr-3"&gt;
                      &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-analytics text-danger"&gt;&lt;/i&gt;&lt;/span&gt;
                     &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 symbol-circle mr-3"&gt;
                      &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-pie-chart-2  text-warning"&gt;&lt;/i&gt;&lt;/span&gt;
                     &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 symbol-circle mr-3"&gt;
                      &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-box-1  text-success"&gt;&lt;/i&gt;&lt;/span&gt;
                     &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 symbol-circle mr-3"&gt;
                      &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-file  text-primary"&gt;&lt;/i&gt;&lt;/span&gt;
                     &lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Title &amp; Keterangan</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Add custom tags in
                                <code>.navi-text</code>to have link with title and description.
                            </p>
                            <div class="example-preview">
                                <ul class="navi">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-analytics text-danger"></i>
                                                </span>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">Messages</span>
                                                <span class="text-muted">Inbox and notifications</span>
                                            </div>
                                            <span
                                                class="label label-light-danger font-weight-bold label-inline">new</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                </span>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">Settings</span>
                                                <span class="text-muted">Applications &amp; services</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-box-1 text-success"></i>
                                                </span>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">Tasks</span>
                                                <span class="text-muted">Project &amp; tasks</span>
                                            </div>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="symbol symbol-50 mr-3">
                                                <span class="symbol-label">
                                                    <i class="flaticon2-file text-primary"></i>
                                                </span>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">Orders</span>
                                                <span class="text-muted">eCommernce orders</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-lg py-5">
                                        <ul class="navi">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-analytics text-danger"></i>
                                                        </span>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">Messages</span>
                                                        <span class="text-muted">Inbox and notifications</span>
                                                    </div>
                                                    <span
                                                        class="label label-light-danger font-weight-bold label-inline">new</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                        </span>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">Settings</span>
                                                        <span class="text-muted">Applications &amp; services</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-box-1 text-success"></i>
                                                        </span>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">Tasks</span>
                                                        <span class="text-muted">Project &amp; tasks</span>
                                                    </div>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="symbol symbol-50 mr-3">
                                                        <span class="symbol-label">
                                                            <i class="flaticon2-file text-primary"></i>
                                                        </span>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">Orders</span>
                                                        <span class="text-muted">eCommernce orders</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-hover navi-active"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 mr-3"&gt;
                                        &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-analytics text-danger"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Messages&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;Inbox and notifications&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 mr-3"&gt;
                                        &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-pie-chart-2  text-warning"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Settings&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;Applications &amp; services&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 mr-3"&gt;
                                        &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-box-1  text-success"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Tasks&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;Project &amp; tasks&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="symbol symbol-50 mr-3"&gt;
                                        &lt;span class="symbol-label"&gt;&lt;i class="flaticon2-file  text-primary"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Orders&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;eCommernce orders&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Notification Style</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Add custom tags in
                                <code>.navi-text</code>to have link with title and description.
                            </p>
                            <div class="example-preview">
                                <ul class="navi navi-link-rounded navi-hover navi-icon-center navi-active">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon mr-3 text-center">
                                                <i class="flaticon2-analytics text-danger"></i>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">New order has been placed</span>
                                                <span class="text-muted">2 hrs ago</span>
                                            </div>
                                            <span class="navi-label">
                                                <span
                                                    class="label label-light-danger font-weight-bolder label-inline">new</span>
                                            </span>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon mr-3 text-center">
                                                <i class="flaticon2-pie-chart-2 text-warning"></i>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">New customer has been
                                                    registered</span>
                                                <span class="text-muted">5 hrs ago</span>
                                            </div>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon mr-3 text-center">
                                                <i class="flaticon2-box-1 text-success"></i>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">Application has been
                                                    approved</span>
                                                <span class="text-muted">2 days ago</span>
                                            </div>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon mr-3 text-center">
                                                <i class="flaticon2-file text-primary"></i>
                                            </span>
                                            <div class="navi-text">
                                                <span class="d-block font-weight-bold">New user feedback has been
                                                    received</span>
                                                <span class="text-muted">1 week ago</span>
                                            </div>
                                            <span class="navi-arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-xl py-5">
                                        <ul class="navi navi-hover navi-icon-center navi-active">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon mr-3 text-center">
                                                        <i class="flaticon2-analytics text-danger"></i>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">New order has been
                                                            placed</span>
                                                        <span class="text-muted">2 hrs ago</span>
                                                    </div>
                                                    <span class="navi-label">
                                                        <span
                                                            class="label label-light-danger font-weight-bolder label-inline">new</span>
                                                    </span>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon mr-3 text-center">
                                                        <i class="flaticon2-pie-chart-2 text-warning"></i>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">New customer has been
                                                            registered</span>
                                                        <span class="text-muted">5 hrs ago</span>
                                                    </div>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon mr-3 text-center">
                                                        <i class="flaticon2-box-1 text-success"></i>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">Application has been
                                                            approved</span>
                                                        <span class="text-muted">2 days ago</span>
                                                    </div>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon mr-3 text-center">
                                                        <i class="flaticon2-file text-primary"></i>
                                                    </span>
                                                    <div class="navi-text">
                                                        <span class="d-block font-weight-bold">New user feedback has been
                                                            received</span>
                                                        <span class="text-muted">1 week ago</span>
                                                    </div>
                                                    <span class="navi-arrow"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-hover navi-active"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics text-danger"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Messages&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;Inbox and notifications&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;span class="label label-light-danger font-weight-bold label-inline"&gt;new&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2  text-warning"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Settings&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;Applications &amp; services&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1  text-success"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Tasks&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;Project &amp; tasks&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;span class="navi-label"&gt;
                                        &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                    &lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file  text-primary"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;div class="navi-text"&gt;
                                        &lt;span class="d-block font-weight-bold"&gt;Orders&lt;/span&gt;
                                        &lt;span class="text-muted"&gt;eCommernce orders&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Border Style</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use
                                <code>.navi-border</code>to have navigation links with border.
                            </p>
                            <div class="example-preview">
                                <ul class="navi navi-border">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-analytics"></i>
                                            </span>
                                            <span class="navi-text">Messages</span>
                                            <span class="navi-label">
                                                <span class="label label-danger label-rounded">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-pie-chart-2"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-box-1"></i>
                                            </span>
                                            <span class="navi-text">Tasks</span>
                                            <span class="navi-label">
                                                <span class="label label-warning label-rounded">5</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-icon">
                                                <i class="flaticon2-file"></i>
                                            </span>
                                            <span class="navi-text">Orders</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi navi-border">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-analytics"></i>
                                                    </span>
                                                    <span class="navi-text">Messages</span>
                                                    <span class="navi-label">
                                                        <span class="label label-danger label-rounded">2</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-pie-chart-2"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-box-1"></i>
                                                    </span>
                                                    <span class="navi-text">Tasks</span>
                                                    <span class="navi-label">
                                                        <span class="label label-warning label-rounded">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-file"></i>
                                                    </span>
                                                    <span class="navi-text">Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-border"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-analytics"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Messages&lt;/span&gt;
                                    &lt;span class="label label-danger label-rounded"&gt;2&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-pie-chart-2"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-box-1"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-icon"&gt;&lt;i class="flaticon2-file"&gt;&lt;/i&gt;&lt;/span&gt;
                                    &lt;span class="navi-text"&gt;Orders&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Custom Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example example-basic">
                            <p>Use Bootstrap and Metronic utilities to have custom navigation.</p>
                            <div class="example-preview">
                                <ul class="navi navi-accent navi-hover navi-bold">
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-text font-size-lg">Messages</span>
                                            <span class="label label-danger label-rounded">2</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link active" href="#">
                                            <span class="navi-text font-size-lg">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-text font-size-lg">Tasks</span>
                                            <span class="label label-warning label-rounded">5</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link" href="#">
                                            <span class="navi-text font-weight-bold font-size-lg">Orders</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="separator separator-dashed mt-4 mb-8"></div>
                                <div class="dropdown">
                                    <a href="#" class="btn btn-light-primary font-weight-bold dropdown-toggle"
                                        data-toggle="dropdown">Dropdown example</a>
                                    <div class="dropdown-menu dropdown-menu-md py-5">
                                        <ul class="navi navi-accent navi-hover navi-bold">
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-text font-size-lg">Messages</span>
                                                    <span class="label label-danger label-rounded">2</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link active" href="#">
                                                    <span class="navi-text font-size-lg">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-text font-size-lg">Tasks</span>
                                                    <span class="label label-warning label-rounded">5</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a class="navi-link" href="#">
                                                    <span class="navi-text font-weight-bold font-size-lg">Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Example-->
                        <!--begin::Code example-->
                        <div class="example example-compact mt-5">
                            <div class="example-tools">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
                        &lt;ul class="navi navi-accent navi-hover navi-bold"&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-text font-size-lg"&gt;Messages&lt;/span&gt;
                                    &lt;span class="label label-danger label-rounded"&gt;2&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link active" href="#"&gt;
                                    &lt;span class="navi-text font-size-lg"&gt;Settings&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-text font-size-lg"&gt;Tasks&lt;/span&gt;
                                    &lt;span class="label label-warning label-rounded"&gt;5&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class="navi-item"&gt;
                                &lt;a class="navi-link" href="#"&gt;
                                    &lt;span class="navi-text font-weight-bold font-size-lg"&gt;Orders&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                        <!--end::Code example-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
