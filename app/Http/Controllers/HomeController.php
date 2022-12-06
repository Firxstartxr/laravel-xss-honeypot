<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        return view('home');
    }

    public function profile(): Factory|View|Application
    {
        return view('profile');
    }

    public function upload(Request $request): RedirectResponse
    {
        $file = $request->file('image');
        $mimeType = $file->getMimeType();
        if ($mimeType == 'image/jpeg' || $mimeType == 'image/png') {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        } else {
            return redirect("https://www.youtube.com/watch?v=xvFZjo5PgG0");
        }
        return redirect()->back();
    }

    public function challenge1(): Factory|View|Application
    {
        $challenge = '';
        return view ('challenges/challenge-1')->with(compact('challenge'));
    }

    public function challenge2(): Factory|View|Application
    {
        $challenge = '';
        return view ('challenges/challenge-2')->with(compact('challenge'));
    }

    public function challenge3(): Factory|View|Application
    {
        $challenge =' ';
        return view ('challenges/challenge-3')->with(compact('challenge'));
    }

    public function challenge4(): Factory|View|Application
    {
        $challenge =' ';
        return view ('challenges/challenge-4')->with(compact('challenge'));
    }

    public function challenge5(): Factory|View|Application
    {
        $challenge =' ';
        return view ('challenges/challenge-5')->with(compact('challenge'));
    }

    public function admin(): Factory|View|Application
    {
        return view ('admin');
    }
}
