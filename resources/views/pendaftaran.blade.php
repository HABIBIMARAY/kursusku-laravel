<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - KursusKu</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            color: #f8fafc;
            background:
                radial-gradient(circle at 85% 10%, rgba(2, 132, 199, .17), transparent 30%),
                linear-gradient(135deg, #0f172a, #142b49);
        }

        /* HEADER */
        .header {
            max-width: 1100px;
            margin: auto;
            padding: 22px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .logo {
            width: 45px;
            height: 45px;
            border-radius: 13px;
            background: linear-gradient(135deg, #0284c7, #38bdf8);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: 800;
            box-shadow: 0 5px 20px rgba(2, 132, 199, .3);
        }

        .brand h2 {
            font-size: 20px;
        }

        .brand p {
            color: #94a3b8;
            font-size: 11px;
            margin-top: 4px;
        }

        .header-link {
            color: #7dd3fc;
            text-decoration: none;
            border: 1px solid #0284c7;
            padding: 9px 16px;
            border-radius: 30px;
            font-size: 12px;
            transition: .3s;
        }

        .header-link:hover {
            background: #0284c7;
            color: white;
        }

        /* FORM CONTAINER */
        .main {
            width: 100%;
            max-width: 850px;
            margin: 22px auto;
            padding: 0 20px;
        }

        .form-card {
            background: #111f35;
            border: 1px solid #285477;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .25);
        }

        /* FORM HEADER */
        .form-header {
            padding: 27px 32px;
            background: linear-gradient(120deg, #173b5d, #10243f);
            border-bottom: 1px solid #285477;
        }

        .label {
            display: inline-block;
            background: #075985;
            color: #bae6fd;
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .form-header h1 {
            font-size: 27px;
            margin: 15px 0 9px;
        }

        .form-header h1 span {
            color: #38bdf8;
        }

        .form-header p {
            color: #cbd5e1;
            font-size: 12px;
            line-height: 1.8;
        }

        /* FORM BODY */
        .form-body {
            padding: 27px 32px;
        }

        .form-group {
            margin-bottom: 19px;
        }

        .form-group label {
            display: block;
            color: #e0f2fe;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #365875;
            border-radius: 10px;
            background: #0c192b;
            color: #f8fafc;
            font-family: inherit;
            font-size: 12px;
            outline: none;
            transition: .3s;
        }

        .form-group input::placeholder {
            color: #7890a8;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #38bdf8;
            box-shadow: 0 0 0 3px rgba(56, 189, 248, .12);
        }

        .form-group select {
            cursor: pointer;
        }

        .form-group select option {
            background: #111f35;
            color: white;
        }

        /* INFORMASI KUOTA */
        .quota-card {
            display: none;
            background: #102c46;
            border: 1px solid #285477;
            border-radius: 12px;
            padding: 16px;
            margin-top: 10px;
            margin-bottom: 20px;
            animation: fadeIn .3s ease;
        }

        .quota-card.show {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .quota-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 13px;
        }

        .quota-title h3 {
            color: #bae6fd;
            font-size: 13px;
        }

        .quota-status {
            background: #064e3b;
            color: #6ee7b7;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .quota-status.full {
            background: #7f1d1d;
            color: #fecaca;
        }

        .quota-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .quota-item {
            background: #0c192b;
            border: 1px solid #294761;
            padding: 12px 7px;
            text-align: center;
            border-radius: 9px;
        }

        .quota-item strong {
            display: block;
            font-size: 20px;
            color: #38bdf8;
            margin-bottom: 5px;
        }

        .quota-item span {
            font-size: 10px;
            color: #94a3b8;
        }

        .quota-progress {
            height: 7px;
            background: #263f59;
            border-radius: 20px;
            overflow: hidden;
            margin-top: 14px;
        }

        .quota-progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #0284c7, #38bdf8);
            border-radius: 20px;
            transition: width .4s;
        }

        .quota-note {
            color: #94a3b8;
            font-size: 11px;
            margin-top: 9px;
            line-height: 1.6;
        }

        /* ERROR */
        .error-message {
            color: #fca5a5;
            font-size: 11px;
            margin-top: 6px;
        }

        .alert-error {
            background: #451a1a;
            border: 1px solid #991b1b;
            color: #fecaca;
            padding: 12px;
            border-radius: 9px;
            font-size: 12px;
            margin-bottom: 18px;
        }

        /* BUTTON */
        .divider {
            height: 1px;
            background: #29415e;
            margin: 24px 0;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .btn-back {
            text-decoration: none;
            color: #38bdf8;
            border: 1px solid #0284c7;
            border-radius: 10px;
            padding: 12px 19px;
            font-size: 12px;
            transition: .3s;
        }

        .btn-back:hover {
            background: #0284c7;
            color: white;
        }

        .btn-submit {
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #0284c7, #0ea5e9);
            color: white;
            padding: 14px 21px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s;
        }

        .btn-submit:hover {
            background: #0369a1;
            transform: translateY(-2px);
        }

        .btn-submit:disabled {
            background: #475569;
            color: #cbd5e1;
            cursor: not-allowed;
            transform: none;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 20px 15px 30px;
            color: #94a3b8;
            font-size: 11px;
            line-height: 2;
        }

        .footer strong {
            color: #38bdf8;
            font-size: 15px;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            .header {
                padding: 18px;
            }

            .brand h2 {
                font-size: 18px;
            }

            .header-link {
                font-size: 10px;
                padding: 9px 11px;
            }

            .main {
                margin-top: 15px;
                padding: 0 14px;
            }

            .form-header,
            .form-body {
                padding: 23px 19px;
            }

            .form-header h1 {
                font-size: 23px;
            }

            .form-header p {
                font-size: 12px;
            }

            .form-group input,
            .form-group select {
                height: 46px;
                font-size: 12px;
            }

            .quota-info {
                gap: 6px;
            }

            .quota-item strong {
                font-size: 17px;
            }

            .quota-item span {
                font-size: 9px;
            }

            .actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .btn-back,
            .btn-submit {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">

        <div class="brand">

            <div class="logo">K</div>

            <div>
                <h2>KursusKu</h2>
                <p>Belajar Teknologi, Bangun Masa Depan</p>
            </div>

        </div>

        <a href="{{ route('home') }}" class="header-link">
            ← Kembali ke Beranda
        </a>

    </header>


    <!-- FORM PENDAFTARAN -->
    <main class="main">

        <section class="form-card">

            <!-- FORM HEADER -->
            <div class="form-header">

                <span class="label">KURSUSKU · PENDAFTARAN</span>

                <h1>Mulai Perjalanan <span>Belajarmu.</span></h1>

                <p>
                    Lengkapi data diri dan pilih program kursus
                    yang ingin kamu ikuti bersama KursusKu.
                </p>

            </div>


            <!-- FORM BODY -->
            <form class="form-body" action="{{ route('pendaftaran.preview') }}" method="POST">

                @csrf

                @if ($errors->any())
                <div class="alert-error">
                    Terdapat kesalahan pada formulir. Silakan periksa kembali data kamu.
                </div>
                @endif


                <!-- NAMA -->
                <div class="form-group">

                    <label for="nama">Nama Lengkap</label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        value="{{ old('nama') }}"
                        required>

                    @error('nama')
                    <div class="error-message">{{ $message }}</div>
                    @enderror

                </div>


                <!-- EMAIL -->
                <div class="form-group">

                    <label for="email">Alamat Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="contoh@email.com"
                        value="{{ old('email') }}"
                        required>

                    @error('email')
                    <div class="error-message">{{ $message }}</div>
                    @enderror

                </div>


                <!-- PILIH KURSUS -->
                <div class="form-group">

                    <label for="kursus">Pilih Program Kursus</label>

                    <select id="kursus" name="kursus" required>

                        <option value="">-- Pilih Kursus --</option>

                        <option value="Web Development"
                            {{ old('kursus') == 'Web Development' ? 'selected' : '' }}>
                            Web Development
                        </option>

                        <option value="PHP Programming"
                            {{ old('kursus') == 'PHP Programming' ? 'selected' : '' }}>
                            PHP Programming
                        </option>

                        <option value="Laravel Framework"
                            {{ old('kursus') == 'Laravel Framework' ? 'selected' : '' }}>
                            Laravel Framework
                        </option>

                    </select>

                    @error('kursus')
                    <div class="error-message">{{ $message }}</div>
                    @enderror

                </div>


                <!-- INFORMASI KUOTA -->
                <div class="quota-card" id="quotaCard">

                    <div class="quota-title">

                        <h3 id="quotaCourse">Informasi Kuota</h3>

                        <span class="quota-status" id="quotaStatus">
                            Tersedia
                        </span>

                    </div>

                    <div class="quota-info">

                        <div class="quota-item">
                            <strong id="totalQuota">0</strong>
                            <span>Total Kuota</span>
                        </div>

                        <div class="quota-item">
                            <strong id="usedQuota">0</strong>
                            <span>Sudah Terisi</span>
                        </div>

                        <div class="quota-item">
                            <strong id="remainingQuota">0</strong>
                            <span>Sisa Kuota</span>
                        </div>

                    </div>

                    <div class="quota-progress">
                        <div class="quota-progress-bar" id="quotaProgress"></div>
                    </div>

                    <p class="quota-note" id="quotaNote">
                        Silakan pilih program kursus untuk melihat kuota.
                    </p>

                </div>


                <div class="divider"></div>


                <!-- TOMBOL -->
                <div class="actions">

                    <a href="{{ route('home') }}" class="btn-back">
                        ← Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn-submit"
                        id="submitButton"
                        disabled>
                        Lihat Preview Pendaftaran →
                    </button>

                </div>

            </form>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <strong>KursusKu</strong>

        <p>Belajar Teknologi, Bangun Masa Depan.</p>

        <p>© 2026 KursusKu. All Rights Reserved.</p>

    </footer>


    <!-- JAVASCRIPT KUOTA -->
    <script>
        // DATA KUOTA KURSUS
        const courseQuota = {

            "Web Development": {
                total: 30,
                used: 12
            },

            "PHP Programming": {
                total: 30,
                used: 18
            },

            "Laravel Framework": {
                total: 25,
                used: 24
            }

        };


        const courseSelect = document.getElementById("kursus");

        const quotaCard = document.getElementById("quotaCard");

        const quotaCourse = document.getElementById("quotaCourse");

        const totalQuota = document.getElementById("totalQuota");

        const usedQuota = document.getElementById("usedQuota");

        const remainingQuota = document.getElementById("remainingQuota");

        const quotaStatus = document.getElementById("quotaStatus");

        const quotaProgress = document.getElementById("quotaProgress");

        const quotaNote = document.getElementById("quotaNote");

        const submitButton = document.getElementById("submitButton");


        // FUNGSI MENAMPILKAN KUOTA
        function updateQuota() {

            const selectedCourse = courseSelect.value;

            // Jika belum memilih kursus
            if (!selectedCourse || !courseQuota[selectedCourse]) {

                quotaCard.classList.remove("show");

                submitButton.disabled = true;

                return;

            }


            const quota = courseQuota[selectedCourse];

            const remaining = quota.total - quota.used;

            const percentage = (quota.used / quota.total) * 100;


            // Tampilkan informasi kuota
            quotaCard.classList.add("show");

            quotaCourse.textContent = selectedCourse;

            totalQuota.textContent = quota.total;

            usedQuota.textContent = quota.used;

            remainingQuota.textContent = remaining;

            quotaProgress.style.width = percentage + "%";


            // Jika kuota habis
            if (remaining <= 0) {

                quotaStatus.textContent = "Kuota Habis";

                quotaStatus.classList.add("full");

                quotaProgress.style.background =
                    "linear-gradient(90deg, #dc2626, #f87171)";

                quotaNote.textContent =
                    "Maaf, kuota program ini sudah penuh. Silakan pilih program lain.";

                submitButton.disabled = true;

            } else {

                // Jika kuota masih tersedia
                quotaStatus.textContent = "Tersedia";

                quotaStatus.classList.remove("full");

                quotaProgress.style.background =
                    "linear-gradient(90deg, #0284c7, #38bdf8)";

                quotaNote.textContent =
                    "Masih tersedia " + remaining +
                    " tempat untuk program ini.";

                submitButton.disabled = false;

            }

        }


        // PERUBAHAN PILIHAN KURSUS
        courseSelect.addEventListener("change", updateQuota);


        // TAMPILKAN KUOTA SAAT HALAMAN DIBUKA
        updateQuota();
    </script>

</body>

</html>