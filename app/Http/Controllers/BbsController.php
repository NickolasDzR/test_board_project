<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        $bbs = Bb::latest()->get();

        return view('bbs.index', compact('bbs'));
    }

    public function show(Bb $bb) {
        return view('bbs.show', compact('bb'));
    }
}
