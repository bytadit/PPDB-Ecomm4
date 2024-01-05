<?php

namespace App\Http\Controllers;
use App\Models\Biaya;
use App\Models\Persyaratan;
use App\Models\Dokumen;
use App\Models\NilaiPendaftar;
use App\Models\Pendaftar;
use App\Models\OrangTuaPendaftar;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\Rapor;
use App\Models\SekolahPendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

    public function step1(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        return view('non-dashboard/landing-page/regist-steps/ketentuan', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'biayas' => Biaya::where('id_penerimaan', $program_id)->get(),
            'persyaratans' => Persyaratan::where('id_penerimaan', $program_id)->get(),
            'dokumens' => Dokumen::where('id_penerimaan', $program_id)->get(),
            'rapors' => Rapor::where('id_penerimaan', $program_id)->get(),
            'penerimaan' => $penerimaan
        ]);
    }
    public function step2(Request $request){
        $program_id = $request->route('program');
        $pendaftar = $request->session()->get('pendaftar');
        return view('non-dashboard/landing-page/regist-steps/data-siswa', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'pendaftar' => $pendaftar,
        ]);
    }

    public function postStep2(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $pendaftar = $request->session()->get('pendaftar');

        $validatedData = $request->validate([
            'nisn' => 'required|unique:pendaftar',
            'nik' => 'required|unique:pendaftar',
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'id_penerimaan' => 'required'
        ]);

        if(empty($request->session()->get('pendaftar'))){
            $pendaftar = new Pendaftar();
            $pendaftar->fill($validatedData);
            $request->session()->put('pendaftar', $pendaftar);
        }else{
            $pendaftar = $request->session()->get('pendaftar');
            $pendaftar->fill($validatedData);
            $request->session()->put('pendaftar', $pendaftar);
        }
        return redirect()->route('guest.registration.step3', ['program' => $program_id]);

    }
    public function step3(Request $request){
        $program_id = $request->route('program');
        $ortu = collect($request->session()->get('orangtua'));

        return view('non-dashboard/landing-page/regist-steps/data-ortu', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'ortu' => $ortu,
        ]);
    }

    public function postStep3(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $ortu = $request->session()->get('orangtua');

        $ayah = new OrangTuaPendaftar();
        $ayah->fill([
            'nama' => $request->nama_ayah,
            'pekerjaan' => $request->pekerjaan_ayah,
            'penghasilan' => $request->penghasilan_ayah,
            'status' => 1,
            'gender' => 1
        ]);
        $ibu = new OrangTuaPendaftar();
        $ibu->fill([
            'nama' => $request->nama_ibu,
            'pekerjaan' => $request->pekerjaan_ibu,
            'penghasilan' => $request->penghasilan_ibu,
            'status' => 2,
            'gender' => 2
        ]);
        $wali = new OrangTuaPendaftar();
        $wali->fill([
            'nama' => $request->nama_wali,
            'pekerjaan' => $request->pekerjaan_wali,
            'penghasilan' => $request->penghasilan_wali,
            'status' => 3,
            'gender' => $request->gender
        ]);
        $combined_array = [
            $ayah,
            $ibu,
            $wali
        ];
        $request->session()->put('orangtua', $combined_array);
        return redirect()->route('guest.registration.step4', ['program' => $program_id]);
    }
    public function step4(Request $request){
        $program_id = $request->route('program');
        $sekolah = $request->session()->get('sekolah');
        return view('non-dashboard/landing-page/regist-steps/data-sekolah', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'sekolah' => $sekolah,
        ]);
    }
    public function postStep4(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();

        $validatedData = $request->validate([
            'npsn' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'tanggal_lulus' => 'required',
        ]);

        if(empty($request->session()->get('sekolah'))){
            $sekolah = new SekolahPendaftar();
            $sekolah->fill($validatedData);
            $request->session()->put('sekolah', $sekolah);
        }else{
            $sekolah = $request->session()->get('sekolah');
            $sekolah->fill($validatedData);
            $request->session()->put('sekolah', $sekolah);
        }
        return redirect()->route('guest.registration.step5', ['program' => $program_id]);
    }
    public function step5(Request $request){
        $program_id = $request->route('program');
        $nilai_pendaftar = collect($request->session()->get('nilai'));
        return view('non-dashboard/landing-page/regist-steps/data-nilai', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'rapors' => Rapor::where('id_penerimaan', $program_id)->get(),
            'nilai_pendaftar' => $nilai_pendaftar
        ]);
    }
    public function postStep5(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $rapors = Rapor::where('id_penerimaan', $program_id)->get();

        $combined_nilai = [];
        $rapors = $request->input('rapors');
        $idrapors = $request->input('idrapors');
        foreach($rapors as $index => $rapor){
            $nilai = new NilaiPendaftar();
            $nilai->fill([
                'nilai_rata' => $rapor,
                'id_rapor' => $idrapors[$index]
            ]);
            $combined_nilai[] =  $nilai;
        }
        $request->session()->put('nilai', $combined_nilai);
        $combined_nilai = [];
        return redirect()->route('guest.registration.step6', ['program' => $program_id]);
    }
    public function step6(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $nilai_pendaftar = collect($request->session()->get('nilai'));
        $sekolah = $request->session()->get('sekolah');
        $ortu = collect($request->session()->get('orangtua'));
        $pendaftar = $request->session()->get('pendaftar');

        return view('non-dashboard/landing-page/regist-steps/data-review', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'nilai_pendaftar' => $nilai_pendaftar,
            'sekolah' => $sekolah,
            'ortu' => $ortu,
            'pendaftar' => $pendaftar,
            'penerimaan' => $penerimaan
        ]);
    }
    public function verifyStep6(Request $request){
        $program_id = $request->route('program');
        $existingPendaftar = $request->session()->get('pendaftar', []);
        $existingPendaftar['expiration_time'] = now()->addHours(12);
        $request->session()->put('pendaftar', $existingPendaftar);

        $existingOrangtua = $request->session()->get('orangtua', []);
        $existingOrangtua['expiration_time'] = now()->addHours(12);
        $request->session()->put('orangtua', $existingOrangtua);

        $existingSekolah = $request->session()->get('sekolah', []);
        $existingSekolah['expiration_time'] = now()->addHours(12);
        $request->session()->put('sekolah', $existingSekolah);

        $existingNilai = $request->session()->get('nilai', []);
        $existingNilai['expiration_time'] = now()->addHours(12);
        $request->session()->put('nilai', $existingNilai);

        $request->session()->put('verify', [
            'status' => 'verified',
            'expiration_time' => now()->addHours(12)
        ]);
        return redirect()->route('guest.registration.payment', ['program' => $program_id]);
    }

    public function payment(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $nilai_pendaftar = collect($request->session()->get('nilai'));
        $sekolah = $request->session()->get('sekolah');
        $ortu = collect($request->session()->get('orangtua'));
        $pendaftar = $request->session()->get('pendaftar');
        $payment = $request->session()->get('payment');
        return view('non-dashboard/landing-page/regist-steps/pembayaran', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'nilai_pendaftar' => $nilai_pendaftar,
            'sekolah' => $sekolah,
            'ortu' => $ortu,
            'pendaftar' => $pendaftar,
            'penerimaan' => $penerimaan
        ]);
    }
    public function postPayment(Request $request){

    }

}
