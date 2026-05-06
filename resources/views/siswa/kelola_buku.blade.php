<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Kelola Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/kelola_buku.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="flex min-h-screen bg-white">

    <aside class="sidebar-container">
        <div class="sidebar-header">
            <div class="logo-placeholder"></div>
            <div>
                <h1 class="text-lg font-bold leading-none">Perpustakaan</h1>
                <p class="text-xs opacity-70">Admin panel</p>
            </div>
        </div>

        <nav class="sidebar-nav">
            <a href="#" class="nav-item active">Kelola data buku</a>
            <a href="#" class="nav-item">Kelola Anggota</a>
            <a href="#" class="nav-item">Transaksi</a>
        </nav>

        <div class="sidebar-footer">
            <a href="#" class="logout-link">
                <i class="fa-solid fa-right-from-bracket"></i> Keluar
            </a>
        </div>
    </aside>

    <main class="flex-1 flex flex-col">
        <header class="topbar">
            <div class="flex items-center gap-3">
                <span class="text-sm font-medium">Admin123</span>
                <div class="profile-circle"></div>
            </div>
        </header>

        <section class="content-wrapper">
            <div class="blue-card-container">
                
                <div class="category-section">
                    <div class="section-header">
                        <h2 class="text-white font-semibold">Buku Umum :</h2>
                        <button class="btn-tambah">+ Tambah buku</button>
                    </div>
                    <div class="grid-books">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="book-card-placeholder"></div>
                        @endfor
                    </div>
                </div>

                <div class="category-section mt-8">
                    <div class="section-header">
                        <h2 class="text-white font-semibold">Buku Pelajaran :</h2>
                    </div>
                    <div class="grid-books">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="book-card-placeholder"></div>
                        @endfor
                    </div>
                </div>

            </div>
        </section>
    </main>

</body>
</html>