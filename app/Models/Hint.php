<?php

// app/Models/Hint.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hint extends Model
{
    use HasFactory;

    protected $fillable = ['scene_id', 'hint'];

    public function scene()
    {
        return $this->belongsTo(Scene::class);
    }
}

