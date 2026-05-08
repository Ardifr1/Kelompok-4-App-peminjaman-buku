    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/kelola_anggota.css') }}">
</head>
<body>

<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
            <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="logo">
            <div>
                <h3>Perpustakaan</h3>
                <p>Admin panel</p>
            </div>
        </div>

        <nav>
            <p class="menu-title">Kelola data buku</p>

            <a href="#" class="menu active">Kelola Anggota</a>
            <a href="#" class="menu">Transaksi</a>
        </nav>

        <div class="logout">
            <a href="#">⎋ Keluar</a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <!-- Topbar -->
        <div class="topbar">
            <span>Admin123</span>
           <img src="https://i.imgur.com/abc123.jpg" class="avatar">
        </div>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                <h1>Anggota</h1>
                <button class="btn">Konfirmasi anggota</button>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        ($i = 1; $i <= 6; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>Nama {{ $i }}</td>
                            <td>XI RPL</td>
                            <td>user{{ $i }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</div>

</body>
</html>