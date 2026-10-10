<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - BookNest</title>
    <link rel="icon" href="{{ asset('img/Logo.svg') }}" type="image/svg+xml">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('Templet/dist/css/adminlte.min.css') }}" rel="stylesheet">
    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f6f8fd 0%, #f1f4fb 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
            padding: 40px;
            width: 100%;
            max-width: 520px;
        }
        .logo-icon {
            background-color: #0c2b7c;
            color: white;
            width: 52px;
            height: 52px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
        }
        .title {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            text-align: center;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        .subtitle {
            font-size: 14px;
            color: #64748b;
            text-align: center;
            margin-bottom: 32px;
        }
        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 8px;
        }
        .form-control {
            padding: 10px 14px;
            font-size: 14px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            color: #334155;
        }
        .form-control::placeholder {
            color: #94a3b8;
        }
        .form-control:focus {
            border-color: #0c2b7c;
            box-shadow: 0 0 0 3px rgba(12, 43, 124, 0.1);
        }
        
        /* Custom Input Group for Password */
        .input-group-custom {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            background-color: #fff;
            transition: all 0.2s ease-in-out;
        }
        .input-group-custom:focus-within {
            border-color: #0c2b7c;
            box-shadow: 0 0 0 3px rgba(12, 43, 124, 0.1);
        }
        .input-group-custom .icon-left {
            padding: 10px 0 10px 14px;
            color: #64748b;
            display: flex;
            align-items: center;
        }
        .input-group-custom .form-control {
            border: none;
            box-shadow: none;
            padding-left: 10px;
        }
        .input-group-custom .form-control:focus {
            box-shadow: none;
        }
        .input-group-custom .icon-right {
            padding: 10px 14px 10px 0;
            color: #64748b;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        
        .form-check-label {
            font-size: 13px;
            color: #64748b;
            padding-top: 2px;
        }
        .form-check-input {
            border-color: #cbd5e1;
            cursor: pointer;
        }
        .form-check-input:checked {
            background-color: #0c2b7c;
            border-color: #0c2b7c;
        }
        .forgot-password {
            font-size: 13px;
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .forgot-password:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }
        .btn-primary {
            background-color: #0c2b7c;
            border-color: #0c2b7c;
            padding: 12px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.2s ease;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
            background-color: #081e59 !important;
            border-color: #081e59 !important;
        }
        .btn-icon {
            margin-left: 6px;
            font-size: 16px;
        }
        .divider {
            border-top: 1px solid #f1f5f9;
            margin: 28px 0;
        }
        .register-text {
            font-size: 13.5px;
            color: #64748b;
            text-align: center;
            margin-bottom: 0;
        }
        .register-link {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .register-link:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <!-- Logo -->
        <div class="logo-icon">
            <img src="{{ asset('img/Icon.svg') }}" alt="BookNest Icon" style="width: 28px; height: 28px;">
        </div>
        
        <!-- Header -->
        <h1 class="title">Masuk ke Akun BookNest</h1>
        <p class="subtitle">Kelola peminjaman dan akses koleksi pustaka mandiri</p>

        <!-- Form -->
        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            {{-- Error alert --}}
            @if ($errors->any())
                <div style="background:#fee2e2;border:1px solid #fca5a5;color:#b91c1c;border-radius:8px;padding:10px 14px;font-size:13px;margin-bottom:16px;">
                    <i class="ti ti-alert-circle me-1"></i> {{ $errors->first() }}
                </div>
            @endif

            <!-- Email / Username Input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email atau Username</label>
                <div class="input-group-custom">
                    <span class="icon-left">
                        <i class="ti ti-mail"></i>
                    </span>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email atau Username" value="{{ old('email') }}" required autofocus>
                </div>
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="form-label">Kata Sandi</label>
                <div class="input-group-custom">
                    <span class="icon-left">
                        <i class="ti ti-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <span class="icon-right" onclick="togglePassword()">
                        <i class="ti ti-eye" id="toggleIcon"></i>
                    </span>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" name="remember" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">
                        Ingat Saya
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center">
                Masuk Sekarang <i class="ti ti-arrow-right btn-icon"></i>
            </button>
        </form>

        <div class="divider"></div>

        <!-- Register Link -->
        <p class="register-text">
            Belum punya akun? <a href="{{ route('register') }}" class="register-link">Daftar di sini</a>
        </p>
    </div>

    <!-- Script for Toggle Password -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('ti-eye');
                toggleIcon.classList.add('ti-eye-off');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('ti-eye-off');
                toggleIcon.classList.add('ti-eye');
            }
        }
    </script>
</body>
</html>
