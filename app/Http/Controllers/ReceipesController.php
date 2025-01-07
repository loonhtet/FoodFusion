<?php

namespace App\Http\Controllers;

use App\Models\Receipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReceipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $receipes = Receipes::all();
        return view('users.dashboard', compact('receipes'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'image' => 'nullable|image',
            'video' => 'nullable',
        ]);



        $recipe = new Receipes();
        $recipe->title = $validated['title'];
        $recipe->paragraph = $validated['paragraph'];
    
        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }
    
        if ($request->hasFile('video')) {
            $recipe->video = $request->file('video')->store('videos', 'public');
        }
    
        $recipe->save();
    
        return redirect()->route('dashboard.index')->with('success', 'Recipe created successfully!');
    }

    public function destroy(Receipes $receipe)
    {
        $receipe = Receipes::findOrFail($id);

        // Delete the associated files
        if ($receipe->image && \Storage::exists('public/' . $receipe->image)) {
            \Storage::delete('public/' . $receipe->image);
        }
        if ($receipe->video && \Storage::exists('public/' . $receipe->video)) {
            \Storage::delete('public/' . $receipe->video);
        }

        $receipe->delete();

        return redirect()->route('dashboard.index')->with('success', 'Recipe deleted successfully.');
    }
}
