<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-3">
                <h1>{{$movie['title']}}</h1>
                <h3>{{$movie['original_title']}}</h3>
                <p>{{$movie['date']}}</p>
                <p>{{$movie['nationality']}}</p>
                <p>{{$movie['vote']}}</p>
            </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>