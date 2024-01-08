<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerimaan;
use App\Models\Jenjang;
use App\Models\Jalur;
use App\Models\JenisKegiatan;
use App\Models\Kegiatan;
use App\Models\Persyaratan;
use App\Models\AdminJenjang;
use App\Models\Dokumen;
use App\Models\Biaya;
use App\Models\Rapor;
use Alert;
use App\Models\BatasNilai;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.program.index', [
            'title' => 'Halaman Admin | Program Penerimaan',
            'penerimaans' => Penerimaan::where('id_jenjang', AdminJenjang::where('user_id', auth()->user()->id)->first()->jenjang_id)->get(),
            'jenjangs' => Jenjang::all(),
            'jalurs' => Jalur::all(),
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
        $data = Penerimaan::create([
            'id_jenjang' => AdminJenjang::where('user_id', auth()->user()->id)->first()->jenjang_id,
            'id_jalur' => $request->id_jalur,
            'periode' => $request->periode
        ]);
        Persyaratan::create([
            'nama' => 'Usia',
            'setting' => 1,
            'value' => 16,
            'is_mandatory' => true,
            'jenis_persyaratan' => 2,
            'id_penerimaan' => $data->id
        ]);
        BatasNilai::create([
            'id_penerimaan' => $data->id
        ]);

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
    public function detailProgram(Request $request, Penerimaan $penerimaan)
    {
        return view('dashboard.admin.program.detail', [
            'title' => 'Halaman Admin | Detail Program Penerimaan',
            'penerimaan' => Penerimaan::where('id', $penerimaan->id)->get(),
            'kegiatans' => Kegiatan::where('id_penerimaan', $penerimaan->id)->get(),
            'jenis_kegiatans' => JenisKegiatan::all(),
            'biayas' => Biaya::where('id_penerimaan', $penerimaan->id)->get(),
            'persyaratans' => Persyaratan::where('id_penerimaan', $penerimaan->id)->get(),
            'dokumens' => Dokumen::where('id_penerimaan', $penerimaan->id)->get(),
            'rapors' => Rapor::where('id_penerimaan', $penerimaan->id)->get(),
            'batas_nilai' => BatasNilai::where('id_penerimaan', $penerimaan->id)->get()
        ]);
    }
}
