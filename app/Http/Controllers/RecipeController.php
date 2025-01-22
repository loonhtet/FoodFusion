<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Models\Ingredient;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RecipeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'paragraph' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20480',
            'ingredients' => 'required|array|min:1',
            'ingredients.*' => 'required|string|max:255',
            'quantities' => 'required|array|min:1',
            'quantities.*' => 'required|string|max:255',
            'instructions' => 'required|array|min:1',
            'instructions.*' => 'required|string'
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($request->title) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('recipe-img'), $imageName);
            $imagePath = 'recipe-img/' . $imageName;
        }

        // Handle video upload
        $videoPath = null;
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('recipes', 'public');
        }

        // Create recipe with default empty string for paragraph if null
        $recipe = Recipes::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'paragraph' => $request->paragraph ?? '',
            'image' => $imagePath,
            'video' => $videoPath,
        ]);

        // Create ingredients
        foreach ($request->ingredients as $index => $ingredient) {
            Ingredient::create([
                'recipe_id' => $recipe->id,
                'name' => $ingredient,
                'quantity' => $request->quantities[$index],
            ]);
        }

        // Create instructions
        foreach ($request->instructions as $index => $step) {
            Instruction::create([
                'recipe_id' => $recipe->id,
                'step' => $step,
                'order' => $index + 1,
            ]);
        }

        return redirect()->back()->with('success', 'Recipe created successfully!');
    }
}
