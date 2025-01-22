<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Get total counts
        $totalUsers = User::where('role', 'user')->count();
        $totalChefs = User::where('role', 'chef')->count();
        $totalRecipes = Recipe::count();
        $totalReviews = Review::count();

        // Get popular recipes with their ratings and reviews
        $popularRecipes = Recipe::with(['user', 'reviews'])
            ->select('recipes.*', DB::raw('AVG(reviews.rating) as avg_rating'))
            ->leftJoin('reviews', 'recipes.id', '=', 'reviews.recipe_id')
            ->groupBy('recipes.id')
            ->orderByDesc('avg_rating')
            ->take(5)
            ->get()
            ->map(function ($recipe) {
                $recipe->rating = round($recipe->avg_rating, 1) ?? 0;
                $recipe->image_url = $recipe->image ?? 'images/default-recipe.jpg';
                return $recipe;
            });

        // Mock recent activities (since we don't have an activities table)
        $recentActivities = collect([
            [
                'icon' => 'fa-utensils',
                'type_color' => 'bg-primary/10',
                'description' => 'New recipe "Spicy Chicken Curry" was added',
                'created_at' => now()->subHours(2),
            ],
            [
                'icon' => 'fa-user-plus',
                'type_color' => 'bg-secondary/10',
                'description' => '5 new users registered today',
                'created_at' => now()->subHours(4),
            ],
            [
                'icon' => 'fa-star',
                'type_color' => 'bg-accent/10',
                'description' => '12 new reviews received',
                'created_at' => now()->subHours(6),
            ],
            [
                'icon' => 'fa-edit',
                'type_color' => 'bg-deep/10',
                'description' => 'Recipe "Chocolate Cake" was updated',
                'created_at' => now()->subHours(8),
            ],
        ])->map(function ($activity) {
            $activity['created_at'] = $activity['created_at']->diffForHumans();
            return (object) $activity;
        });

        return view('layouts.admin', [
            'slot' => view('components.admin.sections.dashboard', compact(
                'totalUsers',
                'totalChefs',
                'totalRecipes',
                'totalReviews',
                'popularRecipes',
                'recentActivities'
            ))
        ]);
    }
}
