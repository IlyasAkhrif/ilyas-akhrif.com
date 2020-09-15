<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project.index');
    }

    public function show($id)
    {
        return view('project.show');

    }
}
