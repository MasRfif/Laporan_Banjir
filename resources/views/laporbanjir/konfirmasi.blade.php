<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Laporan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-500 min-h-screen flex items-center justify-center p-5">

@php
    $tinggiMeter = $tinggi / 100;

    $tinggiMeterText = number_format($tinggiMeter, 2, ',', '.');


    if ($tinggi <= 100) {

        $warnaBox = 'bg-green-50';
        $warnaText = 'text-green-700';
        $warnaBar = 'bg-green-500';
        $persentase = 'w-1/5';
        $label = 'Tingkat Bahaya Rendah';

    } elseif ($tinggi <= 250) {

        $warnaBox = 'bg-yellow-50';
        $warnaText = 'text-yellow-700';
        $warnaBar = 'bg-yellow-500';
        $persentase = 'w-2/4';
        $label = 'Tingkat Bahaya Sedang';

    } elseif ($tinggi <= 400) {

        $warnaBox = 'bg-orange-50';
        $warnaText = 'text-orange-700';
        $warnaBar = 'bg-orange-500';
        $persentase = 'w-4/5';
        $label = 'Tingkat Bahaya Tinggi';

    } elseif ($tinggi <= 500) {

        $warnaBox = 'bg-red-50';
        $warnaText = 'text-red-700';
        $warnaBar = 'bg-red-600';
        $persentase = 'w-full';
        $label = 'Tingkat Bahaya Sangat Tinggi';

    } else {

        $warnaBox = 'bg-red-100';
        $warnaText = 'text-red-800';
        $warnaBar = 'bg-red-800';
        $persentase = 'w-full';
        $label = 'Tingkat Bahaya Ekstrem';

    }
@endphp

    <div class="bg-white w-full max-w-md rounded-md shadow-sm border border-gray-200">

        <div class="border-b border-gray-200 px-6 py-5">

            <p class="text-xs font-semibold tracking-widest text-gray-400 uppercase">
                BPBD Kabupaten Bandung
            </p>

            <h1 class="text-xl font-bold text-gray-900 mt-1">
                Laporan Diterima
            </h1>



        </div>

        <div class="px-6 py-6">
            <div class="flex items-center gap-3 border border-gray-200 rounded p-4 mb-5 {{ $warnaBox }}">

                <div class="{{ $warnaText }}">

                    <svg
                        width="34"
                        height="34"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            d="M12 3L22 20H2L12 3Z"
                            stroke="currentColor"
                            stroke-width="1.6"
                            stroke-linejoin="round"
                        />

                        <path
                            d="M12 9.5V14"
                            stroke="currentColor"
                            stroke-width="1.6"
                            stroke-linecap="round"
                        />

                        <circle
                            cx="12"
                            cy="16.8"
                            r="0.9"
                            fill="currentColor"
                        />

                    </svg>

                </div>

                <div>

                    <p class="text-[11px] font-semibold uppercase tracking-wide text-gray-500">
                        {{ $label }}
                    </p>

                    <p class="text-base font-bold {{ $warnaText }}">
                        {{ $tinggi }} cm
                    </p>

                    <p class="text-sm text-gray-600 mt-0.5">
                        Setara dengan {{ $tinggiMeterText }} meter
                    </p>

                </div>

            </div>


            <div class="w-full h-2 bg-gray-200 rounded-full mb-6 overflow-hidden">

                <div class="h-full {{ $warnaBar }} {{ $persentase }}"></div>

            </div>


            <div class="flex justify-between text-xs text-black mb-6">

                <span>0 cm</span>
                <span>100 cm</span>
                <span>250 cm</span>
                <span>400 cm</span>
                <span>500 cm</span>

            </div>


            <dl class="space-y-3">

                <div class="flex justify-between border-b border-gray-100 pb-2">

                    <dt class="text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        Nama Pelapor
                    </dt>

                    <dd class="text-sm text-gray-900 font-medium">
                        {{ $nama }}
                    </dd>

                </div>


                <div class="flex justify-between border-b border-gray-100 pb-2">

                    <dt class="text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        Lokasi Kejadian
                    </dt>

                    <dd class="text-sm text-gray-900 font-medium">
                        {{ $lokasi }}
                    </dd>

                </div>


                <div class="flex justify-between border-b border-gray-100 pb-2">

                    <dt class="text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        Tinggi Genangan
                    </dt>

                    <dd class="text-sm text-gray-900 font-medium text-right">

                        <div>
                            {{ $tinggi }} cm
                        </div>

                        <div class="text-xs text-gray-500 font-normal">
                            {{ $tinggiMeterText }} meter
                        </div>

                    </dd>

                </div>


                <div class="flex justify-between">

                    <dt class="text-xs font-semibold text-gray-500 uppercase tracking-wide">
                        Kategori
                    </dt>

                    <dd class="text-sm font-medium {{ $warnaText }}">
                        {{ $kategori }}
                    </dd>

                </div>

            </dl>


            <a
                href="{{ route('laporbanjir.form') }}"
                class="mt-6 block w-full py-2.5 text-center bg-gray-900 text-white text-sm font-semibold rounded hover:bg-black transition-colors"
            >
                Buat Laporan Lain
            </a>

        </div>

    </div>

</body>
</html>