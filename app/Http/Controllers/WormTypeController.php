<?php

namespace App\Http\Controllers;

use App\Models\WormType;
use App\Http\Requests\StoreWormTypeRequest;
use App\Http\Requests\UpdateWormTypeRequest;
use GuzzleHttp\Psr7\Request;

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
    public function create( Request $request)
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
        return WormType::create($request ->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function show(WormType $id)
    {
        //

        return WormType::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function edit(WormType $wormType, $id)
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
    public function update(UpdateWormTypeRequest $request, WormType $wormType, $id)
    {
        //
        $wormType = WormType::find($id);
        $input = $request->all();
        $wormType->update($input);
        return $wormType;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WormType  $wormType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        WormType::destroy($id);
    }


    public function search($id)
    {
        return WormType::where('id','like','%'.$id.'%')->get();
    }
}
