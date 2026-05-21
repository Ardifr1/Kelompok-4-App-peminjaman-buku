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
            <a href="/login" class="keluar"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a>
        </aside>

        
        <main class="content-wrapper">
        <div class="light-green-container">
            @if(session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #c3e6cb;">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #f5c6cb;">
                    {{ session('error') }}
                </div>
            @endif
            
            <div class="book-container">
                <table class="table-riwayat" border="1" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Jumlah</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($riwayat as $item)
                            <tr>
                                <td>{{ sprintf('%02d', $loop->iteration) }}</td>
                            
                                <td>{{ $item->buku->nama_buku ?? 'Buku Terhapus' }}</td>
                                <td>{{ $item->jumlah ?? 1 }}</td>
                            
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_pinjam)->format('d/m/Y') }}</td>
                                <td>{{ $item->tanggal_kembali ? \Carbon\Carbon::parse($item->tanggal_kembali)->format('d/m/Y') : '-' }}</td>
                                <td>
                                    @if($item->status == 'pending')
                                        <span style="color: #fd7e14; font-weight: bold;">Menunggu Konfirmasi</span>
                                    @elseif($item->status == 'dipinjam')
                                        <span style="color: #0d6efd; font-weight: bold;">Sedang Dipinjam</span>
                                    @elseif($item->status == 'kembali_pending')
                                        <span style="color: #6f42c1; font-weight: bold;">Proses Pengembalian</span>
                                    @elseif($item->status == 'dikembalikan')
                                        <span style="color: #198754; font-weight: bold;">Sudah Dikembalikan</span>
                                    @elseif($item->status == 'ditolak')
                                        <span style="color: #dc3545; font-weight: bold;">Ditolak</span>
                                    @endif
                                </td>
                                <td>
                                    @if($item->status == 'dipinjam')
                                        <form action="{{ route('riwayat.kembalikan', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit"
                                                    onclick="return confirm('Yakin ingin mengajukan pengembalian buku ini?')"
                                                    style="border: none; cursor: pointer; font-size: 12px; padding: 6px 14px; background-color: #fd7e14; color: white; border-radius: 5px; font-weight: bold;">
                                                📦 Ajukan Pengembalian
                                            </button>
                                        </form>
                                    @elseif($item->status == 'kembali_pending')
                                        <span style="font-size: 12px; padding: 5px 10px; background-color: #e9d8fd; color: #6f42c1; border-radius: 5px; font-weight: bold; display: inline-block;">
                                            ⏳ Menunggu Konfirmasi Admin
                                        </span>
                                    @elseif($item->status == 'dikembalikan')
                                        <span style="font-size: 12px; padding: 5px 10px; background-color: #d1fae5; color: #198754; border-radius: 5px; font-weight: bold; display: inline-block;">
                                            ✅ Selesai
                                        </span>
                                    @elseif($item->status == 'ditolak')
                                        <span style="font-size: 12px; padding: 5px 10px; background-color: #f8d7da; color: #dc3545; border-radius: 5px; font-weight: bold; display: inline-block;">
                                            ❌ Ditolak
                                        </span>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" style="text-align: center; color: #888;">Belum ada riwayat peminjaman buku.</td>
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