<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>
<body>

    <h1>Page Train Type</h1>
    <table>
        <thead>
            <th>Type</th>
        </thead>
        <tbody>
            @foreach ($train_types as $train_type)
                <tr>
                    <td>{{$train_type -> type}}</td>
                    <td>
                        <form action="{{ route('train_types.show', ['train_type' => $train_type->id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <!-- @csrf -->

                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>




</body>
</html>