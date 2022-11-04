<?php

namespace App\Http\Controllers;

use App\Models\Passanger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pessengerController extends Controller
{
    public function show($id)
    {
        $adat=DB::table('passangers')->select('*')->where('flightsid','=',$id)->get();
        return view('pessanger.show',['adat'=>$adat]);
    }
    
    public function create()
    {
       $flights=$adat=DB::table('flights')->select('*')->get();
       return view('pessanger.create',['adat'=>$adat]);
    }
    public function store(Request $request)
    {
        $s=new Passanger();
        $s->name=request('name');
        $s->pid=request('szemszam');
        $s->bday=request('szuldat');
        $s->flightsid=request('flightid');
        $s->save();

            return redirect('/legitarsasag/listazas');
       
    }
}
