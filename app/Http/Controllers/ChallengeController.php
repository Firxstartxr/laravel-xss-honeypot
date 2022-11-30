<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChallengeController extends Controller
{
    public function logInfo(Request $request)
    {

        return [$request->user()->name, $request->ip(), $request->userAgent(), $request->url()];
    }

    public function challenge1(Request $request)
    {
        $challenge=$request->challenge1;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");

            return view('challenges/challenge-1-solved')->with(compact('challenge'));
        }
    }

    public function challenge2(Request $request)
    {
        $challenge=$request->challenge2;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");

            if (!str_contains($challenge, '<script>')) {
                return view('challenges/challenge-2-solved')->with(compact('challenge'));
            }
        }
    }

    public function challenge3(Request $request)
    {
        $challenge=$request->challenge3;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");

            return view('challenges/challenge-3-solved')->with(compact('challenge'));
        }
    }
}
