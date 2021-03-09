<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Come installarlo</title>
</head>
<body>

    <button><a href="/">Home</a></button>
    <button><a href="start">Start</a></button>

    <h1>{{ $title }}</h1>
    
    <ol>
        @foreach ($steps as $step)
        <li>{{ $step }}</li>
        @endforeach
        <li>
            <ul>
                @foreach ($commands as $command)
                <li>{{ $command }}</li>
                @endforeach
            </ul>
        </li>
    </ol>

</body>
</html>