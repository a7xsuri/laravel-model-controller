<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    .row{
        display:flex;
        flex-wrap:wrap;
    }
    .card{
        width:20%
    }
</style>
    <div class="row">
    @foreach ($movies as $movie)
    <div class="card">
        <h2>{{$movie->title}}</h2>
        <p>{{$movie->nationality}}</p>
        <p>{{$movie->date}}</p>
        <p>{{$movie->vote}}</p>
    </div>
    
    @endforeach
    </div>
    
</body>
</html>