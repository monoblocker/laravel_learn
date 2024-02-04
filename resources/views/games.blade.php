<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
</head>
<body>
    @foreach($games as $game)
        <div>
            <h1>
                {{$game->title}}
            </h1>
            <p>
                {{$game->description}}
            </p>
        </div>
    @endforeach
</body>
</html>
