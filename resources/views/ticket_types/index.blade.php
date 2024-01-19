<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>

    <h1>Page Tickets Type</h1>
    <table>
        <thead>
            <th>Ticket Type</th>
        </thead>
        <tbody>
            @foreach ($ticket_types as $ticket_type)
                <tr>
                    <td>{{$ticket_type -> type}}</td>
                    <td>
                        <form action="{{ route('ticket_types.show', ['ticket_type' => $ticket_type->id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <!-- @csrf -->

                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <!-- @csrf -->

                            <input type="submit" value="Editar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</html>