<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Logger\ConsoleLogger;

class citycontroller extends Controller
{
    public function mutat()
    {
        $adat=DB::select('Select * from cities');
        error_log('Some message here.');
        return view ('cities.show',compact('adat'));
    }
    public function postcreate()
    {
        return view("cities.create");
    }
    public function store(Request $request)
    {
        $s=new City();
        $s->name=request('name');
        $s->save();
/*
        Airlines::create(
            [
                'name'=>request("name"),
                'origin'=>request("origin")
            ]
            );
*/
        return redirect('/varos/listazas');
    }
    

}
