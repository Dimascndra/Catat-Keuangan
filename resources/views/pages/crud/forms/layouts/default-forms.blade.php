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
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Basic Form Layout</h3>
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
                                <input type="email" class="form-control form-control-solid"
                                    placeholder="Enter full name" />
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control form-control-solid" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="form-group">
                                <label>Subscription</label>
                                <div class="input-group input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control form-control-solid" placeholder="99.9" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!--begin: Code-->
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
           &lt;input type="email" class="form-control form-control-solid" placeholder="Enter full name"/&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control form-control-solid" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Subscription&lt;/label&gt;
           &lt;div class="input-group input-group-lg"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text" &gt;$&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control form-control-solid" placeholder="99.9"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
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
                        <h3 class="card-title">Section Separator</h3>
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
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group">
                                <label>Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" />
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group">
                                <label>Subscription</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="99.9" />
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group">
                                <label>Communication:</label>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Email</label>
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>SMS</label>
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Phone</label>
                                </div>
                            </div>
                            <!--begin: Code-->
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

          &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address:&lt;/label&gt;
           &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

          &lt;div class="form-group"&gt;
           &lt;label&gt;Subscription&lt;/label&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text" &gt;$&lt;/span&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" placeholder="99.9"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-5"&gt;&lt;/div&gt;

          &lt;div class="form-group"&gt;
           &lt;label&gt;Communication:&lt;/label&gt;
           &lt;div class="checkbox-list"&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Email
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
             &lt;input type="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
             SMS
            &lt;/label&gt;
            &lt;label class="checkbox"&gt;
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
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
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
                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Full Name:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter full name" />
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Email address:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter email" />
                                        <span class="form-text text-muted">We'll never share your email with anyone
                                            else</span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
                            <div class="mb-3">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Holder:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter full name" />
                                        <span class="form-text text-muted">Please enter your account holder</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Contact</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-chain"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Phone number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-3 col-form-label">Communication:</label>
                                    <div class="col-lg-6">
                                        <div class="checkbox-inline">
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>Email</label>
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>SMS</label>
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>Phone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
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
          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;1. Customer Info:&lt;/h3&gt;
          &lt;div class="mb-15"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Full Name:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Email address:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
             &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;2. Customer Account:&lt;/h3&gt;
          &lt;div class="mb-3"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Holder:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your account holder&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Contact&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="input-group"&gt;
              &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-chain"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
              &lt;input type="text" class="form-control" placeholder="Phone number"/&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row align-items-center"&gt;
            &lt;label class="col-lg-3 col-form-label"&gt;Communication:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="checkbox-inline"&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Email
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               SMS
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Phone
              &lt;/label&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-3"&gt;&lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
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
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="reset" class="btn btn-success mr-2">Kirim</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
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
                        <h3 class="card-title">Form Label Aligment</h3>
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
                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-right">Full Name:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter full name" />
                                        <span class="form-text text-muted">Please enter your full name</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-right">Email address:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter email" />
                                        <span class="form-text text-muted">We'll never share your email with anyone
                                            else</span>
                                    </div>
                                </div>
                            </div>
                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
                            <div class="mb-3">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-right">Holder:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter full name" />
                                        <span class="form-text text-muted">Please enter your account holder</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-right">Contact</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-chain"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Phone number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-3 col-form-label text-right">Communication:</label>
                                    <div class="col-lg-6">
                                        <div class="checkbox-inline">
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>Email</label>
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>SMS</label>
                                            <label class="checkbox">
                                                <input type="checkbox" />
                                                <span></span>Phone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin: Code-->
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
          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;1. Customer Info:&lt;/h3&gt;
          &lt;div class="mb-15"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Full Name:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Email address:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
             &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;h3 class="font-size-lg text-dark font-weight-bold mb-6"&gt;2. Customer Account:&lt;/h3&gt;
          &lt;div class="mb-3"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Holder:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
             &lt;span class="form-text text-muted"&gt;Please enter your account holder&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-lg-3 col-form-label text-right"&gt;Contact&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="input-group"&gt;
              &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-chain"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
              &lt;input type="text" class="form-control" placeholder="Phone number"/&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row align-items-center"&gt;
            &lt;label class="col-lg-3 col-form-label  text-right"&gt;Communication:&lt;/label&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;div class="checkbox-inline"&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Email
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               SMS
              &lt;/label&gt;
              &lt;label class="checkbox"&gt;
               &lt;input type="checkbox"/&gt;
               &lt;span&gt;&lt;/span&gt;
               Phone
              &lt;/label&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;

         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-3"&gt;&lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
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
                            <!--end: Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="reset" class="btn btn-success mr-2">Kirim</button>
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
