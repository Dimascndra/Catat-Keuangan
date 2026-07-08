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
                Validation
            @endslot
        @endslot
    @endcomponent
@endsection
@section('content')
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
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
            <div class="alert-text">Metronic fully integrates FormValidation, the best Premium From Validation Library for
                JavaScript. Zero dependencies!
                <br />For more info please visit
                <a class="font-weight-bold" href="https://formvalidation.io/" target="_blank">FormValidation Home</a>
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Basic Validation</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="kt_form_1">
                        <div class="card-body">
                            <!--begin: Code-->
                            <div class="example-code mb-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form" id="kt_form_1"&gt;
         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Email *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;input type="text" class="form-control" name="email" placeholder="Enter your email"/&gt;
           &lt;span class="form-text text-muted"&gt;We\ll never share your email with anyone else.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;URL *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;
              &lt;i class="flaticon2-website"&gt;&lt;/i&gt;
             &lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" name="url" placeholder="Enter your url"/&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your website URL.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Digits&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text"&gt;&lt;i class="flaticon2-browser"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" name="digits" placeholder="Enter digits"/&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Please enter only digits&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Credit Card&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text" &gt;&lt;i class="flaticon-price-tag"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" name="creditcard" placeholder="Enter card number"/&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your credit card number&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;US Phone&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;div class="input-group"&gt;
            &lt;div class="input-group-prepend"&gt;
             &lt;span class="input-group-text" &gt;&lt;i class="flaticon2-phone"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type="text" class="form-control" name="phone" placeholder="Enter phone"/&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Please enter your US phone number&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Option *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;select class="form-control" name="option"&gt;
            &lt;option value=""&gt;Select&lt;/option&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
           &lt;span class="form-text text-muted"&gt;Please select an option.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Options *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;select class="form-control" name="options" multiple size="7"&gt;
            &lt;option&gt;Option 1&lt;/option&gt;
            &lt;option&gt;Option 2&lt;/option&gt;
            &lt;option&gt;Option 3&lt;/option&gt;
            &lt;option&gt;Option 4&lt;/option&gt;
            &lt;option&gt;Option 5&lt;/option&gt;
            &lt;option&gt;Option 6&lt;/option&gt;
            &lt;option&gt;Option 7&lt;/option&gt;
           &lt;/select&gt;
           &lt;span class="form-text text-muted"&gt;Please select at least 2 or maximum 5 options&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Memo *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;textarea class="form-control" name="memo" placeholder="Enter a menu" rows="3"&gt;&lt;/textarea&gt;
           &lt;span class="form-text text-muted"&gt;Please enter a menu within text length range 50 and 100.&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Checkbox *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;div class="form-check checkbox-inline"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox" name="checkbox"/&gt;
             &lt;span&gt;&lt;/span&gt;
            &lt;/label&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Please tick the checkbox&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Checkboxes *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;div class="form-check checkbox-list"&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox" name="checkboxes"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Option 1
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox" name="checkboxes"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Option 2
            &lt;/label&gt;
            &lt;label class="checkbox checkbox-outline"&gt;
             &lt;input type="checkbox" name="checkboxes"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Option 3
            &lt;/label&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Please select at lease 1 and maximum 2 options&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="form-group row"&gt;
          &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Radios *&lt;/label&gt;
          &lt;div class="col-lg-9 col-md-9 col-sm-12"&gt;
           &lt;div class="form-check radio-inline"&gt;
            &lt;label class="radio radio-outline"&gt;
             &lt;input type="checkbox" name="radios"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Option 1
            &lt;/label&gt;
            &lt;label class="radio radio-outline"&gt;
             &lt;input type="checkbox" name="radios"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Option 2
            &lt;/label&gt;
            &lt;label class="radio radio-outline"&gt;
             &lt;input type="radio" name="radios"/&gt;
             &lt;span&gt;&lt;/span&gt;
             Option 3
            &lt;/label&gt;
           &lt;/div&gt;
           &lt;span class="form-text text-muted"&gt;Please select an option&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="row"&gt;
          &lt;div class="col-lg-9 ml-lg-auto"&gt;
           &lt;button type="submit" class="btn btn-primary font-weight-bold mr-2"&gt;Validate&lt;/button&gt;
           &lt;button type="reset" class="btn btn-light-primary font-weight-bold"&gt;Cancel&lt;/button&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="example_code_js">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-js">
        FormValidation.formValidation(
         document.getElementById('kt_form_1'),
         {
          fields: {
           email: {
            validators: {
             notEmpty: {
              message: 'Email is required'
             },
             emailAddress: {
              message: 'The value is not a valid email address'
             }
            }
           },

           url: {
            validators: {
             notEmpty: {
              message: 'Website URL is required'
             },
             uri: {
              message: 'The website address is not valid'
             }
            }
           },

           digits: {
            validators: {
             notEmpty: {
              message: 'Digits is required'
             },
             digits: {
              message: 'The velue is not a valid digits'
             }
            }
           },

           creditcard: {
            validators: {
             notEmpty: {
              message: 'Credit card number is required'
             },
             creditCard: {
              message: 'The credit card number is not valid'
             }
            }
           },

           phone: {
            validators: {
             notEmpty: {
              message: 'US phone number is required'
             },
             phone: {
              country: 'US',
              message: 'The value is not a valid US phone number'
             }
            }
           },

           option: {
            validators: {
             notEmpty: {
              message: 'Please select an option'
             }
            }
           },

           options: {
            validators: {
             choice: {
              min:2,
              max:5,
              message: 'Please select at least 2 and maximum 5 options'
             }
            }
           },

           memo: {
            validators: {
             notEmpty: {
              message: 'Please enter memo text'
             },
             stringLength: {
              min:50,
              max:100,
              message: 'Please enter a menu within text length range 50 and 100'
             }
            }
           },

           checkbox: {
            validators: {
             choice: {
              min:1,
              message: 'Please kindly check this'
             }
            }
           },

           checkboxes: {
            validators: {
             choice: {
              min:2,
              max:5,
              message: 'Please check at least 1 and maximum 2 options'
             }
            }
           },

           radios: {
            validators: {
             choice: {
              min:1,
              message: 'Please kindly check this'
             }
            }
           },
          },

          plugins: {
           trigger: new FormValidation.plugins.Trigger(),
           // Bootstrap Framework Integration
           bootstrap: new FormValidation.plugins.Bootstrap(),
           // Validate fields when clicking the Kirim button
           submitButton: new FormValidation.plugins.SubmitButton(),
                    // Kirim the form when all fields are valid
           defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
          }
         }
        );
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Code-->
                            <div class="alert alert-custom alert-light-danger d-none" role="alert" id="kt_form_1_msg">
                                <div class="alert-icon">
                                    <i class="flaticon2-information"></i>
                                </div>
                                <div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting
                                    again.</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span>
                                            <i class="ki ki-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Email *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter your email" />
                                    <span class="form-text text-muted">We'll never share your email with anyone
                                        else.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">URL *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="flaticon2-website"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="url"
                                            placeholder="Enter your url" />
                                    </div>
                                    <span class="form-text text-muted">Please enter your website URL.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Digits</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="flaticon2-browser"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="digits"
                                            placeholder="Enter digits" />
                                    </div>
                                    <span class="form-text text-muted">Please enter only digits</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Credit Card</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="flaticon-price-tag"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="creditcard"
                                            placeholder="Enter card number" />
                                    </div>
                                    <span class="form-text text-muted">Please enter your credit card number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">US Phone</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="flaticon2-phone"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="Enter phone" />
                                    </div>
                                    <span class="form-text text-muted">Please enter your US phone number</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Option *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control" name="option">
                                        <option value="">Select</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <span class="form-text text-muted">Please select an option.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Options *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control" name="options" multiple="multiple" size="7">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                        <option>Option 7</option>
                                    </select>
                                    <span class="form-text text-muted">Please select at least 2 or maximum 5 options</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Memo *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <textarea class="form-control" name="memo" placeholder="Enter a menu" rows="3"></textarea>
                                    <span class="form-text text-muted">Please enter a menu within text length range 50 and
                                        100.</span>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Checkbox *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="form-check pl-0 checkbox-inline">
                                        <label class="checkbox checkbox-outline">Tick me
                                            <input type="checkbox" name="checkbox" />
                                            <span></span></label>
                                    </div>
                                    <span class="form-text text-muted">Please tick the checkbox</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Checkboxes *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="form-check pl-0 checkbox-list">
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" name="checkboxes" />
                                            <span></span>Option 1</label>
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" name="checkboxes" />
                                            <span></span>Option 2</label>
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" name="checkboxes" />
                                            <span></span>Option 3</label>
                                    </div>
                                    <span class="form-text text-muted">Please select at lease 1 and maximum 2
                                        options</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Radios *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="form-check pl-0 radio-inline">
                                        <label class="radio radio-outline">
                                            <input type="checkbox" name="radios" />
                                            <span></span>Option 1</label>
                                        <label class="radio radio-outline">
                                            <input type="checkbox" name="radios" />
                                            <span></span>Option 2</label>
                                        <label class="radio radio-outline">
                                            <input type="radio" name="radios" />
                                            <span></span>Option 3</label>
                                    </div>
                                    <span class="form-text text-muted">Please select an option</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary font-weight-bold mr-2"
                                        name="submitButton">Validate</button>
                                    <button type="reset" class="btn btn-light-primary font-weight-bold">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6">
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Advanced Validation</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="kt_form_2">
                        <div class="card-body">
                            <div class="alert alert-custom alert-light-success d-none" role="alert" id="kt_form_2_msg">
                                <div class="alert-icon">
                                    <i class="flaticon2-bell-5"></i>
                                </div>
                                <div class="alert-text font-weight-bold">Oh snap! Change a few things up and try submitting
                                    again.</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span>
                                            <i class="ki ki-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <!--begin: Code-->
                            <div class="example-code mb-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html2">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_js2">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="example_code_html2" role="tabpanel">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-html">
        &lt;form class="form" id="kt_form_2"&gt;
         &lt;div class="mb-3"&gt;
          &lt;h3 class="font-size-lg text-dark-75 font-weight-bold mb-10"&gt;
           Billing Information:
          &lt;/h3&gt;
          &lt;div class="mb-2"&gt;
           &lt;div class="form-group row"&gt;
            &lt;div class="col-lg-12"&gt;
             &lt;label&gt;* Cardholder Name:&lt;/label&gt;
             &lt;input type="text" name="billing_card_name" class="form-control" placeholder="" value=""/&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;div class="col-lg-12"&gt;
             &lt;label&gt;* Card Number:&lt;/label&gt;
             &lt;input type="text" name="billing_card_number" class="form-control" placeholder="" value=""/&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;div class="col-lg-4"&gt;
             &lt;label&gt;* Exp Month:&lt;/label&gt;
             &lt;select class="form-control" name="billing_card_exp_month"&gt;
              &lt;option value=""&gt;Select&lt;/option&gt;
              &lt;option value="01"&gt;01&lt;/option&gt;
              &lt;option value="02"&gt;02&lt;/option&gt;
              &lt;option value="03"&gt;03&lt;/option&gt;
              &lt;option value="04"&gt;04&lt;/option&gt;
              &lt;option value="05"&gt;05&lt;/option&gt;
              &lt;option value="06"&gt;06&lt;/option&gt;
              &lt;option value="07"&gt;07&lt;/option&gt;
              &lt;option value="08"&gt;08&lt;/option&gt;
              &lt;option value="09"&gt;09&lt;/option&gt;
              &lt;option value="10"&gt;10&lt;/option&gt;
              &lt;option value="11"&gt;11&lt;/option&gt;
              &lt;option value="12"&gt;12&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
             &lt;label&gt;* Exp Year:&lt;/label&gt;
             &lt;select class="form-control" name="billing_card_exp_year"&gt;
              &lt;option value=""&gt;Select&lt;/option&gt;
              &lt;option value="2018"&gt;2018&lt;/option&gt;
              &lt;option value="2019"&gt;2019&lt;/option&gt;
              &lt;option value="2020"&gt;2020&lt;/option&gt;
              &lt;option value="2021"&gt;2021&lt;/option&gt;
              &lt;option value="2022"&gt;2022&lt;/option&gt;
              &lt;option value="2023"&gt;2023&lt;/option&gt;
              &lt;option value="2024"&gt;2024&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4"&gt;
             &lt;label&gt;* CVV:&lt;/label&gt;
             &lt;input type="number" class="form-control" name="billing_card_cvv" placeholder="" value=""/&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

         &lt;div class="mb-3"&gt;
          &lt;h3 class="font-size-lg text-dark-75 font-weight-bold mb-10"&gt;
           Billing Address
           &lt;i data-toggle="tooltip" data-width="auto" class="mb-3__help" title="If different than the corresponding address"&gt;&lt;/i&gt;
          &lt;/h3&gt;
          &lt;div class="mb-2"&gt;
           &lt;div class="form-group row"&gt;
            &lt;div class="col-lg-12"&gt;
             &lt;label&gt;* Address 1:&lt;/label&gt;
             &lt;input type="text" name="billing_address_1" class="form-control" placeholder="" value=""/&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;div class="col-lg-12"&gt;
             &lt;label&gt;Address 2:&lt;/label&gt;
             &lt;input type="text" name="billing_address_2" class="form-control" placeholder="" value=""/&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;div class="col-lg-5"&gt;
             &lt;label&gt;* City:&lt;/label&gt;
             &lt;input type="text" class="form-control" name="billing_city" placeholder="" value=""/&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-5"&gt;
             &lt;label&gt;* State:&lt;/label&gt;
             &lt;input type="text" class="form-control" name="billing_state" placeholder="" value=""/&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-2"&gt;
             &lt;label&gt;* ZIP:&lt;/label&gt;
             &lt;input type="text" class="form-control" name="billing_zip" placeholder="" value=""/&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="separator separator-dashed my-10"&gt;&lt;/div&gt;

         &lt;div class="mb-3"&gt;
          &lt;h3 class="font-size-lg text-dark-75 font-weight-bold mb-10"&gt;
           Delivery Tipe:
          &lt;/h3&gt;
          &lt;div class="mb-2"&gt;
           &lt;div class="form-group"&gt;
            &lt;div class="row"&gt;
             &lt;div class="col-lg-6"&gt;
              &lt;label class="option"&gt;
               &lt;span class="option-control"&gt;
                &lt;span class="radio radio-outline"&gt;
                 &lt;input type="radio" name="billing_delivery" value=""/&gt;
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
                &lt;span class="radio radio-outline"&gt;
                 &lt;input type="radio" name="billing_delivery" value=""/&gt;
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
            &lt;div class="form-check"&gt;&lt;/div&gt;
            &lt;div class="form-text text-muted"&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="mb-3"&gt;
          &lt;h3 class="font-size-lg text-dark-75 font-weight-bold mb-10"&gt;
           Select Package:
          &lt;/h3&gt;
          &lt;div class="mb-2"&gt;
           &lt;div class="form-group"&gt;
            &lt;div class="row"&gt;
             &lt;div class="col-lg-6"&gt;
              &lt;label class="option"&gt;
               &lt;span class="option-control"&gt;
                &lt;span class="radio"&gt;
                 &lt;input type="radio" name="package" value=""/&gt;
                 &lt;span&gt;&lt;/span&gt;
                &lt;/span&gt;
               &lt;/span&gt;
               &lt;span class="option-label"&gt;
                &lt;span class="option-head"&gt;
                 &lt;span class="option-title"&gt;
                  Standard Package
                 &lt;/span&gt;
                 &lt;span class="option-focus text-primary"&gt;
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
                 &lt;input type="radio" name="package" value=""/&gt;
                 &lt;span&gt;&lt;/span&gt;
                &lt;/span&gt;
               &lt;/span&gt;
               &lt;span class="option-label"&gt;
                &lt;span class="option-head"&gt;
                 &lt;span class="option-title"&gt;
                  Premium Package
                 &lt;/span&gt;
                 &lt;span class="option-focus text-primary"&gt;
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
            &lt;div class="form-check"&gt;&lt;/div&gt;
            &lt;div class="form-text text-muted"&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        </code>
