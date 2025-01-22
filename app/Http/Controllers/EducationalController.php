<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationalController extends Controller
{
    public function index()
    {
        return view('layouts.user', ['section' => 'educational']);
    }
}
