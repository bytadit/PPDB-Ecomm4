<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Persyaratan;
class PersyaratanController extends Controller
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
        $desc_conditional = $request->deskripsi_cond;
        $desc_textual = $request->deskripsi_text;
        $syarat = new Persyaratan;
        $syarat->id_penerimaan = $id_penerimaan;
        $syarat->nama = $request->nama;
        $syarat->setting = $request->setting;
        $syarat->value = $request->value;
        $syarat->jenis_persyaratan = $request->jenis_persyaratan;
        if($desc_conditional == null){
            $syarat->deskripsi = $desc_textual;
        }else{
            $syarat->deskripsi = $desc_conditional;
        }
        $syarat->save();
        Alert::success('Sukses!', 'Data Persyaratan berhasil ditambahkan!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#persyaratan');
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
        $id_penerimaan = $request->id_penerimaan;
        $desc_conditional = $request->edeskripsi_cond;
        $desc_textual = $request->edeskripsi_text;
        $persyaratan_id = $request->syarat_id;
        $jenis_persyaratan = $request->ejenis_persyaratan;
        
        $syarat = Persyaratan::find($persyaratan_id);
        $syarat->nama = $request->enama;
        $syarat->setting = $request->esetting;
        $syarat->value = $request->evalue;
        $syarat->jenis_persyaratan = $request->ejenis_persyaratan;
        if($jenis_persyaratan == 1){
            $syarat->deskripsi = $desc_textual;
        }else if($jenis_persyaratan == 2){
            $syarat->deskripsi = $desc_conditional;
        }
        $syarat->save();
        Alert::success('Sukses!', 'Data Persyaratan Program berhasil diubah!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#persyaratan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $persyaratan_id = $request->syarat_id;
        $id_penerimaan = $request->id_penerimaan;
        Persyaratan::destroy($persyaratan_id);
        Alert::success('Sukses!', 'Data Persyaratan Program berhasil dihapus!');
        return redirect('/dashboard/admin/program-penerimaan/'. $id_penerimaan .'/detail#persyaratan');
    }
}
