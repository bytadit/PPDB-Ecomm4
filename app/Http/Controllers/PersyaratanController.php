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
        $request->validate([
            'nama' => 'required',
            'setting' => 'required',
            'value' => 'required',
            'id_penerimaan' => 'required'
        ]);
        Persyaratan::create($request->all());
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
        $persyaratan_id = $request->syarat_id;
        $id_penerimaan = $request->id_penerimaan;
        $request->validate([
            'enama' => 'required',
            'esetting' => 'required',
            'evalue' => 'required'
        ]);
        Persyaratan::where('id', $persyaratan_id)
            ->update([
                'nama' => $request->enama,
                'setting' => $request->esetting,
                'value' => $request->evalue
            ]);
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
