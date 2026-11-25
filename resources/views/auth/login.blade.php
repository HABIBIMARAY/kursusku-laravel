<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KursusKu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f4f7fb;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .login-container {
            width: 100%;
            max-width: 430px;
        }

        .brand {
            text-align: center;
            margin-bottom: 25px;
        }

        .brand-logo {
            width: 55px;
            height: 55px;
            background: #0369a1;
            color: white;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            font-weight: 800;
            margin: auto auto 12px;
        }

        .brand h1 {
            color: #0f172a;
            font-size: 25px;
            font-weight: 800;
        }

        .brand p {
            color: #64748b;
            font-size: 13px;
            margin-top: 7px;
        }

        .login-card {
            background: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(15, 23, 42, 0.07);
            border: 1px solid #e2e8f0;
        }

        .login-card h2 {
            color: #0f172a;
            font-size: 21px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 19px;
        }

        .form-group label {
            display: block;
            color: #334155;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            font-size: 13px;
            outline: none;
            color: #0f172a;
        }

        .form-control:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.1);
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 48px;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #64748b;
            font-size: 12px;
            font-weight: 600;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 5px 0 23px;
            font-size: 12px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #475569;
        }

        .form-options a {
            color: #0284c7;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 9px;
            background: #0369a1;
            color: white;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #075985;
        }

        .alert-error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 11px;
            border-radius: 8px;
            font-size: 12px;
            margin-bottom: 18px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            padding: 11px;
            border-radius: 8px;
            font-size: 12px;
            margin-bottom: 18px;
        }

        .footer {
            text-align: center;
            color: #94a3b8;
            font-size: 11px;
            margin-top: 22px;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="brand">
            <div class="brand-logo">K</div>
            <h1>KursusKu</h1>
            <p>Laravel MVC Learning Management System</p>
        </div>

        <div class="login-card">

            <h2>Selamat Datang!</h2>
            <p class="subtitle">Silakan login untuk melanjutkan ke akun Anda.</p>

            @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert-error">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Masukkan email Anda"
                        value="{{ old('email') }}"
                        required
                        autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="password-wrapper">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required>

                        <button
                            type="button"
                            class="toggle-password"
                            onclick="togglePassword()"
                            id="toggleButton">
                            Lihat
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <label class="remember">
                        <input type="checkbox" name="remember" value="1">
                        Remember Me
                    </label>

                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn-login">
                    Login ke KursusKu
                </button>

            </form>

        </div>

        <div class="footer">
            © {{ date('Y') }} KursusKu. All rights reserved.
        </div>

    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const button = document.getElementById('toggleButton');

            if (password.type === 'password') {
                password.type = 'text';
                button.textContent = 'Sembunyi';
            } else {
                password.type = 'password';
                button.textContent = 'Lihat';
            }
        }
    </script>

</body>

</html>