<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
                html { -webkit-text-size-adjust: 100%; }
                body { font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif; line-height: 1.5; }
                a { color: inherit; text-decoration: inherit; }
                img { max-width: 100%; height: auto; display: block; }
            </style>
        @endif

        <style>
            .about-hero {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 320px;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 3rem 1.5rem;
            }

            .about-hero h1 {
                font-size: 2.5rem;
                font-weight: 700;
                color: #fff;
                margin-bottom: 0.5rem;
            }

            .about-hero p {
                font-size: 1.125rem;
                color: rgba(255,255,255,0.85);
                max-width: 600px;
                margin: 0 auto;
            }

            .about-nav {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 1rem 2rem;
                max-width: 900px;
                margin: 0 auto;
                width: 100%;
            }

            .about-nav a {
                font-size: 0.875rem;
                padding: 0.375rem 1rem;
                border-radius: 0.25rem;
                transition: all 0.15s ease;
            }

            .about-nav .nav-links {
                display: flex;
                gap: 0.5rem;
            }

            .about-container {
                max-width: 900px;
                margin: 0 auto;
                padding: 3rem 1.5rem;
            }

            .about-section {
                margin-bottom: 3rem;
            }

            .about-section h2 {
                font-size: 1.5rem;
                font-weight: 600;
                margin-bottom: 1rem;
            }

            .about-section p {
                font-size: 0.9375rem;
                line-height: 1.75;
                margin-bottom: 1rem;
            }

            .about-image-wrapper {
                border-radius: 0.75rem;
                overflow: hidden;
                margin-bottom: 2rem;
                box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1);
            }

            .about-image-wrapper img {
                width: 100%;
                height: 280px;
                object-fit: cover;
            }

            .about-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
                margin-top: 1.5rem;
            }

            .about-card {
                padding: 1.5rem;
                border-radius: 0.5rem;
                transition: transform 0.15s ease;
            }

            .about-card:hover {
                transform: translateY(-2px);
            }

            .about-card h3 {
                font-size: 1.125rem;
                font-weight: 600;
                margin-bottom: 0.5rem;
            }

            .about-card p {
                font-size: 0.8125rem;
                line-height: 1.6;
            }

            .about-card .icon {
                width: 2.5rem;
                height: 2.5rem;
                border-radius: 0.5rem;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 0.75rem;
                font-size: 1.25rem;
            }

            .about-footer {
                text-align: center;
                padding: 2rem 1.5rem;
                font-size: 0.8125rem;
                border-top: 1px solid;
            }

            /* Light mode */
            .light-mode {
                background-color: #FDFDFC;
                color: #1b1b18;
            }

            .light-mode .about-nav a:hover {
                background-color: rgba(0,0,0,0.05);
            }

            .light-mode .about-nav .active {
                background-color: #1b1b18;
                color: #fff;
            }

            .light-mode .about-section p {
                color: #706f6c;
            }

            .light-mode .about-card {
                background-color: #fff;
                border: 1px solid #e3e3e0;
            }

            .light-mode .about-card p {
                color: #706f6c;
            }

            .light-mode .about-card .icon {
                background-color: #f5f5f4;
            }

            .light-mode .about-footer {
                color: #706f6c;
                border-color: #e3e3e0;
            }

            /* Dark mode */
            @media (prefers-color-scheme: dark) {
                .auto-dark {
                    background-color: #0a0a0a;
                    color: #EDEDEC;
                }

                .auto-dark .about-hero {
                    background: linear-gradient(135deg, #4c51bf 0%, #553c9a 100%);
                }

                .auto-dark .about-nav a:hover {
                    background-color: rgba(255,255,255,0.08);
                }

                .auto-dark .about-nav .active {
                    background-color: #eeeeec;
                    color: #1C1C1A;
                }

                .auto-dark .about-section p {
                    color: #A1A09A;
                }

                .auto-dark .about-card {
                    background-color: #161615;
                    border: 1px solid #3E3E3A;
                }

                .auto-dark .about-card p {
                    color: #A1A09A;
                }

                .auto-dark .about-card .icon {
                    background-color: #3E3E3A;
                }

                .auto-dark .about-footer {
                    color: #A1A09A;
                    border-color: #3E3E3A;
                }
            }

            @media (max-width: 640px) {
                .about-hero h1 { font-size: 1.75rem; }
                .about-hero p { font-size: 1rem; }
                .about-nav { padding: 0.75rem 1rem; }
                .about-container { padding: 2rem 1rem; }
            }
        </style>
    </head>
    <body class="light-mode auto-dark">

        {{-- Navigation --}}
        <nav class="about-nav">
            <a href="{{ url('/') }}" style="font-weight: 600; font-size: 1rem;">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}" class="active">About</a>
            </div>
        </nav>

        {{-- Hero Section --}}
        <section class="about-hero">
            <div>
                <h1>About Us</h1>
                <p>Kami adalah tim yang berdedikasi untuk membangun solusi digital yang inovatif dan berdampak positif.</p>
            </div>
        </section>

        {{-- Content --}}
        <div class="about-container">

            {{-- Image Section --}}
            <section class="about-section">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900&h=400&fit=crop" alt="Team working together">
                </div>
            </section>

            {{-- Description --}}
            <section class="about-section">
                <h2>Siapa Kami?</h2>
                <p>
                    Kami adalah sebuah tim yang memiliki passion dalam pengembangan web menggunakan teknologi modern.
                    Dengan framework Laravel sebagai fondasi utama, kami membangun aplikasi yang cepat, aman, dan scalable.
                </p>
                <p>
                    Proyek ini dibuat sebagai bagian dari perjalanan belajar dan eksplorasi kami dalam dunia
                    pengembangan web full-stack. Kami percaya bahwa belajar sambil membangun adalah cara terbaik
                    untuk menguasai teknologi baru.
                </p>
            </section>

            {{-- Cards --}}
            <section class="about-section">
                <h2>Apa yang Kami Tawarkan</h2>
                <div class="about-grid">
                    <div class="about-card">
                        <div class="icon">🚀</div>
                        <h3>Performa Tinggi</h3>
                        <p>Aplikasi yang dioptimalkan untuk kecepatan dan efisiensi, memastikan pengalaman pengguna yang mulus.</p>
                    </div>
                    <div class="about-card">
                        <div class="icon">🔒</div>
                        <h3>Keamanan Terjamin</h3>
                        <p>Mengutamakan keamanan data dengan implementasi best practices dan fitur keamanan bawaan Laravel.</p>
                    </div>
                    <div class="about-card">
                        <div class="icon">📱</div>
                        <h3>Desain Responsif</h3>
                        <p>Tampilan yang menyesuaikan di semua perangkat, dari desktop hingga mobile, untuk aksesibilitas maksimal.</p>
                    </div>
                </div>
            </section>

            {{-- Tech Stack --}}
            <section class="about-section">
                <h2>Teknologi yang Digunakan</h2>
                <p>
                    Proyek ini dibangun menggunakan <strong>Laravel 12</strong> sebagai backend framework,
                    dengan <strong>Tailwind CSS</strong> untuk styling, dan <strong>Vite</strong> sebagai build tool.
                    Kami juga menggunakan <strong>MySQL</strong> untuk database dan <strong>Git</strong> untuk version control.
                </p>
            </section>
        </div>

        {{-- Footer --}}
        <footer class="about-footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </footer>

    </body>
</html>
