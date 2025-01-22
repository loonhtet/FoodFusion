<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CookBookController extends Controller
{
   public function index()
    {
        $recipes = Recipes::all();
        return view('layouts.user', [
            'section' => 'cookbook',
            'recipes' => $recipes,
        ]);
    }
}

?>