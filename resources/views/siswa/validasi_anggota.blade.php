<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Anggota Admin</title>
    <link rel="stylesheet" href="{{ asset('css/validasi_anggota.css') }}">
</head>
<body>

    <div class="container">
        <header>
            <a href="#" class="btn-back">Kembali</a>
            <div class="status-badge">
                <span>Konfirmasi anggota</span>
            </div>
        </header>

        <main class="content-card">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Tanggal</th>
                            <th>Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Contoh Data Statis sesuai gambar --}}
                        <tr>
                            <td>Raiky adila fitriadi</td>
                            <td>11 PPLG</td>
                            <td>27 April 2026</td>
                            <td class="action-buttons">
                                <button class="btn-tidak">Tidak</button>
                                <button class="btn-konfirmasi">Konfirmasi</button>
                            </td>
                        </tr>
                        
                        {{-- Baris Kosong untuk mengisi desain --}}
                        @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <div class="footer-space"></div>
        </main>
    </div>

</body>
</html>