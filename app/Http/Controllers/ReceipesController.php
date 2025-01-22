<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReceipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $recipes = Recipes::all();
        return view('dashboard', [
            'recipes' => $recipes,
            'title' => 'My Recipes'
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi|max:20480',
        ]);
    
        $recipe = new Recipes();
        $recipe->title = $request->title;
        $recipe->paragraph = $request->paragraph;
        $recipe->user_id = auth()->id();
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Store the image temporarily in the `storage/app/public/recipe-images` directory
            $imagePath = $request->file('image')->store('recipe-images', 'public');
    
            // Get the original file name
            $imageName = $request->file('image')->getClientOriginalName();
    
            // Copy the image to the `public/recipe-img` directory
            $publicPath = public_path('recipe-img');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0777, true); // Create the directory if it doesn't exist
            }
    
            // Move the file
            copy(storage_path('app/public/' . $imagePath), $publicPath . '/' . $imageName);
    
            // Save the image path for database reference
            $recipe->image = 'recipe-img/' . $imageName;
        }
    
        // Handle video upload
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('recipe-videos', 'public');
            $recipe->video = $videoPath;
        }
    
        $recipe->save();
    
        return redirect()->route('dashboard.cookbook')->with('success', 'Recipe created successfully!');
    }
    

    public function destroy(Recipes $recipe)
    {
        $recipe = Recipes::findOrFail($recipe->id);

        $recipe->delete();

        return redirect()->route('dashboard.cookbook')->with('success', 'Recipe deleted successfully.');
    }
}
