<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocteurRequest;
use App\Http\Requests\UpdateDocteurRequest;
use App\Models\Docteur;

class DocteurController extends Controller
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
     * @param  \App\Http\Requests\StoreDocteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocteurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function show(Docteur $docteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Docteur $docteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocteurRequest  $request
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocteurRequest $request, Docteur $docteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docteur  $docteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docteur $docteur)
    {
        //
    }
}
