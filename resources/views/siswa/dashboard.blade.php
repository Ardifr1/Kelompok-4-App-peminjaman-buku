<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <header class="header">
    <div><img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="Logo peminjaman buku" srcset="" style="width: 80px; height: 80px; object-fit: cover; border-radius: 100%;"></div>
    <div class="namalogo"><p>Mahaputra Library</p></div>
    <div class="profile"><p>Raiky Adila </p>
    <p>1234567890</p></div>
    <div><img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="Logo peminjaman buku" srcset="" style="width: 80px; height: 80px; object-fit: cover; border-radius: 100%;">
    </div>
    </header>
    <!-- sidebar -->
    <div class="sidebar">
        <center><a href="#" class="menu-buku" >Menu Buku</a></center>
        <center><a href="#" class="riwayat-buku" >Riwayat</a></center>
    </div>
    <!-- content -->
    <div class="content">
        <!-- buku umum -->
        <div class="section1">
            <div class="section-header">
                <span>Buku Umum :</span>
                <input type="text" placeholder="Cari buku...">
            </div>
            <div class="book-container">
                <div class="book"></div>
                <div class="book"></div>
                <div class="book"></div>
                <div class="book"></div>
            </div>
        </div>
        <!-- buku pelajaran -->
        <div class="section1">
            <div class="section-header">
                <span>Buku Pelajaran :</span>
            </div>
            <div class="book-container">
                <div class="book"></div>
                <div class="book"></div>
                <div class="book"></div>
                <div class="book"></div>
            </div>
        </div>
    </div>
</body>
</html>