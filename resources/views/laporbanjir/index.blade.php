<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Laporan</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-6">
<main class="mx-auto max-w-5xl rounded-lg bg-white p-6 shadow-sm">
	<div class="mb-4 flex items-center justify-between">
		<h1 class="text-2xl font-semibold text-gray-900">Daftar Laporan Banjir</h1>
		<a class="text-sm text-indigo-600 underline" href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
	</div>
	<div class="overflow-x-auto">
		<table class="w-full text-left text-sm text-gray-600">
			<thead class="border-b text-xs uppercase text-gray-500"><tr><th class="px-3 py-3">Nama Pelapor</th><th class="px-3 py-3">Lokasi</th><th class="px-3 py-3">Tinggi</th><th class="px-3 py-3">Tanggal</th></tr></thead>
			<tbody>
			@forelse ($laporan as $item)
				<tr class="border-b"><td class="px-3 py-3">{{ $item->nama_pelapor }}</td><td class="px-3 py-3">{{ $item->lokasi }}</td><td class="px-3 py-3">{{ $item->tinggi_genangan }} cm</td><td class="px-3 py-3">{{ $item->tanggal_kejadian->format('d/m/Y') }}</td></tr>
			@empty
				<tr><td colspan="4" class="px-3 py-6 text-center">Belum ada laporan.</td></tr>
			@endforelse
			</tbody>
		</table>
	</div>
</main>
</body>
</html>
