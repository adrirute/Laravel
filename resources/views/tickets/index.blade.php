<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
</head>
<body>

    <h1>Page Tickets</h1>
    <table>
        <thead>
            <th>Date</th>
            <th>Price</th>
            <th>Train Name</th>
            <th>Ticket Type</th>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{$ticket -> date}}</td>
                    <td>{{$ticket -> price}}</td>
                    <td>{{$ticket -> train -> name}}</td>
                    <td>{{$ticket -> ticket_type -> type}}</td>
                    <td>
                        <form action="{{ route('tickets.show', ['ticket' => $ticket->id]) }}" method="get">
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