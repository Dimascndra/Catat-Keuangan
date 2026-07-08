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
            <div class="col-lg-12 col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Default Example</h3>
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
                            <div class="form-group m-0">
                                <label>Choose Delivery Tipe:</label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="option">
                                            <span class="option-control">
                                                <span class="radio">
                                                    <input type="radio" name="m_option_1" value="1"
                                                        checked="checked" />
                                                    <span></span>
                                                </span>
                                            </span>
                                            <span class="option-label">
                                                <span class="option-head">
                                                    <span class="option-title">Standard Delivery</span>
                                                    <span class="option-focus">Free</span>
                                                </span>
                                                <span class="option-body">Estimated 14-20 Day Shipping (Duties and taxes may
                                                    be due upon delivery)</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="option">
                                            <span class="option-control">
                                                <span class="radio">
                                                    <input type="radio" name="m_option_1" value="1" />
                                                    <span></span>
                                                </span>
                                            </span>
                                            <span class="option-label">
                                                <span class="option-head">
                                                    <span class="option-title">Fast Delivery</span>
                                                    <span class="option-focus">$&#160;8.00</span>
                                                </span>
                                                <span class="option-body">Estimated 2-5 Day Shipping (Duties and taxes may
                                                    be due upon delivery)</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-8"></div>
                            <div class="form-group">
                                <label>Membership:</label>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="option option-plain">
                                            <span class="option-control">
                                                <span class="radio">
                                                    <input type="radio" name="m_option_1" value="1"
                                                        checked="checked" />
                                                    <span></span>
                                                </span>
                                            </span>
                                            <span class="option-label">
                                                <span class="option-head">
                                                    <span class="option-title">Premium Partner</span>
                                                </span>
                                                <span class="option-body">30 days free trial and lifetime free
                                                    updates</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="option option option-plain">
                                            <span class="option-control">
                                                <span class="radio">
                                                    <input type="radio" name="m_option_1" value="1"
                                                        checked="checked" />
                                                    <span></span>
                                                </span>
                                            </span>
                                            <span class="option-label">
                                                <span class="option-head">
                                                    <span class="option-title">Free Membership</span>
                                                </span>
                                                <span class="option-body">24/7 support and Lifetime access</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Code example-->
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
       &lt;form class="form"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="form-group m-0"&gt;
          &lt;label&gt;Choose Delivery Tipe:&lt;/label&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label class="option"&gt;
             &lt;span class="option-control"&gt;
              &lt;span class="radio"&gt;
               &lt;input type="radio" name="m_option_1" value="1" checked="checked"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/span&gt;
             &lt;/span&gt;
             &lt;span class="option-label"&gt;
              &lt;span class="option-head"&gt;
               &lt;span class="option-title"&gt;
                Standard Delivery
               &lt;/span&gt;
               &lt;span class="option-focus"&gt;
                Free
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-body"&gt;
               Estimated 14-20 Day Shipping
               (Duties and taxes may be due
               upon delivery)
              &lt;/span&gt;
             &lt;/span&gt;
            &lt;/label&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label class="option"&gt;
             &lt;span class="option-control"&gt;
              &lt;span class="radio"&gt;
               &lt;input type="radio" name="m_option_1" value="1"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/span&gt;
             &lt;/span&gt;
             &lt;span class="option-label"&gt;
              &lt;span class="option-head"&gt;
               &lt;span class="option-title"&gt;
                Fast Delivery
               &lt;/span&gt;
               &lt;span class="option-focus"&gt;
                $&amp;nbsp;8.00
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-body"&gt;
               Estimated 2-5 Day Shipping
               (Duties and taxes may be due
               upon delivery)
              &lt;/span&gt;
             &lt;/span&gt;
            &lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="separator separator-dashed my-8"&gt;&lt;/div&gt;

         &lt;div class="form-group"&gt;
          &lt;label&gt;Membership:&lt;/label&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label class="option option-plain"&gt;
             &lt;span class="option-control"&gt;
              &lt;span class="radio"&gt;
               &lt;input type="radio" name="m_option_1" value="1" checked="checked"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/span&gt;
             &lt;/span&gt;
             &lt;span class="option-label"&gt;
              &lt;span class="option-head"&gt;
               &lt;span class="option-title"&gt;
                Premium Partner
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-body"&gt;
               30 days free trial and lifetime free updates
              &lt;/span&gt;
             &lt;/span&gt;
            &lt;/label&gt;
           &lt;/div&gt;
           &lt;div class="col-lg-6"&gt;
            &lt;label class="option option option-plain"&gt;
             &lt;span class="option-control"&gt;
              &lt;span class="radio"&gt;
               &lt;input type="radio" name="m_option_1" value="1" checked="checked"/&gt;
               &lt;span&gt;&lt;/span&gt;
              &lt;/span&gt;
             &lt;/span&gt;
             &lt;span class="option-label"&gt;
              &lt;span class="option-head"&gt;
               &lt;span class="option-title"&gt;
                Free Membership
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-body"&gt;
               24/7 support and Lifetime access
              &lt;/span&gt;
             &lt;/span&gt;
            &lt;/label&gt;
           &lt;/div&gt;
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
                            <!--end::Code example-->
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
            <div class="col-lg-12 col-xl-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form Example</h3>
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
                            <div class="form-group row m-0">
                                <label class="col-lg-2 col-form-label">Delivery:</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="option">
                                                <span class="option-control">
                                                    <span class="radio radio-bold radio-brand">
                                                        <input type="radio" name="m_option_1" value="1" />
                                                        <span></span>
                                                    </span>
                                                </span>
                                                <span class="option-label">
                                                    <span class="option-head">
                                                        <span class="option-title">Standard Delivery</span>
                                                        <span class="option-focus">Free</span>
                                                    </span>
                                                    <span class="option-body">Estimated 14-20 Day Shipping (Duties and
                                                        taxes may be due)</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="option">
                                                <span class="option-control">
                                                    <span class="radio radio-bold radio-brand">
                                                        <input type="radio" name="m_option_1" value="1" />
                                                        <span></span>
                                                    </span>
                                                </span>
                                                <span class="option-label">
                                                    <span class="option-head">
                                                        <span class="option-title">Fast Delivery</span>
                                                        <span class="option-focus">$&#160;8.00</span>
                                                    </span>
                                                    <span class="option-body">Estimated 2-5 Day Shipping (Duties and taxes
                                                        may be due)</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-8"></div>
                            <div class="form-group row m-0">
                                <label class="col-lg-2 col-form-label">Full Name:</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="option option-plain">
                                                <span class="option-control">
                                                    <span class="radio radio-brand">
                                                        <input type="radio" name="m_option_1" value="1" />
                                                        <span></span>
                                                    </span>
                                                </span>
                                                <span class="option-label">
                                                    <span class="option-head">
                                                        <span class="option-title">Premium Partner</span>
                                                    </span>
                                                    <span class="option-body">30 days free trial and lifetime free
                                                        updates</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="option option-plain">
                                                <span class="option-control">
                                                    <span class="radio radio-brand">
                                                        <input type="radio" name="m_option_1" value="1"
                                                            checked="checked" />
                                                        <span></span>
                                                    </span>
                                                </span>
                                                <span class="option-label">
                                                    <span class="option-head">
                                                        <span class="option-title">Free Membership</span>
                                                    </span>
                                                    <span class="option-body">24/7 support and Lifetime access</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Code example-->
                            <div class="example-code">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
       &lt;form class="form"&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="form-group row m-0"&gt;
          &lt;label class="col-lg-2 col-form-label"&gt;Delivery:&lt;/label&gt;
          &lt;div class="col-lg-10"&gt;
           &lt;div class="row"&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;label class="option"&gt;
              &lt;span class="option-control"&gt;
               &lt;span class="radio radio-bold radio-brand" checked="checked"/&gt;
                &lt;input type="radio" name="m_option_1" value="1"/&gt;
                &lt;span&gt;&lt;/span&gt;
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-label"&gt;
               &lt;span class="option-head"&gt;
                &lt;span class="option-title"&gt;
                 Standard Delivery
                &lt;/span&gt;
                &lt;span class="option-focus"&gt;
                 Free
                &lt;/span&gt;
               &lt;/span&gt;
               &lt;span class="option-body"&gt;
                Estimated 14-20 Day Shipping
                (Duties and taxes may be due)
               &lt;/span&gt;
              &lt;/span&gt;
             &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;label class="option"&gt;
              &lt;span class="option-control"&gt;
               &lt;span class="radio radio-bold radio-brand"&gt;
                &lt;input type="radio" name="m_option_1" value="1"/&gt;
                &lt;span&gt;&lt;/span&gt;
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-label"&gt;
               &lt;span class="option-head"&gt;
                &lt;span class="option-title"&gt;
                 Fast Delivery
                &lt;/span&gt;
                &lt;span class="option-focus"&gt;
                 $&amp;nbsp;8.00
                &lt;/span&gt;
               &lt;/span&gt;
               &lt;span class="option-body"&gt;
                Estimated 2-5 Day Shipping
                (Duties and taxes may be due)
               &lt;/span&gt;
              &lt;/span&gt;
             &lt;/label&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="separator separator-dashed my-8"&gt;&lt;/div&gt;

         &lt;div class="form-group row m-0"&gt;
          &lt;label class="col-lg-2 col-form-label"&gt;Full Name:&lt;/label&gt;
          &lt;div class="col-lg-10"&gt;
           &lt;div class="row"&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;label class="option option-plain"&gt;
              &lt;span class="option-control"&gt;
               &lt;span class="radio radio-brand"&gt;
                &lt;input type="radio" name="m_option_1" value="1"/&gt;
                &lt;span&gt;&lt;/span&gt;
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-label"&gt;
               &lt;span class="option-head"&gt;
                &lt;span class="option-title"&gt;
                 Premium Partner
                &lt;/span&gt;
               &lt;/span&gt;
               &lt;span class="option-body"&gt;
                30 days free trial and lifetime free updates
               &lt;/span&gt;
              &lt;/span&gt;
             &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-6"&gt;
             &lt;label class="option option-plain"&gt;
              &lt;span class="option-control"&gt;
               &lt;span class="radio radio-brand"&gt;
                &lt;input type="radio" name="m_option_1" value="1" checked="checked"/&gt;
                &lt;span&gt;&lt;/span&gt;
               &lt;/span&gt;
              &lt;/span&gt;
              &lt;span class="option-label"&gt;
               &lt;span class="option-head"&gt;
                &lt;span class="option-title"&gt;
                 Free Membership
                &lt;/span&gt;
               &lt;/span&gt;
               &lt;span class="option-body"&gt;
                24/7 support and Lifetime access
               &lt;/span&gt;
              &lt;/span&gt;
             &lt;/label&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="card-footer"&gt;
         &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
         &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
        &lt;/div&gt;
       &lt;/form&gt;
                  </code>
</pre>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-success mr-2">Kirim</button>
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
