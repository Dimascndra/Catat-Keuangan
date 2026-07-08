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
            <div class="alert-text">
                <b class="mr-2">KTImageInput</b>is Metronic's custom made plugin that provides an image attachment for
                form submitions with dynamic preview.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Basic Demo</h3>
                </div>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Example Label</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <div class="image-input-wrapper"
                                    style="background-image: url(assets/media/users/100_1.jpg)"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Batal avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                    </div>
                    <!--begin::Code-->
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_1_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_1_js">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_1_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
      &lt;div class="image-input image-input-outline" id="kt_image_1"&gt;
       &lt;div class="image-input-wrapper" style="background-image: url(assets/media/users/100_1.jpg)"&gt;&lt;/div&gt;

       &lt;label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar"&gt;
        &lt;i class="fa fa-pen icon-sm text-muted"&gt;&lt;/i&gt;
        &lt;input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/&gt;
        &lt;input type="hidden" name="profile_avatar_remove"/&gt;
       &lt;/label&gt;

       &lt;span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Batal avatar"&gt;
        &lt;i class="ki ki-bold-close icon-xs text-muted"&gt;&lt;/i&gt;
       &lt;/span&gt;
      &lt;/div&gt;
            </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_1_js">
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
      var avatar1 = new KTImageInput('kt_image_1');
            </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Code-->
                </div>
            </form>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Non-outline Style</h3>
                </div>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Example Label</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="image-input" id="kt_image_2">
                                <div class="image-input-wrapper"
                                    style="background-image: url(assets/media/users/100_2.jpg)"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Batal avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                    </div>
                    <!--begin::Code-->
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_2_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_2_js">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_2_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
      &lt;div class="image-input" id="kt_image_2"&gt;
       &lt;div class="image-input-wrapper" style="background-image: url(assets/media/users/100_2.jpg)"&gt;&lt;/div&gt;

       &lt;label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar"&gt;
        &lt;i class="fa fa-pen icon-sm text-muted"&gt;&lt;/i&gt;
        &lt;input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/&gt;
        &lt;input type="hidden" name="profile_avatar_remove"/&gt;
       &lt;/label&gt;

       &lt;span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Batal avatar"&gt;
        &lt;i class="ki ki-bold-close icon-xs text-muted"&gt;&lt;/i&gt;
       &lt;/span&gt;
      &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_2_js">
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
      var avatar2 = new KTImageInput('kt_image_2');
            </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Code-->
                </div>
            </form>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Circle Style</h3>
                </div>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Example Label</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                                <div class="image-input-wrapper"
                                    style="background-image: url(assets/media/users/100_3.jpg)"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Batal avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                        </div>
                    </div>
                    <!--begin::Code-->
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_3_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_3_js">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_3_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
      &lt;div class="image-input image-input-outline image-input-circle" id="kt_image_3"&gt;
       &lt;div class="image-input-wrapper" style="background-image: url(assets/media/users/100_3.jpg)"&gt;&lt;/div&gt;

       &lt;label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar"&gt;
        &lt;i class="fa fa-pen icon-sm text-muted"&gt;&lt;/i&gt;
        &lt;input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/&gt;
        &lt;input type="hidden" name="profile_avatar_remove"/&gt;
       &lt;/label&gt;

       &lt;span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Batal avatar"&gt;
        &lt;i class="ki ki-bold-close icon-xs text-muted"&gt;&lt;/i&gt;
       &lt;/span&gt;
      &lt;/div&gt;
            </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_3_js">
                                <div class="example-highlight">
                                    <pre>
