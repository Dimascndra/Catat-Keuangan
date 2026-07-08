@extends('layouts.index')
@section('styles')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
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
                Datatables
            @endslot
            @slot('li_3')
                Extensions
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
            <div class="alert-text">RowGroup adds this ability to DataTables with the ability to customise the start and end
                grouping rows displayed in the DataTable, letting you integrate the summarised data to fit perfectly in with
                your site. See official documentation
                <a class="font-weight-bold" href="https://datatables.net/extensions/rowgroup/" target="_blank">here</a>.
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-gift text-primary"></i>
                    </span>
                    <h3 class="card-label">RowGroup DataTable</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Export</button>
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi flex-column navi-hover py-2">
                                <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                    Choose an option:</li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-print"></i>
                                        </span>
                                        <span class="navi-text">Print</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-copy"></i>
                                        </span>
                                        <span class="navi-text">Copy</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-excel-o"></i>
                                        </span>
                                        <span class="navi-text">Excel</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-text-o"></i>
                                        </span>
                                        <span class="navi-text">CSV</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-pdf-o"></i>
                                        </span>
                                        <span class="navi-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <!--end::Dropdown-->
                    <!--begin::Button-->
                    <a href="#" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path
                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>New Record</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable" id="kt_datatable"
                    style="margin-top: 13px !important;">
                    <thead>
                        <tr>
                            <th>Record ID</th>
                            <th>Order ID</th>
                            <th>Country</th>
                            <th>Ship City</th>
                            <th>Ship Address</th>
                            <th>Company Agent</th>
                            <th>Company Name</th>
                            <th>Ship Tanggal</th>
                            <th>Status</th>
                            <th>Tipe</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>322</td>
                            <td>0338-1009</td>
                            <td>Brazil</td>
                            <td>Osasco</td>
                            <td>002 Menomonie Crossing</td>
                            <td>Keith Lukesch</td>
                            <td>Hand-Kemmer</td>
                            <td>1/13/2017</td>
                            <td>6</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>328</td>
                            <td>59886-308</td>
                            <td>Brazil</td>
                            <td>Franca</td>
                            <td>57273 Dryden Trail</td>
                            <td>Edmund Labitt</td>
                            <td>Gibson, Hamill and Abbott</td>
                            <td>2/6/2017</td>
                            <td>2</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>154</td>
                            <td>60760-278</td>
                            <td>Brazil</td>
                            <td>Blumenau</td>
                            <td>4672 Pawling Park</td>
                            <td>Ivett Faldo</td>
                            <td>Bogan and Sons</td>
                            <td>12/11/2017</td>
                            <td>5</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>64616-103</td>
                            <td>Brazil</td>
                            <td>São Félix do Xingu</td>
                            <td>698 Oriole Pass</td>
                            <td>Hayes Boule</td>
                            <td>Casper-Kerluke</td>
                            <td>10/15/2017</td>
                            <td>5</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>226</td>
                            <td>55111-125</td>
                            <td>Brazil</td>
                            <td>Joinville</td>
                            <td>7645 Marquette Alley</td>
                            <td>Luce Hindshaw</td>
                            <td>Tromp-Langosh</td>
                            <td>12/7/2017</td>
                            <td>3</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>140</td>
                            <td>49035-441</td>
                            <td>Brazil</td>
                            <td>Seabra</td>
                            <td>4858 5th Lane</td>
                            <td>Ware Schuler</td>
                            <td>Ritchie LLC</td>
                            <td>1/29/2016</td>
                            <td>1</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>0869-0434</td>
                            <td>Brazil</td>
                            <td>Jaciara</td>
                            <td>9477 Cardinal Street</td>
                            <td>Daniela Casine</td>
                            <td>Ortiz-Wuckert</td>
                            <td>7/31/2016</td>
                            <td>4</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>191</td>
                            <td>30142-980</td>
                            <td>Brazil</td>
                            <td>Cafarnaum</td>
                            <td>57 Valley Edge Road</td>
                            <td>Lilla Espino</td>
                            <td>Luettgen, Witting and Ratke</td>
                            <td>6/6/2017</td>
                            <td>5</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>173</td>
                            <td>53014-580</td>
                            <td>Brazil</td>
                            <td>Marau</td>
                            <td>3120 Jenna Court</td>
                            <td>Pippa Castelletto</td>
                            <td>Howell, Pfannerstill and Gottlieb</td>
                            <td>6/22/2016</td>
                            <td>3</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>283</td>
                            <td>51672-2073</td>
                            <td>Brazil</td>
                            <td>Monte Alto</td>
                            <td>870 Carioca Plaza</td>
                            <td>Alanson Beloe</td>
                            <td>Medhurst LLC</td>
                            <td>7/11/2017</td>
                            <td>4</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>249</td>
                            <td>55891-002</td>
                            <td>Brazil</td>
                            <td>Palmital</td>
                            <td>50 Melby Circle</td>
                            <td>Fraser Crichmere</td>
                            <td>Parisian, Koelpin and Abshire</td>
                            <td>7/31/2016</td>
                            <td>3</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>167</td>
                            <td>63517-160</td>
                            <td>Brazil</td>
                            <td>Araras</td>
                            <td>14366 Sunnyside Road</td>
                            <td>Maiga Moorcraft</td>
                            <td>Quitzon-Denesik</td>
                            <td>8/6/2017</td>
                            <td>4</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>180</td>
                            <td>66949-112</td>
                            <td>Bulgaria</td>
                            <td>Topolovgrad</td>
                            <td>000 Ronald Regan Hill</td>
                            <td>Dewie Stanyforth</td>
                            <td>Effertz, Wunsch and Champlin</td>
                            <td>8/22/2016</td>
                            <td>6</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>291</td>
                            <td>49999-849</td>
                            <td>Burkina Faso</td>
                            <td>Sapouy</td>
                            <td>656 Toban Trail</td>
                            <td>Jephthah Munnery</td>
                            <td>Deckow, Rau and Wilkinson</td>
                            <td>11/30/2017</td>
                            <td>1</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>276</td>
                            <td>65841-656</td>
                            <td>Canada</td>
                            <td>Daveluyville</td>
                            <td>83781 Summer Ridge Hill</td>
                            <td>Candice Aaronsohn</td>
                            <td>Crona, Pfeffer and Jacobson</td>
                            <td>11/28/2016</td>
                            <td>5</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>59528-4456</td>
                            <td>Canada</td>
                            <td>Melfort</td>
                            <td>141 Aberg Pass</td>
                            <td>Arlie Larking</td>
                            <td>Rosenbaum Group</td>
                            <td>7/7/2017</td>
                            <td>4</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>232</td>
                            <td>55154-0611</td>
                            <td>Canada</td>
                            <td>Beaconsfield</td>
                            <td>642 Prentice Alley</td>
                            <td>L;urette Huckin</td>
                            <td>Emard-Adams</td>
                            <td>3/11/2016</td>
                            <td>1</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>250</td>
                            <td>58975-022</td>
                            <td>Canada</td>
                            <td>Swan Hills</td>
                            <td>44 Kennedy Drive</td>
                            <td>Cazzie Mardy</td>
                            <td>Rohan-Keeling</td>
                            <td>11/20/2016</td>
                            <td>1</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>122</td>
                            <td>51143-966</td>
                            <td>Canada</td>
                            <td>Casselman</td>
                            <td>95030 Waywood Alley</td>
                            <td>Ignacius Coulbeck</td>
                            <td>Abbott-Jacobs</td>
                            <td>10/21/2016</td>
                            <td>1</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>179</td>
                            <td>75854-202</td>
                            <td>Canada</td>
                            <td>Stettler</td>
                            <td>895 Aberg Street</td>
                            <td>Isa Lundie</td>
                            <td>Schumm LLC</td>
                            <td>4/22/2017</td>
                            <td>4</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>228</td>
                            <td>41167-0968</td>
                            <td>Chile</td>
                            <td>San Clemente</td>
                            <td>94915 Marquette Street</td>
                            <td>Robers Usherwood</td>
                            <td>Hirthe, Baumbach and Crona</td>
                            <td>7/29/2016</td>
                            <td>4</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>52686-288</td>
                            <td>Chile</td>
                            <td>San Carlos</td>
                            <td>6915 Mifflin Terrace</td>
                            <td>Patrizio Pinnion</td>
                            <td>Haag-Stokes</td>
                            <td>10/7/2016</td>
                            <td>2</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>206</td>
                            <td>65643-327</td>
                            <td>Chile</td>
                            <td>Tomé</td>
                            <td>53 Annamark Circle</td>
                            <td>Justinian McKenny</td>
                            <td>Runolfsson-Conn</td>
                            <td>11/16/2016</td>
                            <td>1</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>68428-046</td>
                            <td>China</td>
                            <td>Beishan</td>
                            <td>06022 Hoffman Way</td>
                            <td>Cornie Duff</td>
                            <td>Schimmel, Williamson and Heller</td>
                            <td>5/11/2017</td>
                            <td>1</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>67046-271</td>
                            <td>China</td>
                            <td>Sanhe</td>
                            <td>537 Graceland Park</td>
                            <td>Kiley MacTerlagh</td>
                            <td>Hauck Inc</td>
                            <td>6/9/2017</td>
                            <td>2</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>181</td>
                            <td>66993-055</td>
                            <td>China</td>
                            <td>Xinshiba</td>
                            <td>4322 Judy Crossing</td>
                            <td>Buddy Staddon</td>
                            <td>Prohaska-Treutel</td>
                            <td>10/5/2016</td>
                            <td>5</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>190</td>
                            <td>59779-314</td>
                            <td>China</td>
                            <td>Changgang</td>
                            <td>06 Northview Circle</td>
                            <td>Fabe Meek</td>
                            <td>Littel Inc</td>
                            <td>2/6/2016</td>
                            <td>1</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>203</td>
                            <td>98132-744</td>
                            <td>China</td>
                            <td>Chengbei</td>
                            <td>42641 Arapahoe Terrace</td>
                            <td>Ora Zanassi</td>
                            <td>Klein, Lang and Stroman</td>
                            <td>6/25/2016</td>
                            <td>4</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td>21695-935</td>
                            <td>China</td>
                            <td>Bamencheng</td>
                            <td>1531 Fulton Crossing</td>
                            <td>Cece Conville</td>
                            <td>Kessler and Sons</td>
                            <td>7/21/2017</td>
                            <td>2</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>63402-193</td>
                            <td>China</td>
                            <td>Xibin</td>
                            <td>9 Duke Point</td>
                            <td>Augustin Jouannisson</td>
                            <td>Witting, Reilly and Morar</td>
                            <td>7/3/2016</td>
                            <td>3</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>60681-2104</td>
                            <td>China</td>
                            <td>Shangdu</td>
                            <td>61653 Welch Trail</td>
                            <td>Blisse Coleborn</td>
                            <td>Bailey, Windler and Marquardt</td>
                            <td>5/15/2017</td>
                            <td>6</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>244</td>
                            <td>66993-877</td>
                            <td>China</td>
                            <td>Dalai</td>
                            <td>8 Rutledge Road</td>
                            <td>Tally Burtwhistle</td>
                            <td>Gusikowski-Berge</td>
                            <td>5/27/2016</td>
                            <td>1</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>256</td>
                            <td>76209-123</td>
                            <td>China</td>
                            <td>Hanban</td>
                            <td>6 Kenwood Crossing</td>
                            <td>Patricio Parslow</td>
                            <td>Klocko and Sons</td>
                            <td>5/6/2016</td>
                            <td>2</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>264</td>
                            <td>50080-001</td>
                            <td>China</td>
                            <td>Huangtan</td>
                            <td>85885 Donald Pass</td>
                            <td>Marcelle Cavozzi</td>
                            <td>Tillman Group</td>
                            <td>11/10/2016</td>
                            <td>4</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>251</td>
                            <td>65862-102</td>
                            <td>China</td>
                            <td>Haikou</td>
                            <td>10 6th Place</td>
                            <td>Lina Heintsch</td>
                            <td>Kuvalis Group</td>
                            <td>2/9/2016</td>
                            <td>6</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>349</td>
                            <td>61703-423</td>
                            <td>China</td>
                            <td>Huanglong</td>
                            <td>93 Scofield Place</td>
                            <td>Fitz Blanchard</td>
                            <td>Gorczany-O'Keefe</td>
                            <td>3/5/2016</td>
                            <td>1</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>243</td>
                            <td>68196-974</td>
                            <td>China</td>
                            <td>Yuexi</td>
                            <td>51 Morrow Park</td>
                            <td>Galvin Lamacraft</td>
                            <td>Feeney and Sons</td>
                            <td>4/20/2016</td>
                            <td>6</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>259</td>
                            <td>59779-394</td>
                            <td>China</td>
                            <td>Shuidong</td>
                            <td>8543 Anniversary Way</td>
                            <td>Raymond Gingell</td>
                            <td>Wisoky-Olson</td>
                            <td>5/10/2016</td>
                            <td>1</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>162</td>
                            <td>57344-152</td>
                            <td>China</td>
                            <td>Xinhui</td>
                            <td>9 Corben Alley</td>
                            <td>Masha Masey</td>
                            <td>Botsford-Feest</td>
                            <td>1/23/2017</td>
                            <td>2</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>277</td>
                            <td>63354-370</td>
                            <td>China</td>
                            <td>Huaqiao</td>
                            <td>42 Clyde Gallagher Street</td>
                            <td>Addie Greet</td>
                            <td>Dibbert Group</td>
                            <td>3/28/2017</td>
                            <td>4</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>301</td>
                            <td>49483-061</td>
                            <td>China</td>
                            <td>Pingtian</td>
                            <td>817 Logan Junction</td>
                            <td>Dolley Dickens</td>
                            <td>Wehner Group</td>
                            <td>6/18/2016</td>
                            <td>2</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>49999-307</td>
                            <td>China</td>
                            <td>Pinghu</td>
                            <td>1090 Orin Junction</td>
                            <td>Briant Fincher</td>
                            <td>Fisher, Williamson and Howe</td>
                            <td>12/25/2017</td>
                            <td>4</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>304</td>
                            <td>55154-0880</td>
                            <td>China</td>
                            <td>Sanxi</td>
                            <td>67 Moland Pass</td>
                            <td>Friedrich Maasz</td>
                            <td>Green LLC</td>
                            <td>1/2/2017</td>
                            <td>5</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>278</td>
                            <td>68788-9847</td>
                            <td>China</td>
                            <td>Longquan</td>
                            <td>767 Lillian Point</td>
                            <td>Malorie Emanulsson</td>
                            <td>McKenzie-Windler</td>
                            <td>2/1/2017</td>
                            <td>4</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>348</td>
                            <td>62040-1001</td>
                            <td>China</td>
                            <td>Huangtudian</td>
                            <td>28182 Rowland Way</td>
                            <td>Batholomew Stoneham</td>
                            <td>Dickens, Jast and Abernathy</td>
                            <td>12/25/2017</td>
                            <td>5</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>67457-358</td>
                            <td>China</td>
                            <td>Ditang</td>
                            <td>2 Bluejay Junction</td>
                            <td>Sharona Schirach</td>
                            <td>Funk LLC</td>
                            <td>11/23/2016</td>
                            <td>3</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>55154-6876</td>
                            <td>China</td>
                            <td>Jiannan</td>
                            <td>8 Muir Drive</td>
                            <td>Krishnah Tosspell</td>
                            <td>Prosacco-Kessler</td>
                            <td>2/5/2016</td>
                            <td>1</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>342</td>
                            <td>58411-131</td>
                            <td>China</td>
                            <td>Chenhu</td>
                            <td>3403 Heffernan Lane</td>
                            <td>Linn Richten</td>
                            <td>D'Amore-Block</td>
                            <td>9/4/2016</td>
                            <td>2</td>
                            <td>2</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>15370-110</td>
                            <td>China</td>
                            <td>Caijiang</td>
                            <td>2 Mariners Cove Way</td>
                            <td>Kerianne Axelbey</td>
                            <td>Wolff, Sporer and Bechtelar</td>
                            <td>2/20/2016</td>
                            <td>6</td>
                            <td>1</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                        <tr>
                            <td>275</td>
                            <td>68084-003</td>
                            <td>China</td>
                            <td>Chuanxi</td>
                            <td>91 Pleasure Drive</td>
                            <td>Cybill Deny</td>
                            <td>Littel, Ankunding and Abernathy</td>
                            <td>5/28/2016</td>
                            <td>3</td>
                            <td>3</td>
                            <td nowrap="nowrap"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Record ID</th>
                            <th>Order ID</th>
                            <th>Country</th>
                            <th>Ship City</th>
                            <th>Ship Address</th>
                            <th>Company Agent</th>
                            <th>Company Name</th>
                            <th>Ship Tanggal</th>
                            <th>Status</th>
                            <th>Tipe</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@endsection
@section('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/datatables/extensions/rowgroup.js') }}"></script>
@endsection
