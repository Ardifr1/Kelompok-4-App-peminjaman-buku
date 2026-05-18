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
            <a href="/dashboard" class="menu-item">Menu Buku</a>
            <a href="/riwayat" class="menu-item active">Riwayat</a>
        </aside>

        <main class="content-wrapper">
        <div class="blue-container">
            <div class="book-container">
                <table class="table-riwayat" border="1" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Kembali</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Riwayat as $riwayat)
                            <tr>
                                <td>{{ sprintf('%02d', $loop->iteration) }}</td>
                            
                                <td>{{ $riwayat->nama_buku }}</td>
                            
                                <td>{{ \Carbon\Carbon::parse($riwayat->tanggal_pinjam)->format('d/m/Y') }}</td>
                                <td>{{ $riwayat->tanggal_kembali ? \Carbon\Carbon::parse($riwayat->tanggal_kembali)->format('d/m/Y') : '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" style="text-align: center; color: #888;">Belum ada riwayat peminjaman buku.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
             </div>
        </main>
    </div>
</body>
</html>