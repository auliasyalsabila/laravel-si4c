<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses model periode untuk mengambil semua data periode
        $result = Periode::all(); //sm kayak select * from periode
       
        // kirim data periode ke view index
        return view('periode.index', compact('result')); //compact untuk mengirim data ke view index
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data yang dikirim dari form
        $input = $request -> validate( [
            'nama_periode' => 'required|unique:periode',
            'tahun_ajaran' => 'required'
        ]);

        // simpan data ke database
        Periode::create($input);

        // redirect ke halaman index dengan pesan sukses
        return redirect()->route('periode.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $Periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $Periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $Periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $Periode)
    {
        //
    }
}
