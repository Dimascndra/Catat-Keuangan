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
                Widgets
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
                <b class="mr-1">Tagify</b>- Lightweight input tags plugin.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold mr-1" href="https://yaireo.github.io/tagify/" target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/yairEO/tagify" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">Tags Input Examples</h3>
                    </div>
                    <!--begin::Form-->
                    <form class="form" action="?" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Basic example</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...'
                                        value='css, html, javascript' autofocus="" data-blacklist='.NET,PHP' />
                                    <div class="mt-3">
                                        <a href="javascript:;" id="kt_tagify_1_remove"
                                            class="btn btn-sm btn-light-primary font-weight-bold">Remove tags</a>
                                    </div>
                                    <div class="mt-3 text-muted">In this example, the field is pre-occupied with 4 tags. The
                                        last tag (CSS) has the same value as the first tag, and will be removed, because the
                                        duplicates setting is set to true.</div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Readonly example</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input id="kt_tagify_1_1" class="form-control tagify" name='tags' readonly="readonly"
                                        placeholder='type...' value='css, html, javascript' autofocus=""
                                        data-blacklist='.NET,PHP' />
                                    <div class="mt-3 text-muted">If the original input field has a readonly attribute, then,
                                        via CSS, there will be no way of manually adding tags because the inline
                                        contenteditable element will be hidden.</div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Whitelist examples</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input id="kt_tagify_2" class="form-control tagify" placeholder='type...'
                                        value='Back to the Future, Whiplash' data-blacklist='.NET,PHP' />
                                    <div class="mt-3 text-muted">In this example, the field is pre-occupied with 3 tags, and
                                        last tag is not included in the whitelist, and will be removed because the enforce
                                        whitelist option flag is set to true</div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Templates examples</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input id="kt_tagify_5" class="form-control tagify" name='tags3'
                                        placeholder="Add users" value="Chris Muller, Lina Nilson" />
                                    <div class="mt-3 text-muted">Dropdown item and tag templates.</div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Outside of the box
                                    example</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input id="kt_tagify_3" name='tags-outside' class='form-control tagify tagify--outside'
                                        value='css, html, javascript' placeholder='Write some tags' />
                                    <div class="mt-3 text-muted">Some cases might require addition of tags from outside of
                                        the box and not within.</div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Theme Colorss</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input id="kt_tagify_4" class="form-control" name='tags3'
                                        placeholder='Write some tags'
                                        value='css, html, javascript, angular, vue, react' />
                                    <div class="mt-3 text-muted">In this example, the dropdown.enabled setting is set
                                        (minimum charactes typed to show the dropdown) to 3. Maximum number of tags is set
                                        to 6</div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Theme Light Colors</label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <input id="kt_tagify_6" class="form-control" name='tags4'
                                        placeholder='Write some tags'
                                        value='css, html, javascript, angular, vue, react' />
                                    <div class="mt-3 text-muted">In this example, the dropdown.enabled setting is set
                                        (minimum charactes typed to show the dropdown) to 3. Maximum number of tags is set
                                        to 6</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary mr-2">Kirim</button>
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
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/tagify.js') }}"></script>
@endsection
