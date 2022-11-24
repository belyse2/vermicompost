<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Bin::all();
        return view('pages/bins',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return Bin::create($request->all());
        return view('pages/create_bin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bin = Bin::find($id);
        return $bin;
    }


    //function for view asingle bin


    public function show()
    {
        return view('pages/singleBin');
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
        $bin=Bin::find($id);
        $input =$request->all();
        $bin->update($input);
        return $bin;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bin::destroy($id);
        
    }
    public function search($number)
    {
        return Bin::where('number','like','%'.$number.'%')->get();
    }

    // public function viewfunction(){
    //     return view('pages/create_bin');
    // }
    public function create_bin(Request $request){
       $bin=new Bin;
       $bin->number=$request->BinNumber;
       $bin->location=$request->BinLocation;
       $bin->user_id=$request->UserId;
       $bin->save();
       return redirect('bins');

    }

    public function deletebin($id){
        $bin = Bin::find($id);
        $bin->delete();
        return redirect('/bins');
    }
  
}