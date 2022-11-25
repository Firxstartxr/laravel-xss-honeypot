<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        try {
            if($request->hasFile('image')){
                $filename = $request->image->getClientOriginalName();
                $request->image->storeAs('images',$filename,'public');
                Auth()->user()->update(['image'=>$filename]);
            }
        } catch (\Exception $e) {
        return redirect()->back();
    }

        return redirect()->back();
    }

    public function challenge1()
    {
        return view ('challenges/challenge-1');
    }

    public function challenge2()
    {
        return view ('challenges/challenge-2');
    }

    public function challenge3()
    {
        return view ('challenges/challenge-3');
    }
}
