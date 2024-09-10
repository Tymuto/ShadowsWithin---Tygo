<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the Game</title>
</head>
<body>
<h1>Welcome to the Text-Based Adventure Game</h1>
<p>Click the button below to start your adventure!</p>

<a href="{{ route('game.scene', ['id' => 1]) }}">
    <button>Start Adventure</button>
</a>
</body>
</html>
