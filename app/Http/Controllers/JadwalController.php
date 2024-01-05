<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Alert;

class JadwalController extends Controller
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
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
            'id_jenis_kegiatan' => 'required',
            'id_penerimaan' => 'required'
        ]);
        Kegiatan::create($request->all());
        Alert::success('Sukses!', 'Data Jadwal Kegiatan berhasil ditambahkan!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#jadwal-kegiatan');
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
        $kegiatan_id = $request->eid_kegiatan;
        $id_penerimaan = $request->eid_penerimaan;

        $request->validate([
            'etgl_awal' => 'required',
            'etgl_akhir' => 'required',
            'eid_kegiatan' => 'required',
            'eid_penerimaan' => 'required'
        ]);

        Kegiatan::where('id', $kegiatan_id)
        ->update([
                'tgl_awal' => $request->etgl_awal,
                'tgl_akhir' => $request->etgl_akhir,
                'id_jenis_kegiatan' => $request->eid_kegiatan,
                'id_penerimaan' => $request->eid_penerimaan,
            ]);
        Alert::success('Sukses!', 'Data Jadwal Kegiatan berhasil diubah!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#jadwal-kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $kegiatan_id = $request->kegiatan_id;
        $id_penerimaan = $request->id_penerimaan;
        Kegiatan::destroy($kegiatan_id);
        Alert::success('Sukses!', 'Data Jadwal Kegiatan berhasil dihapus!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#jadwal-kegiatan');
    }
}
