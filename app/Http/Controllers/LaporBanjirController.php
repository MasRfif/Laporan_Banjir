<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller{

    public function form()
    {
        return view('laporbanjir.form');
    }

    public function kirim(Request $request)
    {

        $nama   = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = (float) $request->input('tinggi');
 
        if ($tinggi < 30) {
            $kategori = 'Ringan';
            $warna    = 'kategori-ringan';
        } elseif ($tinggi <= 70) {
            $kategori = 'Sedang';
            $warna    = 'kategori-sedang';
        } else {
            $kategori = 'Parah';
            $warna    = 'kategori-parah';
        }
 
        return view('laporbanjir.konfirmasi', compact(
            'nama', 'lokasi', 'tinggi', 'kategori', 'warna'
        ));
    }
}
