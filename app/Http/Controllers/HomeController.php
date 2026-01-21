<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // перенаправляем на логин
        }

        $user = Auth::user();
        $bbs = $user->bbs()->latest()->get();
        $email = $user->email;

        return view('home', compact('bbs', 'email'));
    }
}
