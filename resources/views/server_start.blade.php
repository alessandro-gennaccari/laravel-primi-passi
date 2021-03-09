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
    <button><a href="config">Installation</a></button>

    <h1>{{ $title }}</h1>
    
    <ul>
        @foreach ($init as $value)
        <li>{{ $value }}</li>
        @endforeach
    </ul>

</body>
</html>