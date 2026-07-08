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
                Layouts
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
                        <h3 class="card-title">Default Action Bar</h3>
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
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group mb-0">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-0"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
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
                        <h3 class="card-title">Right Action Bar</h3>
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
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group mb-0">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html_2">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html_2" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-0"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer text-right"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer text-right">
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
                        <h3 class="card-title">Multiple Buttons</h3>
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
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group mb-0">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html_3">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html_3" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-0"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col text-left"&gt;
            &lt;button type="reset" class="btn btn-primary  mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
           &lt;div class="col text-right"&gt;
            &lt;button type="reset" class="btn btn-danger"&gt;Delete&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                </div>
                                <div class="col text-right">
                                    <button type="reset" class="btn btn-danger">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Action Button &amp; Link</h3>
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
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group mb-0">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html_4">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html_4" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-0"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer text-right"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;span class="ml-2"&gt;or &lt;a href="#" class="font-weight-bold ml-2"&gt;Cancel&lt;/a&gt;&lt;/span&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer text-right">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <span class="ml-2">or
                                <a href="#" class="font-weight-bold ml-2">Batal</a></span>
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
                        <h3 class="card-title">Aside Space</h3>
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
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group mb-0">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html_5">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html_5" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-0"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col text-left"&gt;
            &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
           &lt;div class="col text-right"&gt;
            &lt;button type="reset" class="btn btn-danger"&gt;Delete&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-left">
                                    <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                </div>
                                <div class="col text-right">
                                    <button type="reset" class="btn btn-danger">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Solid Bar</h3>
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
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group mb-0">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html_6">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html_6" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-0"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer text-right bg-gray-100 border-top-0"&gt;
          &lt;button type="reset" class="btn btn-primary"&gt;Submit&lt;/button&gt;
          &lt;span class="mx-2"&gt;or&lt;/span&gt;
          &lt;a href="#" class="btn btn-link btn-link-primary"&gt;Cancel&lt;/a&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer text-right bg-gray-100 border-top-0">
                            <button type="reset" class="btn btn-primary">Kirim</button>
                            <span class="mx-2">or</span>
                            <a href="#" class="btn btn-link btn-link-primary">Batal</a>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header border-bottom-0">
                        <h3 class="card-title">Top &amp; Bottom Aksi Bars</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-footer bg-gray-100 border-top-0">
                            <div class="row align-items-center">
                                <div class="col text-left">Top Aksi:</div>
                                <div class="col text-right">
                                    <button type="reset" class="btn btn-primary font-weight-bold mr-2">Kirim</button>
                                    <button type="reset" class="btn btn-light-primary font-weight-bold">Batal</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group mb-0">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html_7">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html_7" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-footer bg-gray-100 border-top-0"&gt;
          &lt;div class="row align-items-center"&gt;
           &lt;div class="col text-left"&gt;
            Top Aksi:
           &lt;/div&gt;
           &lt;div class="col text-right"&gt;
            &lt;button type="reset" class="btn btn-primary font-weight-bold mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-light-primary font-weight-bold"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Full Name:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-0"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Phone
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer bg-gray-100 border-top-0 text-right"&gt;
          &lt;button type="reset" class="btn btn-primary font-weight-bold mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-light-primary font-weight-bold"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer bg-gray-100 border-top-0 text-right">
                            <button type="reset" class="btn btn-primary font-weight-bold mr-2">Kirim</button>
                            <button type="reset" class="btn btn-light-primary font-weight-bold">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form Layout</h3>
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
                            <div class="form-group row mt-4">
                                <label class="col-3 col-form-label">Full Name:</label>
                                <div class="col-9">
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Email address:</label>
                                <div class="col-9">
                                    <input type="email" class="form-control" placeholder="Enter email" />
                                    <span class="form-text text-muted">We'll never share your email with anyone else</span>
                                </div>
                            </div>
                            <div class="form-group row align-items-center mb-1">
                                <label class="col-3 col-form-label">Communication:</label>
                                <div class="col-9">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" />
                                            <span></span>Email</label>
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" />
                                            <span></span>SMS</label>
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" />
                                            <span></span>Phone</label>
                                    </div>
                                </div>
                            </div>
                            <!-- begin: Example Code-->
                            <div class="example-code mt-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html_8">HTML</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html_8" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row mt-4"&gt;
           &lt;label  class="col-3 col-form-label"&gt;Full Name:&lt;/label&gt;
           &lt;div class="col-9"&gt;
            &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label  class="col-3 col-form-label"&gt;Email address:&lt;/label&gt;
           &lt;div class="col-9"&gt;
            &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
            &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row mb-1"&gt;
           &lt;label  class="col-3 col-form-label"&gt;Communication:&lt;/label&gt;
           &lt;div class="col-9"&gt;
            &lt;div class="checkbox-inline"&gt;
             &lt;label class="checkbox checkbox-outline"&gt;
              &lt;input type="checkbox"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Email
             &lt;/label&gt;
             &lt;label class="checkbox checkbox-outline"&gt;
              &lt;input type="checkbox"/&gt;
              &lt;span&gt;&lt;/span&gt;
              SMS
             &lt;/label&gt;
             &lt;label class="checkbox checkbox-outline"&gt;
              &lt;input type="checkbox"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Phone
             &lt;/label&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-3"&gt;

           &lt;/div&gt;
           &lt;div class="col-9"&gt;
            &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-9">
                                    <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                </div>
                            </div>
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
