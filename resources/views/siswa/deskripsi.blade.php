<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - {{ $buku->judul ?? 'Matematika' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/deskripsi.css') }}">
</head>
<body class="bg-sidebar-dark">

    <main class="main-container">
        <div class="content-card">
            
            <div class="header-action">
                <div class="left-group">
                    <a href="#" class="btn-kembali">Kembali</a>
                    <span class="badge-stok">Stok {{ $buku->stok ?? 5 }}</span>
                </div>
                <button class="btn-pinjam">Ajukan peminjaman</button>
            </div>

            <div class="cover-wrapper">
                <div class="image-frame">
                    <img src="{{ asset('img/cover-matematika.jpg') }}" alt="Cover Buku">
                </div>
            </div>

            <div class="info-panel">
                <div class="info-row">
                    <span class="label">Judul</span>
                    <span class="separator">:</span>
                    <span class="value">{{ $buku->judul ?? 'Matematika' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Kelas</span>
                    <span class="separator">:</span>
                    <span class="value">{{ $buku->kelas ?? '11' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Genre</span>
                    <span class="separator">:</span>
                    <span class="value">{{ $buku->genre ?? 'Pendidikan' }}</span>
                </div>
                <div class="info-row">
                    <span class="label">Deskripsi</span>
                    <span class="separator">:</span>
                    <p class="value description">
                        {{ $buku->deskripsi ?? 'Buku pelajaran Matematika ini dirancang untuk membantu siswa untuk memahami konsep konsep dasar dan lanjutan secara bertahap.' }}
                    </p>
                </div>
            </div>

        </div>
    </main>

</body>
</html>