<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('cv.index');
    }

    public function show($slug)
    {
        return view('cv.show');
    }
}
