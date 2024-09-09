<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avontuur Starten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center mt-5">
    <div class="container">
        <h1>Welkom bij het Avontuur!</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <p>Klik op de knop hieronder om je avontuur te beginnen.</p>


        <form method="POST" action="{{ route('game.instructions') }}">
            @csrf
            <button type="submit" class="btn btn-success btn-lg">Show instructions</button>
        </form>

        <form method="POST" action="{{ route('game.start') }}">
            @csrf
            <button type="submit" class="btn btn-success btn-lg">Start Avontuur</button>
        </form>
    </div>
</body>
</html>
