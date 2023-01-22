<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars - Detail</title>
</head>
<body>
    ID: {{$car->id}} <br>
    Model: {{$car->model}} <br>
    Year: {{$car->year}} <br>
    Date Created: {{$car->created_at}} <br>
    Update Created: {{$car->updated_at}} <br>

    <br>
    <br>
    <a href="/car">Back..</a> | <a onclick="confirm('Delete this data ?')" href="/car/delete/{{$car->id}}">DELETE</a> | <a href="/car/edit/{{$car->id}}">Edit</a>
</body>
</html>
