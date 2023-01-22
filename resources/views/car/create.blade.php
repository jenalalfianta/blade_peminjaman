<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car - Create</title>
</head>
<body>
    <form action="/car/create/save" method="post">
        @csrf
        <label for="model">Model Name</label>
        <input type="text" name="model" id="" required>
        <br>
        <br>
        <label for="year">Year</label>
        <input type="number" name="year" id="" required>
        <br>
        <br>
        <button >Save</button>
    </form>
</body>
</html>
