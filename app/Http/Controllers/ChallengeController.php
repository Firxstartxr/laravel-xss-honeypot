<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChallengeController extends Controller
{
    public function logInfo(Request $request): array
    {

        return [$request->user()->name, $request->ip(), $request->userAgent(), $request->url()];
    }

    public function challenge1(Request $request): Factory|View|Application
    {
        $challenge=$request->challenge1;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");
            if (str_contains($challenge, 'alert')) {
                return view('challenges/challenge-1-solved')->with(compact('challenge'));
            }else {
                return view('challenges/challenge-1')->with(compact('challenge'));
            }
        }
        else {
            return view('challenges/challenge-1')->with(compact('challenge'));
        }
    }

    public function challenge2(Request $request): Factory|View|Application
    {
        $challenge=$request->challenge2;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");

            if (!str_contains($challenge, '<script>')) {
                return view('challenges/challenge-2-solved')->with(compact('challenge'));
            }else {
                return view('challenges/challenge-2')->with(compact('challenge'));
            }
        }
        else {
            return view('challenges/challenge-2')->with(compact('challenge'));
        }
    }

    public function challenge3(Request $request): Factory|View|Application
    {
        $challenge=$request->challenge3;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");

            if (str_contains($challenge, '<canvas')) {
                return view('challenges/challenge-3-solved')->with(compact('challenge'));
            } else {
                return view('challenges/challenge-3')->with(compact('challenge'));
            }
        }
        else {
            return view('challenges/challenge-3')->with(compact('challenge'));
        }
    }

    public function challenge4(Request $request): Factory|View|Application
    {
        $challenge=$request->challenge4;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");

            if (str_contains($challenge, '<figure')) {
                return view('challenges/challenge-4-solved')->with(compact('challenge'));
            } else {
                return view('challenges/challenge-4')->with(compact('challenge'));
            }
        }
        else {
            return view('challenges/challenge-4')->with(compact('challenge'));
        }
    }

    public function challenge5(Request $request): Factory|View|Application
    {
        $challenge=$request->challenge5;
        if(!is_null($challenge) || !blank($challenge))
        {
            $user = $this->logInfo($request);
            Log::alert("The user $user[0] used $challenge payload from IP address $user[1] using $user[2] at $user[3]");

            if (str_contains($challenge, '<article')) {
                return view('challenges/challenge-5-solved')->with(compact('challenge'));
            } else {
                return view('challenges/challenge-5')->with(compact('challenge'));
            }
        }
        else {
            return view('challenges/challenge-5')->with(compact('challenge'));
        }
    }
}
