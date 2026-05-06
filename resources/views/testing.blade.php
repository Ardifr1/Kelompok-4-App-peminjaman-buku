<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-800 flex items-center justify-center min-h-screen">

    <div class="bg-blue-400 w-full max-w-4xl p-8 rounded-lg shadow-2xl relative">
        
        <div class="flex justify-between items-center mb-6">
            <div class="flex gap-4">
                <a href="#" class="bg-red-500 text-white px-6 py-2 rounded-md font-semibold hover:bg-red-600 transition">
                    Kembali
                </a>
                <div class="bg-slate-200 text-slate-700 px-6 py-2 rounded-md font-semibold">
                    Stok 5
                </div>
            </div>
            <button class="bg-green-500 text-white px-6 py-2 rounded-md font-semibold hover:bg-green-600 transition">
                Ajukan peminjaman
            </button>
        </div>

        <div class="flex justify-center mb-8">
            <div class="bg-white p-1 shadow-lg">
                <img src="https://via.placeholder.com/200x280" alt="Cover Buku" class="w-48 h-auto object-cover border border-gray-300">
            </div>
        </div>

        <div class="bg-white/90 rounded-2xl p-8 shadow-inner">
            <table class="w-full text-lg text-slate-800">
                <tr class="align-top">
                    <td class="w-32 font-bold py-1">Judul</td>
                    <td class="w-4 py-1">:</td>
                    <td class="py-1">Matematika</td>
                </tr>
                <tr class="align-top">
                    <td class="font-bold py-1">Kelas</td>
                    <td class="py-1">:</td>
                    <td class="py-1">11</td>
                </tr>
                <tr class="align-top">
                    <td class="font-bold py-1">Genre</td>
                    <td class="py-1">:</td>
                    <td class="py-1">Pendidikan</td>
                </tr>
                <tr class="align-top">
                    <td class="font-bold py-1">Deskripsi</td>
                    <td class="py-1">:</td>
                    <td class="py-1 leading-relaxed text-justify">
                        Buku pelajaran Matematika ini dirancang untuk membantu siswa untuk memahami konsep konsep dasar dan lanjutan secara bertahap.
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>