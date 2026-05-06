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
                <div class="stok-badge">Stok 5</div>
            </div>
            <a href="/ajuanPeminjaman" class="btn btn-ajukan">Ajukan peminjaman</a>
        </div>

        <div class="book-cover">
            <!-- Using a placeholder cover since this is UI only -->
            <img src="{{asset('gambar/Matematika_BS_KLS_X_Rev_Cover 1.jpg')}}" alt="Cover Buku">
        </div>

        <div class="book-details">
            <div class="detail-row">
                <div class="detail-label">Judul</div>
                <div class="detail-value">: Matematika</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Kelas</div>
                <div class="detail-value">: 11</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Genre</div>
                <div class="detail-value">: Pendidikan</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Deskripsi</div>
                <div class="detail-value">: Buku pelajaran Matematika ini dirancang untuk membantu siswa untuk memahami konsep konsep dasar dan lanjutan secara bertahap.</div>
            </div>
        </div>
    </div>

</body>
</html>
