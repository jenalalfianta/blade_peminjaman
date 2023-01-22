<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car - Create</title>
</head>
<body>
    <form action="/car/edit/save/{{$car->id}}" method="Post">
        @csrf
        @method('patch')
        <label for="model">Model Name</label>
        <input type="text" name="model" id="" value="{{$car->model}}" required>
        <br>
        <br>
        <label for="year">Year</label>
        <input type="number" name="year" id="" value="{{$car->year}}" required>
        <br>
        <br>
        <button >Save</button>
    </form>
</body>
</html>
