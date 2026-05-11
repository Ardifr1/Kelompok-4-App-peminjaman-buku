<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahaputra Library - Riwayat</title>
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
                <p>{{ Auth::user()->name }}</p>
                <p>{{ Auth::user()->nis }}</p>
            </div>
            <img src="{{ asset('gambar/User.jpeg') }}" class="logo-img">
        </div>
    </header>

    <div class="main-layout">
        <aside class="sidebar">
            <a href="/dashboard" class="menu-item active">Menu Buku</a>
            <a href="/riwayat" class="menu-item">Riwayat</a>
        </aside>

        <main class="content-wrapper">
            <div class="blue-container">
            <div class="book-container">
                <table class="table-riwayat" border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>aku bisa pasang kopling supra</td>
                        <td>05/05/2026</td>
                        <td>07/05/2026</td>
                    </tr>
                     <tr>
                        <td>01</td>
                        <td>aku bisa pasang kopling supra</td>
                        <td>05/05/2026</td>
                        <td>07/05/2026</td>
                    </tr>
                </table>
            </div>
            </div>
        </main>
    </div>
</body>
</html>