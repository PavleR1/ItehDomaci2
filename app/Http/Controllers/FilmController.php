<?php

namespace App\Http\Controllers;

use App\Models\Projekcija;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function view($f_id,$p_id){

        $pieces = explode("/", url()->current());
        $projekcija= Projekcija::findOrFail($pieces[count($pieces)-1]);
        return view('projekcija',['projekcija'=>$projekcija]);

    }
    public function getAll(){
        return response()->json(Projekcija::all(),200);

    }
    public function getById($id){
        $projekcija=Projekcija::find($id);
        if(is_null($projekcija)){
            return response()->json(["message"=>"Data projekcija ne postoji"],404);
        }
        return response()->json($projekcija,200);
    }
    public function save(Request $request){

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'sala'=>'required|min:2',
            'vreme'=>'required',
            'cena'=>'required',
            'film_id'=>'required'
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $projekcija= Projekcija::create($request->all());
        return response()->json($projekcija, 201);
    }
    public function delete(Request $request, $id){
        $projekcija= Projekcija::find($id);

        if(is_null($projekcija)){
            return response()->json(["message"=>"Data projekcija ne postoji"],404);
        }
        $projekcija->delete();
        return response()->json(null,204);
    }
}
