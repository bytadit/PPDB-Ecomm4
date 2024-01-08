<?php

namespace App\Http\Controllers;
use App\Models\Biaya;
use App\Models\Role;
use App\Models\Persyaratan;
use App\Models\Dokumen;
use App\Models\NilaiPendaftar;
use App\Models\Pendaftar;
use App\Models\OrangTuaPendaftar;
use App\Models\Pembayaran;
use App\Models\Penerimaan;
use App\Models\AdminJenjang;
use App\Models\Jalur;
use App\Models\Jenjang;
use App\Models\Rapor;
use App\Models\User;
use App\Models\SekolahPendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function verifikasiData(Request $request)
    {
        $penerimaan_id = $request->route('penerimaan');
        $pendaftar_id = $request->route('pendaftar');
        $pendaftar = Pendaftar::find($pendaftar_id);
        $pendaftar->is_verified = $request->verifikasi_data;
        $pendaftar->save();
        Alert::success('Sukses!', 'Status Verifikasi Berhasil Ditambahkan!');
        return redirect('/pendaftar-program/'. $penerimaan_id .'/pendaftar');
    }
    public function ubahVerifikasi(Request $request)
    {
        $penerimaan_id = $request->route('penerimaan');
        $pendaftar_id = $request->route('pendaftar');
        $pendaftar = Pendaftar::find($pendaftar_id);
        $pendaftar->is_verified = $request->verifikasi_data;
        $pendaftar->save();
        Alert::success('Sukses!', 'Status Verifikasi Berhasil Diubah!');
        return redirect('/pendaftar-program/'. $penerimaan_id .'/pendaftar/' . $pendaftar_id);
    }
    public function showAll(Request $request)
    {
        return view('dashboard.admin.pendaftar.show-all', [
            'title' => 'Halaman Admin | Program Penerimaan',
            'penerimaans' => Penerimaan::where('id_jenjang', AdminJenjang::where('user_id', auth()->user()->id)->first()->jenjang_id)->get(),
            'jenjangs' => Jenjang::all(),
            'jalurs' => Jalur::all(),
        ]);
    }
    public function index(Request $request)
    {
        $penerimaan_id = $request->route('penerimaan');
        return view('dashboard.admin.pendaftar.index', [
            'title' => 'Halaman Admin | Program Penerimaan',
            'penerimaan_id' => $penerimaan_id,
            'pendaftars' => Pendaftar::where('id_penerimaan', $penerimaan_id)->get(),
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
        // $pendaftar = $request->session()->get('pendaftar');
        $pendaftar = $request->session()->get('pendaftar', []);
        return view('non-dashboard/landing-page/regist-steps/data-siswa', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'pendaftar' => $pendaftar,
        ]);
    }

    public function postStep2(Request $request)
    {
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $persyaratan = Persyaratan::where('id_penerimaan', $program_id)->get();

        $mainValidationRules = [
            'nisn' => 'required',
            'nik' => 'required|unique:users',
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'id_penerimaan' => 'required',
            'email' => 'required|unique:users',
        ];
        if($persyaratan->where('nama', 'Usia')->first()->setting == 1){
            $dateValidationRule = [
                'tgl_lahir' => 'required|date|after:' . now()->subYears($persyaratan->first()->value)->format('Y-m-d'),
            ];
        }else if($persyaratan->where('nama', 'Usia')->first()->setting == 2){
            $dateValidationRule = [
                'tgl_lahir' => 'required|date|before:' . now()->subYears($persyaratan->first()->value)->format('Y-m-d'),
            ];
        }
        $validatedPendaftar = $request->validate(
            array_merge($mainValidationRules, $dateValidationRule),
            [
                'nik.unique' => 'Nomor NIK telah digunakan',
                'nik.required' => 'Nomor NIK Wajib Diisi!',
                'email.unique' => 'Alamat Email telah digunakan',
                'email.required' => 'Alamat Email Wajib Diisi!',
                'nisn.required' => 'Nomor NISN Wajib Diisi!',
                'nama.required' => 'Nama Wajib Diisi!',
                'gender.required' => 'Jenis Kelamin Wajib Diisi!',
                'alamat.required' => 'Alamat Wajib Diisi!',
                'tgl_lahir.required' => 'Tanggal Lahir Wajib Diisi!',
                'tgl_lahir.date' => 'Usia kurang dari ketentuan',
                'tgl_lahir.before' => 'Usia tidak mencukupi ketentuan ' . $persyaratan->where('nama', 'Usia')->first()->value . ' tahun',
                'tgl_lahir.after' => 'Usia melebihi ketentuan ' . $persyaratan->where('nama', 'Usia')->first()->value . ' tahun',
            ]
        );

        // Retrieve the existing data from the session or create an empty array if it doesn't exist
        $pendaftar = $request->session()->get('pendaftar', []);
        // Update or add the validated data to the array
        $pendaftar['nisn'] = $validatedPendaftar['nisn'];
        $pendaftar['nik'] = $validatedPendaftar['nik'];
        $pendaftar['nama'] = $validatedPendaftar['nama'];
        $pendaftar['gender'] = $validatedPendaftar['gender'];
        $pendaftar['tgl_lahir'] = $validatedPendaftar['tgl_lahir'];
        $pendaftar['alamat'] = $validatedPendaftar['alamat'];
        $pendaftar['id_penerimaan'] = $validatedPendaftar['id_penerimaan'];
        $pendaftar['email'] = $validatedPendaftar['email'];

        // Store the updated array back into the session
        $request->session()->put('pendaftar', $pendaftar);

        return redirect()->route('guest.registration.step3', ['program' => $program_id]);
    }

    public function step3(Request $request){
        $program_id = $request->route('program');
        $ortu = collect($request->session()->get('orangtua', []));

        return view('non-dashboard/landing-page/regist-steps/data-ortu', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'ortu' => $ortu,
        ]);
    }

    public function postStep3(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $ortu = $request->session()->get('orangtua', []);

        $ayah = [
            'nama' => $request->nama_ayah,
            'pekerjaan' => $request->pekerjaan_ayah,
            'penghasilan' => $request->penghasilan_ayah,
            'status' => 1,
            'gender' => 1
        ];

        $ibu = [
            'nama' => $request->nama_ibu,
            'pekerjaan' => $request->pekerjaan_ibu,
            'penghasilan' => $request->penghasilan_ibu,
            'status' => 2,
            'gender' => 2
        ];

        $wali = [
            'nama' => $request->nama_wali,
            'pekerjaan' => $request->pekerjaan_wali,
            'penghasilan' => $request->penghasilan_wali,
            'status' => 3,
            'gender' => $request->gender
        ];

        $combined_array = [
            'ayah' => $ayah,
            'ibu' => $ibu,
            'wali' => $wali
        ];

        // Add the combined array to the session data
        // $ortu[] = $combined_array;

        // Update the session data
        // $request->session()->put('orangtua', $ortu);
        $request->session()->put('orangtua', $combined_array);

        return redirect()->route('guest.registration.step4', ['program' => $program_id]);
    }

    public function step4(Request $request){
        $program_id = $request->route('program');
        $sekolah = $request->session()->get('sekolah', []);
        return view('non-dashboard/landing-page/regist-steps/data-sekolah', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'sekolah' => $sekolah,
        ]);
    }
    public function postStep4(Request $request)
    {
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();

        $validatedSekolah = $request->validate([
            'npsn' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'tanggal_lulus' => 'required',
        ], [
            'npsn.required' => 'NPSN Harus Diisi!',
            'nama.required' => 'Nama Sekolah harus diisi!',
            'status.required' => 'Status sekolah harus diisi!',
            'alamat.required' => 'Alamat sekolah harus diisi!',
            'tanggal_lulus.required' => 'Tanggal lulus harus diisi',
        ]);

        if (empty($request->session()->get('sekolah'))) {
            $request->session()->put('sekolah', $validatedSekolah);
        } else {
            $sekolah = $request->session()->get('sekolah');
            foreach ($validatedSekolah as $key => $value) {
                $sekolah[$key] = $value;
            }
            $request->session()->put('sekolah', $sekolah);
        }

        return redirect()->route('guest.registration.step5', ['program' => $program_id]);
    }

    public function step5(Request $request){
        $program_id = $request->route('program');
        $nilai_pendaftar = collect($request->session()->get('nilai', []));
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
        $nilai = $request->session()->get('nilai', []);

        $combined_nilai = [];

        $rapors = $request->input('rapors');
        $idrapors = $request->input('idrapors');

        foreach($rapors as $index => $rapor){
            // $nilai = new NilaiPendaftar();
            // $nilai->fill([
            //     'nilai_rata' => $rapor,
            //     'id_rapor' => $idrapors[$index]
            // ]);
            $nilai = [
                'nilai_rata' => $rapor,
                'id_rapor' => $idrapors[$index]
            ];
            $combined_nilai[] = $nilai;
        }

        // Get the existing nilai data from the session
        // $nilaiFromSession = $request->session()->get('nilai', []);

        // // Merge the new nilai data with the existing nilai data
        // $combined_nilai = array_merge($nilaiFromSession, $combined_nilai);

        // Update the session data
        $request->session()->put('nilai', $combined_nilai);

        return redirect()->route('guest.registration.step6', ['program' => $program_id]);
    }

    public function step6(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $nilai_pendaftar = $request->session()->get('nilai', []);
        $sekolah = $request->session()->get('sekolah', []);
        $ortu = $request->session()->get('orangtua', []);
        $pendaftar = $request->session()->get('pendaftar', []);
        return view('non-dashboard/landing-page/regist-steps/data-review', [
            'program' => Penerimaan::where('id', $program_id)->get(),
            'rapors' => Rapor::all(),
            'nilai_pendaftar' => $nilai_pendaftar,
            'sekolah' => $sekolah,
            'ortu' => $ortu,
            'pendaftar' => $pendaftar,
            'penerimaan' => $penerimaan
        ]);
    }
    public function verifyStep6(Request $request){
        $program_id = $request->route('program');
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
        $pendaftar = $request->session()->get('pendaftar', []);
        if($request->session()->has('pendaftar')){
            return view('non-dashboard/landing-page/regist-steps/pembayaran', [
                'program' => Penerimaan::where('id', $program_id)->get(),
                'nilai_pendaftar' => $nilai_pendaftar,
                'sekolah' => $sekolah,
                'ortu' => $ortu,
                'pendaftar' => $pendaftar,
                'penerimaan' => $penerimaan
            ]);
        }else{
            return redirect()->route('guest.registration.step2', ['program' => $program_id]);
        }
    }
    public function postPayment(Request $request){
        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $secret_key = 'Basic '.config('xendit.key_auth');
        $external_id = Str::random(10);

        $data_request = Http::withHeaders([
            'Authorization' => $secret_key
        ])->post('https://api.xendit.co/v2/invoices', [
            'external_id' => $external_id,
            'amount' => $penerimaan->first()->biaya_pendaftaran,
            'payment_methods' => [
                'DANA', 'BCA', 'MANDIRI', 'BRI'
            ]
        ]);
        $response = $data_request->object();
        // save to database
        $pembayaran = Pembayaran::create([
            'doc_no' => $external_id,
            'amount' => $penerimaan->first()->biaya_pendaftaran,
            'payment_status' => $response->status,
            'payment_link' => $response->invoice_url
        ]);
        // save payment_id to session
        $newData = [
            'doc_no' => $pembayaran->doc_no,
            'payment_id' => $pembayaran->id,
            'payment_amount' => $pembayaran->amount,
            'payment_link' => $pembayaran->payment_link,
            'payment_status' => $pembayaran->status
        ];
        if(empty($request->session()->get('payment'))){
            $payment = new Pembayaran();
            $payment->fill($newData);
            $request->session()->put('payment', $payment);
        }else{
            $payment = $request->session()->get('payment');
            $payment->fill($newData);
            $request->session()->put('payment', $payment);
        }
        return response()->json([
            'payment_id' => $pembayaran->id,
            'payment_docno' => $pembayaran->doc_no,
            'payment_link' => $pembayaran->payment_link,
        ]);
    }
    public function checkPaymentStatus(Request $request, $program, $paymentId)
    {
        $status = Pembayaran::findOrFail($paymentId)->payment_status;

        $program_id = $request->route('program');
        $penerimaan = Penerimaan::where('id', $program_id)->get();
        $ortu = $request->session()->get('orangtua', []);
        $nilai_pendaftar = $request->session()->get('nilai', []);
        $pendaftar = $request->session()->get('pendaftar', []);
        $sekolah = $request->session()->get('sekolah', []);
        $payment = $request->session()->get('payment');
        if ($status === 'PAID') {
            $user = User::create([
                'name' => $pendaftar['nama'],
                'email' => $pendaftar['email'],
                'is_admin' => false,
                'nik' => $pendaftar['nik'],
                'password' => Hash::make($payment->doc_no)
            ]);
            $newPendaftar = Pendaftar::create([
                'nisn' => $pendaftar['nisn'],
                'nama' => $pendaftar['nama'],
                'gender' => $pendaftar['gender'],
                'tgl_lahir' => $pendaftar['tgl_lahir'],
                'alamat' => $pendaftar['alamat'],
                'id_penerimaan' => $pendaftar['id_penerimaan'],
                'id_user' => $user->id,
            ]);
            foreach($ortu as $newOrtu){
                OrangTuaPendaftar::create([
                    'nama' => $newOrtu['nama'],
                    'pekerjaan' => $newOrtu['pekerjaan'],
                    'penghasilan' => $newOrtu['penghasilan'],
                    'status' => $newOrtu['status'],
                    'gender' => $newOrtu['gender'],
                    'id_pendaftar' => $newPendaftar->id
                ]);
            }
            SekolahPendaftar::create([
                'npsn' => $sekolah['npsn'],
                'nama' => $sekolah['nama'],
                'status' => $sekolah['status'],
                'alamat' => $sekolah['alamat'],
                'tanggal_lulus' => $sekolah['tanggal_lulus'],
                'id_pendaftar' => $newPendaftar->id
            ]);
            foreach($nilai_pendaftar as $newNilai){
                NilaiPendaftar::create([
                    'nilai_rata' => $newNilai['nilai_rata'],
                    'id_rapor' => $newNilai['id_rapor'],
                    'id_pendaftar' => $newPendaftar->id
                ]);
            }
            $pendaftar = Role::where('name', 'pendaftar')->get();
            $user->roles()->attach([$pendaftar->first()->id]);
            // $user->attachRole($pendaftar);
            $request->session()->forget('pendaftar');
            $request->session()->forget('sekolah');
            $request->session()->forget('orangtua');
            $request->session()->forget('nilai');
            $request->session()->forget('payment');
            // Redirect URL after successful payment
            // $redirectUrl = '/dashboard';
            return response()->json([
                'status' => $status,
                'nik' => $user->nik,
                'password' => $payment->doc_no,
                'email' => $user->email
            ]);

            // return response()->json(['status' => 'PAID', 'redirect_url' => $redirectUrl]);
        }
        return response()->json(['status' => $status]);
    }
    // public function paymentProcess(Request $request){
    //     $program_id = $request->route('program');
    //     return view('non-dashboard/landing-page/regist-steps/payment-process', [
    //         'program' => Penerimaan::where('id', $program_id)->get(),
    //     ]);
    // }
    public function callback(Request $request){
        $data = request()->all();
        $status = $data['status'];
        $external_id = $data['external_id'];
        // $payment_method = $data['payment_method'];
        // $payment_channel = $data['$payment_channel'];
        // $paid_at = $data['paid_at'];

        Pembayaran::where('doc_no', $external_id)->update([
            'payment_status' => $status,
            // 'payment_method' => $data['payment_method'],
            // 'payment_channel' => $payment_channel,
            // 'paid_at' => $data['paid_at']
        ]);
        return response()->json($data);
    }

}
