<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahaputra Library - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-left">
            <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" class="logo-img">
            <h1 class="namalogo">Mahaputra Library</h1>
        </div>
        <div class="header-right">
            <div class="profile-info">
                <p>Raiky Adila</p>
                <p>1234567890</p>
            </div>
            <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" class="logo-img">
        </div>
    </header>

    <div class="main-layout">
        <aside class="sidebar">
            <a href="/dashboard" class="menu-item active">Menu Buku</a>
            <a href="/riwayat" class="menu-item">Riwayat</a>
        </aside>

        <main class="content-wrapper">
            <div class="blue-container">

                <!-- SECTION BUKU UMUM -->
                <section class="book-section">
                    <div class="section-header">
                        <span class="category-title">Buku Pelajaran :</span>
                        <a href="/allPelajaran" class="see-all">Lihat Semua</a>
                    </div>
                    <div class="book-container">
                        <div class="book"></div>
                        <div class="book"></div>
                        <div class="book"></div>
                        <div class="book"></div>
                        <div class="book"></div>
                    </div>
                </section>
<br>
                <section class="book-section lesson-section">
                    <div class="section-header">
                        <span class="category-title">Buku Umum :</span>
                        <a href="/allUmum" class="see-all" style="color: white;">Lihat Semua</a>
                    </div>
                    <div class="book-container">
                        <div class="book"></div>
                        <div class="book"></div>
                        <div class="book"></div>
                        <div class="book"></div>
                        <div class="book"></div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>