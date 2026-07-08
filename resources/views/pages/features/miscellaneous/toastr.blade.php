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
                Miscellaneous
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
            <div class="alert-text">Toastr is a Javascript library for Gnome / Growl type non-blocking notifications.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://codeseven.github.io/toastr/demo.html" target="_blank">Home</a>or
                <a class="font-weight-bold" href="https://github.com/CodeSeven/toastr" target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Toastr Notifications Examples</h3>
                </div>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control" placeholder="Enter a title ..." />
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-list">
                                    <label class="checkbox">
                                        <input id="closeButton" type="checkbox" value="checked" />Close Button
                                        <span class="ml-3"></span></label>
                                    <label class="checkbox">
                                        <input id="addBehaviorOnToastClick" type="checkbox" value="checked" />Add behavior
                                        on toast click
                                        <span class="ml-3"></span></label>
                                    <label class="checkbox">
                                        <input id="debugInfo" type="checkbox" value="checked" />Debug
                                        <span class="ml-3"></span></label>
                                    <label class="checkbox">
                                        <input id="progressBar" type="checkbox" value="checked" />Progress Bar
                                        <span class="ml-3"></span></label>
                                    <label class="checkbox">
                                        <input id="preventDuplicates" type="checkbox" value="checked" />Prevent Duplicates
                                        <span class="ml-3"></span></label>
                                    <label class="checkbox">
                                        <input id="addClear" type="checkbox" value="checked" />Add button to force clearing
                                        a toast, ignoring focus
                                        <span class="ml-3"></span></label>
                                    <label class="checkbox">
                                        <input id="newestOnTop" type="checkbox" value="checked" />Newest on top
                                        <span class="ml-3"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Toast Tipe</label>
                                <div class="radio-list" id="toastTypeGroup">
                                    <label class="radio">
                                        <input type="radio" name="toasts" checked="checked" value="success" />Success
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="toasts" value="info" />Info
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="toasts" value="warning" />Warning
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="toasts" value="error" />Error
                                        <span class="ml-3"></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <div class="radio-list" id="positionGroup">
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-top-right"
                                            checked="checked" />Top Right
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-bottom-right" />Bottom Right
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-bottom-left" />Bottom Left
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-top-left" />Top Left
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-top-full-width" />Top Full
                                        Width
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-bottom-full-width" />Bottom
                                        Full Width
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-top-center" />Top Center
                                        <span class="ml-3"></span></label>
                                    <label class="radio">
                                        <input type="radio" name="positions" value="toast-bottom-center" />Bottom
                                        Center
                                        <span class="ml-3"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="showEasing">Show Easing</label>
                                <input id="showEasing" type="text" class="form-control mb-2"
                                    placeholder="swing, linear" value="swing" />
                                <a href="http://www.gsgd.co.uk/sandbox/jquery/easing/" target="_blank">See all easing
                                    options</a>
                            </div>
                            <div class="form-group">
                                <label for="hideEasing">Hide Easing</label>
                                <input id="hideEasing" type="text" class="form-control mb-2"
                                    placeholder="swing, linear" value="linear" />
                                <a class="" href="http://www.gsgd.co.uk/sandbox/jquery/easing/" target="_blank">See
                                    all easing options</a>
                            </div>
                            <div class="form-group">
                                <label for="showMethod">Show Method</label>
                                <input id="showMethod" type="text" class="form-control mb-2"
                                    placeholder="show, fadeIn, slideDown" value="fadeIn" />
                                <a class="" href="http://www.gsgd.co.uk/sandbox/jquery/easing/" target="_blank">See
                                    all show options</a>
                            </div>
                            <div class="form-group">
                                <label for="hideMethod">Hide Method</label>
                                <input id="hideMethod" type="text" class="form-control mb-2"
                                    placeholder="hide, fadeOut, slideUp" value="fadeOut" />
                                <a class="" href="http://www.gsgd.co.uk/sandbox/jquery/easing/" target="_blank">See
                                    all hide options</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="showDuration">Show Duration</label>
                                <input id="showDuration" type="text" class="form-control" placeholder="ms"
                                    value="300" />
                            </div>
                            <div class="form-group">
                                <label for="hideDuration">Hide Duration</label>
                                <input id="hideDuration" type="text" class="form-control" placeholder="ms"
                                    value="1000" />
                            </div>
                            <div class="form-group">
                                <label for="timeOut">Time out</label>
                                <input id="timeOut" type="text" class="form-control" placeholder="ms"
                                    value="5000" />
                            </div>
                            <div class="form-group">
                                <label for="extendedTimeOut">Extended time out</label>
                                <input id="extendedTimeOut" class="form-control" type="text" placeholder="ms"
                                    value="1000" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="example">
                                    <div class="example-code">
                                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                        <pre class="example-preview" id="toastrOptions">


</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-4">
                            <a href="javascript:;" class="btn btn-primary font-weight-bold" id="showtoast">Show Toast</a>
                            <a href="javascript:;" class="btn btn-light-primary font-weight-bold" id="cleartoasts">Clear
                                Toasts</a>
                            <a href="javascript:;" class="btn btn-light-primary font-weight-bold"
                                id="clearlasttoast">Clear Last Toast</a>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/features/miscellaneous/toastr.js') }}"></script>
@endsection
