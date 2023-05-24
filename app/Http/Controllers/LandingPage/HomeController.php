<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukRazen;
use App\Models\Fitur;
use App\Models\Produk;
use App\Models\Testimoni;
use App\Models\PaketHarga;
use File;

class HomeController extends Controller
{
    public function showLoginSupportboard()
    {
        return fopen(public_path('supportboard/admin.php'), 'r');
    }
    public function beranda()
    {
        $produk_razens = ProdukRazen::all();
        $fiturs = Fitur::all();
        $produks = Produk::all();
        $testimonis = Testimoni::all();
        $paket_hargas = PaketHarga::all();
        return view('landingpage.home.index', [
            'produk_razens' => $produk_razens,
            'fiturs' => $fiturs,
            'produks' => $produks,
            'testimonis' => $testimonis,
            'paket_hargas' => $paket_hargas
        ]);
    }
}
