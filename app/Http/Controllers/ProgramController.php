<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerimaan;
use App\Models\Jenjang;
use App\Models\Jalur;
use App\Models\JenisKegiatan;
use Alert;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.program.index', [
            'title' => 'Halaman Admin | Program Penerimaan',
            'penerimaans' => Penerimaan::all(),
            'jenjangs' => Jenjang::all(),
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
            'id_jenjang' => 'required',
            'id_jalur' => 'required',
            'periode' => 'required'
        ]);
        Penerimaan::create($request->all());
        Alert::success('Sukses!', 'Data Program Penerimaan berhasil ditambahkan!');
        return redirect(route('program-penerimaan.index'));
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
    public function destroy(string $id, Request $request)
    {
        $penerimaan_id = $request->penerimaan_id;

        Penerimaan::destroy($penerimaan_id);
        Alert::success('Sukses!', 'Data  Program Penerimaan berhasil dihapus!');
        return redirect(route('program-penerimaan.index'));
    }
    public function updateStatus(Request $request, Penerimaan $penerimaan)
    {
        $request->validate([
            'is_open' => 'required|in:0,1',
        ]);

        $penerimaan->update(['is_open' => $request->is_open]);
        return response()->json(['message' => 'berhasil']);
    }
}
