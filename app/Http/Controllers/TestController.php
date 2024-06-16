<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class TestController extends Controller
{
    public function amenities()
    {
       

        return view('amenities.amenities');
    }
    public function contact()
    {
       

        return view('voyage.contact');
    }

    public function reserver($id)
    {
       

        return view('voyage.reserver',compact('id'));
    }
    public function users()
    {
       

        return view('voyage.user');
    }
    public function UsHotel()
    {
        $hotels=DB::table('hotel')->get();
        return view('hotel.UsHotel',compact('hotels'));
    }
    public function cherche()
    {
        $ville=$request->ville;
        $dateD=$request->dateD;
        $dateF=$request->dateF;
        $offre = DB::table('offres')
            ->where('ville', '=', $ville)
            ->where('dateDebut', '>=', $dateD)
            ->where('dateFin', '<=', $dateF)
            ->get();

        return view('voyage.offres',compact('offre'));
    }
    
    
    public function registe(Request $request)
    {
        
            $user=$request->username;
            $email=$request->email;
            $password=$request->password;

            $value=["username"=>$user,"email"=>$email,"password"=>$password];
            // $validatedData = $request->validate([
            //     'password' => 'required|string|min:8|confirmed',
            // ]);
        $from['password']=Hash::make($password);
            if(DB::table('users')->insert($value)){
                $request->session()->regenerate();
                return redirect()->route('voyage.index')->with('succ','enregistré avec succès ');

            }else{
                return back()->withErrors(['error'=>'incorecte']);
            }
           
         
           
    }

    public function login()
    {
       
            return view('voyage.user');
    }

    //liste oFFRes

    public function handle()
    {
        $offres = Offre::where('ville', 'meknes')
            ->where('dateDebut', '2000')
            ->where('dateFin', '2020')
            ->get();

            return view('voyage.offres',compact('offres'));
    }
    
}
