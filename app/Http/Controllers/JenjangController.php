<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenjang;
use Alert;

class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.jenjang.index', [
            'title' => 'Halaman Admin | Jenjang Pendidikan',
            'jenjangs' => Jenjang::all()
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
        Jenjang::create($request->all());
        Alert::success('Sukses!', 'Data Jenjang Pendidikan berhasil ditambahkan!');
        return redirect(route('jenjang-pendidikan.index'));
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
        $jenjang_id = $request->jenjang_id;
        $request->validate([
            'enama' => 'required',
        ]);
        Jenjang::where('id', $jenjang_id)
            ->update([
                'nama' => $request->enama
            ]);
        Alert::success('Sukses!', 'Data Jenjang Pendidikan berhasil diubah!');
        return redirect(route('jenjang-pendidikan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $jenjang_id = $request->jenjang_id;

        Jenjang::destroy($jenjang_id);
        Alert::success('Sukses!', 'Data  Jenjang Pendidikan berhasil dihapus!');
        return redirect(route('jenjang-pendidikan.index'));
    }
}
