<?php

namespace App\Http\Controllers;

use App\Models\WormBin_Link;
use App\Http\Requests\StoreWormBin_LinkRequest;
use App\Http\Requests\UpdateWormBin_LinkRequest;

class WormBinLinkController extends Controller
{
    
    
    public function _construct()
    {
        $this->middleware(['role:vermiculturistRole|adminRole']);
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWormBin_LinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWormBin_LinkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WormBin_Link  $wormBin_Link
     * @return \Illuminate\Http\Response
     */
    public function show(WormBin_Link $wormBin_Link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WormBin_Link  $wormBin_Link
     * @return \Illuminate\Http\Response
     */
    public function edit(WormBin_Link $wormBin_Link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWormBin_LinkRequest  $request
     * @param  \App\Models\WormBin_Link  $wormBin_Link
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWormBin_LinkRequest $request, WormBin_Link $wormBin_Link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WormBin_Link  $wormBin_Link
     * @return \Illuminate\Http\Response
     */
    public function destroy(WormBin_Link $wormBin_Link)
    {
        //
    }
}
