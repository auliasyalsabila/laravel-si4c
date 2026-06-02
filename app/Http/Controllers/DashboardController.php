<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $grafikmhs = DB::select("SELECT prodis.nama_prodi, 
                                COUNT(*) as jumlah_mhs 
                                FROM mahasiswas
                                JOIN prodis 
                                ON mahasiswas.prodi_id = prodis.id
                                GROUP BY prodis.nama_prodi");

        // SQLite tidak mendukung LEFT() -> gunakan substr()
        $grafik_angkatan = DB::select("
                                SELECT substr(npm, 1, 2) as angkatan,
                                       COUNT(*) as total_mhs
                                FROM mahasiswas
                                GROUP BY substr(npm, 1, 2)");

        return view('dashboard', compact('grafikmhs', 'grafik_angkatan'));
    }



}