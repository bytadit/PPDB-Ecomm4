<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Biaya;
use App\Models\Penerimaan;

class BiayaController extends Controller
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
            'nama' => 'required',
            'setting' => 'required',
            'nominal' => 'required',
            'id_penerimaan' => 'required'
        ]);
        Biaya::create($request->all());
        Alert::success('Sukses!', 'Data Biaya berhasil ditambahkan!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#biaya');
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
        $biaya_id = $request->biaya_id;
        $id_penerimaan = $request->id_penerimaan;
        $request->validate([
            'enama' => 'required',
            'esetting' => 'required',
            'enominal' => 'required'
        ]);
        Biaya::where('id', $biaya_id)
            ->update([
                'nama' => $request->enama,
                'setting' => $request->esetting,
                'nominal' => $request->enominal
            ]);
        Alert::success('Sukses!', 'Data Biaya Program berhasil diubah!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#biaya');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $biaya_id = $request->biaya_id;
        $id_penerimaan = $request->id_penerimaan;
        Biaya::destroy($biaya_id);
        Alert::success('Sukses!', 'Data Biaya Program berhasil dihapus!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#biaya');
    }

    public function updateBiayaDaftar(Request $request)
    {
        $id_penerimaan = $request->id_penerimaan;
        $penerimaan = Penerimaan::find($id_penerimaan);
        $penerimaan->biaya_pendaftaran = $request->biaya_pendaftaran;
        $penerimaan->save();
        Alert::success('Sukses!', 'Data Biaya Pendaftaran berhasil diubah!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#biaya');

    }
}
