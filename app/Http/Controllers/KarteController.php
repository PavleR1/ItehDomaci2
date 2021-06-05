<?php

namespace App\Http\Controllers;

use App\Models\Karta;
use Illuminate\Http\Request;

class KarteController extends Controller
{
    public function create(Request $request){
        $karta= new Karta();
        $karta->ime=$request->ime;
        $karta->prezime=$request->prezime;
        $karta->broj_osoba=$request->broj_osoba;
        $karta->email=$request->email;
        $karta->projekcija_id=$request->projekcija_id;
        $karta->save();
        return redirect('/'.$request->id);
    }
    public function getAll(){
        return response()->json(Karta::all(),200);

    }
    public function getById($id){
        $karta=Karta::find($id);
        if(is_null($karta)){
            return response()->json(["message"=>"Ne postoji data karta"],404);
        }
        return response()->json($karta,200);
    }

}
