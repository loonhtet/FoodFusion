<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Ingredient;
use App\Models\Instruction;

class Recipes extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = ['user_id', 'title', 'paragraph', 'image', 'video'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }

    public function instructions()
    {
        return $this->hasMany(Instruction::class, 'recipe_id');
    }
}
