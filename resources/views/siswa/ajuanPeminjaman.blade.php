<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuan Peminjaman - Mahaputra Library</title>
    <!-- Modern Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ajuanPeminjaman.css') }}">
</head>
<body>
    
    <a href="/dashboard" class="btn-kembali">Kembali</a>
    <div class="main-container">
        <div class="form-container">
            <div class="form-title">Isi Form Pengajuan</div>

            <form action="#" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Buku" value="{{ $buku->nama_buku }}" readonly required>
                    <input type="hidden" name="buku_id" value="{{ $buku->id }}">
                </div>
                <div class="form-group">
                    <input type="datetime-local" class="form-control" required title="Tanggal meminjam" placeholder="Tanggal meminjam">
                </div>
                <div class="form-group">
                    <input type="datetime-local" class="form-control" required title="Tanggal pengembalian" placeholder="Tanggal pengembalian">
                </div>
                <div class="form-group row-bottom">
                    <input type="number" class="form-control" placeholder="Jumlah" min="1" max="{{ $buku->jumlah_buku }}" required>
                    <button type="submit" class="btn-ajukan">Ajukan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
