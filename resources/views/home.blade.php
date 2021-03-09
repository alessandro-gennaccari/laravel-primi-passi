<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    
        <h1>{{ $title }}</h1>

        <ul>
            @foreach ($concetti as $concetto)
            <li>
                <a href="config">{{ $concetto }}</a>
            </li>
            @endforeach
        </ul>

    </body>
</html>
