<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Buku - Mahaputra Library</title>
    <link rel="stylesheet" href="{{ asset('css/menu_siswa.css') }}">
</head>
<body>

    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="brand-header">
                 <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="logo">
                <div class="brand-info">
                    <span class="brand-name">Mahaputra</span>
                    <span class="brand-sub">Library</span>
                </div>
            </div>

            <nav class="sidebar-nav">
                <div class="nav-item active-container">
                    <a href="#" class="nav-link active">Menu buku</a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link">Riwayat</a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header Atas -->
            <header class="top-bar">
                <div class="user-container">
                    <div class="user-details">
                        <span class="user-name">Raiky adila.f</span>
                        <span class="user-id">(no nisn)</span>
                    </div>
                     <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" alt="logo">
                </div>
            </header>

            <!-- Konten Utama -->
            <section class="content-section">
                <div class="blue-panel">
                    <!-- Bar Pencarian -->
                    <div class="search-wrapper">
                        <input type="text" placeholder="Pencarian....." class="search-input">
                    </div>

                    <!-- Kategori: Buku Umum -->
                    <div class="book-category">
                        <h3>Buku Umum :</h3>
                        <div class="white-box">
                            <div class="book-grid">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="book-placeholder"></div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <!-- Kategori: Buku Pelajaran -->
                    <div class="book-category">
                        <h3>Buku Pelajaran :</h3>
                        <div class="white-box">
                            <div class="book-grid">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="book-placeholder"></div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>
</html>