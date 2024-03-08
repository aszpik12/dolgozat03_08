<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use Illuminate\Http\Request;

class BejegyzesekController extends Controller
{
    public function index()
    {
        $bejegyzesek = response()->json(Bejegyzesek::all());
        return $bejegyzesek;
    }

    public function index2()
    {
        $data=Bejegyzesek::all();
        return view('bejegyzesek.bejegyzesek',['bejegyzesek'=>$data]);
    }

    public function show($id){
        $bejegyzesek = response()->json(Bejegyzesek::find($id));
        return $bejegyzesek;
    }

    public function store(Request $request){
        $bejegyzesek = new Bejegyzesek();
        $bejegyzesek ->tevekenyseg_id = $request->tevekenyseg_id; 
        $bejegyzesek ->osztaly_id = $request->osztaly_id; 
        $bejegyzesek ->allapot = $request->allapot; 
        $bejegyzesek ->save();
    }
}
