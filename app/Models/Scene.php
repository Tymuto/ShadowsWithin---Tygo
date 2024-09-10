<?php

// app/Models/Scene.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function hint()
    {
        return $this->hasOne(Hint::class);
    }
}

