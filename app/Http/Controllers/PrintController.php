<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function addPrint()
    {
        return "add a print";
    }
}
