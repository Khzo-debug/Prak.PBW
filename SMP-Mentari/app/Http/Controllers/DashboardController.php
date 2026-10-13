<?php
//php artisan make:Controller DashboardController//
namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\PesanTamu;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        $jumlahKegiatan = Kegiatan::count();
        $jumlahPesan = PesanTamu::count();
        $daftarPesanTamu = PesanTamu::latest()->take(5)->get();
        return view('dashboard', [
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahPesan' => $jumlahPesan,
            'daftarPesanTamu' => $daftarPesanTamu,
        ]);
    }
}
