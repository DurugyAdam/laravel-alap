<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Első</title>
</head>
<body>
<h1>Főoldal</h1>
<ul>
    <li><a href="/hello">Hello</a></li>
    <li><a href="<?= route('hello')?>">Hello</a></li>
    <li><a href="<?= route('hello-nev',["nev" => "Emese"])?>">Szia Emese</a></li>
    <li><a href="<?= route('hello-nev',["nev" => "Endre"])?>">Szia Endre</a></li>
    <li><a href="{{route('hello')}}">Szia</a></li>
    <li><a href="{{route('hello-nev',["nev" => "Endre"])}}">Szia Endre</a></li>
</ul>
</body>
</html>