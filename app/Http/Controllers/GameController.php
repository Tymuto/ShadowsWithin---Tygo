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

    public function saveProgress(Request $request, $scene_id)
    {
        // Save the current scene ID to session
        $request->session()->put('current_scene', $scene_id);

        // Redirect to start page or show a message
        return redirect()->route('game.start')->with('status', 'Progress saved!');
    }

    public function resumeGame(Request $request)
    {
        // Retrieve the saved scene ID from session
        $scene_id = $request->session()->get('current_scene', 1); // Default to scene 1 if not set

        // Redirect to the scene
        return redirect()->route('game.scene', ['id' => $scene_id]);
    }
}

