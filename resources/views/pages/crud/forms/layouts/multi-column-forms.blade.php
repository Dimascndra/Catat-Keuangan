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
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">2 Columns Form Layout</h3>
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
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Full Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Contact Number:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number" />
                                    <span class="form-text text-muted">Please enter your contact number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Address:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your address" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-map-marker"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Postcode:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your postcode" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-bookmark-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>User Group:</label>
                                    <div class="radio-inline">
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" checked="checked" value="2" />
                                            <span></span>Sales Person</label>
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" value="2" />
                                            <span></span>Customer</label>
                                    </div>
                                    <span class="form-text text-muted">Please select user group</span>
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
          &lt;div class="form-group row"&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label&gt;Full Name:&lt;/label&gt;
            &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label&gt;Contact Number:&lt;/label&gt;
            &lt;input type="email" class="form-control" placeholder="Enter contact number"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your contact number&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label&gt;Address:&lt;/label&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your address"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-map-marker"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your address&lt;/span&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label&gt;Postcode:&lt;/label&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your postcode"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-bookmark-o"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your postcode&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label&gt;User Group:&lt;/label&gt;
            &lt;div class="radio-inline"&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" checked="checked" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Sales Person
             &lt;/label&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Customer
             &lt;/label&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please select user group&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;button type="reset" class="btn btn-primary mr-2"&gt;Save&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-6 text-right"&gt;
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
                                <div class="col-lg-6">
                                    <button type="reset" class="btn btn-primary mr-2">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                </div>
                                <div class="col-lg-6 text-right">
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
                        <h3 class="card-title">2 Columns Horizontal Form Layout</h3>
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
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">Full Name:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <label class="col-lg-2 col-form-label text-right">Contact Number:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter contact number" />
                                    <span class="form-text text-muted">Please enter your contact number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">Address:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your address" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-map-marker"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                                <label class="col-lg-2 col-form-label text-right">Postcode:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your postcode" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-bookmark-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">Group:</label>
                                <div class="col-lg-3">
                                    <div class="radio-inline">
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" checked="checked" value="2" />
                                            <span></span>Sales Person</label>
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" value="2" />
                                            <span></span>Customer</label>
                                    </div>
                                    <span class="form-text text-muted">Please select user group</span>
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
          &lt;div class="form-group row"&gt;
           &lt;label class="col-lg-2 col-form-label text-right"&gt;Full Name:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
           &lt;/div&gt;
           &lt;label class="col-lg-2 col-form-label text-right"&gt;Contact Number:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;input type="email" class="form-control" placeholder="Enter contact number"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your contact number&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-lg-2 col-form-label text-right"&gt;Address:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your address"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-map-marker"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your address&lt;/span&gt;
           &lt;/div&gt;
           &lt;label class="col-lg-2 col-form-label text-right"&gt;Postcode:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your postcode"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-bookmark-o"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your postcode&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-lg-2 col-form-label text-right"&gt;Group:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="radio-inline"&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" checked="checked" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Sales Person
             &lt;/label&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Customer
             &lt;/label&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please select user group&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-2"&gt;&lt;/div&gt;
           &lt;div class="col-lg-10"&gt;
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
                            <!-- end: Example Code-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-10">
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
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">3 Columns Form Layout</h3>
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
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Full Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" />
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Username:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                    <span class="form-text text-muted">Please enter your username</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Contact:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number" />
                                    <span class="form-text text-muted">Please enter your contact</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Fax:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-info-circle"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Fax number" />
                                    </div>
                                    <span class="form-text text-muted">Please enter fax</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Address:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your address" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-map-marker"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Postcode:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-bookmark-o"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter your postcode" />
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>User Group:</label>
                                    <div class="radio-inline">
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" checked="checked" value="2" />
                                            <span></span>Sales Person</label>
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" value="2" />
                                            <span></span>Customer</label>
                                    </div>
                                    <span class="form-text text-muted">Please select user group</span>
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
          &lt;div class="form-group row"&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;Full Name:&lt;/label&gt;
            &lt;input type="email" class="form-control" placeholder="Enter full name"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;Email:&lt;/label&gt;
            &lt;input type="email" class="form-control" placeholder="Enter email"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your email&lt;/span&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;Username:&lt;/label&gt;
            &lt;div class="input-group"&gt;
             &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-user"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
             &lt;input type="text" class="form-control" placeholder=""/&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your username&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;Contact:&lt;/label&gt;
            &lt;input type="email" class="form-control" placeholder="Enter contact number"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your contact&lt;/span&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;Fax:&lt;/label&gt;
            &lt;div class="input-group"&gt;
             &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-info-circle"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
             &lt;input type="text" class="form-control" placeholder="Fax number"/&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter fax&lt;/span&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;Address:&lt;/label&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your address"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-map-marker"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your address&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;Postcode:&lt;/label&gt;
            &lt;div class="input-group"&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-bookmark-o"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your postcode"/&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your postcode&lt;/span&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-4"&gt;
            &lt;label&gt;User Group:&lt;/label&gt;
            &lt;div class="radio-inline"&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" checked="checked" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Sales Person
             &lt;/label&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Customer
             &lt;/label&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please select user group&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-4"&gt;&lt;/div&gt;
           &lt;div class="col-lg-8"&gt;
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
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <button type="reset" class="btn btn-primary mr-2">Kirim</button>
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
                        <h3 class="card-title">3 Columns Horizontal Form Layout</h3>
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
                            <div class="form-group row mt-3">
                                <label class="col-lg-1 col-form-label text-right">Full Name:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Full name" />
                                    <span class="form-text text-muted">Please enter your full name</span>
                                </div>
                                <label class="col-lg-1 col-form-label text-right">Email:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Email" />
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                                <label class="col-lg-1 col-form-label text-right">Username:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                    <span class="form-text text-muted">Please enter your username</span>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-lg-1 col-form-label text-right">Contact:</label>
                                <div class="col-lg-3">
                                    <input type="email" class="form-control" placeholder="Enter contact number" />
                                    <span class="form-text text-muted">Please enter your contact</span>
                                </div>
                                <label class="col-lg-1 col-form-label text-right">Fax:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Fax number" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-info-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter fax</span>
                                </div>
                                <label class="col-lg-1 col-form-label text-right">Address:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your address" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-map-marker"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-lg-1 col-form-label text-right">Postcode:</label>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your postcode" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-bookmark-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your postcode</span>
                                </div>
                                <label class="col-lg-1 col-form-label text-right">User Group:</label>
                                <div class="col-lg-3">
                                    <div class="radio-inline">
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" checked="checked" value="2" />
                                            <span></span>Sales Person</label>
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" value="2" />
                                            <span></span>Customer</label>
                                    </div>
                                    <span class="form-text text-muted">Please select user group</span>
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
          &lt;div class="form-group row mt-3"&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;Full Name:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;input type="email" class="form-control" placeholder="Full name"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your full name&lt;/span&gt;
           &lt;/div&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;Email:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;input type="email" class="form-control" placeholder="Email"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your email&lt;/span&gt;
           &lt;/div&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;Username:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="input-group"&gt;
             &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-user"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
             &lt;input type="text" class="form-control" placeholder=""/&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your username&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row"&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;Contact:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;input type="email" class="form-control" placeholder="Enter contact number"/&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your contact&lt;/span&gt;
           &lt;/div&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;Fax:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Fax number"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-info-circle"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter fax&lt;/span&gt;
           &lt;/div&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;Address:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your address"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-map-marker"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your address&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

          &lt;div class="form-group row"&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;Postcode:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="input-group"&gt;
             &lt;input type="text" class="form-control" placeholder="Enter your postcode"/&gt;
             &lt;div class="input-group-append"&gt;&lt;span class="input-group-text"&gt;&lt;i class="la la-bookmark-o"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please enter your postcode&lt;/span&gt;
           &lt;/div&gt;
           &lt;label class="col-lg-1 col-form-label text-right"&gt;User Group:&lt;/label&gt;
           &lt;div class="col-lg-3"&gt;
            &lt;div class="radio-inline"&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" checked="checked" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Sales Person
             &lt;/label&gt;
             &lt;label class="radio radio-solid"&gt;
              &lt;input type="radio" name="example_2" value="2"/&gt;
              &lt;span&gt;&lt;/span&gt;
              Customer
             &lt;/label&gt;
            &lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Please select user group&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-5"&gt;&lt;/div&gt;
           &lt;div class="col-lg-7"&gt;
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
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
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
