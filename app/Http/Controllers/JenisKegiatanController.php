<?php

namespace App\Http\Controllers;

use App\Models\JenisKegiatan;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Alert;

class JenisKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.jenis_kegiatan.index', [
            'title' => 'Halaman Admin | Referensi Kegiatan',
            'activities' => JenisKegiatan::all()
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
        JenisKegiatan::create($request->all());
        Alert::success('Sukses!', 'Data Referensi Kegiatan berhasil ditambahkan!');
        return redirect(route('referensi-kegiatan.index'));
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
        $activity_id = $request->activity_id;
        $request->validate([
            'enama' => 'required',
        ]);
        JenisKegiatan::where('id', $activity_id)
            ->update([
                'nama' => $request->enama
            ]);
        Alert::success('Sukses!', 'Data Referensi Kegiatan berhasil diubah!');
        return redirect(route('referensi-kegiatan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $activity_id = $request->activity_id;

        JenisKegiatan::destroy($activity_id);
        Alert::success('Sukses!', 'Data Referensi Kegiatan berhasil dihapus!');
        return redirect(route('referensi-kegiatan.index'));
    }
}
