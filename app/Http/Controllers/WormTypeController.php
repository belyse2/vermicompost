<?php

namespace App\Http\Controllers;

use App\Models\WormType;
use App\Http\Requests\StoreWormTypeRequest;
use App\Http\Requests\UpdateWormTypeRequest;

class WormTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return wormType::all();
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
     * @param  \App\Http\Requests\StoreWormTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWormTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function show(WormType $wormType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function edit(WormType $wormType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWormTypeRequest  $request
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWormTypeRequest $request, WormType $wormType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function destroy(WormType $wormType)
    {
        //
    }
}
