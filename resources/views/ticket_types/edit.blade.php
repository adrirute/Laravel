<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('ticket_types.update', ['ticket_type' => $ticket_type ->id]) }}" method="post">
        @csrf
        {{method_field('PUT')}}
        <label for="">Type</label>
        <input type="text" name="type" id="type" value="{{$ticket_type->type}}"><br><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>