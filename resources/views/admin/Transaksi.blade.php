<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahaputra Library - Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/transaksi.css') }}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <style>

        /* OVERLAY BLUR */
        .popup-overlay{
            position: fixed;
            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background: rgba(0,0,0,0.2);

            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);

            display: none;

            justify-content: center;
            align-items: center;

            z-index: 999;
        }

        /* POPUP BOX */
        .popup-box{
            width: 600px;

            background: white;

            border-radius: 10px;

            padding: 20px;
        }

        .popup-header{
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .popup-table{
            width: 100%;
            border-collapse: collapse;
        }

        .popup-table th,
        .popup-table td{
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }

    </style>

</head>

<body>

<header class="header">

    <div class="header-left">

        <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}"
             class="logo-img">

        <h1 class="namalogo">
            Mahaputra Library
            <br>
            <p class="panel">Admin panel</p>
        </h1>

    </div>

    <div class="header-right">

        <div class="profile-info">
            <p>Administrator</p>
        </div>

        <img src="{{ asset('gambar/logo peminjaman buku.jpg') }}"
             class="logo-img">

    </div>

</header>

<div class="main-layout">

    <aside class="sidebar">

        <a href="/dashboardAdmin"
           class="menu-item">
            Kelola data buku
        </a>

        <a href="/anggota"
           class="menu-item">
            Kelola Anggota
        </a>

        <a href="/transaksi"
           class="menu-item active">
            Transaksi
        </a>

        <a href="#"
           class="keluar">
            <i class="fa-solid fa-right-from-bracket"></i>
            Keluar
        </a>

    </aside>

    <main class="content-wrapper">

        <div class="blue-container">

            @if(session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #c3e6cb; font-family: sans-serif;">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #f5c6cb; font-family: sans-serif;">
                    {{ session('error') }}
                </div>
            @endif

            <!-- TABEL 1: PERMINTAAN PEMINJAMAN PENDING -->
            <section class="book-section">
                <div class="section-header">
                    <span class="font">
                        Permintaan Peminjaman (Menunggu Persetujuan)
                    </span>
                </div>
                <br>
                <div class="tabel-container">
                    <table class="tabel-buku" border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Nama Buku</th>
                            <th>Jumlah</th>
                            <th>Tanggal Pinjam</th>
                            <th>Aksi</th>
                        </tr>
                        @forelse($pendingRequests as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->user->name ?? 'User Terhapus' }}</td>
                            <td>{{ $item->user->kelas ?? '-' }}</td>
                            <td>{{ $item->buku->nama_buku ?? 'Buku Terhapus' }}</td>
                            <td>{{ $item->jumlah ?? 1 }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_pinjam)->format('d/m/Y') }}</td>
                            <td>
                                <form action="{{ route('transaksi.setujui', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="tambah" style="border: none; cursor: pointer; padding: 5px 10px; font-size: 12px; background-color: #198754; color: white; border-radius: 4px; margin-right: 5px;">Setujui</button>
                                </form>
                                <form action="{{ route('transaksi.tolak', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="tambah" style="border: none; cursor: pointer; padding: 5px 10px; font-size: 12px; background-color: #dc3545; color: white; border-radius: 4px;">Tolak</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" style="text-align: center; color: #888;">Tidak ada permintaan peminjaman baru.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </section>

            <br><hr style="border: 0; border-top: 1px solid #ddd; margin: 20px 0;"><br>

            <!-- TABEL 2: RIWAYAT PEMINJAMAN AKTIF & LAINNYA -->
            <section class="book-section">

                <div class="section-header">

                    <span class="font">
                        Riwayat & Transaksi Peminjaman
                    </span>

                    <!-- BUTTON POPUP -->
                    <button id="btnPengembalian"
                            class="tambah">
                        Pengembalian ({{ $pendingReturns->count() }})
                    </button>

                </div>

                <br>

                <div class="tabel-container">

                    <table class="tabel-buku"
                           border="1"
                           cellpadding="10"
                           cellspacing="0">

                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Nama Buku</th>
                            <th>Jumlah</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                        </tr>

                        @forelse($activeLoans as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->user->name ?? 'User Terhapus' }}</td>
                            <td>{{ $item->user->kelas ?? '-' }}</td>
                            <td>{{ $item->buku->nama_buku ?? 'Buku Terhapus' }}</td>
                            <td>{{ $item->jumlah ?? 1 }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_pinjam)->format('d/m/Y') }}</td>
                            <td>{{ $item->tanggal_kembali ? \Carbon\Carbon::parse($item->tanggal_kembali)->format('d/m/Y') : '-' }}</td>
                            <td>
                                @if($item->status == 'dipinjam')
                                    <span style="color: #0d6efd; font-weight: bold;">Sedang Dipinjam</span>
                                @elseif($item->status == 'kembali_pending')
                                    <span style="color: #6f42c1; font-weight: bold;">Proses Pengembalian</span>
                                @elseif($item->status == 'dikembalikan')
                                    <span style="color: #198754; font-weight: bold;">Sudah Dikembalikan</span>
                                @elseif($item->status == 'ditolak')
                                    <span style="color: #dc3545; font-weight: bold;">Ditolak</span>
                                @else
                                    <span style="color: #6c757d; font-weight: bold;">{{ ucfirst($item->status) }}</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" style="text-align: center; color: #888;">Belum ada riwayat peminjaman buku.</td>
                        </tr>
                        @endforelse

                    </table>

                </div>

            </section>

        </div>

    </main>

</div>

<!-- POPUP -->
<div id="popupOverlay"
     class="popup-overlay">

    <div class="popup-box" style="max-height: 80%; overflow-y: auto;">

        <div class="popup-header" style="display: flex; justify-content: space-between; align-items: center;">
            <span>Daftar Pengembalian</span>
            <span id="closePopup" style="cursor: pointer; font-size: 20px; font-weight: bold; color: #999;">&times;</span>
        </div>

        <table class="popup-table">

            <tr>
                <th>Nama</th>
                <th>Nama Buku</th>
                <th>Kelas</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>

            @forelse($pendingReturns as $item)
            <tr>
                <td>{{ $item->user->name ?? 'User Terhapus' }}</td>
                <td>{{ $item->buku->nama_buku ?? 'Buku Terhapus' }}</td>
                <td>{{ $item->user->kelas ?? '-' }}</td>
                <td>{{ $item->jumlah ?? 1 }}</td>
                <td>
                    <form action="{{ route('transaksi.konfirmasi_kembali', $item->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="tambah" style="border: none; cursor: pointer; padding: 5px 10px; font-size: 12px; background-color: #198754; color: white; border-radius: 4px; width: 100%;">Konfirmasi Kembali</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align: center; color: #888;">Tidak ada pengajuan pengembalian buku.</td>
            </tr>
            @endforelse

        </table>

    </div>

</div>

<script>

    const btn =
        document.getElementById('btnPengembalian');

    const popup =
        document.getElementById('popupOverlay');

    const closeBtn =
        document.getElementById('closePopup');

    // buka popup
    btn.addEventListener('click', () => {

        popup.style.display = 'flex';
    });

    closeBtn.addEventListener('click', () => {
        popup.style.display = 'none';
    });

    // klik luar popup untuk close
    popup.addEventListener('click', (e) => {

        if(e.target === popup){

            popup.style.display = 'none';
        }
    });

</script>

</body>
</html>