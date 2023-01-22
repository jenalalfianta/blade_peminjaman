<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    <?php $no=1 ?>
    @foreach ($cars as $car)
    <a style="text-decoration: none; color:black; font-size:2rem;" href="/car/detail/{{$car->id}}">{{$no.'. '.$car->model}}</a><br>
    <?php $no++ ?>
    @endforeach
</body>
</html>
