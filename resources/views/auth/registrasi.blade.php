<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - BookNest</title>
    <link rel="icon" href="{{ asset('img/Logo.svg') }}" type="image/svg+xml">
    <!-- AdminLTE CSS (Bootstrap) -->
    <link href="{{ asset('Templet/dist/css/adminlte.min.css') }}" rel="stylesheet">
    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        .register-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            padding: 40px;
            width: 100%;
            max-width: 540px;
        }
        .logo-icon {
            background-color: #0f3d97;
            color: white;
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
        }
        .title {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
            text-align: center;
            margin-bottom: 8px;
        }
        .subtitle {
            font-size: 14px;
            color: #64748b;
            text-align: center;
            margin-bottom: 32px;
            line-height: 1.5;
        }
        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }
        
        /* Custom Input Group */
        .input-group-custom {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            background-color: #f4f6fa;
            transition: all 0.2s ease-in-out;
            overflow: hidden;
        }
        .input-group-custom:focus-within {
            border-color: #0f52ba;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(15, 82, 186, 0.1);
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
            background-color: transparent;
            font-size: 14px;
            color: #334155;
        }
        .input-group-custom .form-control::placeholder {
            color: #94a3b8;
        }
        .input-group-custom .form-control:focus {
            box-shadow: none;
            background-color: transparent;
        }
        .input-group-custom .icon-right {
            padding: 10px 14px 10px 0;
            color: #94a3b8;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: color 0.2s;
        }
        .input-group-custom .icon-right:hover {
            color: #64748b;
        }
        
        .btn-primary {
            background-color: #005ce6;
            border-color: #005ce6;
            padding: 12px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.2s ease;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
            background-color: #004dc2 !important;
            border-color: #004dc2 !important;
        }
        .divider {
            border-top: 1px solid #f1f5f9;
            margin: 24px 0;
        }
        .login-text {
            font-size: 13.5px;
            color: #64748b;
            text-align: center;
            margin-bottom: 0;
        }
        .login-link {
            color: #005ce6;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .login-link:hover {
            color: #004dc2;
            text-decoration: underline;
        }
        
        .row-custom {
            display: flex;
            gap: 16px;
        }
        .col-custom {
            flex: 1;
        }
        
        @media (max-width: 576px) {
            .row-custom {
                flex-direction: column;
                gap: 0;
            }
            .mb-sm-0 {
                margin-bottom: 1rem !important;
            }
        }
    </style>
</head>
<body>

    <div class="register-card">
        <!-- Logo -->
        <div class="logo-icon">
            <img src="{{ asset('img/Icon.svg') }}" alt="BookNest Icon" style="width: 28px; height: 28px;">
        </div>
        
        <!-- Header -->
        <h1 class="title">Registrasi Anggota Baru</h1>
        <p class="subtitle">Lengkapi data di bawah untuk membuat akun keanggotaan<br>perpustakaan.</p>

        <!-- Form -->
        <form action="{{ route('register.post') }}" method="POST" id="registerForm">
            @csrf

            {{-- Error alert --}}
            @if ($errors->any())
                <div style="background:#fee2e2;border:1px solid #fca5a5;color:#b91c1c;border-radius:8px;padding:10px 14px;font-size:13px;margin-bottom:16px;">
                    <i class="ti ti-alert-circle me-1"></i> {{ $errors->first() }}
                </div>
            @endif

            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <div class="input-group-custom">
                    <span class="icon-left"><i class="ti ti-user"></i></span>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama lengkap Anda" value="{{ old('name') }}" required autofocus>
                </div>
            </div>

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group-custom">
                    <span class="icon-left"><i class="ti ti-at"></i></span>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Pilih username unik" value="{{ old('username') }}" required>
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group-custom">
                    <span class="icon-left"><i class="ti ti-mail"></i></span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="nama@email.com" value="{{ old('email') }}" required>
                </div>
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <label for="address" class="form-label">Alamat</label>
                <div class="input-group-custom">
                    <span class="icon-left"><i class="ti ti-map-pin"></i></span>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Alamat lengkap tempat tinggal" value="{{ old('address') }}" required>
                </div>
            </div>

            <!-- Passwords in a row -->
            <div class="row-custom mb-4">
                <!-- Kata Sandi -->
                <div class="col-custom mb-3 mb-sm-0">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="input-group-custom">
                        <span class="icon-left"><i class="ti ti-lock"></i></span>
                        <input type="password" name="password" class="form-control" id="password" placeholder="kata sandi" required>
                        <span class="icon-right" onclick="togglePassword('password', 'toggleIcon1')">
                            <i class="ti ti-eye" id="toggleIcon1"></i>
                        </span>
                    </div>
                </div>

                <!-- Konfirmasi Sandi -->
                <div class="col-custom">
                    <label for="password_confirmation" class="form-label">Konfirmasi Sandi</label>
                    <div class="input-group-custom">
                        <span class="icon-left"><i class="ti ti-refresh"></i></span>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Ulangi kata sandi" required>
                        <span class="icon-right" onclick="togglePassword('password_confirmation', 'toggleIcon2')">
                            <i class="ti ti-eye" id="toggleIcon2"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" id="submitBtn" class="btn btn-primary d-flex justify-content-center align-items-center">
                Daftar Akun
            </button>
        </form>

        <div class="divider"></div>

        <!-- Login Link -->
        <p class="login-text">
            Sudah punya akun? <a href="{{ route('login') }}" class="login-link">Masuk di sini</a>
        </p>
    </div>

    <!-- Script for Toggle Password -->
    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);
            
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

        // Add loader to submit button
        document.getElementById('registerForm').addEventListener('submit', function() {
            const btn = document.getElementById('submitBtn');
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Memproses...';
        });
    </script>
</body>
</html>
