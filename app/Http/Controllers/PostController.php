<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
   public function show($slug)
   {
        //return view ('post', compact('post'));
        $post=\DB::table('posts')->where('slug',$slug)->first();
        //$s=DB::select('Select * from posts');
        //dd($s);
        return view ('post', compact('post'));
   }
}
