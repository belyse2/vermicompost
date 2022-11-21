<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinCondition;

class BinConditionController extends Controller
{



    public function __construct()
{
    $this->middleware(['role:admin,vermiculturist']);
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BinCondition::all(); 
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return BinCondition::create($request->all());  


        
    }







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return BinCondition::find($id);
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
        $BinCondition=BinCondition::find($id);
        $input =$request->all();
        $BinCondition->update($input);
        return $BinCondition;
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BinCondition::destroy($id);
    }
    public function search($id)
    {
        return BinCondition::where('id','like','%'.$id.'%')->get();
    }
}
