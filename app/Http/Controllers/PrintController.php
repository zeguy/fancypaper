<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    //
    public function create()
    {
        return view('prints.create')->with([
            'message' => session('message')
        ]);
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'artist' => 'required',
            'printName' => 'required',
            'cost' => 'required|min:0|numeric'
        ]);
        
        $artist = $request->input('artist');

        return redirect('/prints/create')->with([
            'message' => 'Your print '.$artist.' was added.'
        ]);
    }

}