</pre>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="example_code_js2">
                                        <div class="example-highlight">
                                            <pre style="height:400px">
<code class="language-js">
        FormValidation.formValidation(
         document.getElementById('kt_form_2'),
         {
          fields: {
           billing_card_name: {
            validators: {
             notEmpty: {
              message: 'Card Holder Name is required'
             }
            }
           },
           billing_card_number: {
            validators: {
             notEmpty: {
              message: 'Credit card number is required'
             },
             creditCard: {
              message: 'The credit card number is not valid'
             }
            }
           },
           billing_card_exp_month: {
            validators: {
             notEmpty: {
              message: 'Expiry Month is required'
             }
            }
           },
           billing_card_exp_year: {
            validators: {
             notEmpty: {
              message: 'Expiry Year is required'
             }
            }
           },
           billing_card_cvv: {
            validators: {
             notEmpty: {
              message: 'CVV is required'
             },
             digits: {
              message: 'The CVV velue is not a valid digits'
             }
            }
           },

           billing_address_1: {
            validators: {
             notEmpty: {
              message: 'Address 1 is required'
             }
            }
           },
           billing_city: {
            validators: {
             notEmpty: {
              message: 'City 1 is required'
             }
            }
           },
           billing_state: {
            validators: {
             notEmpty: {
              message: 'State 1 is required'
             }
            }
           },
           billing_zip: {
            validators: {
             notEmpty: {
              message: 'Zip Code is required'
             },
             zipCode: {
              country: 'US',
              message: 'The Zip Code value is invalid'
             }
            }
           },

           billing_delivery: {
            validators: {
             choice: {
              min:1,
              message: 'Please kindly select delivery type'
             }
            }
           },
           package: {
            validators: {
             choice: {
              min:1,
              message: 'Please kindly select package type'
             }
            }
           }
          },

          plugins: {
           trigger: new FormValidation.plugins.Trigger(),
           // Validate fields when clicking the Kirim button
           submitButton: new FormValidation.plugins.SubmitButton(),
           // Kirim the form when all fields are valid
           defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
           // Bootstrap Framework Integration
           bootstrap: new FormValidation.plugins.Bootstrap({
            eleInvalidClass: '',
            eleValidClass: '',
           })
          }
         }
        );
        </code>
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Code-->
                            <div class="mb-3">
                                <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">Billing Information:</h3>
                                <div class="mb-2">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>* Cardholder Name:</label>
                                            <input type="text" name="billing_card_name" class="form-control"
                                                placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>* Card Number:</label>
                                            <input type="text" name="billing_card_number" class="form-control"
                                                placeholder="" value="4111 1111 1111 1111" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>* Exp Month:</label>
                                            <select class="form-control" name="billing_card_exp_month">
                                                <option value="">Select</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>* Exp Year:</label>
                                            <select class="form-control" name="billing_card_exp_year">
                                                <option value="">Select</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>* CVV:</label>
                                            <input type="number" class="form-control" name="billing_card_cvv"
                                                placeholder="" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="mb-3">
                                <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">Billing Address
                                    <i data-toggle="tooltip" data-width="auto" class="mb-3__help"
                                        title="If different than the corresponding address"></i>
                                </h3>
                                <div class="mb-2">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>* Address 1:</label>
                                            <input type="text" name="billing_address_1" class="form-control"
                                                placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Address 2:</label>
                                            <input type="text" name="billing_address_2" class="form-control"
                                                placeholder="" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-5">
                                            <label>* City:</label>
                                            <input type="text" class="form-control" name="billing_city"
                                                placeholder="" value="" />
                                        </div>
                                        <div class="col-lg-5">
                                            <label>* State:</label>
                                            <input type="text" class="form-control" name="billing_state"
                                                placeholder="" value="" />
                                        </div>
                                        <div class="col-lg-2">
                                            <label>* ZIP:</label>
                                            <input type="text" class="form-control" name="billing_zip" placeholder=""
                                                value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="mb-3">
                                <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">Delivery Tipe:</h3>
                                <div class="mb-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="option">
                                                    <span class="option-control">
                                                        <span class="radio radio-outline">
                                                            <input type="radio" name="billing_delivery"
                                                                value="" />
                                                            <span></span>
                                                        </span>
                                                    </span>
                                                    <span class="option-label">
                                                        <span class="option-head">
                                                            <span class="option-title">Standard Delivery</span>
                                                            <span class="option-focus">Free</span>
                                                        </span>
                                                        <span class="option-body">Estimated 14-20 Day Shipping (Duties and
                                                            taxes may be due upon delivery)</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="option">
                                                    <span class="option-control">
                                                        <span class="radio radio-outline">
                                                            <input type="radio" name="billing_delivery"
                                                                value="" />
                                                            <span></span>
                                                        </span>
                                                    </span>
                                                    <span class="option-label">
                                                        <span class="option-head">
                                                            <span class="option-title">Fast Delivery</span>
                                                            <span class="option-focus">$&#160;8.00</span>
                                                        </span>
                                                        <span class="option-body">Estimated 2-5 Day Shipping (Duties and
                                                            taxes may be due upon delivery)</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-check"></div>
                                        <div class="form-text text-muted"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h3 class="font-size-lg text-dark-75 font-weight-bold mb-10">Select Package:</h3>
                                <div class="mb-2">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="option">
                                                    <span class="option-control">
                                                        <span class="radio">
                                                            <input type="radio" name="package" value="" />
                                                            <span></span>
                                                        </span>
                                                    </span>
                                                    <span class="option-label">
                                                        <span class="option-head">
                                                            <span class="option-title">Standard Package</span>
                                                            <span class="option-focus text-primary">Free</span>
                                                        </span>
                                                        <span class="option-body">Estimated 14-20 Day Shipping (Duties and
                                                            taxes may be due upon delivery)</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="option">
                                                    <span class="option-control">
                                                        <span class="radio">
                                                            <input type="radio" name="package" value="" />
                                                            <span></span>
                                                        </span>
                                                    </span>
                                                    <span class="option-label">
                                                        <span class="option-head">
                                                            <span class="option-title">Premium Package</span>
                                                            <span class="option-focus text-primary">$&#160;8.00</span>
                                                        </span>
                                                        <span class="option-body">Estimated 2-5 Day Shipping (Duties and
                                                            taxes may be due upon delivery)</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-check"></div>
                                        <div class="form-text text-muted"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Validate</button>
                                    <button type="reset" class="btn btn-light-primary font-weight-bold">Batal</button>
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
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/validation/form-controls.js') }}"></script>
@endsection
