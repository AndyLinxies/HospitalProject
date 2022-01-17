<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHopitalRequest;
use App\Http\Requests\UpdateHopitalRequest;
use App\Models\Hopital;

class HopitalController extends Controller
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
     * @param  \App\Http\Requests\StoreHopitalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHopitalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hopital  $hopital
     * @return \Illuminate\Http\Response
     */
    public function show(Hopital $hopital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hopital  $hopital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hopital $hopital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHopitalRequest  $request
     * @param  \App\Models\Hopital  $hopital
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHopitalRequest $request, Hopital $hopital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hopital  $hopital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hopital $hopital)
    {
        //
    }
}
