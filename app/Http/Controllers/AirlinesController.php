<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirlinesController extends Controller
{
    public function destroy($airlineID)
    {
        Airlines::destroy($airlineID);
        return redirect('legitarsasag/listazas');
    }

    public function update($airlineID)
    {
        DB::table('airlines')->where('id' , $airlineID)->update([
            'name' => request('name'),
            'origin' => request('origin')
         ]);
        return redirect('legitarsasag/listazas');
    }

    public function edit($airlineID)
    {
        $adat=DB::table('airlines')->select('*')->where('id','=',$airlineID)->first();
        return view ('airlines.edit',['adat'=>$adat]);
    }

    public function mutat()
    {
        $adat=DB::select('Select * from airlines');
        return view ('airlines.show',compact('adat'));
    }

    public function postcreate()
    {
        return view("airlines.create");
    }

    public function store(Request $request)
    {
        $s=new Airlines();
        if (request("name")=="") {
           echo("kötelező nevet megadni");
        }elseif(request("origin")=="")
        {
            echo("kötelező várost megadni");
        }else{
            if(strlen(request("name"))<4 || strlen(request("origin"))<4)
            {
                echo("nem lehet kevesebb mint 5 karakter");
            }else{
                $s->name=request('name');
                $s->origin=request('origin');
                $s->save();
                echo "sikeres tárolás";
                   // return redirect('/legitarsasag/listazas');
            }

        }
    }

    public function szures($request)
    {
        $adat=DB::table('flights')->select('*')->where('airlinid','=',$request)->get();
        return view('airlines.szures',['adat'=>$adat]);
    }

}
