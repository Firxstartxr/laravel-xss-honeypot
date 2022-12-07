<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $sessions = Session::all();

        return view('admin', compact('users', 'sessions'));
    }

    public function admin (User $user) {
        $enabled = request()->input('enable', 0);
        $disabled = request()->input('disable', 0);

        if ($enabled) {
            $user->update(['status' => 1]);
        } else if ($disabled) {
            $user->update(['status' => 0]);
        }

        return redirect()->back();
    }

}
