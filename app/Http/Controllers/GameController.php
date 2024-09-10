<?php

// app/Http/Controllers/GameController.php
namespace App\Http\Controllers;

use App\Models\Scene;
use App\Models\Hint;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function showStartPage(Request $request)
    {
        return view('game.start', ['showInstructions' => $request->query('show_instructions') === 'true']);
    }

    public function showScene($id)
    {
        $scene = Scene::with('choices')->findOrFail($id);
        return view('game.index', compact('scene')); // Change 'adventure.index' to 'game.index'
    }


    public function showHint($scene_id)
    {
        $hint = Hint::where('scene_id', $scene_id)->first();
        return response()->json(['hint' => $hint ? $hint->hint : 'No hint available for this scene.']);
    }
}

