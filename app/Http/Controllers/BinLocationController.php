<?php

namespace App\Http\Controllers;

use App\Models\BinLocation;
use App\Http\Requests\StoreBinLocationRequest;
use App\Http\Requests\UpdateBinLocationRequest;

class BinLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return BinLocation::all();
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
     * @param  \App\Http\Requests\StoreBinLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBinLocationRequest $request)
    {
        //

        return BinLocation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BinLocation  $binLocation
     * @return \Illuminate\Http\Response
     */
    public function show(BinLocation $id)
    {
        //

        return BinLocationr::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinLocation  $binLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(BinLocation $binLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinLocationRequest  $request
     * @param  \App\Models\BinLocation  $binLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinLocationRequest $request,$id, BinLocation $binLocation)
    {
        //
        $BinLocation=BinLocation::find($id);
        $input =$request->all();
        $BinLocation->update($input);
        return $BinLocation;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinLocation  $binLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinLocation $binLocation)
    {
        //
        BinLocation::destroy($id);

    }

    public function search($id)
    {
        return BinLocation::where('district','like','%'.$id.'%')->get();
    }
}
