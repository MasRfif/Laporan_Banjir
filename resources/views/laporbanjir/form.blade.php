
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-500 min-h-screen flex items-center justify-center p-5">

    <div class="bg-white w-full max-w-md rounded-md shadow-sm border border-gray-200">

        <div class="border-b border-gray-200 px-6 py-5">
            <p class="text-xs font-semibold tracking-widest text-gray-400 uppercase">
                BPBD Kabupaten Konoha
            </p>
            <h1 class="text-xl font-bold text-gray-900 mt-1">
                Sistem Pelaporan Banjir
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Isi form buat lapor.
            </p>
        </div>

        <form action="{{ route('laporbanjir.kirim') }}" method="post" id="formLapor" class="px-6 py-6">
            @csrf

            <div class="mb-4">
                <label for="nama" class="block text-xs font-semibold text-gray-600 uppercase tracking-wide mb-1.5">
                    Nama Pelapor
                </label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    required

                    class="w-full px-3 py-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:border-gray-800"
                >
            </div>

            <div class="mb-4">
                <label for="lokasi" class="block text-xs font-semibold text-gray-600 uppercase tracking-wide mb-1.5">
                    Lokasi Kejadian (Kecamatan/Desa)
                </label>
                <input
                    type="text"
                    id="lokasi"
                    name="lokasi"
                    required

                    class="w-full px-3 py-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:border-gray-800"
                >
            </div>

            <div class="mb-6">
                <label for="tinggi" class="block text-xs font-semibold text-gray-600 uppercase tracking-wide mb-1.5">
                    Tinggi Genangan Air (cm)
                </label>
                <input
                    type="number"
                    id="tinggi"
                    name="tinggi"
                    min="0"
                    step="1"
                    required

                    class="w-full px-3 py-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:border-gray-800"
                >
            </div>

            <button
                type="submit"
                class="w-full py-2.5 bg-gray-900 text-white text-sm font-semibold rounded hover:bg-black transition-colors"
            >
                Kirim Laporan
            </button>

            <p id="pesanValidasi" class="text-center text-red-600 text-xs mt-3"></p>
        </form>

        <div class="border-t border-gray-200 px-6 py-3">
            <p class="text-[11px] text-gray-400 text-center">
                Data diproses sementara — prototipe tanpa penyimpanan permanen.
            </p>
        </div>
    </div>

    <script src="{{ asset('js/laporbanjir.js') }}"></script>

</body>
</html>