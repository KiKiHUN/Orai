<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirlinesController extends Controller
{
    public function postcreate()
    {
        return view("airlines.create");
    }
    public function store(Request $request)
    {
        $s=new Airlines();
        $s->name=request('name');
        $s->origin=request('origin');
        $s->save();
/*
        Airlines::create(
            [
                'name'=>request("name"),
                'origin'=>request("origin")
            ]
            );
*/
        
        $adat=DB::select('Select * from airlines');
        return view ('airlines.show',compact('adat'));
    }

}
