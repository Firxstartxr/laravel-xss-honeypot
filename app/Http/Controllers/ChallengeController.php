<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChallengeController extends Controller
{
    public function challenge1(Request $request)
    {
        $challenge=$request->challenge1;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $request->user()->name;
            $ip = $request->ip();
            $url = $request->url();
            Log::alert("The user $user used $challenge payload from IP address $ip url $url");

            return view('challenges/challenge-1-solved')->with(compact('challenge'));
        }
    }

    /*public function challenge2(Request $request)
    {
        $challenge=$request->challenge2;

        return view('challenges/challenge-2-solved')->with(compact('challenge'));
    }*/
}
