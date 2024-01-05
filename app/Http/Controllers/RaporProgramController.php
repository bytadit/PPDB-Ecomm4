<?php

namespace App\Http\Controllers;
use App\Models\Rapor;

use Illuminate\Http\Request;
use Alert;

class RaporProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $id_penerimaan = $request->id_penerimaan;
        $request->validate([
            'nama_semester' => 'required',
        ]);
        Rapor::create($request->all());
        Alert::success('Sukses!', 'Data Semester Nilai Rapor berhasil ditambahkan!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#rapor');
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
        $rapor_id = $request->rapor_id;
        $id_penerimaan = $request->id_penerimaan;
        $request->validate([
            'enama_semester' => 'required',
        ]);
        Rapor::where('id', $rapor_id)
            ->update([
                'nama_semester' => $request->enama_semester,
            ]);
        Alert::success('Sukses!', 'Data Ketentuan Nilai Rapor berhasil diubah!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#rapor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $rapor_id = $request->rapor_id;
        $id_penerimaan = $request->id_penerimaan;
        Rapor::destroy($rapor_id);
        Alert::success('Sukses!', 'Data Ketentuan Semester berhasil dihapus!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#rapor');
    }
}
