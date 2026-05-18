<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar - Mahaputra Library</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>

<body class="bg-[#dfe9e3] min-h-screen flex items-center justify-center p-5">

  <div class="w-full max-w-6xl bg-[#dfe9e3] rounded-2xl shadow-2xl overflow-hidden border border-gray-300">

    <div class="grid md:grid-cols-2 min-h-[650px]">

      <!-- LEFT -->
      <div class="flex flex-col items-center justify-center px-10 py-10">

        <h1 class="text-3xl font-bold text-sky-400 mb-2 text-center">
          Selamat Datang Di Mahaputra Library!
        </h1>

        <p class="text-gray-700 text-lg mb-10 text-center">
          Silahkan Daftar untuk melanjutkan
        </p>

        <!-- LOGO -->
        <div class="w-72 h-72 bg-white rounded-full flex items-center justify-center shadow-lg overflow-hidden">

          <img
        src="{{ asset('gambar/logo peminjaman buku.jpg') }}"
        alt="Logo Mahaputra"
        class="w-full h-full object-cover"
          >

        </div>

      </div>

      <!-- RIGHT -->
      <div class="flex flex-col items-center justify-center px-10 py-10">

        <h1 class="text-5xl font-semibold text-gray-800 mb-8">
          Daftar
        </h1>

        <!-- Icon User -->
        <div class="w-28 h-28 rounded-full bg-gray-300 border-2 border-gray-500 flex items-center justify-center mb-8">
          <i class="fa-solid fa-user text-5xl text-white"></i>
        </div>

        <!-- FORM -->
        <form action="{{ route('register.store') }}" method="POST" class="w-full max-w-md space-y-5">
          @csrf

          <input
            type="text"
            name="nis"
            placeholder="Nis"
            id="NIS"
            value="{{ old('nis') }}"
            class="w-full px-6 py-4 rounded-3xl bg-gray-200 border border-gray-400 outline-none focus:ring-2 focus:ring-green-400"
          />
          @error('nis')
              <p class="text-red-500 text-sm mt-1 ml-2">{{ $message }}</p>
          @enderror

          <input
            type="text"
            name="name"
            placeholder="Nama"
            id="Nama"
            value="{{ old('name') }}"
            class="w-full px-6 py-4 rounded-3xl bg-gray-200 border border-gray-400 outline-none focus:ring-2 focus:ring-green-400"
          />
          @error('name')
              <p class="text-red-500 text-sm mt-1 ml-2">{{ $message }}</p>
          @enderror

          <input
            type="text"
            name="username"
            placeholder="Username"
            id="Username"
            value="{{ old('username') }}"
            class="w-full px-6 py-4 rounded-3xl bg-gray-200 border border-gray-400 outline-none focus:ring-2 focus:ring-green-400"
          />
          @error('username')
            <p class="text-red 500 text-sm mt-1 ml-2">{{ $message }}</p>
          @enderror
          
          <select class="w-full px-6 py-4 rounded-3xl bg-gray-200 border border-gray-400 outline-none focus:ring-2 focus:ring-green-400">
              <option selected disabled>Kelas</option>

              <optgroup label="Kelas X">
                  <option value="X PPLG" {{ old('kelas') == 'X PPLG' ? 'selected' : '' }}>X PPLG</option>
                  <option value="X DKV" {{ old('kelas') == 'X DKV' ? 'selected' : '' }}>X DKV</option>
              </optgroup>

              <optgroup label="Kelas XI">
                  <option value="XI PPLG" {{ old('kelas') == 'XI PPLG' ? 'selected' : '' }}>XI PPLG</option>
                  <option value="XI DKV" {{ old('kelas') == 'XI DKV' ? 'selected' : '' }}>XI DKV</option>
              </optgroup>

              <optgroup label="Kelas XII">
                  <option value="XII PPLG" {{ old('kelas') == 'XII PPLG' ? 'selected' : '' }}>XII PPLG</option>
                  <option value="XII DKV" {{ old('kelas') == 'XII DKV' ? 'selected' : '' }}>XII DKV</option>
              </optgroup>
          </select>
          @error('kelas')
              <p class="text-red-500 text-sm mt-1 ml-2">{{ $message }}</p>
          @enderror

          <input
            type="password"
            name="password"
            placeholder="Password"
            id="Password"
            class="w-full px-6 py-4 rounded-3xl bg-gray-200 border border-gray-400 outline-none focus:ring-2 focus:ring-green-400"
          />
          @error('password')
              <p class="text-red-500 text-sm mt-1 ml-2">{{ $message }}</p>
          @enderror

          <!-- BUTTON -->
          <div class="flex justify-center">
            <button
              type="submit"
              class="bg-lime-400 hover:bg-lime-500 transition duration-300 text-black font-semibold px-16 py-3 rounded-full shadow-md"
            >
              Daftar
            </button>
          </div>

          <!-- LOGIN -->
          <p class="text-center text-sm text-gray-700 mt-3">
            Sudah Punya Akun?
            <a href="/login" class="text-blue-600 hover:underline">
              Login Sekarang
            </a>
          </p>

        </form>

      </div>

    </div>

  </div>

</body>
</html>