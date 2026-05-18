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

    
        
    <div class="container">
        
        <div class="left">
            <h3>Selamat Datang di Mahaputra Library</h3>
            <p>Silahkan Login untuk melanjutkan</p>
            <div class="logo-circle">
            <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="Logo Peminjaman Buku" style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;"></img>
        </div>
        </div>
        <div class="right">
            <h2>Login</h2><br>
             <div class="form-group">
            @if (session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb; font-size: 14px;">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/login" method="POST">
            @csrf
            <input type="text" name="username" id="username" placeholder="Username..." value="{{ old('username') }}">
            <br><br>
            <input type="password" name="password" id="password" placeholder="Password...">
            @if ($errors->any())
                <div style="color: red; margin-top: 5px; font-size: 14px;">
                    {{ $errors->first() }}
                </div>
            @endif
            <a href="#" class="Password-reset">Lupa Password?</a>
            <br>
            <button class="login-btn" type="submit">Login</button>
            </form>
        </div>
         <div class="register-text">
            Belum Punya Akun? <a href="/register">Daftar Sekarang</a>
        </div>
    </div>
        </div>
          
   
    

</body>
</html>
