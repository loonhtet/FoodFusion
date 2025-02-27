<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'step', 'order'];

    public function recipe()
    {
        return $this->belongsTo(Recipes::class);
    }
}
