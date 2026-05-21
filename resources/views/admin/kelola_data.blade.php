<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahaputra Library - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/kelola_data.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>         
    <header class="header">
        <div class="header-left">
            <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" class="logo-img">
            <h1 class="namalogo">Mahaputra Library
                <br><p class="panel">Admin panel</p>
            </h1>
        </div>
        <div class="header-right">
            <div class="profile-info">
                <p>Admin KIKIR</p>
            </div>
            <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}" class="logo-img">
        </div>
    </header>

    <div class="main-layout">
        <aside class="sidebar">
            <a href="/dashboardAdmin" class="menu-item active">Kelola data buku</a>
            <a href="/anggota" class="menu-item">Kelola Anggota</a>
            <a href="/transaksi" class="menu-item">Transaksi</a>
            <a href="#" class="keluar"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a>

        </aside>

        <main class="content-wrapper">
            <div class="blue-container">

                {{-- Notifikasi sukses --}}
                @if(session('success'))
                    <div style="background-color: #d4edda; color: #155724; padding: 12px 20px; border-radius: 10px; margin-bottom: 20px; font-weight: 500;">
                        {{ session('success') }}
                    </div>
                @endif
                
                <section class="book-section">
                    <div class="action-buttons">
                        <button class="select" onclick="toggleSelect()">Select</button>
                        <a href="/tambahbuku" class="tambah">+ Tambah Buku</a>
                    </div>
                    <br>
                    <div class="tabel-container">
                        <div class="table-wrapper">
                            <!-- ACTION ICON -->
                            <div class="action-column" id="actionColumn">
                                @foreach($buku as $item)
                                <div class="action-btn">
                                    <form action="{{ route('buku.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" style="margin: 0; display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer; color: black;">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('buku.edit', $item->id) }}" style="color: black;">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <table class="tabel-buku" border="1" cellpadding="10" cellspacing="0">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Buku</th>
                                    <th>Kategori</th>
                                    <th>Stock</th>
                                    <th>Deskripsi</th>
                                </tr>
                                @forelse ($buku as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_buku }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->jumlah_buku }}</td>
                                    <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" style="text-align: center;">Belum ada data buku</td>
                                </tr>
                                @endforelse
                            </table>
                        </div>
                </section>
<br>
                </section>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/select.js') }}"></script>
</body>
</html>