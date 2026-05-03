<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styling untuk efek liquid glass yang lebih halus */
        .glass-card {
            background: rgba(255, 255, 255, 0.2); /* Transparansi putih */
            backdrop-filter: blur(15px); /* Efek blur kaca */
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
        }

        .input-field {
            background: rgba(217, 217, 217, 0.8);
            border: 1px solid #000;
            border-radius: 20px;
        }
    </style>
</head>
<body class="bg-[#74a9d8] flex items-center justify-center min-h-screen font-sans">

    <div class="glass-card w-[90%] max-w-md p-10 shadow-2xl relative">
        
        <div class="flex justify-center mb-4">
            <div class="w-24 h-24 bg-gray-400 rounded-full border-2 border-black flex items-center justify-center overflow-hidden">
                <svg viewBox="0 0 24 24" fill="white" class="w-20 h-20 mt-4">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
        </div>

        <h2 class="text-center text-3xl font-semibold mb-8 tracking-wide">Daftar</h2>

        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <input type="text" name="nis" placeholder="Nis" class="input-field w-full px-5 py-3 focus:outline-none placeholder-gray-500 text-lg">
            </div>
            <div>
                <input type="text" name="nama" placeholder="Nama" class="input-field w-full px-5 py-3 focus:outline-none placeholder-gray-500 text-lg">
            </div>
            <div>
                <select name="kelas" class="input-field w-full px-5 py-3 focus:outline-none text-gray-700 text-lg appearance-none cursor-pointer">
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="XPPLG1">Kelas X PPLG 1</option>
                    <option value="XPPLG2">Kelas X PPLG 2</option>
                    <option value="XDKV1">Kelas X DKV 1</option>
                    <option value="XDKV2">Kelas X DKV 2</option>
                    <option value="XIPPLG1">Kelas XI PPLG 1</option>
                    <option value="XIPPLG2">Kelas XI PPLG 2</option>
                    <option value="XIDKV1">Kelas XI DKV 1</option>
                    <option value="XIDKV2">Kelas XI DKV 2</option>
                    <option value="XIIPPLG1">Kelas XII PPLG 1</option>
                    <option value="XIIPPLG2">Kelas XII PPLG 2</option>
                    <option value="XIIDKV1">Kelas XII DKV 1</option>
                    <option value="XIIDKV2">Kelas XII DKV 2</option>
                </select>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" class="input-field w-full px-5 py-3 focus:outline-none placeholder-gray-500 text-lg">
            </div>

            <div class="flex justify-center pt-4">
                <button type="submit" class="bg-[#66ff66] hover:bg-[#52e052] text-black font-medium px-12 py-2 rounded-full border border-black text-xl transition-all shadow-md">
                    Daftar
                </button>
            </div>
        </form>

        <div class="text-center mt-6 text-xs font-semibold">
            Sudah Punya Akun? <a href="/login" class="text-blue-700 hover:underline">Login Sekarang</a>
        </div>
    </div>

</body>
</html>