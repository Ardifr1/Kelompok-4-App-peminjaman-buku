<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Buku - Mahaputra Library</title>
    <!-- Modern Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/deskripsiBuku.css') }}">
</head>
<body>

    <div class="container">
        <div class="top-bar">
            <div class="top-left">
                <a href="/dashboard" class="btn btn-kembali">Kembali</a>
                <div class="stok-badge">Stok {{ $buku->jumlah_buku }}</div>
            </div>
            <a href="/ajuanPeminjaman" class="btn btn-ajukan">Ajukan peminjaman</a>
        </div>

        <div class="book-cover">
            @if($buku->gambar)
                <img src="{{ asset($buku->gambar) }}" alt="Cover {{ $buku->nama_buku }}">
            @else
                <div style="width:100%;height:300px;background:#ddd;display:flex;align-items:center;justify-content:center;border-radius:10px;">
                    <span>Tidak ada gambar</span>
                </div>
            @endif
        </div>

        <div class="book-details">
            <div class="detail-row">
                <div class="detail-label">Judul</div>
                <div class="detail-value">: {{ $buku->nama_buku }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Penulis</div>
                <div class="detail-value">: {{ $buku->penulis }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Kategori</div>
                <div class="detail-value">: {{ $buku->kategori }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Deskripsi</div>
                <div class="detail-value">: {{ $buku->deskripsi ?? 'Tidak ada deskripsi' }}</div>
            </div>
        </div>
    </div>

</body>
</html>
