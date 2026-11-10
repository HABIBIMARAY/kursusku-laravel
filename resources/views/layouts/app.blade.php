<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KursusKu - Belajar Teknologi')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f4f7fb;
            color: #0f172a;
            font-size: 14px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1050px, calc(100% - 36px));
            margin: auto;
        }

        .header {
            background: #ffffff;
            border-bottom: 1px solid #e8edf4;
        }

        .header-top {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-logo {
            width: 43px;
            height: 43px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            color: white;
            font-size: 23px;
            font-weight: 800;
            background: linear-gradient(135deg, #0284c7, #0f172a);
        }

        .brand h2 {
            font-size: 19px;
            font-weight: 800;
            color: #0f172a;
        }

        .brand span {
            display: block;
            color: #64748b;
            font-size: 11px;
            margin-top: 3px;
        }

        .milestone {
            background: #e0f2fe;
            color: #0369a1;
            border: 1px solid #bae6fd;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
        }

        .navbar {
            background: #ffffff;
            border-bottom: 1px solid #e8edf4;
        }

        .nav-content {
            min-height: 45px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links a {
            color: #64748b;
            font-size: 13px;
            font-weight: 600;
            padding: 14px 0;
            transition: .2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #0284c7;
        }

        .nav-manage {
            color: #0284c7;
            font-size: 12px;
            font-weight: 700;
        }

        .page-content {
            min-height: calc(100vh - 180px);
            padding: 32px 0 45px;
        }

        .page-heading {
            margin-bottom: 22px;
        }

        .eyebrow {
            color: #0284c7;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .page-heading h1 {
            font-size: 25px;
            color: #0f172a;
            margin: 8px 0;
            letter-spacing: -.7px;
        }

        .page-heading p {
            color: #64748b;
            font-size: 13px;
            line-height: 1.7;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #e7edf5;
            border-radius: 13px;
            padding: 20px;
            box-shadow: 0 5px 18px rgba(15, 23, 42, .035);
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 17px;
        }

        .panel-header h2 {
            font-size: 16px;
            color: #0f172a;
        }

        .panel-header p {
            color: #64748b;
            font-size: 11px;
            margin-top: 5px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
            border-radius: 8px;
            padding: 9px 14px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
        }

        .btn-primary {
            color: #ffffff;
            background: #0284c7;
        }

        .btn-primary:hover {
            background: #0369a1;
            transform: translateY(-1px);
        }

        .btn-light {
            background: #f1f5f9;
            color: #334155;
        }

        .btn-light:hover {
            background: #e2e8f0;
        }

        .table-wrap {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            white-space: nowrap;
        }

        th {
            background: #f1f7fc;
            color: #475569;
            font-size: 11px;
            font-weight: 700;
            text-align: left;
            padding: 12px 11px;
        }

        td {
            color: #334155;
            font-size: 12px;
            padding: 13px 11px;
            border-bottom: 1px solid #edf1f6;
        }

        tbody tr:hover {
            background: #f8fbff;
        }

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
            text-transform: capitalize;
        }

        .status-open {
            background: #dcfce7;
            color: #15803d;
        }

        .status-draft {
            background: #fef3c7;
            color: #a16207;
        }

        .status-closed {
            background: #fee2e2;
            color: #b91c1c;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            color: #334155;
            font-size: 12px;
            font-weight: 700;
        }

        .form-control {
            width: 100%;
            padding: 10px 11px;
            border: 1px solid #dbe3ed;
            border-radius: 8px;
            background: #ffffff;
            color: #0f172a;
            font-family: inherit;
            font-size: 12px;
            outline: none;
            transition: .2s;
        }

        /* ===== PERBAIKAN WARNA KURSUSKU ===== */

        body {
            background:
                radial-gradient(circle at 10% 5%, rgba(56, 189, 248, .10), transparent 28%),
                linear-gradient(135deg, #eef6ff 0%, #f4f7fb 50%, #eaf3fc 100%);
        }

        /* Header */
        .header {
            background: linear-gradient(110deg, #0f172a, #142b49);
            border-bottom: 1px solid #243b5a;
        }

        .brand h2 {
            color: #ffffff;
        }

        .brand span {
            color: #bae6fd;
        }

        .brand-logo {
            background: linear-gradient(135deg, #38bdf8, #0284c7);
            box-shadow: 0 5px 14px rgba(56, 189, 248, .25);
        }

        .milestone {
            background: rgba(56, 189, 248, .14);
            color: #bae6fd;
            border: 1px solid rgba(125, 211, 252, .3);
        }

        /* Navbar */
        .navbar {
            background: #142b49;
            border-bottom: 1px solid #263e5e;
        }

        .nav-links a {
            color: #cbd5e1;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #38bdf8;
        }

        .nav-manage {
            color: #7dd3fc;
        }

        /* Judul halaman */
        .page-heading h1 {
            color: #102b4c;
        }

        .page-heading p {
            color: #526781;
        }

        .eyebrow {
            color: #0284c7;
        }

        /* Panel tabel dan formulir */
        .panel {
            background: linear-gradient(145deg, #ffffff, #f5faff);
            border: 1px solid #d7e8f7;
            box-shadow: 0 10px 28px rgba(15, 50, 85, .08);
        }

        .panel-header h2 {
            color: #123456;
        }

        /* Header tabel */
        th {
            background: linear-gradient(90deg, #123456, #075985);
            color: #ffffff;
            border-bottom: 2px solid #38bdf8;
        }

        td {
            color: #334155;
            border-bottom: 1px solid #e1ebf5;
        }

        tbody tr:nth-child(even) {
            background: #f0f8ff;
        }

        tbody tr:hover {
            background: #e0f2fe;
        }

        /* Form */
        .form-group label {
            color: #123456;
        }

        .form-control {
            background: #f8fbff;
            border: 1px solid #cbddec;
            color: #123456;
        }

        .form-control:focus {
            background: #ffffff;
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, .13);
        }

        .form-help {
            color: #64748b;
        }

        /* Tombol */
        .btn-primary {
            background: linear-gradient(135deg, #0284c7, #0369a1);
            box-shadow: 0 4px 10px rgba(2, 132, 199, .18);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0369a1, #075985);
        }

        /* Footer */
        .footer {
            background: linear-gradient(110deg, #0f172a, #142b49);
            border-top: 3px solid #0284c7;
        }

        /* Status */
        .status-open {
            background: #dcfce7;
            color: #15803d;
        }

        .status-draft {
            background: #fef3c7;
            color: #a16207;
        }

        .status-closed {
            background: #fee2e2;
            color: #b91c1c;
        }


        .form-control:focus {
            border-color: #38bdf8;
            box-shadow: 0 0 0 3px rgba(56, 189, 248, .13);
        }

        textarea.form-control {
            min-height: 85px;
            resize: vertical;
        }

        .form-help {
            color: #94a3b8;
            font-size: 10px;
        }

        .error-text {
            color: #dc2626;
            font-size: 11px;
        }

        .alert {
            padding: 11px 14px;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 12px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .form-actions {
            display: flex;
            gap: 9px;
            justify-content: flex-end;
            margin-top: 20px;
            padding-top: 16px;
            border-top: 1px solid #edf1f6;
        }

        .empty-state {
            text-align: center;
            padding: 35px 15px;
            color: #64748b;
            font-size: 12px;
        }

        .footer {
            background: #0f172a;
            color: #cbd5e1;
            padding: 18px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            font-size: 11px;
        }

        .footer strong {
            color: #ffffff;
            font-size: 13px;
        }

        @media (max-width: 650px) {
            .container {
                width: min(100% - 24px, 1050px);
            }

            .page-content {
                padding-top: 24px;
            }

            .page-heading h1 {
                font-size: 21px;
            }

            .panel {
                padding: 14px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .panel-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .footer-content {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="container header-top">
            <a href="{{ route('home') }}" class="brand">
                <div class="brand-logo">K</div>
                <div>
                    <h2>KursusKu</h2>
                    <span>Laravel MVC</span>
                </div>
            </a>

            <div class="milestone">Milestone 10</div>
        </div>
    </header>

    <nav class="navbar">
        <div class="container nav-content">
            <div class="nav-links">
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('pendaftaran') }}">Pendaftaran</a>
            </div>

            <a href="{{ route('courses.index') }}" class="nav-manage">
                Data Kursus →
            </a>
        </div>
    </nav>

    <main class="page-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <strong>KursusKu</strong>
            <span>© 2026 KursusKu. All Rights Reserved.</span>
        </div>
    </footer>

</body>

</html>