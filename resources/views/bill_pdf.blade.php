<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
        }

        h2 {
            color: #d4a017;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #000;
            padding: 8px;
        }
    </style>
</head>

<body>

    <h2>Vardhn Villa - Invoice</h2>

    <p>
        Name: {{ $booking->name }} <br>
        Email: {{ $booking->email }} <br>
    </p>

    <table>
        <tr>
            <th>Room</th>
            <th>Days</th>
            <th>Price</th>
            <th>Total</th>
        </tr>

        <tr>
            <td>{{ $booking->rooms }}</td>
            <td>{{ $booking->days }}</td>
            <td>{{ $booking->price }}</td>
            <td>{{ $booking->price * $booking->days }}</td>
        </tr>
    </table>

    <h3>Total: ₹{{ $booking->price * $booking->days }}</h3>

</body>

</html>