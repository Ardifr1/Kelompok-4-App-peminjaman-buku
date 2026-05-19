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
            <p>Admin KIKIR</p>
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

            <section class="book-section">

                <div class="section-header">

                    <span class="font">
                        Riwayat Peminjaman
                    </span>

                    <!-- BUTTON POPUP -->
                    <button id="btnPengembalian"
                            class="tambah">
                        Pengembalian
                    </button>

                </div>

                <br>

                <div class="tabel-container">

                    <table class="tabel-buku"
                           border="1"
                           cellpadding="10"
                           cellspacing="0">

                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nama Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                        </tr>

                        <tr>
                            <td>Raiky</td>
                            <td>11 PPLG</td>
                            <td>Laskar Cinta</td>
                            <td>27 april 2026</td>
                            <td>17 agustus 1945</td>
                        </tr>

                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                        </tr>

                    </table>

                </div>

            </section>

        </div>

    </main>

</div>

<!-- POPUP -->
<div id="popupOverlay"
     class="popup-overlay">

    <div class="popup-box">

        <div class="popup-header">
            Daftar Pengembalian
        </div>

        <table class="popup-table">

            <tr>
                <th>Nama</th>
                <th>Nama Buku</th>
                <th>Kelas</th>
                <th>Jumlah</th>
                <th>Konfirmasi</th>
            </tr>

            <tr>
                <td>Raiky</td>
                <td>Matematika</td>
                <td>11 PPLG</td>
                <td>1</td>
                <td>
                    <input type="checkbox">
                </td>
            </tr>

        </table>

    </div>

</div>

<script>

    const btn =
        document.getElementById('btnPengembalian');

    const popup =
        document.getElementById('popupOverlay');

    // buka popup
    btn.addEventListener('click', () => {

        popup.style.display = 'flex';
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