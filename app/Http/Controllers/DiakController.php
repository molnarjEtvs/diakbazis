<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diak;
use App\Models\Telepules;
class DiakController extends Controller
{
    public function index(Request $req){

        //$diakok = Diak::with('nyelvek')->get();

        $query = Diak::query();

        if($req->filled('nev')){
            $query->where('nev','like','%'.$req->input('nev').'%');
        }

        if($req->filled('szuletesi_datum')){
            $query->where('szuletesi_datum',$req->input('szuletesi_datum'));
        }

        if($req->filled('t_id')){
            $query->where('t_id',$req->input('t_id'));
        }

        $query->orderBy('d_id','DESC');
        $diakok = $query->get();

        $telepulesek = Telepules::all();

        return view("welcome",['diakok' => $diakok,"telepulesek" => $telepulesek]);
    }
}
