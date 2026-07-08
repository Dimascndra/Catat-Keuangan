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
        <div class="row">
            <div class="col-lg-6">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Default Form Validation States</h3>
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
                                <label class="form-control-label">Input with success
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control is-valid" />
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Input with error
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control is-invalid" />
                                <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <!--begin::Code example-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
       &lt;form class="form"&gt;
       &lt;div class="card-body"&gt;
        &lt;div class="form-group"&gt;
         &lt;label class="form-control-label" &gt;Input with success &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
         &lt;input type="text" class="form-control is-valid" /&gt;
         &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
         &lt;label class="form-control-label" &gt;Input with error &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
         &lt;input type="text" class="form-control is-invalid" /&gt;
         &lt;div class="invalid-feedback"&gt;Shucks, check the formatting of that and try again.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="card-footer"&gt;
        &lt;button type="submit" class="btn btn-success font-weight-bold mr-2"&gt;Submit&lt;/button&gt;
        &lt;button type="submit" class="btn btn-light-success font-weight-bold"&gt;Cancel&lt;/button&gt;
       &lt;/div&gt;
      &lt;/form&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success font-weight-bold mr-2">Kirim</button>
                            <button type="submit" class="btn btn-light-success font-weight-bold">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form Validation States</h3>
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
                                <label class="col-form-label col-lg-3">Input with success&#160;
                                    <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control is-valid" />
                                    <div class="valid-feedback">Success! You've done it.</div>
                                    <span class="form-text text-muted">Example help text that remains unchanged.</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Input with error
                                    <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control is-invalid" />
                                    <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                    <span class="form-text text-muted">Example help text that remains unchanged.</span>
                                </div>
                            </div>
                            <!--begin::Code example-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
      &lt;form class="form"&gt;
      &lt;div class="card-body"&gt;
       &lt;div class="form-group row "&gt;
        &lt;label class="col-form-label col-lg-3" &gt;Input with success &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
        &lt;div class="col-lg-9"&gt;
         &lt;input type="text" class="form-control is-valid" /&gt;
         &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="form-group row "&gt;
        &lt;label class="col-form-label col-lg-3" &gt;Input with error &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
        &lt;div class="col-lg-9"&gt;
         &lt;input type="text" class="form-control is-invalid" /&gt;
         &lt;div class="invalid-feedback"&gt;Shucks, check the formatting of that and try again.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="card-footer"&gt;
       &lt;div class="row"&gt;
        &lt;div class="col-lg-9 ml-lg-auto"&gt;
         &lt;button type="submit" class="btn btn-primary font-weight-bold mr-2"&gt;Submit&lt;/button&gt;
         &lt;button type="submit" class="btn btn-light-primary font-weight-bold"&gt;Cancel&lt;/button&gt;
        &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
     &lt;/form&gt;
     </code>
