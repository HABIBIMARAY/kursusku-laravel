<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KursusKu - Belajar Teknologi</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* HEADER DAN MENU */
        .header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .menu-wrapper {
            position: relative;
            margin-left: auto;
        }


        .menu-toggle {
            width: 46px;
            height: 42px;
            border: 1px solid #0284c7 !important;
            border-radius: 10px;
            background: #0f172a !important;
            color: #38bdf8 !important;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
            transition: .2s;
        }

        .menu-toggle span {
            display: block;
            width: 21px;
            height: 2.5px;
            background: #38bdf8 !important;
            border-radius: 5px;
            transition: .2s;
        }

        .menu-toggle:hover {
            background: #0369a1 !important;
            border-color: #38bdf8 !important;
        }

        .menu-toggle:hover span {
            background: #ffffff !important;
        }


        .menu-dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 52px;
            width: 220px;
            background: #0f172a !important;
            border: 1px solid #0284c7;
            border-radius: 12px;
            padding: 9px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, .35);
            z-index: 999;
        }

        .menu-dropdown.show {
            display: block;
        }

        .menu-dropdown a,
        .menu-dropdown button {
            display: block;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: transparent;
            color: #f8fafc !important;
            text-align: left;
            text-decoration: none;
            font-family: inherit;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }

        .menu-dropdown a:hover,
        .menu-dropdown button:hover {
            background: #0369a1 !important;
            color: #ffffff !important;
        }

        .menu-dropdown .logout-button {
            color: #fca5a5 !important;
        }

        .menu-divider {
            height: 1px;
            background: #334155;
            margin: 5px 0;
        }


        .menu-divider {
            height: 1px;
            background: #e2e8f0;
            margin: 5px 0;
        }

        @media (max-width: 480px) {
            .menu-dropdown {
                width: 190px;
            }
        }
    </style>

