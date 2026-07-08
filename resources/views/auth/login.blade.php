@extends('layouts.index', ['isAuth' => true])

@section('title', 'Masuk - Catat Keuangan KKN Desa Pasiripis')

@section('styles')
    <!-- Google Fonts: Plus Jakarta Sans for a clean, modern aesthetic -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        /* Modern Login Page Stylesheet */
        :root {
            --m-primary: #4f46e5;
            --m-primary-hover: #4338ca;
            --m-primary-light: #e0e7ff;
            --m-text-dark: #0f172a;
            --m-text-light: #475569;
            --m-text-muted: #94a3b8;
            --m-bg-body: #f8fafc;
            --m-card-bg: #ffffff;
            --m-border-color: #e2e8f0;
            --m-font-family: 'Plus Jakarta Sans', 'Poppins', sans-serif;
            --m-error: #ef4444;
            --m-success: #10b981;
        }

        /* Override global styles for clean canvassing */
        body,
        #kt_body {
            background-color: var(--m-bg-body) !important;
            font-family: var(--m-font-family) !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow-x: hidden;
        }

        .d-flex.flex-column.flex-root {
            min-height: 100vh;
            width: 100%;
        }

        .modern-login-wrapper {
            display: flex;
            min-height: 100vh;
            width: 100%;
            font-family: var(--m-font-family);
        }

        /* Left Banner Section */
        .modern-login-banner {
            flex: 1.2;
            background: linear-gradient(135deg, #090a0f 0%, #111827 40%, #1e1b4b 75%, #2e1049 100%);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 4.5rem;
            color: #ffffff;
            overflow: hidden;
        }

        /* Radial glow effect circles */
        .modern-login-banner::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
            top: -150px;
            left: -150px;
            filter: blur(60px);
            pointer-events: none;
        }

        .modern-login-banner::after {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(168, 85, 247, 0.12) 0%, transparent 70%);
            bottom: -200px;
            right: -100px;
            filter: blur(80px);
            pointer-events: none;
        }

        .modern-banner-header {
            position: relative;
            z-index: 10;
        }

        .modern-banner-logo {
            display: flex;
            align-items: center;
            gap: 0.85rem;
        }

        .modern-banner-logo svg {
            width: 44px;
            height: 44px;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.15));
        }

        .modern-banner-logo span {
            font-size: 1.35rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            background: linear-gradient(to right, #ffffff, #c7d2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .modern-banner-content {
            position: relative;
            z-index: 10;
            margin-top: auto;
            margin-bottom: auto;
            max-width: 520px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .modern-banner-illustration {
            width: 100%;
            max-width: 360px;
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .illustration-svg {
            width: 100%;
            height: auto;
            max-height: 260px;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.15));
        }

        .modern-banner-content h1 {
            font-size: 2.25rem;
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -0.03em;
            margin-bottom: 0.75rem;
            background: linear-gradient(135deg, #ffffff 0%, #e2e8f0 60%, #818cf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            margin-top: 0.5rem;
        }

        .modern-banner-content p {
            font-size: 0.95rem;
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 0;
            text-align: justify;
            max-width: 400px;
        }

        .modern-banner-footer {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            gap: 1.25rem;
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px rgba(255, 255, 255, 0.06) solid;
            padding: 1.25rem 1.5rem;
            border-radius: 20px;
            max-width: 500px;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.3);
        }

        .modern-banner-footer-icon {
            background: rgba(99, 102, 241, 0.15);
            border-radius: 12px;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: #818cf8;
            border: 1px rgba(99, 102, 241, 0.2) solid;
        }

        .modern-banner-footer-text {
            font-size: 0.875rem;
            color: #cbd5e1;
            line-height: 1.45;
            font-weight: 500;
        }

        /* Right Form Section */
        .modern-login-form-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            background-color: var(--m-bg-body);
        }

        .modern-login-card {
            width: 100%;
            max-width: 450px;
            background-color: var(--m-card-bg);
            border: 1px solid var(--m-border-color);
            border-radius: 28px;
            padding: 3.5rem 3rem;
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.04), 0 0 0 1px rgba(15, 23, 42, 0.01);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .modern-login-card:hover {
            box-shadow: 0 30px 60px -15px rgba(15, 23, 42, 0.08);
        }

        .modern-login-card-header {
            margin-bottom: 2.75rem;
        }

        .modern-login-card-header h2 {
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--m-text-dark);
            letter-spacing: -0.03em;
            margin-bottom: 0.5rem;
            margin-top: 0;
        }

        .modern-login-card-header p {
            color: var(--m-text-light);
            font-size: 0.95rem;
            margin: 0;
            font-weight: 500;
        }

        .modern-form-group {
            margin-bottom: 1.75rem;
        }

        .modern-form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 700;
            color: var(--m-text-dark);
            margin-bottom: 0.5rem;
        }

        .modern-input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
        }

        .modern-input-icon {
            position: absolute;
            left: 1.15rem;
            color: var(--m-text-muted);
            pointer-events: none;
            transition: color 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modern-input-field {
            width: 100%;
            padding: 0.95rem 1.25rem 0.95rem 2.85rem;
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--m-text-dark);
            background-color: #ffffff;
            border: 1.5px solid var(--m-border-color);
            border-radius: 16px;
            outline: none;
            transition: all 0.2s ease;
            box-sizing: border-box;
            line-height: normal;
        }

        .modern-input-field::placeholder {
            color: var(--m-text-muted);
            opacity: 0.8;
        }

        .modern-input-field:focus {
            border-color: var(--m-primary);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.08);
            background-color: #ffffff;
        }

        .modern-input-field:focus+.modern-input-icon {
            color: var(--m-primary);
        }

        /* Toggle Password Link/Button */
        .modern-toggle-password {
            position: absolute;
            right: 1.15rem;
            color: var(--m-text-muted);
            cursor: pointer;
            user-select: none;
            transition: color 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modern-toggle-password:hover {
            color: var(--m-text-dark);
        }

        /* Form Actions Row */
        .modern-form-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1.75rem;
            margin-bottom: 2.25rem;
            font-size: 0.875rem;
        }

        .modern-remember-me {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            cursor: pointer;
            user-select: none;
            color: var(--m-text-light);
            font-weight: 600;
            margin-bottom: 0;
        }

        .modern-remember-checkbox {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 1.5px solid var(--m-border-color);
            border-radius: 6px;
            background-color: #ffffff;
            cursor: pointer;
            display: inline-grid;
            place-content: center;
            transition: all 0.2s ease;
            margin: 0;
            outline: none;
        }

        .modern-remember-checkbox::before {
            content: "";
            width: 10px;
            height: 10px;
            transform: scale(0);
            transition: 120ms transform cubic-bezier(0.34, 1.56, 0.64, 1);
            background-color: var(--m-primary);
            clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
            transform-origin: center;
        }

        .modern-remember-checkbox:checked {
            border-color: var(--m-primary);
            background-color: var(--m-primary-light);
        }

        .modern-remember-checkbox:checked::before {
            transform: scale(1);
        }

        .modern-forgot-link {
            color: var(--m-primary);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.2s ease;
        }

        .modern-forgot-link:hover {
            color: var(--m-primary-hover);
            text-decoration: underline;
        }

        /* Submit Button styling */
        .modern-btn-submit {
            width: 100%;
            padding: 1rem 1.75rem;
            font-size: 0.975rem;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, var(--m-primary) 0%, #6366f1 100%);
            border: none;
            border-radius: 16px;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(79, 70, 229, 0.25);
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            outline: none;
        }

        .modern-btn-submit:hover {
            transform: translateY(-1.5px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.35);
        }

        .modern-btn-submit:active {
            transform: translateY(0.5px);
            box-shadow: 0 4px 10px rgba(79, 70, 229, 0.25);
        }

        /* Error States */
        .modern-error-alert {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            background-color: #fef2f2;
            border: 1px solid #fee2e2;
            color: var(--m-error);
            padding: 1rem 1.25rem;
            border-radius: 16px;
            font-size: 0.875rem;
            margin-bottom: 2rem;
            font-weight: 600;
            line-height: 1.4;
        }

        .modern-error-alert svg {
            flex-shrink: 0;
            margin-top: 0.1rem;
        }

        .modern-error-field {
            color: var(--m-error);
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 0.45rem;
            display: block;
        }

        .modern-input-error {
            border-color: var(--m-error) !important;
        }

        .modern-input-error:focus {
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.08) !important;
        }

        /* Responsiveness and Breakpoints */
        @media (max-width: 1024px) {
            .modern-login-banner {
                padding: 3.5rem;
            }

            .modern-banner-content h1 {
                font-size: 2.25rem;
            }
        }

        @media (max-width: 820px) {
            .modern-login-wrapper {
                flex-direction: column;
            }

            .modern-login-banner {
                flex: none;
                height: auto;
                padding: 3rem 2rem;
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .modern-banner-logo {
                justify-content: center;
                margin-bottom: 1.5rem;
            }

            .modern-banner-content {
                max-width: 100%;
                margin: 0;
            }

            .modern-banner-content h1 {
                font-size: 1.85rem;
                margin-bottom: 0.75rem;
            }

            .modern-banner-content p,
            .modern-banner-footer,
            .modern-banner-illustration {
                display: none;
                /* Hide detailed info, illustration, & footer on mobile view for compactness */
            }

            .modern-login-form-side {
                padding: 2.5rem 1.5rem;
                flex: 1;
            }

            .modern-login-card {
                padding: 2.75rem 2rem;
                border-radius: 24px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            }
        }

        @media (max-width: 480px) {
            .modern-login-card {
                padding: 2.25rem 1.5rem;
            }

            .modern-login-card-header h2 {
                font-size: 1.6rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="modern-login-wrapper">
        <!-- Left Side: Banner Visuals (Hidden details on mobile) -->
        <div class="modern-login-banner">
            <div class="modern-banner-header">
                <div class="modern-banner-logo">
                    <!-- Beautiful Custom SVG Badge (Village roof + growth chart overlay) -->
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="modern-logo-gradient" x1="0%" y1="0%" x2="100%"
                                y2="100%">
                                <stop offset="0%" stop-color="#818cf8" />
                                <stop offset="50%" stop-color="#6366f1" />
                                <stop offset="100%" stop-color="#a855f7" />
                            </linearGradient>
                        </defs>
                        <!-- Village house outline -->
                        <path d="M3 10L12 3L21 10V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V10Z"
                            stroke="url(#modern-logo-gradient)" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <!-- Financial growth indicators -->
                        <path d="M7 17V14" stroke="url(#modern-logo-gradient)" stroke-width="2" stroke-linecap="round" />
                        <path d="M12 17V11" stroke="url(#modern-logo-gradient)" stroke-width="2" stroke-linecap="round" />
                        <path d="M17 17V8" stroke="url(#modern-logo-gradient)" stroke-width="2" stroke-linecap="round" />
                        <path d="M7 14L12 11L17 8" stroke="#ef4444" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span>KKN-T Pasiripis</span>
                </div>
            </div>

            <div class="modern-banner-content">
                <!-- Isometric Financial illustration SVG -->
                <div class="modern-banner-illustration">
                    <svg viewBox="0 0 400 320" fill="none" xmlns="http://www.w3.org/2000/svg" class="illustration-svg">
                        <defs>
                            <linearGradient id="glow-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#6366f1" stop-opacity="0.2" />
                                <stop offset="100%" stop-color="#a855f7" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="line-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#818cf8" />
                                <stop offset="50%" stop-color="#4f46e5" />
                                <stop offset="100%" stop-color="#ec4899" />
                            </linearGradient>
                            <linearGradient id="bar-grad-1" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#818cf8" />
                                <stop offset="100%" stop-color="#312e81" />
                            </linearGradient>
                            <linearGradient id="bar-grad-2" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#a855f7" />
                                <stop offset="100%" stop-color="#4c1d95" />
                            </linearGradient>
                            <linearGradient id="coin-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#fbbf24" />
                                <stop offset="100%" stop-color="#d97706" />
                            </linearGradient>
                            <filter id="svg-blur" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur stdDeviation="15" result="blur" />
                            </filter>
                            <filter id="svg-shadow" x="-10%" y="-10%" width="120%" height="120%">
                                <feDropShadow dx="0" dy="12" stdDeviation="10" flood-color="#000"
                                    flood-opacity="0.3" />
                            </filter>
                        </defs>

                        <!-- Ambient glows -->
                        <circle cx="200" cy="160" r="90" fill="url(#glow-grad)" filter="url(#svg-blur)" />
                        <circle cx="280" cy="120" r="50" fill="#a855f7" opacity="0.1"
                            filter="url(#svg-blur)" />
                        <circle cx="120" cy="200" r="50" fill="#6366f1" opacity="0.1"
                            filter="url(#svg-blur)" />

                        <!-- Ground Shadow -->
                        <ellipse cx="200" cy="270" rx="140" ry="25" fill="#090a0f"
                            opacity="0.5" />

                        <!-- Ledger Board -->
                        <g filter="url(#svg-shadow)">
                            <path d="M70 190 L200 120 L330 190 L200 260 Z" fill="#1e1b4b"
                                stroke="rgba(255, 255, 255, 0.15)" stroke-width="1.5" />
                            <path d="M75 190 L200 123 L325 190 L200 257 Z" fill="#0f172a" />
                        </g>

                        <!-- 3D Bar 1 -->
                        <g filter="url(#svg-shadow)">
                            <path d="M120 185 L135 177 V120 L120 128 Z" fill="#3730a3" />
                            <path d="M135 177 L150 185 V128 L135 177 Z" fill="#4338ca" />
                            <path d="M120 128 L135 120 L150 128 L135 136 Z" fill="url(#bar-grad-1)" />
                        </g>

                        <!-- 3D Bar 2 -->
                        <g filter="url(#svg-shadow)">
                            <path d="M185 220 L200 212 V90 L185 98 Z" fill="#5b21b6" />
                            <path d="M200 212 L215 220 V98 L200 212 Z" fill="#6d28d9" />
                            <path d="M185 98 L200 90 L215 98 L200 106 Z" fill="url(#bar-grad-2)" />
                        </g>

                        <!-- 3D Bar 3 -->
                        <g filter="url(#svg-shadow)">
                            <path d="M250 185 L265 177 V140 L250 148 Z" fill="#3730a3" />
                            <path d="M265 177 L280 185 V148 L265 177 Z" fill="#4338ca" />
                            <path d="M250 148 L265 140 L280 148 L265 156 Z" fill="url(#bar-grad-1)" />
                        </g>

                        <!-- Report Sheet -->
                        <g filter="url(#svg-shadow)">
                            <path d="M220 90 L290 50 L350 80 L280 120 Z" fill="rgba(255, 255, 255, 0.07)"
                                stroke="rgba(255, 255, 255, 0.2)" stroke-width="1" />
                            <path d="M245 80 L295 52" stroke="rgba(255, 255, 255, 0.4)" stroke-width="2.5"
                                stroke-linecap="round" />
                            <path d="M255 90 L315 56" stroke="rgba(255, 255, 255, 0.3)" stroke-width="2.5"
                                stroke-linecap="round" />
                            <path d="M265 100 L325 66" stroke="rgba(255, 255, 255, 0.3)" stroke-width="2.5"
                                stroke-linecap="round" />
                            <path d="M320 85 L328 80 L333 90" stroke="#10b981" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>

                        <!-- Glowing Line Chart -->
                        <g>
                            <path d="M90 195 L135 150 L200 135 L265 110 L310 130" fill="none" stroke="url(#line-grad)"
                                stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round"
                                filter="url(#svg-shadow)" />
                            <path d="M90 195 L135 150 L200 135 L265 110 L310 130" fill="none" stroke="#ffffff"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" opacity="0.8" />
                            <circle cx="135" cy="150" r="4.5" fill="#ffffff" stroke="#4f46e5"
                                stroke-width="1.5" />
                            <circle cx="200" cy="135" r="4.5" fill="#ffffff" stroke="#a855f7"
                                stroke-width="1.5" />
                            <circle cx="265" cy="110" r="4.5" fill="#ffffff" stroke="#ec4899"
                                stroke-width="1.5" />
                        </g>

                        <!-- Coins -->
                        <g filter="url(#svg-shadow)">
                            <path
                                d="M100 240 C100 236.686 106.716 234 115 234 C123.284 234 130 236.686 130 240 V244 C130 247.314 123.284 250 115 250 C106.716 250 100 247.314 100 244 Z"
                                fill="url(#coin-grad)" />
                            <ellipse cx="115" cy="240" rx="15" ry="6" fill="#fbbf24"
                                stroke="#d97706" stroke-width="0.5" />
                            <ellipse cx="115" cy="240" rx="10" ry="4" fill="#f59e0b" />
                            <path
                                d="M270 230 C270 227.239 275.373 225 282 225 C288.627 225 294 227.239 294 230 V234 C294 236.761 288.627 239 282 239 C275.373 239 270 236.761 270 234 Z"
                                fill="url(#coin-grad)" />
                            <ellipse cx="282" cy="230" rx="12" ry="5" fill="#fbbf24"
                                stroke="#d97706" stroke-width="0.5" />
                            <ellipse cx="282" cy="230" rx="8" ry="3" fill="#f59e0b" />
                        </g>
                    </svg>
                </div>
                <h1>Catat Keuangan</h1>
                <p>Sistem pencatatan dan pengelolaan keuangan KKN Desa Pasiripis. Dirancang untuk memudahkan pelaporan,
                    memantau alokasi program kerja, dan menjamin transparansi dana selama program pengabdian.</p>
            </div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="modern-login-form-side">
            <div class="modern-login-card">
                <div class="modern-login-card-header">
                    <h2>Selamat Datang</h2>
                    <p>Silakan masuk untuk mengelola keuangan KKN</p>
                </div>

                <!-- System-wide credentials error alert -->
                @if ($errors->any())
                    <div class="modern-error-alert">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                        <span>E-mail atau password yang Anda masukkan salah. Silakan periksa kembali.</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email field -->
                    <div class="modern-form-group">
                        <label class="modern-form-label" for="email">E-mail Sistem</label>
                        <div class="modern-input-wrapper">
                            <input id="email" type="email" name="email"
                                class="modern-input-field @error('email') modern-input-error @enderror"
                                placeholder="kkn@pasiripis.id" value="{{ old('email') }}" required autofocus
                                autocomplete="username" />
                            <div class="modern-input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <span class="modern-error-field">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password field -->
                    <div class="modern-form-group">
                        <label class="modern-form-label" for="password">Password</label>
                        <div class="modern-input-wrapper">
                            <input id="password" type="password" name="password"
                                class="modern-input-field @error('password') modern-input-error @enderror"
                                placeholder="Masukkan password" required autocomplete="current-password" />
                            <div class="modern-input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2">
                                    </rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                            </div>
                            <div class="modern-toggle-password" onclick="togglePasswordVisibility()">
                                <svg id="eye-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <span class="modern-error-field">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Form actions (remember & forgot) -->
                    <div class="modern-form-actions">
                        <label class="modern-remember-me" for="remember">
                            <input id="remember" type="checkbox" name="remember" class="modern-remember-checkbox"
                                {{ old('remember') ? 'checked' : '' }} />
                            Ingat saya
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="modern-forgot-link">
                                Lupa Password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="modern-btn-submit">
                        <span>Masuk ke Dashboard</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12,5 19,12 12,19"></polyline>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.getElementById("eye-icon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                // SVG for Eye-Off icon
                eyeIcon.innerHTML =
                    '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>';
            } else {
                passwordInput.type = "password";
                // SVG for Eye icon
                eyeIcon.innerHTML =
                    '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>';
            }
        }
    </script>
@endsection
