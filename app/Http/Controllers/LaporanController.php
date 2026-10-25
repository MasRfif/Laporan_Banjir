<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function create()
    {
        return view('laporbanjir.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'lokasi' => ['required', 'string', 'max:150'],
            'tinggi' => ['required', 'integer', 'min:0', 'max:1000'],
        ]);

        $laporan = Laporan::create([
            'nama_pelapor' => $validated['nama'],
            'lokasi' => $validated['lokasi'],
            'tinggi_genangan' => $validated['tinggi'],
            'tanggal_kejadian' => now()->toDateString(),
        ]);

        return view('laporbanjir.konfirmasi', [
            'nama' => $laporan->nama_pelapor,
            'lokasi' => $laporan->lokasi,
            'tinggi' => $laporan->tinggi_genangan,
            'kategori' => $laporan->tinggi_genangan < 30 ? 'Ringan' : ($laporan->tinggi_genangan <= 70 ? 'Sedang' : 'Parah'),
            'warna' => $laporan->tinggi_genangan < 30 ? 'kategori-ringan' : ($laporan->tinggi_genangan <= 70 ? 'kategori-sedang' : 'kategori-parah'),
        ]);
    }

    public function index()
    {
        $laporan = Laporan::query()->latest('tanggal_kejadian')->get();

        return view('laporbanjir.index', compact('laporan'));
    }
}
