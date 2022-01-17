<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDossmedicRequest;
use App\Http\Requests\UpdateDossmedicRequest;
use App\Models\Dossmedic;

class DossmedicController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDossmedicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDossmedicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dossmedic  $dossmedic
     * @return \Illuminate\Http\Response
     */
    public function show(Dossmedic $dossmedic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dossmedic  $dossmedic
     * @return \Illuminate\Http\Response
     */
    public function edit(Dossmedic $dossmedic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDossmedicRequest  $request
     * @param  \App\Models\Dossmedic  $dossmedic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDossmedicRequest $request, Dossmedic $dossmedic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dossmedic  $dossmedic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dossmedic $dossmedic)
    {
        //
    }
}
