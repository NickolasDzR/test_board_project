<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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

    public function create() {
        $bb = new Bb();

        return view('bbs.create', compact('bb'));
    }

    public function store(Request $request) {

        $data = $request->validate([
            'title' => 'required|unique:bbs|max:255',
            'content' => 'required|max:255',
            'price' => 'required|numeric',
        ]);

        Auth::user()->bbs()->create($data);

        return redirect()->route('home');
    }

    public function edit(Bb $bb) {
        return view('bbs.edit', compact('bb'));
    }

    public function update(Request $request, Bb $bb) {

        $data = $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('bbs')->ignore($bb->id),
            ],
            'content' => 'required|max:255',
            'price' => 'required|numeric',
        ]);

        $bb->update($data);

        return redirect()->route('home');
    }

    public function destroy(Bb $bb) {
        $bb->delete();

        return redirect()->route('home');
    }
}
