<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VermUser;

class VermUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VermUser::all();   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return VermUser::create($request->all());  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $VermUser=VermUser::find($id);
    //     return VermUser::$bin;
    // }

    public function show($id)
    {
        return VermUser::find($id);
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
        $VermUser=VermUser::find($id);
        $input =$request->all();
        $VermUser->update($input);
        return $VermUser;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VermUser::destroy($id);
    }
    public function search($Fname)
    {
        return VermUser::where('Fname','like','%'.$Fname.'%')->get();
    }
}
