<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\akrab_membrs;

class AkrabMembrController extends Controller
{

    public function apply_akrab()
    {
        return view('permohonan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ahli_akrab = new akrab_membrs; //figure out mna yg problem <-- yang ini!!
        
        $ahli_akrab->nama = request('nama');
        $ahli_akrab->jantina = request('jantina');
        $ahli_akrab->email = request('email');
        $ahli_akrab->no_ic = request('no_ic');
        $ahli_akrab->nama_kem_jab = request('nama_kem_jab');
        $ahli_akrab->add_kem_jab = request('add_kem_jab');
        $ahli_akrab->date_lahir = request('date_lahir');
        $ahli_akrab->no_tel = request('no_tel');
        $ahli_akrab->no_ph = request('no_ph');
        $ahli_akrab->no_fax = request('no_fax');
        $ahli_akrab->jawatan = request('jawatan');
        $ahli_akrab->gred = request('gred');
        $ahli_akrab->bil_tahun = request('bil_tahun');
        $ahli_akrab->bil_sess = request('bil_sess');
        $ahli_akrab->date_sara = request('date_sara');
        //ini aku x berapa sure
        //$applicant->perlantikan = request(DateTime::createFromFormat('m/d/Y',perlantikan););
        
        /*$ahli_baru->tarikhlantik = request('tarikhlantik');
        $ahli_baru->tawaran = request()->file('tawaran')->store('public/uploadocs');
        $ahli_baru->surakuan = request()->file('surakuan')->store('public/uploadocs');

        $ahli_baru->save();
        return view('dashboard');        

        return ahli_akrab::create([
            'nama' => $data['nama'],
            'no_ic' => $data['no_ic'],
            'date_lahir' => $data['date_lahir'],
            'nama_kem_jab' => $data['nama_kem_jab'],
            'add_kem_jab' => $data['add_kem_jab'],
            'no_tel' => $data['no_tel'],
            'no_fax' => $data['no_fax'],
            'no_ph' => $data['no_ph'],
            'email' => $data['email'],
            'jawatan' => $data['jawatan'],
            'gred' => $data['gred'],
            'bil_tahun' => $data['bil_tahun'],
            'bil_sess' => $data['bil_sess'],
            'date_sara' => $data['date_sara'],
        ]);*/
        $ahli_akrab->save();
        return view('dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }    

    /**
     * Display the specified resource.
     *
     * @param  \App\akrab_membr  $akrab_membr
     * @return \Illuminate\Http\Response
     */
    public function show(akrab_membrs $akrab_membr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\akrab_membr  $akrab_membr
     * @return \Illuminate\Http\Response
     */
    public function edit(akrab_membrs $akrab_membr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\akrab_membr  $akrab_membr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, akrab_membrs $akrab_membr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\akrab_membr  $akrab_membr
     * @return \Illuminate\Http\Response
     */
    public function destroy(akrab_membrs $akrab_membr)
    {
        //
    }
}
