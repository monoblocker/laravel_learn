<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="p-4 bg-gray-900 text-white">
    <header>
        <nav>
            <ul>
                <li><a class="text-3xl font-bold" href="{{route("main.index")}}">Главная</a></li>
            </ul>
        </nav>
    </header>
    @yield("content")
    <footer>
        My socials
    </footer>
</body>
</html>
