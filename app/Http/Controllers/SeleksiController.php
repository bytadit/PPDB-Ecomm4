<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use App\Models\Jenjang;
use App\Models\Jalur;
use App\Models\AdminJenjang;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showAll()
    {
        return view('dashboard.admin.seleksi.show-all', [
            'title' => 'Halaman Admin | Program Penerimaan',
            'penerimaans' => Penerimaan::where('id_jenjang', AdminJenjang::where('user_id', auth()->user()->id)->first()->jenjang_id)->get(),
            'jenjangs' => Jenjang::all(),
            'jalurs' => Jalur::all(),
        ]);
    }
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
