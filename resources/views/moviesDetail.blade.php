<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettagli film</title>
</head>
<body>
    <div class="container">
        <h1>{{ $movies->id }}</h1>
        <h1>{{ $movies->title }}</h1>
        <h1>{{ $movies->original_title }}</h1>
        <h1>{{ $movies->nationality }}</h1>
        <h1>{{ $movies->date }}</h1>
        <h1>{{ $movies->vote }}</h1>

    </div>
</body>
</html>
