<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        $boards = Bb::latest()->get();

        return view('board.index', compact('boards'));
    }

    public function show(Bb $board) {
        return view('board.show', compact('board'));
    }
}
