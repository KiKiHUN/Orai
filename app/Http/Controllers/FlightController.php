<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    function show($id)
    {
        $flight=Flight::findOrFail($id);
        return view('flights.show',['flight'=>$flight]);
    }
    
}
