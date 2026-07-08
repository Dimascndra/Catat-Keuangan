@extends('layouts.index', ['isNoSubheader' => true])
<!--begin::Page Custom Styles(used by this page)-->
@section('styles')
    <link href="{{ asset('assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
@endsection
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Page Layout-->
                <div class="d-flex flex-row">
                    <!--begin::Aside-->
                    <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                        <!--begin::List Widget 17-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">Books to Pickup</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">24 Books to Return</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                        data-placement="left">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover py-5">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-drop"></i>
                                                        </span>
                                                        <span class="navi-text">New Group</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-list-3"></i>
                                                        </span>
                                                        <span class="navi-text">Contacts</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-rocket-1"></i>
                                                        </span>
                                                        <span class="navi-text">Groups</span>
                                                        <span class="navi-link-badge">
                                                            <span
                                                                class="label label-light-primary label-inline font-weight-bold">new</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-bell-2"></i>
                                                        </span>
                                                        <span class="navi-text">Calls</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-gear"></i>
                                                        </span>
                                                        <span class="navi-text">Settings</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator my-3"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-magnifier-tool"></i>
                                                        </span>
                                                        <span class="navi-text">Help</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon2-bell-2"></i>
                                                        </span>
                                                        <span class="navi-text">Privacy</span>
                                                        <span class="navi-link-badge">
                                                            <span
                                                                class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Container-->
                                <div>
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                style="background-image: url('assets/media/books/4.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius
                                                The Great</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story
                                                About
                                                <br />Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                    class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                style="background-image: url('assets/media/books/12.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Wild
                                                Blues</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story
                                                About
                                                <br />Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                    class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                style="background-image: url('assets/media/books/13.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Simple
                                                Thinking</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story
                                                About
                                                <br />Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                    class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 17-->
                        <!--begin::List Widget 21-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span class="card-label font-weight-bolder text-dark mb-1">Recent Products</span>
                                    <span class="text-muted mt-2 font-weight-bold font-size-sm">New Arrivals</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Choose Label:</span>
                                                    <i class="flaticon2-information icon-md text-muted"
                                                        data-toggle="tooltip" data-placement="right"
                                                        title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-success">Customer</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-danger">Partner</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-primary">Member</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">
                                                            <span
                                                                class="label label-xl label-inline label-light-dark">Staff</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer py-4">
                                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Item-->
                                <div class="d-flex mb-8">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="d-flex flex-column">
                                            <div class="symbol-label mb-3"
                                                style="background-image: url('assets/media/stock-600x400/img-23.jpg')">
                                            </div>
                                            <a href="#"
                                                class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Ubah</a>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Darius
                                            the Great</a>
                                        <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank
                                            credibility is one glaring error</span>
                                        <span class="text-muted font-weight-bold font-size-lg">Price:
                                            <span class="text-dark-75 font-weight-bolder">99.00$</span></span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                        <div class="d-flex flex-column">
                                            <div class="symbol-label mb-3"
                                                style="background-image: url('assets/media/stock-600x400/img-25.jpg')">
                                            </div>
                                            <a href="#"
                                                class="btn btn-light-primary font-weight-bolder py-2 font-size-sm">Ubah</a>
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">Nike
                                            Airmax</a>
                                        <span class="text-muted font-weight-bold font-size-sm mb-3">All it takes tank
                                            credibility is one glaring error</span>
                                        <span class="text-muted font-weight-bold font-size-lg">Price:
                                            <span class="text-dark-75 font-weight-bolder">99.00$</span></span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 21-->
                    </div>
                    <!--end::Aside-->
                    <!--begin::Layout-->
                    <div class="flex-row-fluid ml-lg-8">
                        <!--begin::Section-->
                        <div class="card card-custom card-transparent">
                            <div class="card-body p-0">
                                <!--begin: Wizard-->
                                <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first"
                                    data-wizard-clickable="false">
                                    <!--begin: Wizard Nav-->
                                    <div class="wizard-nav">
                                        <div class="wizard-steps" data-total-steps="3">
                                            <!--begin::Wizard Step 1 Nav-->
                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-number">1</div>
                                                    <div class="wizard-label">
                                                        <div class="wizard-title">Delivery Address</div>
                                                        <div class="wizard-desc">Setup Your Address</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 1 Nav-->
                                            <!--begin::Wizard Step 2 Nav-->
                                            <div class="wizard-step" data-wizard-type="step">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-number">2</div>
                                                    <div class="wizard-label">
                                                        <div class="wizard-title">Payment</div>
                                                        <div class="wizard-desc">Payment Options</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 2 Nav-->
                                            <!--begin::Wizard Step 3 Nav-->
                                            <div class="wizard-step" data-wizard-type="step">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-number">3</div>
                                                    <div class="wizard-label">
                                                        <div class="wizard-title">Purchase</div>
                                                        <div class="wizard-desc">Review and Kirim</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 3 Nav-->
                                        </div>
                                    </div>
                                    <!--end: Wizard Nav-->
                                    <!--begin: Wizard Body-->
                                    <div class="card card-custom card-shadowless rounded-top-0">
                                        <div class="card-body p-0">
                                            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                                <div class="col-xl-12 col-xxl-7">
                                                    <!--begin: Wizard Form-->
                                                    <form class="form mt-0 mt-lg-10" id="kt_form">
                                                        <!--begin: Wizard Step 1-->
                                                        <div class="pb-5" data-wizard-type="step-content"
                                                            data-wizard-state="current">
                                                            <h4 class="mb-10 font-weight-bold text-dark">Enter Your Address
                                                            </h4>
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label>Address Line 1</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-lg"
                                                                    name="address1" placeholder="Address Line 1"
                                                                    value="Address Line 1" />
                                                                <span class="form-text text-muted">Please enter your
                                                                    Address.</span>
                                                            </div>
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label>Address Line 2</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-lg"
                                                                    name="address2" placeholder="Address Line 2"
                                                                    value="Address Line 2" />
                                                                <span class="form-text text-muted">Please enter your
                                                                    Address.</span>
                                                            </div>
                                                            <!--end::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Postcode</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="postcode" placeholder="Postcode"
                                                                            value="3000" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your Postcode.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>City</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="state" placeholder="City"
                                                                            value="Melbourne" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your City.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="state" placeholder="State"
                                                                            value="VIC" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your State.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Select-->
                                                                    <div class="form-group">
                                                                        <label>Country</label>
                                                                        <select name="country"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <option value="">Select</option>
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AX">Åland Islands</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AS">American Samoa</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antarctica</option>
                                                                            <option value="AG">Antigua and Barbuda
                                                                            </option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU" selected="selected">
                                                                                Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia, Plurinational
                                                                                State of</option>
                                                                            <option value="BQ">Bonaire, Sint Eustatius
                                                                                and Saba</option>
                                                                            <option value="BA">Bosnia and Herzegovina
                                                                            </option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BV">Bouvet Island</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="IO">British Indian Ocean
                                                                                Territory</option>
                                                                            <option value="BN">Brunei Darussalam
                                                                            </option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African Republic
                                                                            </option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island
                                                                            </option>
                                                                            <option value="CC">Cocos (Keeling) Islands
                                                                            </option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CD">Congo, the Democratic
                                                                                Republic of the</option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="CI">Côte d'Ivoire</option>
                                                                            <option value="HR">Croatia</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="CW">Curaçao</option>
                                                                            <option value="CY">Cyprus</option>
                                                                            <option value="CZ">Czech Republic</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic
                                                                            </option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea
                                                                            </option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands
                                                                                (Malvinas)</option>
                                                                            <option value="FO">Faroe Islands</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="GF">French Guiana</option>
                                                                            <option value="PF">French Polynesia
                                                                            </option>
                                                                            <option value="TF">French Southern
                                                                                Territories</option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GP">Guadeloupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GG">Guernsey</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="GY">Guyana</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="HM">Heard Island and
                                                                                McDonald Islands</option>
                                                                            <option value="VA">Holy See (Vatican City
                                                                                State)</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IR">Iran, Islamic Republic
                                                                                of</option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IM">Isle of Man</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="JE">Jersey</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KP">Korea, Democratic
                                                                                People's Republic of</option>
                                                                            <option value="KR">Korea, Republic of
                                                                            </option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LA">Lao People's Democratic
                                                                                Republic</option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libya</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macao</option>
                                                                            <option value="MK">Macedonia, the former
                                                                                Yugoslav Republic of</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MH">Marshall Islands
                                                                            </option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="FM">Micronesia, Federated
                                                                                States of</option>
                                                                            <option value="MD">Moldova, Republic of
                                                                            </option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="ME">Montenegro</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="NC">New Caledonia</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MP">Northern Mariana Islands
                                                                            </option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PK">Pakistan</option>
                                                                            <option value="PW">Palau</option>
                                                                            <option value="PS">Palestinian Territory,
                                                                                Occupied</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea
                                                                            </option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RE">Réunion</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RU">Russian Federation
                                                                            </option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="BL">Saint Barthélemy
                                                                            </option>
                                                                            <option value="SH">Saint Helena, Ascension
                                                                                and Tristan da Cunha</option>
                                                                            <option value="KN">Saint Kitts and Nevis
                                                                            </option>
                                                                            <option value="LC">Saint Lucia</option>
                                                                            <option value="MF">Saint Martin (French
                                                                                part)</option>
                                                                            <option value="PM">Saint Pierre and
                                                                                Miquelon</option>
                                                                            <option value="VC">Saint Vincent and the
                                                                                Grenadines</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">Sao Tome and Principe
                                                                            </option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="RS">Serbia</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SX">Sint Maarten (Dutch
                                                                                part)</option>
                                                                            <option value="SK">Slovakia</option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="GS">South Georgia and the
                                                                                South Sandwich Islands</option>
                                                                            <option value="SS">South Sudan</option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SJ">Svalbard and Jan Mayen
                                                                            </option>
                                                                            <option value="SZ">Swaziland</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="SY">Syrian Arab Republic
                                                                            </option>
                                                                            <option value="TW">Taiwan, Province of
                                                                                China</option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania, United
                                                                                Republic of</option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TL">Timor-Leste</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad and Tobago
                                                                            </option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks and Caicos Islands
                                                                            </option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates
                                                                            </option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="UM">United States Minor
                                                                                Outlying Islands</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela, Bolivarian
                                                                                Republic of</option>
                                                                            <option value="VN">Viet Nam</option>
                                                                            <option value="VG">Virgin Islands, British
                                                                            </option>
                                                                            <option value="VI">Virgin Islands, U.S.
                                                                            </option>
                                                                            <option value="WF">Wallis and Futuna
                                                                            </option>
                                                                            <option value="EH">Western Sahara</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Select-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end: Wizard Step 1-->
                                                        <!--begin: Wizard Step 2-->
                                                        <div class="pb-5" data-wizard-type="step-content">
                                                            <h4 class="mb-10 font-weight-bold text-dark">Enter your Payment
                                                                Details</h4>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Name on Card</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="ccname" placeholder="Card Name"
                                                                            value="John Wick" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your Card Name.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Card Number</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="ccnumber" placeholder="Card Number"
                                                                            value="4444 3333 2222 1111" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your Address.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Card Expiry Month</label>
                                                                        <input type="number"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="ccmonth" placeholder="Card Expiry Month"
                                                                            value="01" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your Card Expiry Month.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Card Expiry Year</label>
                                                                        <input type="number"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="ccyear" placeholder="Card Expire Year"
                                                                            value="21" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your Card Expiry Year.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Card CVV Number</label>
                                                                        <input type="password"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            name="cccvv" placeholder="Card CVV Number"
                                                                            value="123" />
                                                                        <span class="form-text text-muted">Please enter
                                                                            your Card CVV Number.</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end: Wizard Step 2-->
                                                        <!--begin: Wizard Step 3-->
                                                        <div class="pb-5" data-wizard-type="step-content">
                                                            <!--begin::Section-->
                                                            <h4 class="mb-10 font-weight-bold text-dark">Review your Order
                                                                and Kirim</h4>
                                                            <h6 class="font-weight-bolder mb-3">Delivery Address:</h6>
                                                            <div class="text-dark-50 line-height-lg">
                                                                <div>Address Line 1</div>
                                                                <div>Address Line 2</div>
                                                                <div>Melbourne 3000, VIC, Australia</div>
                                                            </div>
                                                            <div class="separator separator-dashed my-5"></div>
                                                            <!--end::Section-->
                                                            <!--begin::Section-->
                                                            <h6 class="font-weight-bolder mb-3">Order Details:</h6>
                                                            <div class="text-dark-50 line-height-lg">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th
                                                                                    class="pl-0 font-weight-bold text-muted text-uppercase">
                                                                                    Ordered Items</th>
                                                                                <th
                                                                                    class="text-right font-weight-bold text-muted text-uppercase">
                                                                                    Qty</th>
                                                                                <th
                                                                                    class="text-right font-weight-bold text-muted text-uppercase">
                                                                                    Unit Price</th>
                                                                                <th
                                                                                    class="text-right pr-0 font-weight-bold text-muted text-uppercase">
                                                                                    Nominal</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="font-weight-boldest">
                                                                                <td
                                                                                    class="border-0 pl-0 pt-7 d-flex align-items-center">
                                                                                    <!--begin::Symbol-->
                                                                                    <div
                                                                                        class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                                                        <div class="symbol-label"
                                                                                            style="background-image: url('assets/media/products/11.png')">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                    Street Sneakers
                                                                                </td>
                                                                                <td class="text-right pt-7 align-middle">2
                                                                                </td>
                                                                                <td class="text-right pt-7 align-middle">
                                                                                    $90.00</td>
                                                                                <td
                                                                                    class="text-primary pr-0 pt-7 text-right align-middle">
                                                                                    $180.00</td>
                                                                            </tr>
                                                                            <tr
                                                                                class="font-weight-boldest border-bottom-0">
                                                                                <td
                                                                                    class="border-top-0 pl-0 py-4 d-flex align-items-center">
                                                                                    <!--begin::Symbol-->
                                                                                    <div
                                                                                        class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                                                        <div class="symbol-label"
                                                                                            style="background-image: url('assets/media/products/2.png')">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                    Headphones
                                                                                </td>
                                                                                <td
                                                                                    class="border-top-0 text-right py-4 align-middle">
                                                                                    1</td>
                                                                                <td
                                                                                    class="border-top-0 text-right py-4 align-middle">
                                                                                    $449.00</td>
                                                                                <td
                                                                                    class="text-primary border-top-0 pr-0 py-4 text-right align-middle">
                                                                                    $449.00</td>
                                                                            </tr>
                                                                            <tr
                                                                                class="font-weight-boldest border-bottom-0">
                                                                                <td
                                                                                    class="border-top-0 pl-0 py-4 d-flex align-items-center">
                                                                                    <!--begin::Symbol-->
                                                                                    <div
                                                                                        class="symbol symbol-40 flex-shrink-0 mr-4 bg-light">
                                                                                        <div class="symbol-label"
                                                                                            style="background-image: url('assets/media/products/1.png')">
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                    Smartwatch
                                                                                </td>
                                                                                <td
                                                                                    class="border-top-0 text-right py-4 align-middle">
                                                                                    1</td>
                                                                                <td
                                                                                    class="border-top-0 text-right py-4 align-middle">
                                                                                    $160.00</td>
                                                                                <td
                                                                                    class="text-primary border-top-0 pr-0 py-4 text-right align-middle">
                                                                                    $160.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"></td>
                                                                                <td class="font-weight-bolder text-right">
                                                                                    Subtotal</td>
                                                                                <td
                                                                                    class="font-weight-bolder text-right pr-0">
                                                                                    $1538.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" class="border-0 pt-0">
                                                                                </td>
                                                                                <td
                                                                                    class="border-0 pt-0 font-weight-bolder text-right">
                                                                                    Delivery Fees</td>
                                                                                <td
                                                                                    class="border-0 pt-0 font-weight-bolder text-right pr-0">
                                                                                    $15.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2" class="border-0 pt-0">
                                                                                </td>
                                                                                <td
                                                                                    class="border-0 pt-0 font-weight-bolder font-size-h5 text-right">
                                                                                    Grand Total</td>
                                                                                <td
                                                                                    class="border-0 pt-0 font-weight-bolder font-size-h5 text-success text-right pr-0">
                                                                                    $1553.00</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="separator separator-dashed my-5"></div>
                                                            <!--end::Section-->
                                                            <!--begin::Section-->
                                                            <h6 class="font-weight-bolder mb-3">Delivery Service Tipe:</h6>
                                                            <div class="text-dark-50 line-height-lg">
                                                                <div>Overnight Delivery with Regular Packaging</div>
                                                                <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                                            </div>
                                                            <!--end::Section-->
                                                        </div>
                                                        <!--end: Wizard Step 3-->
                                                        <!--begin: Wizard Actions-->
                                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                            <div class="mr-2">
                                                                <button type="button"
                                                                    class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                                    data-wizard-type="action-prev">Previous</button>
                                                            </div>
                                                            <div>
                                                                <button type="button"
                                                                    class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                                    data-wizard-type="action-submit">Kirim</button>
                                                                <button type="button"
                                                                    class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                                    data-wizard-type="action-next">Next</button>
                                                            </div>
                                                        </div>
                                                        <!--end: Wizard Actions-->
                                                    </form>
                                                    <!--end: Wizard Form-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Bpdy-->
                                </div>
                                <!--end: Wizard-->
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Page Layout-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/custom/ecommerce/checkout.js') }}"></script>
@endsection
