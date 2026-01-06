<!--begin::Aside-->
<div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">

    <!--begin::Brand-->
    <div class="brand flex-column-auto " id="kt_brand">

        <!--begin::Logo-->
        <a href="/dashboard" class="brand-logo">
            @if (!empty($isLight) && $isLight === true)
                <img alt="Logo" src="assets/media/logos/logo-dark.png" />
            @else
                <img alt="Logo" src="assets/media/logos/logo-light.png" />
            @endif
        </a>

        <!--end::Logo-->

        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">

                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#000000" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                    </g>
                </svg>

                <!--end::Svg Icon-->
            </span>
        </button>

        <!--end::Toolbar-->
    </div>

    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">

            <!--begin::Menu Nav-->
            <ul class="menu-nav ">
                <li class="menu-item {{ request()->routeIs('dashboard') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="/dashboard" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span></a>
                </li>

                <li class="menu-item menu-item-submenu {{ request()->routeIs('reports.*') ? 'menu-item-open menu-item-active' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                        fill="#000000" />
                                    <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2"
                                        rx="1" />
                                    <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2"
                                        rx="1" />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Laporan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Laporan</span>
                                </span>
                            </li>
                            <li class="menu-item {{ request()->routeIs('reports.daily') ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('reports.daily') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Harian</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('reports.weekly') ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('reports.weekly') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Mingguan</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('reports.monthly') ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('reports.monthly') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Bulanan</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('reports.yearly') ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('reports.yearly') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tahunan</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('reports.category') ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('reports.category') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Kategori</span>
                                </a>
                            </li>
                            <li class="menu-item {{ request()->routeIs('reports.mutation') ? 'menu-item-active' : '' }}"
                                aria-haspopup="true">
                                <a href="{{ route('reports.mutation') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Mutasi Saldo</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ request()->routeIs('incomes.*') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('incomes.index') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Dollar.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4"
                                        rx="1"></rect>
                                    <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2"
                                        height="5" rx="1"></rect>
                                    <path
                                        d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Incomes</span>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('expenses.*') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('expenses.index') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Wallet.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5">
                                    </circle>
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                        x="3" y="3" width="18" height="7" rx="1"></rect>
                                    <path
                                        d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Expenses</span>
                    </a>
                </li>


                <!-- Wallets Menu -->
                <li class="menu-item {{ request()->routeIs('wallets.*') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('wallets.index') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M15.653524,11.5 L12,16.5 L8.346476,11.5 L15.653524,11.5 Z"
                                        fill="#000000" />
                                    <path
                                        d="M19.166348,7.91505671 L12.0150567,14.606348 C11.4589255,15.1278152 10.583348,15.110698 10.046348,14.569348 L3.51505671,7.98505671 C3.17830601,7.64560759 3.03367175,7.16422891 3.12517865,6.696348 C3.21668555,6.22846708 3.53303683,5.83063529 3.97541617,5.62663952 C4.41779551,5.42264375 4.93172081,5.43851086 5.3601552,5.66905671 L12.0150567,9.256348 L18.6699583,5.66905671 C19.0983927,5.43851086 19.612318,5.42264375 20.0546973,5.62663952 C20.4970767,5.83063529 20.813428,6.22846708 20.9049349,6.696348 C20.9964418,7.16422891 20.8518075,7.64560759 20.5150567,7.98505671 L19.166348,7.91505671 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Wallets</span>
                    </a>
                </li>

                <!-- Budgets Menu -->
                <li class="menu-item {{ request()->routeIs('budgets.*') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('budgets.index') }}" class="menu-link">
                        </g>
                        </svg>
                        </span>
                        <span class="menu-text">Budgets</span>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('categories.*') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('categories.index') }}" class="menu-link">
                        <span class="svg-icon menu-icon"><i class="flaticon2-layers"></i></span>
                        <span class="menu-text">Categories</span>
                    </a>
                </li>

                <!-- Debts Menu -->
                <li class="menu-item {{ request()->routeIs('debts.*') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('debts.index') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path
                                        d="M14.8,12 L15,12 C15.5522847,12 16,12.4477153 16,13 L16,19 C16,19.5522847 15.5522847,20 15,20 L12,20 L12,13.5 C12,13.2238576 12.2238576,13 12.5,13 L14,13 C14.2761424,13 14.5,12.7761424 14.5,12.5 C14.5,12.2238576 14.7238576,12 15,12 Z M9,13.5 C9,13.2238576 9.22385763,13 9.5,13 L11.5,13 C11.7761424,13 12,12.7761424 12,12.5 C12,12.2238576 11.7761424,12 11.5,12 L10,12 C9.44771525,12 9,12.4477153 9,13 L9,19 C9,19.5522847 9.44771525,20 10,20 L12,20 L12,13.5 L9,13.5 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Debts & Receivables</span>
                    </a>
                </li>

                <!-- Transfers Menu -->
                <li class="menu-item {{ request()->routeIs('transfers.*') ? 'menu-item-active' : '' }}"
                    aria-haspopup="true">
                    <a href="{{ route('transfers.index') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.74668,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 L7.75,3.72708173 C7.33578644,3.72708173 7,4.06286817 7,4.47708173 L7,10 L2.4013878,10 C1.98717425,10 1.6513878,10.3357864 1.6513878,10.75 C1.6513878,10.8980677 1.69521625,11.0428243 1.77734994,11.1660251 L7.62596228,19.9389434 C7.8557266,20.2835899 8.3213786,20.3767203 8.66602511,20.1469559 C8.68267425,20.1358564 8.69904229,20.1244589 8.71510931,20.1127716 L8.71510931,20.1127716 L15.2848907,20.1127716 C15.6991043,20.1127716 16.0348907,19.7769851 16.0348907,19.3627716 C16.0348907,19.2147038 15.9910623,19.0699472 15.9089286,18.9467464 L16.3740377,19.9389434 Z"
                                        fill="#000000" />
                                    <path
                                        d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z"
                                        fill="#000000" opacity="0.3"
                                        transform="translate(7.000000, 6.500000) rotate(180.000000) translate(-7.000000, -6.500000) " />
                                </g>
                            </svg>
                        </span>
                        <span class="menu-text">Transfers</span>
                    </a>
                </li>

                @php
                    $mergedSubmenus = array_merge(
                        config('menus.custom', []),
                        config('menus.layouts', []),
                        config('menus.crud', []),
                        config('menus.features', []),
                    );

                    $menuConfig = [
                        [
                            'title' => 'Default Menu',
                            'icon' => 'Layout/Layout-4-blocks',
                            'submenu' => $mergedSubmenus,
                        ],
                    ];
                @endphp

                @include('layouts.partials._menu', [
                    'config' => $menuConfig,
                    'sectionTitle' => null,
                ])
            </ul>

            <!--end::Menu Nav-->
        </div>

        <!--end::Menu Container-->
    </div>

    <!--end::Aside Menu-->
</div>

<!--end::Aside-->
