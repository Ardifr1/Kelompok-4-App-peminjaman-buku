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
            <a href="/login" class="keluar"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a>
        </aside>

        <main class="content-wrapper">
            <div class="blue-container">
                <section class="search-section">
                    <div class="search-bar" style="display:flex;justify-content:center;">
                        <input type="text" placeholder="Cari buku..." class="search-input" name="search" id="searchInput" oninput="searchBooks()">
                    </div>
                </section>

                <section class="book-section" id="pelajaranSection">
                    <div class="section-header">
                        <span class="category-title" id="judulPelajaran">Buku Pelajaran :</span>
                    </div>
                    <div class="book-container" id="containerPelajaran">
                        @forelse($bukuPelajaran as $buku)
                            <a href="/deskripsiBuku/{{ $buku->id }}" class="book-link" data-kategori="pelajaran">
                                <div class="book" data-nama="{{ strtolower($buku->nama_buku) }}">
                                    @if($buku->gambar)
                                        <img src="{{ asset($buku->gambar) }}" alt="{{ $buku->nama_buku }}" class="book-cover">
                                    @endif
                                    <div class="book-title">{{ $buku->nama_buku }}</div>
                                </div>
                            </a>
                        @empty
                            <p class="empty-text">Belum ada buku pelajaran.</p>
                        @endempty
                    </div>
                </section>

                <br>

                <section class="book-section lesson-section" id="umumSection">
                    <div class="section-header">
                        <span class="category-title" id="judulUmum">Buku Umum :</span>
                    </div>
                    <div class="book-container" id="containerUmum">
                        @forelse($bukuUmum as $buku)
                            <a href="/deskripsiBuku/{{ $buku->id }}" class="book-link" data-kategori="umum">
                                <div class="book" data-nama="{{ strtolower($buku->nama_buku) }}">
                                    @if($buku->gambar)
                                        <img src="{{ asset($buku->gambar) }}" alt="{{ $buku->nama_buku }}" class="book-cover">
                                    @endif
                                    <div class="book-title">{{ $buku->nama_buku }}</div>
                                </div>
                            </a>
                        @empty
                            <p class="empty-text">Belum ada buku umum.</p>
                        @endempty
                    </div>
                </section>

                <div id="globalMessageContainer"></div>
            </div>
        </main>
    </div>

<script>
function searchBooks() {
    const query = document.getElementById('searchInput').value.toLowerCase().trim();
    const books = document.querySelectorAll('.book');
    
    const pelajaranSection = document.getElementById('pelajaranSection');
    const umumSection = document.getElementById('umumSection');
    
    const judulPelajaran = document.getElementById('judulPelajaran');
    const judulUmum = document.getElementById('judulUmum');
    
    const globalContainer = document.getElementById('globalMessageContainer');

    globalContainer.innerHTML = '';

    let adaPelajaran = false;
    let adaUmum = false;

    if (query === '') {
        judulPelajaran.innerText = 'Buku Pelajaran :';
        judulUmum.innerText = 'Buku Umum :';
        pelajaranSection.style.display = 'block';
        umumSection.style.display = 'block';
        
        books.forEach(book => {
            book.closest('.book-link').style.display = 'inline-block';
        });
        return;
    }

    judulPelajaran.innerText = 'Hasil Pencarian Pelajaran :';
    judulUmum.innerText = 'Hasil Pencarian Umum :';

    books.forEach(book => {
        const namaBuku = book.getAttribute('data-nama') || '';
        const parentLink = book.closest('.book-link');
        const kategori = parentLink.getAttribute('data-kategori');

        if (namaBuku.includes(query)) {
            parentLink.style.display = 'inline-block';
            if (kategori === 'pelajaran') adaPelajaran = true;
            if (kategori === 'umum') adaUmum = true;
        } else {
            parentLink.style.display = 'none';
        }
    });

    if (adaPelajaran) {
        pelajaranSection.style.display = 'block';
    } else {
        pelajaranSection.style.display = 'none';
    }

    if (adaUmum) {
        umumSection.style.display = 'block';
    } else {
        umumSection.style.display = 'none';
    }

    if (!adaPelajaran && !adaUmum) {
        const message = document.createElement('div');
        message.innerText = 'Hasil pencarian tidak ditemukan';
        message.style.width = '100%';
        message.style.height = '200px';
        message.style.display = 'flex';
        message.style.alignItems = 'center';
        message.style.justifyContent = 'center';
        message.style.fontSize = '20px';
        message.style.color = 'gray';
        
        globalContainer.appendChild(message);
    }
}

document.getElementById('searchInput').addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        searchBooks();
    }
});
</script>
</body>
</html>