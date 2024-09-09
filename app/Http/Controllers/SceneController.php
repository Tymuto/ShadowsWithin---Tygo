<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  SceneController extends Controller
{
    // Display the start page
    public function index()
    {
        return view('game.index');
    }

    // Handle game start logic
    public function start(Request $request)
    {
        // Logic to start the game (e.g., initializing player session, loading data, etc.)

        // For now, just redirect to a game page or send a response
        return redirect()->route('game.index')->with('status', 'Het avontuur is begonnen!');
    }
    public function instructions(Request $request)
    {
        // Logic to start the game (e.g., initializing player session, loading data, etc.)

        // For now, just redirect to a game page or send a response
        return redirect()->route('game.index')->with('status', 'Press the start game button to start the text based adventure, u will get to see some text and underneath it are buttons u can press to take a path in the story and continue!');
    }
}
