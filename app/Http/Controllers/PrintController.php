<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    //
    public function index()
    {
        return "Show all prints";
    }

    public function addPrint()
    {
        return "add a print";
    }
}
