<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Picturecontroller extends Controller
{
  public function create()
  {
    return view('pic.create');
  }
  public function store(Request $request)
  {

    $request->validate([
            "file"=>"required|mimes:png,jpg|max:2048"
        ]);

        $save=new Picture();
    if ($request->file()) {
       $renames=time().'_'.rand().$request->file->getClientOriginalName();
       $picture=$request->file('file')->storeAs('kepfeltolt',$renames,'public');
       $save->picturename=$renames;
       $save->filelocation="storage/".$picture;
       $save->save();
    }
    return redirect('kepmegtekintes');
  }
  public function show()
  {
    $keplekeres=DB::table('pictures')->select('*')->get();
    return view('pic.show',compact('keplekeres'));
  }
}
