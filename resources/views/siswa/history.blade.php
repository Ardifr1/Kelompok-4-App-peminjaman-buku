<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Peminjaman - Mahaputra Library</title>
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
</head>
<body>

    <div class="container">
        <aside class="sidebar">
            <div class="brand">
                 <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="logo">
                <div class="brand-text">
                    <span class="brand-name">Mahaputra</span>
                    <span class="brand-sub">Library</span>
                </div>
            </div>

            <div class="menu-section">
                <p class="menu-label">Menu buku</p>
                <div class="nav-active-bg">
                    <a href="#" class="nav-link active">Riwayat</a>
                </div>
            </div>
        </aside>

        <main class="main-content">
            <header class="top-nav">
                <div class="user-profile">
                    <div class="user-info">
                        <span class="user-name">Raiky adila.f</span>
                        <span class="user-nisn">[no nisn]</span>
                    </div>
                   <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="logo">
                </div>
            </header>

            <section class="content-area">
                <div class="blue-card">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 50px;">No</th>
                                    <th>Nama Buku</th>
                                    <th>Tanggal peminjaman</th>
                                    <th>Tanggal kembali</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Looping data asli di sini nantinya --}}
                                @for ($i = 1; $i <= 8; $i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>
</html>