<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user='KiKi';
    return view('welcome',[
        'name'=>$user
    ]);
});

Route::get('/alma', function () {
    return view('alma');
});


Route::get('/arraytest', function () {
    $tomb=[
        "elso",
        "Masodik",
        "Harmadik"
    ];
    $asd="valami";
    return view('arraytest')->with(['asd'=>$asd,'tomb'=>$tomb]);
});

Route::get('/urllekeres',function()
{
    return view('urllekeres',[
        'ertek'=>request('ertek'),
        'adat'=>request('adat'),
        'alert'=>"<script>let person = prompt('Please enter your name', 'Harry Potter');</script>"
    ]);
});

/*Route::get('/post/{post}', function ($post) {
    $posts=[
        "ez-az-elso"=>"ez az első oldal",
        "ez-a-masodik"=>"Ez a második oldal"
    ];
    if(!array_key_exists($post,$posts)){
        abort(404);
    };
    return view('post',[
        'post'=>$posts[$post] ?? "Nincs ilyen oldal"
    ]);
});*/
Route::get('/posts/{post}',[App\Http\Controllers\PostController::class,'show']);
Route::get('/{nev}',[App\Http\Controllers\PostController::class,'mutat']);

Route::get('/flights/{id}',[App\Http\Controllers\FlightController::class,'show']);
Route::get('/utasok/{utas}',[App\Http\Controllers\pessengerController::class,'show']);

Route::get('/legitarsasag/listazas',[App\Http\Controllers\AirlinesController::class,'mutat']);
Route::get('/legitarsasag/listazas/{legiID}',[App\Http\Controllers\AirlinesController::class,'szures']);
Route::get('/legitarsasag/create',[App\Http\Controllers\AirlinesController::class,'postcreate']);
Route::post('/legitarsasag/store',[App\Http\Controllers\AirlinesController::class,'store']);

Route::get('/varos/listazas',[App\Http\Controllers\citycontroller::class,'mutat']);
Route::get('/varos/create',[App\Http\Controllers\citycontroller::class,'postcreate']);
Route::post('/varos/store',[App\Http\Controllers\citycontroller::class,'store']);

