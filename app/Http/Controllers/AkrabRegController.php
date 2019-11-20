<?php

namespace App\Http\Controllers;
use App\akrab_reg;
use Illuminate\Http\Request;

class AkrabRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ahli_akrab = akrab_reg::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

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
    public function store()
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\akrab_reg  $akrab_reg
     * @return \Illuminate\Http\Response
     */
    public function show(akrab_reg $akrab_reg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\akrab_reg  $akrab_reg
     * @return \Illuminate\Http\Response
     */
    public function edit(akrab_reg $akrab_reg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\akrab_reg  $akrab_reg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, akrab_reg $akrab_reg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\akrab_reg  $akrab_reg
     * @return \Illuminate\Http\Response
     */
    public function destroy(akrab_reg $akrab_reg)
    {
        //
    }
}
