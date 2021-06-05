<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Projekcija;
use Illuminate\Http\Request;

class BioskopController extends Controller
{
    public function all()
    {
        $filmovi = Film::all();

        return view('bioskop', [
            'filmovi' => $filmovi
        ]);

    }

    public function view($f_id)
    {
        $film = Film::findOrFail($f_id);
        $projekcije = Projekcija::all();
        $prikazivanja = [];
        foreach ($projekcije as $projekcija) {
            if ($projekcija->film_id == $f_id) {
                $prikazivanja[count($prikazivanja)] = $projekcija;
            }
        }
       $film->projekcije = $prikazivanja;
        return view('film', ['film' => $film]);

    }

    public function save(Request $request)
    {

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'naziv' => 'required|min:2',
            'slika' => 'required|min:2',
            'zanr' => 'required|min:2',
            'glumci' => 'required|min:2',
            'reziser' => 'required|min:2',
            'sadrzaj' => 'required|min:2',
            'url' => 'required|min:2',

        ]);

        if ($validator->fails()) {
            return response()->json(["message" => "Sva polja su obavezna"], 400);
        }
        $film = Film::create($request->all());
        return response()->json($film, 201);
    }

    public function delete(Request $request, $id)
    {
        $film = Film::find($id);

        if (is_null($film)) {
            return response()->json(["message" => "Film doesn't exist"], 404);
        }

        $film->delete();
        return response()->json(null, 204);
    }

    public function getAll()
    {
        $filmovi = Film::all();
        $projekcije = Projekcija::all();
        foreach ($filmovi as $film) {
            $prikazivanja = [];
            foreach ($projekcije as $projekcija) {
                if ($projekcija->film_id == $film->id) {
                    $prikazivanja[count($prikazivanja)] = $projekcija;
                }
            }

            $film->projekcije = $prikazivanja;
        }

        return response()->json($filmovi, 200);
    }

    public function getById($id)
    {
        $film = Film::find($id);
        $projekcije = Projekcija::all();
        if (is_null($film)) {
            return response()->json(["message" => "Film doesn't exist"], 404);
        }
        $prikazivanja = [];
        foreach ($projekcije as $projekcija) {
            if ($projekcija->film_id == $film->id) {
                $prikazivanja[count($prikazivanja)] = $projekcija;
            }
        }

        $film->projekcije = $prikazivanja;
        return response()->json($film,200);
    }
}
