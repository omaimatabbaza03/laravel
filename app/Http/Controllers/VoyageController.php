<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        return view('voyage.index');
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
        DB::table("offres")->insert([ 
            "Noffres"=>$request->id,
            "DateDebut"=>$request->DateDebut,
            "Datefin"=>$request->Datefin,
            "ville"=>$request->ville,
            "titre"=>$request->titre,
            "prix"=>$request->prix,
            "image"=>$request->image,
            
         
            ]);
        return redirect()->route('users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = DB::table('offres')->where('Noffres', $id)->first();

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
        $offre = DB::table('offres')->where('Noffres', $id)->first();

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
        DB::table('offres')->where('Noffres', $id)->update(["Noffres"=>$request->id,
        "DateDebut"=>$request->DateDebut,
        "Datefin"=>$request->Datefin,
        "ville"=>$request->ville,
        "titre"=>$request->titre,
        "prix"=>$request->prix,
        "image"=>$request->image,
        
       
        ]);
               
                return redirect()->route('users');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('offres')->where('Noffres', $id)->delete();
        return redirect()->route('users');

    }
}