<code class="language-js">
      var avatar3 = new KTImageInput('kt_image_3');
            </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Code-->
                </div>
            </form>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Editable Input</h3>
                </div>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Example Label</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="image-input image-input-outline" id="kt_image_4"
                                style="background-image: url(assets/media/users/blank.png)">
                                <div class="image-input-wrapper"
                                    style="background-image: url(assets/media/users/100_1.jpg)"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Batal avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">After image removal hidden input's value is set to
                                "1"</span>
                        </div>
                    </div>
                    <!--begin::Code-->
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_4_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_4_js">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_4_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
      &lt;div class="image-input image-input-outline" id="kt_image_4" style="background-image: url(assets/media/&gt;users/blank.png)"&gt;
       &lt;div class="image-input-wrapper" style="background-image: url(&lt;?php echo Page::getMediaPath();?&gt;users/100_1.jpg)"&gt;&lt;/div&gt;

       &lt;label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar"&gt;
        &lt;i class="fa fa-pen icon-sm text-muted"&gt;&lt;/i&gt;
        &lt;input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/&gt;
        &lt;input type="hidden" name="profile_avatar_remove"/&gt;
       &lt;/label&gt;

       &lt;span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Batal avatar"&gt;
        &lt;i class="ki ki-bold-close icon-xs text-muted"&gt;&lt;/i&gt;
       &lt;/span&gt;

       &lt;span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar"&gt;
        &lt;i class="ki ki-bold-close icon-xs text-muted"&gt;&lt;/i&gt;
       &lt;/span&gt;
      &lt;/div&gt;
            </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_4_js">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
      var avatar4 = new KTImageInput('kt_image_4');

      avatar4.on('cancel', function(imageInput) {
       swal.fire({
        title: 'Image successfully canceled !',
        type: 'success',
        buttonsStyling: false,
        confirmButtonText: 'Awesome!',
        confirmButtonClass: 'btn btn-primary font-weight-bold'
       });
      });

      avatar4.on('change', function(imageInput) {
       swal.fire({
        title: 'Image successfully changed !',
        type: 'success',
        buttonsStyling: false,
        confirmButtonText: 'Awesome!',
        confirmButtonClass: 'btn btn-primary font-weight-bold'
       });
      });

      avatar4.on('remove', function(imageInput) {
       swal.fire({
        title: 'Image successfully removed !',
        type: 'error',
        buttonsStyling: false,
        confirmButtonText: 'Got it!',
        confirmButtonClass: 'btn btn-primary font-weight-bold'
       });
      });
            </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Code-->
                </div>
            </form>
        </div>
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Empty Input</h3>
                </div>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Example Label</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                                style="background-image: url(assets/media/users/blank.png)">
                                <div class="image-input-wrapper"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Batal avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <span class="form-text text-muted">Default empty input with blank image</span>
                        </div>
                    </div>
                    <!--begin::Code-->
                    <div class="example-code">
                        <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#example_code_5_html">HTML</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#example_code_5_js">JS</a>
                            </li>
                        </ul>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        <div class="tab-content">
                            <div class="tab-pane active" id="example_code_5_html" role="tabpanel">
                                <div class="example-highlight">
                                    <pre>
<code class="language-html">
      &lt;div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(assets/media/users/blank.png)"&gt;
       &lt;div class="image-input-wrapper"&gt;&lt;/div&gt;

       &lt;label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar"&gt;
        &lt;i class="fa fa-pen icon-sm text-muted"&gt;&lt;/i&gt;
        &lt;input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/&gt;
        &lt;input type="hidden" name="profile_avatar_remove"/&gt;
       &lt;/label&gt;

       &lt;span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Batal avatar"&gt;
        &lt;i class="ki ki-bold-close icon-xs text-muted"&gt;&lt;/i&gt;
       &lt;/span&gt;

       &lt;span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar"&gt;
        &lt;i class="ki ki-bold-close icon-xs text-muted"&gt;&lt;/i&gt;
       &lt;/span&gt;
      &lt;/div&gt;
            </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_5_js">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
      var avatar5 = new KTImageInput('kt_image_5');

      avatar5.on('cancel', function(imageInput) {
       swal.fire({
        title: 'Image successfully changed !',
        type: 'success',
        buttonsStyling: false,
        confirmButtonText: 'Awesome!',
        confirmButtonClass: 'btn btn-primary font-weight-bold'
       });
      });

      avatar5.on('change', function(imageInput) {
       swal.fire({
        title: 'Image successfully changed !',
        type: 'success',
        buttonsStyling: false,
        confirmButtonText: 'Awesome!',
        confirmButtonClass: 'btn btn-primary font-weight-bold'
       });
      });

      avatar5.on('remove', function(imageInput) {
       swal.fire({
        title: 'Image successfully removed !',
        type: 'error',
        buttonsStyling: false,
        confirmButtonText: 'Got it!',
        confirmButtonClass: 'btn btn-primary font-weight-bold'
       });
      });
            </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Code-->
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/file-upload/image-input.js') }}"></script>
@endsection
