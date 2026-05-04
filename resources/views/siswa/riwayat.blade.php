<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahaputra Library - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/riwayat.css') }}">
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
            <a href="#" class="menu-item active">Menu Buku</a>
            <a href="#" class="menu-item">Riwayat</a>
        </aside>

        <main class="content-wrapper">
            <div class="blue-container">
                <!-- SECTION BUKU UMUM -->
                <section class="book-section">
                    <div class="section-header">
                        
                    </div>
                    <div class="book-container">
                        <table border="2" class="riwayat"></table>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                        </tr>
                        </table>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>