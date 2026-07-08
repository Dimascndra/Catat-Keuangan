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
            <div class="alert-text">The jQuery plugin that brings select elements into the 21st century with intuitive
                multiselection, searching, and much more.
                <br />For more info please visit the plugin's
                <a class="font-weight-bold" href="https://developer.snapappointments.com/bootstrap-select/examples/"
                    target="_blank">Demo Page</a>or
                <a class="font-weight-bold" href="https://github.com/snapappointments/bootstrap-select"
                    target="_blank">Github Repo</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Bootstrap Select Examples</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
                    <!--begin: Code-->
                    <div class="example-code mt-10">
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
        &lt;div class="card card-custom"&gt;
         &lt;div class="card-header"&gt;
          &lt;div class="card-title"&gt;
           &lt;h3 class="card-title"&gt;
            Bootstrap Select Examples
           &lt;/h3&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;!--begin::Form--&gt;
         &lt;form class="form"&gt;
          &lt;div class="card-body"&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Minimum Setup&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Options Size&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" data-size="4"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
              &lt;option&gt;Tent&lt;/option&gt;
              &lt;option&gt;Flashlight&lt;/option&gt;
              &lt;option&gt;Toilet Paper&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Optgroups Example&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker"&gt;
              &lt;optgroup label="Picnic" data-max-options="2"&gt;
               &lt;option&gt;Mustard&lt;/option&gt;
               &lt;option&gt;Ketchup&lt;/option&gt;
               &lt;option&gt;Relish&lt;/option&gt;
              &lt;/optgroup&gt;
              &lt;optgroup label="Camping" data-max-options="2"&gt;
               &lt;option&gt;Tent&lt;/option&gt;
               &lt;option&gt;Flashlight&lt;/option&gt;
               &lt;option&gt;Toilet Paper&lt;/option&gt;
              &lt;/optgroup&gt;
             &lt;/select&gt;
             &lt;span class="form-text text-muted"&gt;Select boxes with optgroups&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Multiple Select&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" multiple&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Live Search&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" data-size="7" data-live-search="true"&gt;
              &lt;option value=""&gt;Select&lt;/option&gt;
              &lt;option value="AF"&gt;Afghanistan&lt;/option&gt;
              &lt;option value="AX"&gt;Åland Islands&lt;/option&gt;
              &lt;option value="AL"&gt;Albania&lt;/option&gt;
              &lt;option value="DZ"&gt;Algeria&lt;/option&gt;
              &lt;option value="AS"&gt;American Samoa&lt;/option&gt;
              &lt;option value="AD"&gt;Andorra&lt;/option&gt;
              &lt;option value="AO"&gt;Angola&lt;/option&gt;
              &lt;option value="AI"&gt;Anguilla&lt;/option&gt;
              &lt;option value="AQ"&gt;Antarctica&lt;/option&gt;
              &lt;option value="AG"&gt;Antigua and Barbuda&lt;/option&gt;
              &lt;option value="AR"&gt;Argentina&lt;/option&gt;
              &lt;option value="AM"&gt;Armenia&lt;/option&gt;
              &lt;option value="AW"&gt;Aruba&lt;/option&gt;
              &lt;option value="AU"&gt;Australia&lt;/option&gt;
              &lt;option value="AT"&gt;Austria&lt;/option&gt;
              &lt;option value="AZ"&gt;Azerbaijan&lt;/option&gt;
              &lt;option value="BS"&gt;Bahamas&lt;/option&gt;
              &lt;option value="BH"&gt;Bahrain&lt;/option&gt;
              &lt;option value="BD"&gt;Bangladesh&lt;/option&gt;
              &lt;option value="BB"&gt;Barbados&lt;/option&gt;
              &lt;option value="BY"&gt;Belarus&lt;/option&gt;
              &lt;option value="BE"&gt;Belgium&lt;/option&gt;
              &lt;option value="BZ"&gt;Belize&lt;/option&gt;
              &lt;option value="BJ"&gt;Benin&lt;/option&gt;
              &lt;option value="BM"&gt;Bermuda&lt;/option&gt;
              &lt;option value="BT"&gt;Bhutan&lt;/option&gt;
              &lt;option value="BO"&gt;Bolivia, Plurinational State of&lt;/option&gt;
              &lt;option value="BQ"&gt;Bonaire, Sint Eustatius and Saba&lt;/option&gt;
              &lt;option value="BA"&gt;Bosnia and Herzegovina&lt;/option&gt;
              &lt;option value="BW"&gt;Botswana&lt;/option&gt;
              &lt;option value="BV"&gt;Bouvet Island&lt;/option&gt;
              &lt;option value="BR"&gt;Brazil&lt;/option&gt;
              &lt;option value="IO"&gt;British Indian Ocean Territory&lt;/option&gt;
              &lt;option value="BN"&gt;Brunei Darussalam&lt;/option&gt;
              &lt;option value="BG"&gt;Bulgaria&lt;/option&gt;
              &lt;option value="BF"&gt;Burkina Faso&lt;/option&gt;
              &lt;option value="BI"&gt;Burundi&lt;/option&gt;
              &lt;option value="KH"&gt;Cambodia&lt;/option&gt;
              &lt;option value="CM"&gt;Cameroon&lt;/option&gt;
              &lt;option value="CA"&gt;Canada&lt;/option&gt;
              &lt;option value="CV"&gt;Cape Verde&lt;/option&gt;
              &lt;option value="KY"&gt;Cayman Islands&lt;/option&gt;
              &lt;option value="CF"&gt;Central African Republic&lt;/option&gt;
              &lt;option value="TD"&gt;Chad&lt;/option&gt;
              &lt;option value="CL"&gt;Chile&lt;/option&gt;
              &lt;option value="CN"&gt;China&lt;/option&gt;
              &lt;option value="CX"&gt;Christmas Island&lt;/option&gt;
              &lt;option value="CC"&gt;Cocos (Keeling) Islands&lt;/option&gt;
              &lt;option value="CO"&gt;Colombia&lt;/option&gt;
              &lt;option value="KM"&gt;Comoros&lt;/option&gt;
              &lt;option value="CG"&gt;Congo&lt;/option&gt;
              &lt;option value="CD"&gt;Congo, the Democratic Republic of the&lt;/option&gt;
              &lt;option value="CK"&gt;Cook Islands&lt;/option&gt;
              &lt;option value="CR"&gt;Costa Rica&lt;/option&gt;
              &lt;option value="CI"&gt;Côte d'Ivoire&lt;/option&gt;
              &lt;option value="HR"&gt;Croatia&lt;/option&gt;
              &lt;option value="CU"&gt;Cuba&lt;/option&gt;
              &lt;option value="CW"&gt;Curaçao&lt;/option&gt;
              &lt;option value="CY"&gt;Cyprus&lt;/option&gt;
              &lt;option value="CZ"&gt;Czech Republic&lt;/option&gt;
              &lt;option value="DK"&gt;Denmark&lt;/option&gt;
              &lt;option value="DJ"&gt;Djibouti&lt;/option&gt;
              &lt;option value="DM"&gt;Dominica&lt;/option&gt;
              &lt;option value="DO"&gt;Dominican Republic&lt;/option&gt;
              &lt;option value="EC"&gt;Ecuador&lt;/option&gt;
              &lt;option value="EG"&gt;Egypt&lt;/option&gt;
              &lt;option value="SV"&gt;El Salvador&lt;/option&gt;
              &lt;option value="GQ"&gt;Equatorial Guinea&lt;/option&gt;
              &lt;option value="ER"&gt;Eritrea&lt;/option&gt;
              &lt;option value="EE"&gt;Estonia&lt;/option&gt;
              &lt;option value="ET"&gt;Ethiopia&lt;/option&gt;
              &lt;option value="FK"&gt;Falkland Islands (Malvinas)&lt;/option&gt;
              &lt;option value="FO"&gt;Faroe Islands&lt;/option&gt;
              &lt;option value="FJ"&gt;Fiji&lt;/option&gt;
              &lt;option value="FI"&gt;Finland&lt;/option&gt;
              &lt;option value="FR"&gt;France&lt;/option&gt;
              &lt;option value="GF"&gt;French Guiana&lt;/option&gt;
              &lt;option value="PF"&gt;French Polynesia&lt;/option&gt;
              &lt;option value="TF"&gt;French Southern Territories&lt;/option&gt;
              &lt;option value="GA"&gt;Gabon&lt;/option&gt;
              &lt;option value="GM"&gt;Gambia&lt;/option&gt;
              &lt;option value="GE"&gt;Georgia&lt;/option&gt;
              &lt;option value="DE"&gt;Germany&lt;/option&gt;
              &lt;option value="GH"&gt;Ghana&lt;/option&gt;
              &lt;option value="GI"&gt;Gibraltar&lt;/option&gt;
              &lt;option value="GR"&gt;Greece&lt;/option&gt;
              &lt;option value="GL"&gt;Greenland&lt;/option&gt;
              &lt;option value="GD"&gt;Grenada&lt;/option&gt;
              &lt;option value="GP"&gt;Guadeloupe&lt;/option&gt;
              &lt;option value="GU"&gt;Guam&lt;/option&gt;
              &lt;option value="GT"&gt;Guatemala&lt;/option&gt;
              &lt;option value="GG"&gt;Guernsey&lt;/option&gt;
              &lt;option value="GN"&gt;Guinea&lt;/option&gt;
              &lt;option value="GW"&gt;Guinea-Bissau&lt;/option&gt;
              &lt;option value="GY"&gt;Guyana&lt;/option&gt;
              &lt;option value="HT"&gt;Haiti&lt;/option&gt;
              &lt;option value="HM"&gt;Heard Island and McDonald Islands&lt;/option&gt;
              &lt;option value="VA"&gt;Holy See (Vatican City State)&lt;/option&gt;
              &lt;option value="HN"&gt;Honduras&lt;/option&gt;
              &lt;option value="HK"&gt;Hong Kong&lt;/option&gt;
              &lt;option value="HU"&gt;Hungary&lt;/option&gt;
              &lt;option value="IS"&gt;Iceland&lt;/option&gt;
              &lt;option value="IN"&gt;India&lt;/option&gt;
              &lt;option value="ID"&gt;Indonesia&lt;/option&gt;
              &lt;option value="IR"&gt;Iran, Islamic Republic of&lt;/option&gt;
              &lt;option value="IQ"&gt;Iraq&lt;/option&gt;
              &lt;option value="IE"&gt;Ireland&lt;/option&gt;
              &lt;option value="IM"&gt;Isle of Man&lt;/option&gt;
              &lt;option value="IL"&gt;Israel&lt;/option&gt;
              &lt;option value="IT"&gt;Italy&lt;/option&gt;
              &lt;option value="JM"&gt;Jamaica&lt;/option&gt;
              &lt;option value="JP"&gt;Japan&lt;/option&gt;
              &lt;option value="JE"&gt;Jersey&lt;/option&gt;
              &lt;option value="JO"&gt;Jordan&lt;/option&gt;
              &lt;option value="KZ"&gt;Kazakhstan&lt;/option&gt;
              &lt;option value="KE"&gt;Kenya&lt;/option&gt;
              &lt;option value="KI"&gt;Kiribati&lt;/option&gt;
              &lt;option value="KP"&gt;Korea, Democratic People's Republic of&lt;/option&gt;
              &lt;option value="KR"&gt;Korea, Republic of&lt;/option&gt;
              &lt;option value="KW"&gt;Kuwait&lt;/option&gt;
              &lt;option value="KG"&gt;Kyrgyzstan&lt;/option&gt;
              &lt;option value="LA"&gt;Lao People's Democratic Republic&lt;/option&gt;
              &lt;option value="LV"&gt;Latvia&lt;/option&gt;
              &lt;option value="LB"&gt;Lebanon&lt;/option&gt;
              &lt;option value="LS"&gt;Lesotho&lt;/option&gt;
              &lt;option value="LR"&gt;Liberia&lt;/option&gt;
              &lt;option value="LY"&gt;Libya&lt;/option&gt;
              &lt;option value="LI"&gt;Liechtenstein&lt;/option&gt;
              &lt;option value="LT"&gt;Lithuania&lt;/option&gt;
              &lt;option value="LU"&gt;Luxembourg&lt;/option&gt;
              &lt;option value="MO"&gt;Macao&lt;/option&gt;
              &lt;option value="MK"&gt;Macedonia, the former Yugoslav Republic of&lt;/option&gt;
              &lt;option value="MG"&gt;Madagascar&lt;/option&gt;
              &lt;option value="MW"&gt;Malawi&lt;/option&gt;
              &lt;option value="MY"&gt;Malaysia&lt;/option&gt;
              &lt;option value="MV"&gt;Maldives&lt;/option&gt;
              &lt;option value="ML"&gt;Mali&lt;/option&gt;
              &lt;option value="MT"&gt;Malta&lt;/option&gt;
              &lt;option value="MH"&gt;Marshall Islands&lt;/option&gt;
              &lt;option value="MQ"&gt;Martinique&lt;/option&gt;
              &lt;option value="MR"&gt;Mauritania&lt;/option&gt;
              &lt;option value="MU"&gt;Mauritius&lt;/option&gt;
              &lt;option value="YT"&gt;Mayotte&lt;/option&gt;
              &lt;option value="MX"&gt;Mexico&lt;/option&gt;
              &lt;option value="FM"&gt;Micronesia, Federated States of&lt;/option&gt;
              &lt;option value="MD"&gt;Moldova, Republic of&lt;/option&gt;
              &lt;option value="MC"&gt;Monaco&lt;/option&gt;
              &lt;option value="MN"&gt;Mongolia&lt;/option&gt;
              &lt;option value="ME"&gt;Montenegro&lt;/option&gt;
              &lt;option value="MS"&gt;Montserrat&lt;/option&gt;
              &lt;option value="MA"&gt;Morocco&lt;/option&gt;
              &lt;option value="MZ"&gt;Mozambique&lt;/option&gt;
              &lt;option value="MM"&gt;Myanmar&lt;/option&gt;
              &lt;option value="NA"&gt;Namibia&lt;/option&gt;
              &lt;option value="NR"&gt;Nauru&lt;/option&gt;
              &lt;option value="NP"&gt;Nepal&lt;/option&gt;
              &lt;option value="NL"&gt;Netherlands&lt;/option&gt;
              &lt;option value="NC"&gt;New Caledonia&lt;/option&gt;
              &lt;option value="NZ"&gt;New Zealand&lt;/option&gt;
              &lt;option value="NI"&gt;Nicaragua&lt;/option&gt;
              &lt;option value="NE"&gt;Niger&lt;/option&gt;
              &lt;option value="NG"&gt;Nigeria&lt;/option&gt;
              &lt;option value="NU"&gt;Niue&lt;/option&gt;
              &lt;option value="NF"&gt;Norfolk Island&lt;/option&gt;
              &lt;option value="MP"&gt;Northern Mariana Islands&lt;/option&gt;
              &lt;option value="NO"&gt;Norway&lt;/option&gt;
              &lt;option value="OM"&gt;Oman&lt;/option&gt;
              &lt;option value="PK"&gt;Pakistan&lt;/option&gt;
              &lt;option value="PW"&gt;Palau&lt;/option&gt;
              &lt;option value="PS"&gt;Palestinian Territory, Occupied&lt;/option&gt;
              &lt;option value="PA"&gt;Panama&lt;/option&gt;
              &lt;option value="PG"&gt;Papua New Guinea&lt;/option&gt;
              &lt;option value="PY"&gt;Paraguay&lt;/option&gt;
              &lt;option value="PE"&gt;Peru&lt;/option&gt;
              &lt;option value="PH"&gt;Philippines&lt;/option&gt;
              &lt;option value="PN"&gt;Pitcairn&lt;/option&gt;
              &lt;option value="PL"&gt;Poland&lt;/option&gt;
              &lt;option value="PT"&gt;Portugal&lt;/option&gt;
              &lt;option value="PR"&gt;Puerto Rico&lt;/option&gt;
              &lt;option value="QA"&gt;Qatar&lt;/option&gt;
              &lt;option value="RE"&gt;Réunion&lt;/option&gt;
              &lt;option value="RO"&gt;Romania&lt;/option&gt;
              &lt;option value="RU"&gt;Russian Federation&lt;/option&gt;
              &lt;option value="RW"&gt;Rwanda&lt;/option&gt;
              &lt;option value="BL"&gt;Saint Barthélemy&lt;/option&gt;
              &lt;option value="SH"&gt;Saint Helena, Ascension and Tristan da Cunha&lt;/option&gt;
              &lt;option value="KN"&gt;Saint Kitts and Nevis&lt;/option&gt;
              &lt;option value="LC"&gt;Saint Lucia&lt;/option&gt;
              &lt;option value="MF"&gt;Saint Martin (French part)&lt;/option&gt;
              &lt;option value="PM"&gt;Saint Pierre and Miquelon&lt;/option&gt;
              &lt;option value="VC"&gt;Saint Vincent and the Grenadines&lt;/option&gt;
              &lt;option value="WS"&gt;Samoa&lt;/option&gt;
              &lt;option value="SM"&gt;San Marino&lt;/option&gt;
              &lt;option value="ST"&gt;Sao Tome and Principe&lt;/option&gt;
              &lt;option value="SA"&gt;Saudi Arabia&lt;/option&gt;
              &lt;option value="SN"&gt;Senegal&lt;/option&gt;
              &lt;option value="RS"&gt;Serbia&lt;/option&gt;
              &lt;option value="SC"&gt;Seychelles&lt;/option&gt;
              &lt;option value="SL"&gt;Sierra Leone&lt;/option&gt;
              &lt;option value="SG"&gt;Singapore&lt;/option&gt;
              &lt;option value="SX"&gt;Sint Maarten (Dutch part)&lt;/option&gt;
              &lt;option value="SK"&gt;Slovakia&lt;/option&gt;
              &lt;option value="SI"&gt;Slovenia&lt;/option&gt;
              &lt;option value="SB"&gt;Solomon Islands&lt;/option&gt;
              &lt;option value="SO"&gt;Somalia&lt;/option&gt;
              &lt;option value="ZA"&gt;South Africa&lt;/option&gt;
              &lt;option value="GS"&gt;South Georgia and the South Sandwich Islands&lt;/option&gt;
              &lt;option value="SS"&gt;South Sudan&lt;/option&gt;
              &lt;option value="ES"&gt;Spain&lt;/option&gt;
              &lt;option value="LK"&gt;Sri Lanka&lt;/option&gt;
              &lt;option value="SD"&gt;Sudan&lt;/option&gt;
              &lt;option value="SR"&gt;Suriname&lt;/option&gt;
              &lt;option value="SJ"&gt;Svalbard and Jan Mayen&lt;/option&gt;
              &lt;option value="SZ"&gt;Swaziland&lt;/option&gt;
              &lt;option value="SE"&gt;Sweden&lt;/option&gt;
              &lt;option value="CH"&gt;Switzerland&lt;/option&gt;
              &lt;option value="SY"&gt;Syrian Arab Republic&lt;/option&gt;
              &lt;option value="TW"&gt;Taiwan, Province of China&lt;/option&gt;
              &lt;option value="TJ"&gt;Tajikistan&lt;/option&gt;
              &lt;option value="TZ"&gt;Tanzania, United Republic of&lt;/option&gt;
              &lt;option value="TH"&gt;Thailand&lt;/option&gt;
              &lt;option value="TL"&gt;Timor-Leste&lt;/option&gt;
              &lt;option value="TG"&gt;Togo&lt;/option&gt;
              &lt;option value="TK"&gt;Tokelau&lt;/option&gt;
              &lt;option value="TO"&gt;Tonga&lt;/option&gt;
              &lt;option value="TT"&gt;Trinidad and Tobago&lt;/option&gt;
              &lt;option value="TN"&gt;Tunisia&lt;/option&gt;
              &lt;option value="TR"&gt;Turkey&lt;/option&gt;
              &lt;option value="TM"&gt;Turkmenistan&lt;/option&gt;
              &lt;option value="TC"&gt;Turks and Caicos Islands&lt;/option&gt;
              &lt;option value="TV"&gt;Tuvalu&lt;/option&gt;
              &lt;option value="UG"&gt;Uganda&lt;/option&gt;
              &lt;option value="UA"&gt;Ukraine&lt;/option&gt;
              &lt;option value="AE"&gt;United Arab Emirates&lt;/option&gt;
              &lt;option value="GB"&gt;United Kingdom&lt;/option&gt;
              &lt;option value="US" selected&gt;United States&lt;/option&gt;
              &lt;option value="UM"&gt;United States Minor Outlying Islands&lt;/option&gt;
              &lt;option value="UY"&gt;Uruguay&lt;/option&gt;
              &lt;option value="UZ"&gt;Uzbekistan&lt;/option&gt;
              &lt;option value="VU"&gt;Vanuatu&lt;/option&gt;
              &lt;option value="VE"&gt;Venezuela, Bolivarian Republic of&lt;/option&gt;
              &lt;option value="VN"&gt;Viet Nam&lt;/option&gt;
              &lt;option value="VG"&gt;Virgin Islands, British&lt;/option&gt;
              &lt;option value="VI"&gt;Virgin Islands, U.S.&lt;/option&gt;
              &lt;option value="WF"&gt;Wallis and Futuna&lt;/option&gt;
              &lt;option value="EH"&gt;Western Sahara&lt;/option&gt;
              &lt;option value="YE"&gt;Yemen&lt;/option&gt;
              &lt;option value="ZM"&gt;Zambia&lt;/option&gt;
              &lt;option value="ZW"&gt;Zimbabwe&lt;/option&gt;
             &lt;/select&gt;
             &lt;span class="form-text text-muted"&gt;You can add a search input by passing &lt;code&gt;data-live-search="true"&lt;/code&gt; attribute&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Key Words&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" data-live-search="true"&gt;
              &lt;option data-tokens="ketchup mustard"&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
              &lt;option data-tokens="mustard"&gt;Burger, Shake and a Smile&lt;/option&gt;
              &lt;option data-tokens="frosting"&gt;Sugar, Spice and all things nice&lt;/option&gt;
             &lt;/select&gt;
             &lt;span class="form-text text-muted"&gt;Add key words to options to improve their searchability using &lt;code&gt;data-tokens&lt;/code&gt;&lt;/span&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Limited Selection&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;div class="row"&gt;
              &lt;div class="col-6"&gt;
               &lt;select class="form-control selectpicker" multiple data-max-options="2" &gt;
                &lt;option&gt;Mustard&lt;/option&gt;
                &lt;option&gt;Ketchup&lt;/option&gt;
                &lt;option&gt;Relish&lt;/option&gt;
               &lt;/select&gt;
              &lt;/div&gt;
              &lt;div class="col-6"&gt;
               &lt;select class="form-control selectpicker" multiple&gt;
                &lt;optgroup label="Condiments" data-max-options="2"&gt;
                 &lt;option&gt;Mustard&lt;/option&gt;
                 &lt;option&gt;Ketchup&lt;/option&gt;
                 &lt;option&gt;Relish&lt;/option&gt;
                &lt;/optgroup&gt;
                &lt;optgroup label="Breads" data-max-options="2"&gt;
                 &lt;option&gt;Plain&lt;/option&gt;
                 &lt;option&gt;Steamed&lt;/option&gt;
                 &lt;option&gt;Toasted&lt;/option&gt;
                &lt;/optgroup&gt;
               &lt;/select&gt;
              &lt;/div&gt;
             &lt;/div&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Placeholder&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" title="Choose one of the following..."&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Selected Text&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" title="Choose one of the following..."&gt;
              &lt;option title="Combo 1"&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
              &lt;option title="Combo 2" selected&gt;Burger, Shake and a Smile&lt;/option&gt;
              &lt;option title="Combo 3"&gt;Sugar, Spice and all things nice&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Selected Text Format&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" multiple data-selected-text-format="count"&gt;
              &lt;option title="Combo 1"&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
              &lt;option title="Combo 2"&gt;Burger, Shake and a Smile&lt;/option&gt;
              &lt;option title="Combo 3" selected&gt;Sugar, Spice and all things nice&lt;/option&gt;
             &lt;/select&gt;
             &lt;div class="mt-2"&gt;&lt;/div&gt;
             &lt;select class="form-control selectpicker" multiple data-selected-text-format="count &gt; 3"&gt;
              &lt;option title="Combo 1" selected&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
              &lt;option title="Combo 2"&gt;Burger, Shake and a Smile&lt;/option&gt;
              &lt;option title="Combo 3"&gt;Sugar, Spice and all things nice&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Style Options&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" title=""&gt;
              &lt;option class="bg-success text-light-success"&gt;Mustard&lt;/option&gt;
              &lt;option class="bg-warning text-light-warning"&gt;Ketchup&lt;/option&gt;
              &lt;option class="bg-primary text-light-primary"&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Width Options&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" data-width="" title="Auto"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
             &lt;div class="mt-2"&gt;&lt;/div&gt;
             &lt;select class="form-control selectpicker" data-width="200px" title="Fixed: 200px"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
             &lt;div class="mt-2"&gt;&lt;/div&gt;
             &lt;select class="form-control selectpicker" data-width="75%" title="Fixed: 75%"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Icons&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker"&gt;
              &lt;option data-icon="la la-bullhorn font-size-lg bs-icon"&gt;Mustard&lt;/option&gt;
              &lt;option data-icon="la la-bookmark  font-size-lg bs-icon"&gt;Ketchup&lt;/option&gt;
              &lt;option data-icon="la la-calendar-check-o  font-size-lg bs-icon"&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Custom Content&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker"&gt;
              &lt;option data-content="&lt;span class='label label-success label-inline label-rounded'&gt;Relish&lt;/span&gt;"&gt;Mustard&lt;/option&gt;
              &lt;option data-content="&lt;span class='label label-warning label-inline label-rounded'&gt;Ketchup&lt;/span&gt;"&gt;Ketchup&lt;/option&gt;
              &lt;option data-content="&lt;span class='label label-primary label-inline label-rounded'&gt;Relish&lt;/span&gt;"&gt;Relish&lt;/option&gt;
              &lt;option data-content="&lt;span class='label label-danger label-inline label-rounded'&gt;Chili&lt;/span&gt;"&gt;Chili&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Subtext&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker"&gt;
              &lt;option data-subtext="French's"&gt;Mustard&lt;/option&gt;
              &lt;option data-subtext="Heinz"&gt;Ketchup&lt;/option&gt;
              &lt;option data-subtext="Sweet"&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Select/deselect all options&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" multiple data-actions-box="true"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
              &lt;option&gt;Mayonnaise&lt;/option&gt;
              &lt;option&gt;Barbecue Sauce&lt;/option&gt;
              &lt;option&gt;Salad Dressing&lt;/option&gt;
              &lt;option&gt;Tabasco&lt;/option&gt;
              &lt;option&gt;Salsa&lt;/option&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
              &lt;option&gt;Mayonnaise&lt;/option&gt;
              &lt;option&gt;Barbecue Sauce&lt;/option&gt;
              &lt;option&gt;Salad Dressing&lt;/option&gt;
              &lt;option&gt;Tabasco&lt;/option&gt;
              &lt;option&gt;Salsa&lt;/option&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
              &lt;option&gt;Mayonnaise&lt;/option&gt;
              &lt;option&gt;Barbecue Sauce&lt;/option&gt;
              &lt;option&gt;Salad Dressing&lt;/option&gt;
              &lt;option&gt;Tabasco&lt;/option&gt;
              &lt;option&gt;Salsa&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Divider&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker"&gt;
              &lt;option data-subtext="French's"&gt;Mustard&lt;/option&gt;
              &lt;option data-subtext="Heinz"&gt;Ketchup&lt;/option&gt;
              &lt;option data-divider="true" label="Label"&gt;&lt;/option&gt;
              &lt;option data-subtext="Sweet"&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Menu Header&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" data-header="Select an option"&gt;
              &lt;option data-subtext="French's"&gt;Mustard&lt;/option&gt;
              &lt;option data-subtext="Heinz"&gt;Ketchup&lt;/option&gt;
              &lt;option data-subtext="Sweet"&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Disabled&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" disabled&gt;
              &lt;option data-subtext="French's"&gt;Mustard&lt;/option&gt;
              &lt;option data-subtext="Heinz"&gt;Ketchup&lt;/option&gt;
              &lt;option data-subtext="Sweet"&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Disabled Options&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker"&gt;
              &lt;option data-subtext="French's"&gt;Mustard&lt;/option&gt;
              &lt;option data-subtext="Heinz" disabled&gt;Ketchup&lt;/option&gt;
              &lt;option data-subtext="Sweet"&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Button States&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;select class="form-control selectpicker" title="Success" data-style="btn-success"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
             &lt;div class="mt-2"&gt;&lt;/div&gt;
             &lt;select class="form-control selectpicker" title="Warning" data-style="btn-warning"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
             &lt;div class="mt-2"&gt;&lt;/div&gt;
             &lt;select class="form-control selectpicker" title="Danger" data-style="btn-danger"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
             &lt;div class="mt-2"&gt;&lt;/div&gt;
             &lt;select class="form-control selectpicker" title="primary" data-style="btn-primary"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
             &lt;div class="mt-2"&gt;&lt;/div&gt;
             &lt;select class="form-control selectpicker" title="Primary" data-style="btn-primary"&gt;
              &lt;option&gt;Mustard&lt;/option&gt;
              &lt;option&gt;Ketchup&lt;/option&gt;
              &lt;option&gt;Relish&lt;/option&gt;
             &lt;/select&gt;
            &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="form-group row"&gt;
            &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Modal Demos&lt;/label&gt;
            &lt;div class="col-lg-4 col-md-9 col-sm-12"&gt;
             &lt;a href="" class="btn btn-light-success font-weight-bold" data-toggle="modal" data-target="#kt_select_modal"&gt;Launch modal examples&lt;/a&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="card-footer"&gt;
           &lt;div class="row"&gt;
            &lt;div class="col-lg-9 ml-lg-auto"&gt;
             &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
             &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/form&gt;
         &lt;!--end::Form--&gt;
        &lt;/div&gt;
       </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_js">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
       // Class definition

       var KTBootstrapSelect = function () {

        // Private functions
        var demos = function () {
         // minimum setup
         $('.kt-selectpicker').selectpicker();
        }

        return {
         // public functions
         init: function() {
          demos();
         }
        };
       }();

       jQuery(document).ready(function() {
        KTBootstrapSelect.init();
       });
       </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>
                                    <b>Relish</b>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>
                                    <b>Relish</b>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Options Size</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-size="4">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                                <option>Tent</option>
                                <option>Flashlight</option>
                                <option>Toilet Paper</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Optgroups Example</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <optgroup label="Picnic" data-max-options="2">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </optgroup>
                                <optgroup label="Camping" data-max-options="2">
                                    <option>Tent</option>
                                    <option>Flashlight</option>
                                    <option>Toilet Paper</option>
                                </optgroup>
                            </select>
                            <span class="form-text text-muted">Select boxes with optgroups</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Multiple Select</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" multiple="multiple">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Live Cari</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-size="7" data-live-search="true">
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
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
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
                                <option value="BO">Bolivia, Plurinational State of</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
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
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
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
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
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
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
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
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
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
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" selected="selected">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            <span class="form-text text-muted">You can add a search input by passing
                                <code>data-live-search="true"</code>attribute</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Key Words</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-live-search="true">
                                <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                            </select>
                            <span class="form-text text-muted">Add key words to options to improve their searchability
                                using
                                <code>data-tokens</code></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Limited Selection</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-control selectpicker" multiple="multiple" data-max-options="2">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select class="form-control selectpicker" multiple="multiple">
                                        <optgroup label="Condiments" data-max-options="2">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Breads" data-max-options="2">
                                            <option>Plain</option>
                                            <option>Steamed</option>
                                            <option>Toasted</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Placeholder</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" title="Choose one of the following...">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Selected Text</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" title="Choose one of the following...">
                                <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                                <option title="Combo 2" selected="selected">Burger, Shake and a Smile</option>
                                <option title="Combo 3">Sugar, Spice and all things nice</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Selected Text Format</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" multiple="multiple"
                                data-selected-text-format="count">
                                <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                                <option title="Combo 2">Burger, Shake and a Smile</option>
                                <option title="Combo 3" selected="selected">Sugar, Spice and all things nice</option>
                            </select>
                            <div class="mt-2"></div>
                            <select class="form-control selectpicker" multiple="multiple"
                                data-selected-text-format="count &gt; 3">
                                <option title="Combo 1" selected="selected">Hot Dog, Fries and a Soda</option>
                                <option title="Combo 2">Burger, Shake and a Smile</option>
                                <option title="Combo 3">Sugar, Spice and all things nice</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Style Options</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" title="">
                                <option class="bg-success text-light-success">Mustard</option>
                                <option class="bg-warning text-light-warning">Ketchup</option>
                                <option class="bg-primary text-light-primary">Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Width Options</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-width="" title="Auto">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="mt-2"></div>
                            <select class="form-control selectpicker" data-width="200px" title="Fixed: 200px">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="mt-2"></div>
                            <select class="form-control selectpicker" data-width="75%" title="Fixed: 75%">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Icons</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <option data-icon="la la-bullhorn font-size-lg bs-icon">Mustard</option>
                                <option data-icon="la la-bookmark font-size-lg bs-icon">Ketchup</option>
                                <option data-icon="la la-calendar-check-o font-size-lg bs-icon">Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Custom Content</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <option
                                    data-content="&lt;span class='label label-success label-inline label-rounded'&gt;Relish&lt;/span&gt;">
                                    Mustard</option>
                                <option
                                    data-content="&lt;span class='label label-warning label-inline label-rounded'&gt;Ketchup&lt;/span&gt;">
                                    Ketchup</option>
                                <option
                                    data-content="&lt;span class='label label-primary label-inline label-rounded'&gt;Relish&lt;/span&gt;">
                                    Relish</option>
                                <option
                                    data-content="&lt;span class='label label-danger label-inline label-rounded'&gt;Chili&lt;/span&gt;">
                                    Chili</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Subtext</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <option data-subtext="French's">Mustard</option>
                                <option data-subtext="Heinz">Ketchup</option>
                                <option data-subtext="Sweet">Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Select/deselect all options</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" multiple="multiple" data-actions-box="true">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                                <option>Mayonnaise</option>
                                <option>Barbecue Sauce</option>
                                <option>Salad Dressing</option>
                                <option>Tabasco</option>
                                <option>Salsa</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                                <option>Mayonnaise</option>
                                <option>Barbecue Sauce</option>
                                <option>Salad Dressing</option>
                                <option>Tabasco</option>
                                <option>Salsa</option>
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                                <option>Mayonnaise</option>
                                <option>Barbecue Sauce</option>
                                <option>Salad Dressing</option>
                                <option>Tabasco</option>
                                <option>Salsa</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Divider</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <option data-subtext="French's">Mustard</option>
                                <option data-subtext="Heinz">Ketchup</option>
                                <option data-divider="true" label="Label"></option>
                                <option data-subtext="Sweet">Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Menu Header</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-header="Select an option">
                                <option data-subtext="French's">Mustard</option>
                                <option data-subtext="Heinz">Ketchup</option>
                                <option data-subtext="Sweet">Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Disabled</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" disabled="disabled">
                                <option data-subtext="French's">Mustard</option>
                                <option data-subtext="Heinz">Ketchup</option>
                                <option data-subtext="Sweet">Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Disabled Options</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker">
                                <option data-subtext="French's">Mustard</option>
                                <option data-subtext="Heinz" disabled="disabled">Ketchup</option>
                                <option data-subtext="Sweet">Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Button States</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" title="Success" data-style="btn-success">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="mt-2"></div>
                            <select class="form-control selectpicker" title="Warning" data-style="btn-warning">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="mt-2"></div>
                            <select class="form-control selectpicker" title="Danger" data-style="btn-danger">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="mt-2"></div>
                            <select class="form-control selectpicker" title="primary" data-style="btn-primary">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="mt-2"></div>
                            <select class="form-control selectpicker" title="Primary" data-style="btn-primary">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Modal Demos</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <a href="" class="btn btn-light-success font-weight-bold" data-toggle="modal"
                                data-target="#kt_select_modal">Launch modal examples</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="reset" class="btn btn-primary mr-2">Kirim</button>
                            <button type="reset" class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
        <!--begin::Modal-->
        <div class="modal fade" id="kt_select_modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bootstrap Touchspin Examples</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Standard Input</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" value="Some value" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control selectpicker">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Optgroups Example</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control selectpicker">
                                        <optgroup label="Picnic" data-max-options="2">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping" data-max-options="2">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>
                                    <span class="form-text text-muted">Select boxes with optgroups</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Multiple Select</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control selectpicker" multiple="multiple">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">Live Cari</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <select class="form-control selectpicker" data-size="5" data-live-search="true">
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
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
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
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
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
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
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
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
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
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
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
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
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
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US" selected="selected">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                    <span class="form-text text-muted">You can add a search input by passing
                                        <code>data-live-search="true"</code>attribute</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Modal-->
        <!--begin::Card-->
        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">Validation State Examples</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
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
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;div class="card-title"&gt;
          &lt;h3 class="card-title"&gt;
           Validation State Examples
          &lt;/h3&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Success State&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12 validate"&gt;
            &lt;select class="form-control is-valid selectpicker"&gt;
             &lt;option&gt;Mustard&lt;/option&gt;
             &lt;option&gt;Ketchup&lt;/option&gt;
             &lt;option&gt;Relish&lt;/option&gt;
            &lt;/select&gt;
            &lt;div class="valid-feedback"&gt;Success! You've done it.&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label class="col-form-label text-right col-lg-3 col-sm-12"&gt;Warning State&lt;/label&gt;
           &lt;div class="col-lg-4 col-md-9 col-sm-12 validate"&gt;
            &lt;select class="form-control is-invalid selectpicker"&gt;
             &lt;option&gt;Mustard&lt;/option&gt;
             &lt;option&gt;Ketchup&lt;/option&gt;
             &lt;option&gt;Relish&lt;/option&gt;
            &lt;/select&gt;
            &lt;div class="invalid-feedback"&gt;Shucks, check the formatting of that and try again.&lt;/div&gt;
            &lt;span class="form-text text-muted"&gt;Example help text that remains unchanged.&lt;/span&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-lg-9 ml-lg-auto"&gt;
            &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                </div>
                            </div>
                            <div class="tab-pane" id="example_code_js2">
                                <div class="example-highlight">
                                    <pre style="height:400px">
<code class="language-js">
      // Class definition

      var KTBootstrapSelect = function () {

       // Private functions
       var demos = function () {
        // minimum setup
        $('.kt-selectpicker').selectpicker();
       }

       return {
        // public functions
        init: function() {
         demos();
        }
       };
      }();

      jQuery(document).ready(function() {
       KTBootstrapSelect.init();
      });
      </code>
</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Code-->
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Success State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 validate">
                            <select class="form-control is-valid selectpicker">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="valid-feedback">Success! You've done it.</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Warning State</label>
                        <div class="col-lg-4 col-md-9 col-sm-12 validate">
                            <select class="form-control is-invalid selectpicker">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select>
                            <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                            <span class="form-text text-muted">Example help text that remains unchanged.</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
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
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-select.js') }}"></script>
@endsection
