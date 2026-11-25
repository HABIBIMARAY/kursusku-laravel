<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - KursusKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f4f7fb;
            color: #0f172a;
        }

        .header {
            background: #0f172a;
            padding: 18px 0;
            color: white;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
        }

        .brand-logo {
            width: 43px;
            height: 43px;
            border-radius: 12px;
            background: #0ea5e9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            font-weight: 800;
        }

        .brand h2 {
            font-size: 19px;
        }

        .brand span {
            color: #94a3b8;
            font-size: 12px;
        }

        .back-button {
            padding: 10px 16px;
            border: 1px solid #0284c7;
            border-radius: 9px;
            color: #38bdf8;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        .back-button:hover {
            background: #0369a1;
            color: white;
        }

        .main {
            padding: 45px 0;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .eyebrow {
            color: #0284c7;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .page-heading h1 {
            font-size: 28px;
            margin: 7px 0;
        }

        .page-heading p {
            font-size: 13px;
            color: #64748b;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 1.35fr 0.85fr;
            gap: 22px;
            align-items: start;
        }

        .card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 18px rgba(15, 23, 42, .04);
            margin-bottom: 20px;
        }

        .card-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 22px;
        }

        .card-icon {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            background: #e0f2fe;
            color: #0369a1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 800;
        }

        .card-heading h2 {
            font-size: 17px;
        }

        .card-heading p {
            color: #94a3b8;
            font-size: 11px;
            margin-top: 4px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 17px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            outline: none;
            font-size: 12px;
            color: #0f172a;
            background: white;
        }

        .form-control:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, .1);
        }

        textarea.form-control {
            min-height: 90px;
            resize: vertical;
        }

        .help-text {
            font-size: 10px;
            color: #94a3b8;
            margin-top: 6px;
        }

        .btn-primary {
            border: none;
            border-radius: 8px;
            padding: 12px 19px;
            background: #0369a1;
            color: white;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #075985;
        }

        .access-list {
            display: flex;
            flex-direction: column;
            gap: 19px;
        }

        .access-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            font-size: 12px;
        }

        .access-item strong {
            color: #334155;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 6px;
            font-size: 10px;
            font-weight: 700;
        }

        .badge-admin {
            background: #0f172a;
            color: white;
        }

        .badge-active {
            background: #dcfce7;
            color: #15803d;
        }

        .security-description {
            color: #64748b;
            font-size: 12px;
            line-height: 1.7;
            margin: 10px 0 20px;
        }

        .alert {
            padding: 13px 15px;
            border-radius: 9px;
            font-size: 12px;
            margin-bottom: 18px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
        }

        .alert-error {
            background: #fee2e2;
            color: #b91c1c;
        }

        .footer {
            text-align: center;
            color: #94a3b8;
            font-size: 11px;
            padding: 25px;
        }

        @media (max-width: 800px) {
            .profile-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 550px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .page-heading h1 {
                font-size: 24px;
            }

            .card {
                padding: 19px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container header-content">

            <a href="{{ route('home') }}" class="brand">
                <div class="brand-logo">K</div>
                <div>
                    <h2>KursusKu</h2>
                    <span>Laravel MVC</span>
                </div>
            </a>

            <a href="{{ route('home') }}" class="back-button">
                ← Kembali ke Beranda
            </a>

        </div>
    </header>

    <!-- CONTENT -->
    <main class="main">
        <div class="container">

            <div class="page-heading">
                <span class="eyebrow">MY PROFILE</span>
                <h1>Profil Saya</h1>
                <p>Perbarui identitas, kontak, email login, dan informasi akun Anda.</p>
            </div>

            @if(session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif

            <div class="profile-grid">

                <!-- IDENTITAS DAN KONTAK -->
                <section class="card">

                    <div class="card-heading">
                        <div class="card-icon">A</div>
                        <div>
                            <h2>Identitas & Kontak</h2>
                            <p>Perbarui informasi pribadi akun Anda.</p>
                        </div>
                    </div>

                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-grid">

                            <div class="form-group">
                                <label>Nama Lengkap *</label>
                                <input type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name', $user->name) }}"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Email Login *</label>
                                <input type="email"
                                    name="email"
                                    class="form-control"
                                    value="{{ old('email', $user->email) }}"
                                    required>
                                <p class="help-text">
                                    Email digunakan untuk login berikutnya.
                                </p>
                            </div>

                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="text"
                                    name="phone"
                                    class="form-control"
                                    value="{{ old('phone', $user->phone) }}"
                                    placeholder="Contoh: 081234567890">
                            </div>

                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text"
                                    name="position"
                                    class="form-control"
                                    value="{{ old('position', $user->position) }}"
                                    placeholder="Contoh: Administrator Sistem">
                            </div>

                            <div class="form-group full">
                                <label>Instansi / Unit</label>
                                <input type="text"
                                    name="institution"
                                    class="form-control"
                                    value="{{ old('institution', $user->institution) }}"
                                    placeholder="Contoh: KursusKu">
                            </div>

                            <div class="form-group full">
                                <label>Alamat</label>
                                <textarea name="address"
                                    class="form-control"
                                    placeholder="Masukkan alamat lengkap">{{ old('address', $user->address) }}</textarea>
                            </div>

                        </div>

                        <button type="submit" class="btn-primary">
                            Simpan Perubahan Profil
                        </button>

                    </form>

                </section>

                <!-- KOLOM KANAN -->
                <div>

                    <!-- INFORMASI AKSES -->
                    <section class="card">

                        <div class="card-heading">
                            <div>
                                <span class="eyebrow">ACCOUNT ACCESS</span>
                                <h2 style="margin-top:8px;">Informasi Akses</h2>
                            </div>
                        </div>

                        <div class="access-list">

                            <div class="access-item">
                                <strong>Role</strong>
                                <span class="badge badge-admin">
                                    {{ ucfirst($user->role ?? 'User') }}
                                </span>
                            </div>

                            <div class="access-item">
                                <strong>Status</strong>
                                <span class="badge badge-active">
                                    {{ ucfirst($user->status ?? 'Aktif') }}
                                </span>
                            </div>

                            <div class="access-item">
                                <strong>Login terakhir</strong>
                                <span>
                                    {{ $user->last_login_at
                                        ? \Carbon\Carbon::parse($user->last_login_at)->format('d/m/Y H:i')
                                        : 'Belum tersedia' }}
                                </span>
                            </div>

                        </div>

                    </section>

                    <!-- GANTI PASSWORD: TAMPILAN SAJA -->
                    <section class="card">

                        <div class="card-heading">
                            <div>
                                <span class="eyebrow">SECURITY</span>
                                <h2 style="margin-top:8px;">Ganti Password</h2>
                            </div>
                        </div>

                        <p class="security-description">
                            Pengaturan keamanan akun KursusKu.
                            Fitur perubahan password akan diaktifkan setelah
                            proses halaman profil selesai.
                        </p>

                        <div class="form-group">
                            <label>Password Akun</label>
                            <input type="password"
                                class="form-control"
                                value="********"
                                disabled>
                        </div>

                        <button type="button" class="btn-primary" disabled
                            style="opacity:.6; cursor:not-allowed;">
                            Ganti Password
                        </button>

                    </section>

                </div>

            </div>

        </div>
    </main>

    <footer class="footer">
        © 2026 KursusKu. All Rights Reserved.
    </footer>

</body>

</html>