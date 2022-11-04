<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pessengerController extends Controller
{
    public function show($id)
    {
        $adat=DB::table('passangers')->select('*')->where('flightsid','=',$id)->get();
        return view('pessanger.show',['adat'=>$adat]);
    }
}
