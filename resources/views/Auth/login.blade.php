<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mahaputra Library</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="login-card">
        
        <div class="logo-circle">
            <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="Logo Peminjaman Buku" style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
        </div>

        <div class="form-group">
            <input type="text" placeholder="Username...">
            <input type="password" placeholder="Password...">
        </div>

        <button class="login-btn">Login</button>

        <div class="register-text">
            Belum Punya Akun? <a href="#">Daftar Sekarang</a>
        </div>

    </div>

</body>
</html>
