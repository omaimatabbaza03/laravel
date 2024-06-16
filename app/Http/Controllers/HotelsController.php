<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hotels()
    {
        
        return view('hotel.hotels');
    }
    public function UsHotel()
    {
        
        return view('hotel.UsHotel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table("hotel")->insert([ 
            
          
            "idHotel"=>$request->idHotel,
            "nom"=>$request->nom,
            "nbetoils"=>$request->nbetoils,
            "ville"=>$request->ville,
            "pays"=>$request->pays
        
            
            ]);
        return redirect()->route('UsHotel');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotels=DB::table('hotel')->where('idHotel', $id)->first();
        return view('voyage.show',compact('hotels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotels=DB::table('hotel')->where('idHotel', $id)->first();
        return view('voyage.edit',compact('hotels'));

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
        DB::table('hotel')->where('idHotel', $id)->update([
            "idHotel"=>$request->idHotel,
        "nom"=>$request->nom,
        "nbetoils"=>$request->nbetoils,
        "ville"=>$request->ville,
        "pays"=>$request->pays
       
        ]);
            
       
                return redirect()->route('UsHotel');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('hotel')->where('idHotel', $id)->delete();
        return redirect()->route('UsHotel');

    }
}
