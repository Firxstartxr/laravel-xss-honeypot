<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function challenge1(Request $request)
    {
         $challenge=$request->challenge1;

         return view('challenges/challenge-1-solved')->with(compact('challenge'));
    }
}
