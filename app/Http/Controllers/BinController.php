<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;

class BinController extends Controller
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
        $bin=Bin::all();
        return view('pages/bins',['bin'=>$bin]);
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


    public function show($id)
    {   
        $bin=Bin::find($id);
        // return view('pages.singleBin',['bin'=>$bin]);
        return view('pages.singleBin')->with('bin',$bin);
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

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     Bin::destroy($id);
        
    // }
    public function search($number)
    {
        return Bin::where('number','like','%'.$number.'%')->get();
    }

    // public function viewfunction(){
    //     return view('pages/create_bin');
    // }
    public function create_bin(Request $request){
        //  $request->validate(
        //     ['number' =>'required|integer|unique:bins|number',
        //     'location' =>'required|string|unique:bins|location'
        //     ]
            
        // );
       $bin=new Bin;
       $bin->number=$request->BinNumber;
       $bin->location=$request->BinLocation;
       $bin->user_id=auth()->user()->id;
       $bin->save();
       return redirect('bins');

    }

    public function deletebin($id){
    

        // if($request->user()->can('bin:delete')){
        $bin = Bin::find($id);
        $bin->delete();
        return redirect('/bins');
    
   // }
    }
  
}