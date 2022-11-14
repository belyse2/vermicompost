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
        return WormType::all();
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
        return WormType::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function show(WormType $wormType)
    {
        return WormType::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function edit(WormType $wormType)
    {
        $WormType = WormType::find($id);
        return $WormType;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWormTypeRequest  $request
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWormTypeRequest $request, WormType $wormType , $id)
    {
        $WormType=WormType::find($id);
        $input =$request->all();
        $WormType->update($input);
        return $WormType;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function destroy(WormType $wormType ,$id)
    {
        WormType::destroy($id);
    }

    // public function search($name_type )
    // {
    //     return WormType::where('name_type','like','%'.$name_type.'%')->get();
    // }
}
