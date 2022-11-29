<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinLocation;

class BinLocationController extends Controller
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

        return BinLocation::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return BinLocation::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$input=new BinLocation;
$input->country=$request->country;
$input->district=$request->district;
$input->cell=$request->cell;
$input->village=$request->village;
$input->bin_id=$request->bin_id;
$input->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return BinLocation::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $BinLocation= BinLocation::find($id);
        $input = $request->all();
        $BinLocation->update($input);
        return $BinLocation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        BinLocation::destroy($id);
    }

    public function delete($id){
        $input=Bin::find($id);
       $input->delete();
        return redirect('bins');
       }
}
