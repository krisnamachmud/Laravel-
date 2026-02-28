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
                <h1>Krisna Machmud Irfandi</h1>
                <p>Mahasiswa Teknik Informatika — PENS PSDKU Lamongan</p>
            </div>
        </section>

        {{-- Content --}}
        <div class="about-container">

            {{-- Image Section --}}
            <section class="about-section">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=900&h=400&fit=crop" alt="Coding workspace">
                </div>
            </section>

            {{-- Description --}}
            <section class="about-section">
                <h2>Tentang Saya</h2>
                <p>
                    Halo! Saya <strong>Krisna Machmud Irfandi</strong>, mahasiswa jurusan <strong>Teknik Informatika</strong>
                    di <strong>Politeknik Elektronika Negeri Surabaya (PENS) PSDKU Lamongan</strong>.
                    Saya memiliki ketertarikan yang besar dalam dunia pengembangan web dan teknologi informasi.
                </p>
                <p>
                    Sebagai mahasiswa Teknik Informatika, saya terus belajar dan mengembangkan kemampuan di bidang
                    pemrograman, pengembangan web, serta pengelolaan database. Proyek ini merupakan bagian dari
                    perjalanan saya dalam mempelajari framework Laravel dan teknologi web modern.
                </p>
                <p>
                    Saya percaya bahwa belajar sambil membangun proyek nyata adalah cara terbaik untuk menguasai
                    teknologi baru. Melalui website ini, saya mengeksplorasi berbagai fitur Laravel dan best practices
                    dalam pengembangan web full-stack.
                </p>
            </section>

            {{-- Cards --}}
            <section class="about-section">
                <h2>Bidang yang Saya Pelajari</h2>
                <div class="about-grid">
                    <div class="about-card">
                        <div class="icon">💻</div>
                        <h3>Web Development</h3>
                        <p>Membangun aplikasi web menggunakan Laravel, PHP, HTML, CSS, dan JavaScript untuk solusi digital yang modern.</p>
                    </div>
                    <div class="about-card">
                        <div class="icon">🗄️</div>
                        <h3>Database Management</h3>
                        <p>Mengelola dan merancang database menggunakan MySQL untuk penyimpanan data yang efisien dan terstruktur.</p>
                    </div>
                    <div class="about-card">
                        <div class="icon">🎓</div>
                        <h3>Teknik Informatika</h3>
                        <p>Mempelajari dasar-dasar ilmu komputer, algoritma, struktur data, dan jaringan komputer di PENS PSDKU Lamongan.</p>
                    </div>
                </div>
            </section>

            {{-- Tech Stack --}}
            <section class="about-section">
                <h2>Tech Stack</h2>
                <p>
                    Proyek ini dibangun menggunakan <strong>Laravel 12</strong> sebagai backend framework,
                    dengan <strong>Tailwind CSS</strong> untuk styling, dan <strong>Vite</strong> sebagai build tool.
                    Saya juga menggunakan <strong>MySQL</strong> untuk database dan <strong>Git</strong> untuk version control.
                </p>
            </section>

            {{-- Education --}}
            <section class="about-section">
                <h2>Pendidikan</h2>
                <div class="about-grid">
                    <div class="about-card">
                        <div class="icon">🏫</div>
                        <h3>PENS PSDKU Lamongan</h3>
                        <p>Politeknik Elektronika Negeri Surabaya — Program Studi Di Luar Kampus Utama, Lamongan. Jurusan Teknik Informatika.</p>
                    </div>
                </div>
            </section>
        </div>

        {{-- Footer --}}
        <footer class="about-footer">
            <p>&copy; {{ date('Y') }} Krisna Machmud Irfandi. All rights reserved.</p>
        </footer>

    </body>
</html>
