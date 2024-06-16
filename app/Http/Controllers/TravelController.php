<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function amenities()
    {
       

        return view('amenities.amenities');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voyage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table("offress")->insert([ 
            "idoffres"=>$request->id,
            "titre"=>$request->titre,
            "description"=>$request->desc,
            "prix"=>$request->prix,
            "image"=>$request->image,
            "ville"=>$request->ville,
            "datedebut"=>$request->dateD,
            "datefin"=>$request->dateF
            ]);
        return redirect()->route('user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = DB::table('offress')->where('idoffres', $id)->first();

        //$offres=DB::table('offres')->find($idoffres);
        return view('voyage.show',compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre = DB::table('offress')->where('idoffres', $id)->first();

        return view('voyage.edit',compact('offre'));

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
        DB::table('offress')->where('idoffres', $id)->update(["idoffres"=>$request->id,
        "titre"=>$request->titre,
        "description"=>$request->desc,
        "prix"=>$request->prix,
        "image"=>$request->image,
        "ville"=>$request->ville,
        "datedebut"=>$request->dateD,
        "datefin"=>$request->dateF
        ]);
               
                return redirect()->route('user');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('offress')->where('idoffres', $id)->delete();
        return redirect()->route('user');

    }
}
