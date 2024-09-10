<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the Game</title>
</head>
<body>
<h1>Welcome to the Text-Based Adventure Game</h1>
<p>Click the button below to start your adventure!</p>

<!-- Start Adventure Button -->
<a href="{{ route('game.scene', ['id' => 1]) }}">
    <button>Start Adventure</button>
</a>

<!-- Instructions Button -->
<a href="{{ route('game.start', ['show_instructions' => 'true']) }}">
    <button>Show Instructions</button>
</a>

<!-- Instructions Section -->
@if (request('show_instructions') === 'true')
    <div id="instructions">
        <h2>Game Instructions</h2>
        <p>Welcome to my adventure game! Here’s how to play:</p>
        <ul>
            <li><strong>Start:</strong> Click the "Start Adventure" button to begin.</li>
            <li><strong>Choices:</strong> Make choices that will affect the outcome of the story.</li>
            <li><strong>Hints:</strong> Request hints if you need help.</li>
            <li><strong>Goal:</strong> Explore the story and see where your choices lead you.</li>
        </ul>
    </div>
@endif
</body>
</html>
