<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="{{ asset('css/tambah_buku.css') }}">
</head>
<body>
    <div class="header">
        <a href="javascript:history.back()" class="back-btn">Kembali</a>
    </div>
    
    <div class="container">
        <div class="title">Edit data buku</div>

        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 12px 20px; border-radius: 10px; margin-bottom: 20px; font-weight: 500;">
                {{ session('success') }}
            </div>
        @endif

        {{-- Notifikasi error validasi --}}
        @if($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 12px 20px; border-radius: 10px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-layout">
                <!-- Kolom Kiri: Upload Gambar & Kategori -->
                <div class="left-col">
                    <label class="image-upload" for="file-upload" id="image-upload-label">
                        <span id="upload-text" style="{{ $buku->gambar ? 'display: none;' : '' }}">Geser file jpg ke sini</span>
                        <img id="image-preview" src="{{ $buku->gambar ? asset($buku->gambar) : '' }}" alt="Preview" style="{{ $buku->gambar ? 'display: block;' : 'display: none;' }} width:auto; height:100%; object-fit:cover;">
                        <input type="file" id="file-upload" name="gambar" style="display: none;" accept=".jpg,.jpeg,.png">
                    </label>
                    <div class="category-buttons">
                        <label class="category-btn" id="btn-umum" style="{{ old('kategori', $buku->kategori) == 'Umum' ? 'background-color: #444; color: #fff;' : '' }}">
                            <input type="radio" name="kategori" value="Umum" style="display: none;" {{ old('kategori', $buku->kategori) == 'Umum' ? 'checked' : '' }}> Umum
                        </label>
                        <label class="category-btn" id="btn-pelajaran" style="{{ old('kategori', $buku->kategori) == 'Pelajaran' ? 'background-color: #444; color: #fff;' : '' }}">
                            <input type="radio" name="kategori" value="Pelajaran" style="display: none;" {{ old('kategori', $buku->kategori) == 'Pelajaran' ? 'checked' : '' }}> Pelajaran
                        </label>
                    </div>
                </div>
                
                <!-- Kolom Kanan: Input Data -->
                <div class="right-col">
                    <input type="text" class="input-field" name="nama_buku" placeholder="Nama buku...." value="{{ old('nama_buku', $buku->nama_buku) }}">
                    <input type="text" class="input-field" name="penulis" placeholder="Penulis...." value="{{ old('penulis', $buku->penulis) }}">
                    <textarea class="input-field" name="deskripsi" placeholder="Deskripsi....">{{ old('deskripsi', $buku->deskripsi) }}</textarea>
                    <input type="number" class="input-field" name="jumlah_buku" placeholder="Jumlah...." value="{{ old('jumlah_buku', $buku->jumlah_buku) }}">
                    
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

        // Preview gambar saat file dipilih
        document.getElementById('file-upload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('image-preview').src = event.target.result;
                    document.getElementById('image-preview').style.display = 'block';
                    document.getElementById('upload-text').style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