</pre>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Kirim</button>
                                    <button type="submit" class="btn btn-light-primary font-weight-bold">Batal</button>
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
                        <h3 class="card-title">Input Group Validation States</h3>
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
                            <div class="form-group validated">
                                <label class="form-control-label">Left Addon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-bar-chart"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control is-valid" placeholder="Email" />
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label">Right Addon</label>
                                <div class="input-group">
                                    <input type="text" class="form-control is-invalid" value="4444a"
                                        placeholder="Email" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">USD</span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <!--begin::Code example-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
      &lt;form class="form"&gt;
       &lt;div class="card-body"&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Left Addon&lt;/label&gt;
         &lt;div class="input-group"&gt;
          &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text" &gt;&lt;i class="la la-bar-chart "&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;input type="text" class="form-control is-valid" placeholder="Email" /&gt;
         &lt;/div&gt;

         &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Right Addon&lt;/label&gt;
         &lt;div class="input-group"&gt;
          &lt;input type="text" class="form-control is-invalid" value="4444a" placeholder="Email" /&gt;
          &lt;div class="input-group-append"&gt;&lt;span class="input-group-text" &gt;USD&lt;/span&gt;&lt;/div&gt;
         &lt;/div&gt;

         &lt;div class="invalid-feedback"&gt;Shucks, check the formatting of that and try again.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="card-footer"&gt;
        &lt;button type="submit" class="btn btn-success font-weight-bold mr-2"&gt;Submit&lt;/button&gt;
        &lt;button type="submit" class="btn btn-light-success font-weight-bold"&gt;Cancel&lt;/button&gt;
       &lt;/div&gt;
      &lt;/form&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success font-weight-bold mr-2">Kirim</button>
                            <button type="submit" class="btn btn-light-success font-weight-bold">Batal</button>
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
                        <h3 class="card-title">Checkbox &amp; Radio Validation States</h3>
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
                            <div class="form-group validated">
                                <label class="form-control-label">Checkboxes</label>
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Option 1</label>
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Option 2</label>
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Option 3</label>
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label">Inline Checkboxes</label>
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Option 1</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Option 2</label>
                                    <label class="checkbox checkbox-outline">
                                        <input type="checkbox" />
                                        <span></span>Option 3</label>
                                </div>
                                <div class="invalid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label">Radios</label>
                                <div class="radio-list">
                                    <label class="radio radio-outline">
                                        <input type="radio" />
                                        <span></span>Option 1</label>
                                    <label class="radio radio-outline">
                                        <input type="radio" />
                                        <span></span>Option 2</label>
                                    <label class="radio radio-outline">
                                        <input type="radio" />
                                        <span></span>Option 3</label>
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label">Inline Radios</label>
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" />
                                        <span></span>Option 1</label>
                                    <label class="radio">
                                        <input type="radio" />
                                        <span></span>Option 2</label>
                                    <label class="radio">
                                        <input type="radio" />
                                        <span></span>Option 3</label>
                                </div>
                                <div class="invalid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <!--begin::Code example-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
      &lt;form class="form"&gt;
       &lt;div class="card-body"&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Checkboxes&lt;/label&gt;
         &lt;div class="checkbox-list"&gt;
          &lt;label class="checkbox"&gt;
           &lt;input type="checkbox"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 1
          &lt;/label&gt;
          &lt;label class="checkbox"&gt;
           &lt;input type="checkbox"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 2
          &lt;/label&gt;
          &lt;label class="checkbox"&gt;
           &lt;input type="checkbox"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 3
          &lt;/label&gt;
         &lt;/div&gt;
         &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Inline Checkboxes&lt;/label&gt;
         &lt;div class="checkbox-inline"&gt;
          &lt;label class="checkbox checkbox-outline"&gt;
           &lt;input type="checkbox"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 1
          &lt;/label&gt;
          &lt;label class="checkbox checkbox-outline"&gt;
           &lt;input type="checkbox"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 2
          &lt;/label&gt;
          &lt;label class="checkbox checkbox-outline"&gt;
           &lt;input type="checkbox"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 3
          &lt;/label&gt;
         &lt;/div&gt;
         &lt;div class="invalid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Radios&lt;/label&gt;
         &lt;div class="radio-list"&gt;
          &lt;label class="radio radio-outline"&gt;
           &lt;input type="radio"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 1
          &lt;/label&gt;
          &lt;label class="radio radio-outline"&gt;
           &lt;input type="radio"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 2
          &lt;/label&gt;
          &lt;label class="radio radio-outline"&gt;
           &lt;input type="radio"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 3
          &lt;/label&gt;
         &lt;/div&gt;
         &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Inline Radios&lt;/label&gt;
         &lt;div class="radio-inline"&gt;
          &lt;label class="radio"&gt;
           &lt;input type="radio"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 1
          &lt;/label&gt;
          &lt;label class="radio"&gt;
           &lt;input type="radio"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 2
          &lt;/label&gt;
          &lt;label class="radio"&gt;
           &lt;input type="radio"/&gt;
           &lt;span&gt;&lt;/span&gt;
           Option 3
          &lt;/label&gt;
         &lt;/div&gt;
         &lt;div class="invalid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="card-footer"&gt;
        &lt;button type="submit" class="btn btn-success font-weight-bold mr-2"&gt;Submit&lt;/button&gt;
        &lt;button type="submit" class="btn btn-light-success font-weight-bold"&gt;Cancel&lt;/button&gt;
       &lt;/div&gt;
      &lt;/form&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success font-weight-bold mr-2">Kirim</button>
                            <button type="submit" class="btn btn-light-success font-weight-bold">Batal</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Icon Input Validation States</h3>
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
                            <div class="form-group validated">
                                <label class="form-control-label">Left Icon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-map-marker"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control is-valid" placeholder="Email" />
                                </div>
                                <div class="valid-feedback">Success! You've done it.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <div class="form-group validated">
                                <label class="form-control-label">Right Icon</label>
                                <div class="input-group">
                                    <input type="text" class="form-control is-invalid" placeholder="Email" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-unlock-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                                <span class="form-text text-muted">Example help text that remains unchanged.</span>
                            </div>
                            <!--begin::Code example-->
                            <div class="example-code mt-10">
                                <div class="example-highlight">
                                    <pre style="height:300px">
<code class="language-html">
      &lt;form class="form"&gt;
       &lt;div class="card-body"&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Left Icon&lt;/label&gt;
         &lt;div class="input-group"&gt;
          &lt;div class="input-group-prepend"&gt;&lt;span class="input-group-text" &gt;&lt;i class="la la-map-marker "&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
          &lt;input type="text" class="form-control is-valid" placeholder="Email"/&gt;
         &lt;/div&gt;
         &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="form-group validated"&gt;
         &lt;label class="form-control-label" &gt;Right Icon&lt;/label&gt;
         &lt;div class="input-group"&gt;
          &lt;input type="text" class="form-control is-invalid" placeholder="Email"/&gt;
          &lt;div class="input-group-append"&gt;&lt;span class="input-group-text" &gt;&lt;i class="la la-unlock-alt "&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="invalid-feedback"&gt;Shucks, check the formatting of that and try again.&lt;/div&gt;
         &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="card-footer"&gt;
        &lt;button type="submit" class="btn btn-primary font-weight-bold mr-2"&gt;Submit&lt;/button&gt;
        &lt;button type="submit" class="btn btn-light-primary font-weight-bold"&gt;Cancel&lt;/button&gt;
       &lt;/div&gt;
      &lt;/form&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <!--end::Code example-->
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary font-weight-bold mr-2">Kirim</button>
                            <button type="submit" class="btn btn-light-primary font-weight-bold">Batal</button>
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