</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container header-top">

            <!-- BRAND KURSUSKU -->
            <a href="{{ route('home') }}" class="brand">
                <div class="brand-logo">K</div>

                <div>
                    <h2>KursusKu</h2>
                    <span>Laravel MVC</span>
                </div>
            </a>

            <!-- MENU GARIS TIGA -->
            <div class="menu-wrapper">

                <button type="button"
                    class="menu-toggle"
                    id="menuToggle"
                    aria-label="Buka menu"
                    aria-expanded="false"
                    aria-controls="menuDropdown">
                    ☰
                </button>

                <div class="menu-dropdown" id="menuDropdown">

                    <!-- MENU BERANDA -->
                    <a href="{{ route('home') }}">
                        🏠 Beranda
                    </a>

                    @auth

                    <!-- MENU COURSES -->
                    <a href="{{ route('courses.index') }}">
                        📚 Courses
                    </a>

                    <!-- MENU PROFIL -->
                    <a href="{{ route('profile') }}">
                        👤 Profil Saya
                    </a>

                    <div class="menu-divider"></div>

                    <!-- MENU LOGOUT -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="logout-button">
                            ↪ Logout
                        </button>
                    </form>

                    @else

                    <!-- MENU LOGIN -->
                    <a href="{{ route('login') }}">
                        🔐 Login
                    </a>

                    @endauth

                </div>

            </div>

        </div>
    </header>

    <!-- HERO -->
    <main>

        <section class="hero" id="beranda">
            <div class="container hero-content">

                <div class="hero-text">

                    <span class="eyebrow">
                        PERJALANAN BELAJAR BERSAMA KURSUSKU
                    </span>

                    <h1>
                        Belajar Teknologi,
                        <span>Bangun Masa Depan.</span>
                    </h1>

                    <p>
                        Tingkatkan kemampuan dan keterampilan digital
                        melalui program pembelajaran yang terstruktur
                        bersama KursusKu.
                    </p>

                    <div class="hero-buttons">

                        <a href="#program" class="btn-primary">
                            Jelajahi Program
                        </a>

                        <a href="#alur" class="btn-outline">
                            Lihat Alur MVC
                        </a>

                    </div>

                    <div class="hero-info">

                        <div>
                            <h3>Laravel 13</h3>
                            <span>Framework</span>
                        </div>

                        <div>
                            <h3>MVC</h3>
                            <span>Struktur Aplikasi</span>
                        </div>

                        <div>
                            <h3>Belajar</h3>
                            <span>Sambil Praktik</span>
                        </div>

                    </div>

                </div>

                <!-- VISUAL -->
                <div class="hero-visual">

                    <div class="visual-card">

                        <div class="visual-circle circle-one"></div>
                        <div class="visual-circle circle-two"></div>

                        <div class="code-icon">
                            <span>&lt;/&gt;</span>
                        </div>

                        <div class="visual-title">
                            <span>LEARN TECHNOLOGY</span>
                            <h2>KURSUSKU</h2>
                            <p>Belajar · Berkembang · Berprestasi</p>
                        </div>

                        <div class="visual-label">
                            ✦ Belajar · Praktik · Berkarya
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- ALUR MVC -->
        <section class="mvc-section" id="alur">

            <div class="container">

                <div class="section-heading">

                    <span>STRUKTUR APLIKASI</span>

                    <h2>Mengenal Alur MVC Laravel</h2>

                    <p>
                        Aplikasi KursusKu dibangun menggunakan pola
                        Model, View, dan Controller.
                    </p>

                </div>

                <div class="mvc-grid">

                    <!-- MODEL -->
                    <div class="mvc-card">

                        <div class="mvc-icon">M</div>

                        <h3>Model</h3>

                        <p>
                            Mengelola data dan berhubungan
                            dengan database aplikasi.
                        </p>

                    </div>

                    <!-- VIEW -->
                    <div class="mvc-card">

                        <div class="mvc-icon">V</div>

                        <h3>View</h3>

                        <p>
                            Menampilkan halaman dan antarmuka
                            yang dilihat oleh pengguna.
                        </p>

                    </div>

                    <!-- CONTROLLER -->
                    <div class="mvc-card">

                        <div class="mvc-icon">C</div>

                        <h3>Controller</h3>

                        <p>
                            Mengatur alur permintaan dan
                            menghubungkan Model dengan View.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- PROGRAM -->
        <section class="program-section" id="program">

            <div class="container">

                <div class="section-heading">

                    <span>PROGRAM KURSUSKU</span>

                    <h2>Mulai Perjalanan Belajarmu</h2>

                    <p>
                        Pilih bidang pembelajaran dan kembangkan
                        keterampilan teknologi bersama kami.
                    </p>

                </div>

                <div class="program-grid">

                    <!-- WEB DEVELOPMENT -->
                    <div class="program-card">

                        <div class="program-icon">01</div>

                        <h3>Web Development</h3>

                        <p>
                            Pelajari dasar-dasar pembuatan
                            website dan pengembangan web.
                        </p>

                        <span>Teknologi Web</span>

                    </div>

                    <!-- PHP PROGRAMMING -->
                    <div class="program-card">

                        <div class="program-icon">02</div>

                        <h3>PHP Programming</h3>

                        <p>
                            Kenali pemrograman PHP untuk
                            membangun aplikasi berbasis web.
                        </p>

                        <span>Pemrograman</span>

                    </div>

                    <!-- LARAVEL FRAMEWORK -->
                    <div class="program-card">

                        <div class="program-icon">03</div>

                        <h3>Laravel Framework</h3>

                        <p>
                            Pelajari pengembangan aplikasi
                            menggunakan framework Laravel.
                        </p>

                        <span>Framework</span>

                    </div>

                </div>

            </div>

        </section>

        <!-- PENDAFTARAN / CTA -->
        <section class="register-section" id="pendaftaran">

            <div class="container register-content">

                <div>

                    <span class="eyebrow">
                        GABUNG BERSAMA KAMI
                    </span>

                    <h2>Siap Memulai Pembelajaran?</h2>

                    <p>
                        Ambil langkah pertama untuk mengembangkan
                        kemampuan teknologi bersama KursusKu.
                    </p>

                </div>

                <a href="{{ route('enrollments.create') }}" class="btn-primary">
                    Daftar Sekarang
                </a>

            </div>

        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer">

        <div class="container footer-content">

            <div>
                <h3>KursusKu</h3>

                <p>
                    Belajar Teknologi, Bangun Masa Depan.
                </p>
            </div>

            <p>
                © 2026 KursusKu. All Rights Reserved.
            </p>

        </div>

    </footer>

    <!-- JAVASCRIPT MENU -->
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const menuDropdown = document.getElementById('menuDropdown');

        menuToggle.addEventListener('click', function() {

            menuDropdown.classList.toggle('show');

            const isOpen = menuDropdown.classList.contains('show');

            menuToggle.setAttribute('aria-expanded', isOpen);

        });

        // Tutup menu jika pengguna klik di luar menu
        document.addEventListener('click', function(event) {

            if (
                !menuToggle.contains(event.target) &&
                !menuDropdown.contains(event.target)
            ) {

                menuDropdown.classList.remove('show');

                menuToggle.setAttribute('aria-expanded', 'false');

            }

        });

        // Tutup menu dengan tombol Escape
        document.addEventListener('keydown', function(event) {

            if (event.key === 'Escape') {

                menuDropdown.classList.remove('show');

                menuToggle.setAttribute('aria-expanded', 'false');

            }

        });
    </script>

</body>

</html>