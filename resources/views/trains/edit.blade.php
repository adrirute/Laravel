<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('trains.update', ['train' => $train -> id]) }}" method="post"></form>
    @csrf
    {{method_field('PUT')}}
    <label for="">Name</label>
    <input type="text" name="name" value="{{$train -> name}}"><br><br>

    <label for="">Passengers</label>
    <input type="number" name="passengers" value="{{$train -> passengers}}"><br><br>

    <label for="">Year</label>
    <input type="number" name="year" value="{{$train -> year}}"><br><br>

    <label for="">Train Type</label>
    <select name="train_type_id" value="{{$train -> train_type_id}}">
        @foreach ($train_types as $train_type)
            <option value="{{$train_type->id}}">{{$train_type->type}}</option>
        @endforeach
    </select>
    <input type="submit" value="Crear" name="">
</body>
</html>