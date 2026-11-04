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
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container header-top">

            <!-- BRAND KURSUSKU -->
            <a href="/" class="brand">
                <div class="brand-logo">K</div>

                <div>
                    <h2>KursusKu</h2>
                    <span>Laravel MVC</span>
                </div>
            </a>

            <!-- MILESTONE -->
            <div class="milestone">
                Milestone 7
            </div>

        </div>
    </header>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container nav-content">

            <div class="nav-links">

                <!-- MENU BERANDA -->
                <a href="/" class="active">
                    Beranda
                </a>

                <!-- MENU PENDAFTARAN -->
                <a href="{{ route('pendaftaran') }}">
                    Pendaftaran
                </a>

            </div>

        </div>
    </nav>

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

                <a href="{{ route('pendaftaran') }}" class="btn-primary">
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

</body>

</html>