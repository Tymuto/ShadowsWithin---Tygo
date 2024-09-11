<!DOCTYPE html>
<html>
<head>
    <title>{{ $scene->title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>{{ $scene->title }}</h1>
    <p>{{ $scene->description }}</p>

    <h2>What will you do?</h2>
    <ul>
        @foreach($scene->choices as $choice)
            <li><a href="{{ route('game.scene', $choice->next_scene_id) }}">{{ $choice->text }}</a></li>
        @endforeach
    </ul>

    <!-- Save Progress Button -->
    <a href="{{ route('game.saveProgress', ['scene_id' => $scene->id]) }}">
        <button>Save Progress</button>
    </a>

    <button id="hintButton">Get a Hint</button>
    <p id="hint"></p>

    <script>
        document.getElementById('hintButton').addEventListener('click', function() {
            fetch(`/game/{{ $scene->id }}/hint`, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('hint').innerText = data.hint;
                });
        });
    </script>
</body>
</html>
