<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
<div class='container'>
    <h1>{{$comics['title']}}</h1>
</div>
<div class='d-flex'>
    <figure>
        <img src="{{$comics['thumb']}}" alt="">
    </figure>
    <div class='gap'>
        <p>{{$comics['description']}}</p>
        <div class='d-flex'>
            <h3>{{$comics['sale_date']}}</h3>
            <h3>{{$comics['series']}}</h3>
            <h3>{{$comics['type']}}</h3>
            <h3>{{$comics['price']}}</h3>
        </div>
    </div>
</div>
</body>
{{-- ricordati di dinamicizzare l'index --}}
</html>