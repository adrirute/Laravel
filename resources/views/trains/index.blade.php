<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>
<body>

    <h1>Pagina de Trenes</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Passengers</th>
            <th>Year</th>
            <th>Train Type</th>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train -> name}}</td>
                    <td>{{$train -> passengers}}</td>
                    <td>{{$train -> year}}</td>
                    <td>{{$train -> train_type -> type}}</td>
                    <td>
                        <form action="{{ route('trains.show', ['train' => $train->id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trains.edit', ['train' => $train->id]) }}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="trains.destroy" method="post">
                            @csrf

                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>




  
</body>
</html>