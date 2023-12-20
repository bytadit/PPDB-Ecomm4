<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Jalur;
class JalurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.jalur.index', [
            'title' => 'Halaman Admin | Jalur Penerimaan',
            'jalurs' => Jalur::all()
        ]);
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
        $request->validate([
            'nama' => 'required',
        ]);
        Jalur::create($request->all());
        Alert::success('Sukses!', 'Data Jalur Penerimaan berhasil ditambahkan!');
        return redirect(route('jalur-penerimaan.index'));
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
        $jalur_id = $request->jalur_id;
        $request->validate([
            'enama' => 'required',
        ]);
        Jalur::where('id', $jalur_id)
            ->update([
                'nama' => $request->enama
            ]);
        Alert::success('Sukses!', 'Data Jalur Penerimaan berhasil diubah!');
        return redirect(route('jalur-penerimaan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $jalur_id = $request->jalur_id;

        Jalur::destroy($jalur_id);
        Alert::success('Sukses!', 'Data Jalur Penerimaan berhasil dihapus!');
        return redirect(route('jalur-penerimaan.index'));
    }
}
