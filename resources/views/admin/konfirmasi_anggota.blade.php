<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahaputra Library - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/konfirmasi-anggota.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body >         
    <a href="/anggota" class="kembali"><i class="fa-solid fa-arrow-left"></i> Kembali
        </a>
        <div class="content">
            <div class="blue-container">

                <!-- SECTION BUKU UMUM -->
                <section class="book-section">
                    <div class="section-header">
                        <a href="/anggota" class="tambah">Konfirmasi Anggota</a>
                    </div>
                    @if (session('success'))
                        <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 15px 0; border: 1px solid #c3e6cb; font-size: 14px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <br>
                    <div class="tabel-container">
                        <table class="tabel-buku" border="1" cellpadding="10" cellspacing="0">
                        <tr>
                        
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>NIS</th>
                        <th>konfirmasi</th>
                        </tr>
                        @forelse($pendingUsers as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->kelas }}</td>
                            <td>{{ $user->nis }}</td>
                            <td style="display: flex; gap: 10px; justify-content: center;">
                                <form action="{{ route('konfirmasi.reject', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menolak dan menghapus akun ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="tolak" style="border: none; cursor: pointer; padding: 5px 10px;"><i class="fa-solid fa-xmark"></i> tolak</button>
                                </form>
                                <form action="{{ route('konfirmasi.approve', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menyetujui akun ini?');">
                                    @csrf
                                    <button type="submit" class="konfirmasi" style="border: none; cursor: pointer; padding: 5px 10px;"><i class="fa-solid fa-check"></i> konfirmasi</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" style="text-align: center;">Tidak ada anggota yang menunggu konfirmasi.</td>
                        </tr>
                        @endforelse
                        </table>
                    </div>
                </section>
<br>
                </section>
                
            </div>
            </div>
</body>
</html>