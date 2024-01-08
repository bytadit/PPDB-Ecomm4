<?php

namespace App\Http\Controllers;

use App\Models\BatasNilai;
use Illuminate\Http\Request;
use Alert;

class BatasNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function updateBatasNilai(Request $request)
    {
        $id_penerimaan = $request->id_penerimaan;
        $id_batas = BatasNilai::where('id_penerimaan', $id_penerimaan)->first()->id;
        $batas_nilai = BatasNilai::find($id_batas);
        $batas_nilai->tes_akademik = $request->tes_akademik;
        $batas_nilai->tes_wawancara = $request->tes_wawancara;
        $batas_nilai->nilai_akhir = $request->nilai_akhir;
        $batas_nilai->save();
        Alert::success('Sukses!', 'Data Batas Nilai berhasil diubah!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#tes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
