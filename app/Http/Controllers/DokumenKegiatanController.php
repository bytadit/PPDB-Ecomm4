<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Alert;

class DokumenKegiatanController extends Controller
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
        $dokumen = new Dokumen;
        $dokumen->id_penerimaan = $id_penerimaan;
        $dokumen->nama = $request->nama;
        $dokumen->tipe = $request->tipe;
        $dokumen->jumlah = $request->jumlah;
        $dokumen->deskripsi = $request->deskripsi;
        // $fileName = md5($request->nama . time()).'.'.$request->path->extension();
        // $uploadedFile = $request->path->storeAs('public/path_sk', $fileName);
        //         $filePath = 'public/path_sk/' . $fileName;
        //         $surat = SuratKeputusan::create([
        //             'nama' => $request->file_name,
        //             'path' => $filePath
        //         ]);
        //         $pejabat->id_sk = $surat->id;
        $dokumen->save();
        Alert::success('Sukses!', 'Data Dokumen Kegiatan berhasil ditambahkan!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#dokumen');
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
        $dokumen_id = $request->dokumen_id;
        $id_penerimaan = $request->id_penerimaan;
        $request->validate([
            'enama' => 'required',
            'etipe' => 'required',
            'ejumlah' => 'required',
            'edeskripsi' => 'required'
        ]);
        Dokumen::where('id', $dokumen_id)
            ->update([
                'nama' => $request->enama,
                'tipe' => $request->etipe,
                'jumlah' => $request->ejumlah,
                'deskripsi' => $request->edeskripsi
            ]);
        Alert::success('Sukses!', 'Data Jalur Penerimaan berhasil diubah!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#dokumen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $dokumen_id = $request->dokumen_id;
        $id_penerimaan = $request->id_penerimaan;
        Dokumen::destroy($dokumen_id);
        Alert::success('Sukses!', 'Data Dokumen Kegiatan berhasil dihapus!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#dokumen');
    }
}
