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
        </aside>

        <main class="content-wrapper">
            <div class="blue-container">
                <section class="search-section">
                    <div class="search-bar" style="display:flex;justify-content:center;">
                        
                        <input type="text" placeholder="Cari buku..." class="search-input" name="search" id="searchInput">
                        
                    </div>
                </section>

                <!-- SECTION BUKU PELAJARAN -->
                <section class="book-section" id="pelajaranSection">
                    <div class="section-header">
                        <span class="category-title">Buku Pelajaran :</span>
                    </div>
                    <div class="book-container">
                        @forelse($bukuPelajaran as $buku)
                            <a href="/deskripsiBuku/{{ $buku->id }}" class="book-link">
                                <div class="book" data-nama="{{ strtolower($buku->nama_buku) }}">
                                    @if($buku->gambar)
                                        <img src="{{ asset($buku->gambar) }}" alt="{{ $buku->nama_buku }}" class="book-cover">
                                    @endif
                                    <div class="book-title">{{ $buku->nama_buku }}</div>
                                </div>
                            </a>
                        @empty
                            <p class="empty-text">Belum ada buku pelajaran.</p>
                        @endforelse
                    </div>
                </section>

                <br>

                <!-- SECTION BUKU UMUM -->
                <section class="book-section lesson-section" id="umumSection">
                    <div class="section-header">
                        <span class="category-title">Buku Umum :</span>
                    </div>
                    <div class="book-container">
                        @forelse($bukuUmum as $buku)
                            <a href="/deskripsiBuku/{{ $buku->id }}" class="book-link">
                                <div class="book" data-nama="{{ strtolower($buku->nama_buku) }}">
                                    @if($buku->gambar)
                                        <img src="{{ asset($buku->gambar) }}" alt="{{ $buku->nama_buku }}" class="book-cover">
                                    @endif
                                    <div class="book-title">{{ $buku->nama_buku }}</div>
                                </div>
                            </a>
                        @empty
                            <p class="empty-text">Belum ada buku umum.</p>
                        @endforelse
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script>
    function searchBooks() {

        const query = document
            .getElementById('searchInput')
            .value
            .toLowerCase();

        const books = document.querySelectorAll('.book');

        const pelajaranSection =
            document.getElementById('pelajaranSection');

        const umumSection =
            document.getElementById('umumSection');

        const judulPelajaran =
            pelajaranSection.querySelector('.category-title');

        const container =
            pelajaranSection.querySelector('.book-container');

        let ditemukan = false;

        // hapus pesan lama
        const oldMessage =
            document.getElementById('notFoundMessage');

        if (oldMessage) {
            oldMessage.remove();
        }

        books.forEach(book => {

            const nama =
                book.getAttribute('data-nama') || '';

            const parent =
                book.closest('.book-link');

            if (nama.includes(query) && query !== '') {

                parent.style.display = 'inline-block';

                ditemukan = true;

            } else {

                parent.style.display = 'none';
            }
        });

        // MODE SEARCH
        if (query !== '') {

            judulPelajaran.innerText =
                'Hasil Pencarian :';

            umumSection.style.display = 'none';

        } else {

            // kembali normal
            judulPelajaran.innerText =
                'Buku Pelajaran :';

            umumSection.style.display = 'block';

            books.forEach(book => {

                const parent =
                    book.closest('.book-link');

                parent.style.display = 'inline-block';
            });
        }

        // JIKA TIDAK ADA HASIL
        if (!ditemukan && query !== '') {

            const message =
                document.createElement('div');

            message.id = 'notFoundMessage';

            message.innerText = 'Hasil tidak ada';

            message.style.width = '100%';
            message.style.height = '300px';
            message.style.display = 'flex';
            message.style.alignItems = 'center';
            message.style.justifyContent = 'center';
            message.style.fontSize = '22px';
            message.style.color = 'gray';

            container.appendChild(message);
        }
    }

    // ENTER UNTUK SEARCH
    document.getElementById('searchInput')
        .addEventListener('keydown', function(e) {

            if (e.key === 'Enter') {

                e.preventDefault();

                searchBooks();
            }
        });
</script>
</body>
</html>