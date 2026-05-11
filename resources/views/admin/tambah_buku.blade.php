<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="{{ asset('css/tambah_buku.css') }}">
</head>
<body>
    <div class="header">
        <a href="javascript:history.back()" class="back-btn">Kembali</a>
    </div>
    
    <div class="container">
        <div class="title">Tambahkan data buku</div>
        
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-layout">
                <!-- Kolom Kiri: Upload Gambar & Kategori -->
                <div class="left-col">
                    <label class="image-upload" for="file-upload">
                        Geser file jpg ke sini
                        <input type="file" id="file-upload" name="gambar" style="display: none;" accept=".jpg,.jpeg,.png">
                    </label>
                    <div class="category-buttons">
                        <label class="category-btn" id="btn-umum">
                            <input type="radio" name="kategori" value="Umum" style="display: none;"> Umum
                        </label>
                        <label class="category-btn" id="btn-pelajaran">
                            <input type="radio" name="kategori" value="Pelajaran" style="display: none;"> Pelajaran
                        </label>
                    </div>
                </div>
                
                <!-- Kolom Kanan: Input Data -->
                <div class="right-col">
                    <input type="text" class="input-field" name="nama_buku" placeholder="Nama buku....">
                    <input type="text" class="input-field" name="penulis" placeholder="Penulis....">
                    <textarea class="input-field" name="deskripsi" placeholder="Deskripsi...."></textarea>
                    
                    <div class="action-buttons">
                        <button type="button" class="btn btn-cancel" onclick="window.history.back()">Batal</button>
                        <button type="submit" class="btn btn-save">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script>
        // Efek seleksi untuk tombol kategori
        const categoryLabels = document.querySelectorAll('.category-btn');
        const radios = document.querySelectorAll('input[type="radio"]');

        radios.forEach((radio, index) => {
            radio.addEventListener('change', () => {
                // Reset semua label
                categoryLabels.forEach(label => {
                    label.style.backgroundColor = '#fff';
                    label.style.color = '#000';
                    label.style.border = 'none';
                });
                
                // Set warna untuk label yang dipilih
                if(radio.checked) {
                    categoryLabels[index].style.backgroundColor = '#444';
                    categoryLabels[index].style.color = '#fff';
                }
            });
        });
    </script>
</body>
</html>