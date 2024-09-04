<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'scenes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'parent_id',
        'redirect_id',
        'button_text',
    ];

    /**
     * Get the parent scene for this scene.
     */
    public function parent()
    {
        return $this->belongsTo(Scene::class, 'parent_id');
    }

    /**
     * Get the scene that this one redirects to.
     */
    public function redirect()
    {
        return $this->belongsTo(Scene::class, 'redirect_id');
    }

    /**
     * Get the scenes that are children of this scene.
     */
    public function children()
    {
        return $this->hasMany(Scene::class, 'parent_id');
    }
}
