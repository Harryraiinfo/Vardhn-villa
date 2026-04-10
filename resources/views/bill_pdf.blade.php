<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: DejaVu Sans;
            color: #333;
        }

        .header {
            text-align: center;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #d4a017;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #000;
            color: #fff;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .total {
            text-align: right;
            font-size: 18px;
            margin-top: 20px;
        }

        .section-title {
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
        }

        .food-bill {
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <table width="100%" style="margin-bottom: 30px; border-style:none;">
        <tr>
            <!-- LEFT: Logo -->
            <td style="text-align: left; width: 30%; border-style:none;">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('Images/logo.png'))) }}" width="100">
            </td>

            <!-- CENTER: Title -->
            <td style="text-align: center; width: 40%; border-style:none;">
                <div style="font-size: 22px; font-weight: bold; color: #d4a017;">
                    Vardhn Villa
                </div>
                <div>Customer Invoice</div>
            </td>

            <!-- RIGHT: Date & Time -->
            <td style="text-align: right; width: 30%; font-size: 12px; border-style:none;">
                Date: {{ now()->format('d-m-Y') }}<br>
                Time: {{ now()->format('H:i') }}
            </td>
        </tr>
    </table>

    <p>
        Name: <b>{{ $booking->name }}</b> <br>
        Email: <b>{{ $booking->email }}</b> <br>
        Mobile: <b>{{ $booking->mobile }}</b>
    </p>

    <div class="section-title">Room Billing</div>

    <table>
        <tr>
            <th>Rooms</th>
            <th>Days</th>
            <th>Price</th>
            <th>Total</th>
        </tr>

        <tr>
            <td>{{ $booking->rooms }}</td>
            <td>{{ $days }}</td>
            <td>₹{{ $booking->price }}</td>
            <td>₹{{ $booking->price  }}</td>
        </tr>
    </table>

    <div class="section-title">Food Billing</div>
    <div class="food-bill">

        <table>
            <tr>
                <th>S. No </th>
                <th>Item</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>

            @php $foodTotal = 0; @endphp

            @foreach($foodItems as $key => $item)
            @php
            $rowTotal = $item->price * $item->qty;
            $foodTotal += $rowTotal;
            @endphp
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->item }}</td>
                <td>₹{{ $item->price }}</td>
                <td>{{ $item->qty }}</td>
                <td>₹{{ $rowTotal }}</td>
            </tr>
            @endforeach

        </table>

        <div class="total">
            <b>Grand Total: ₹{{ $booking->price  + $foodTotal }}</b>
        </div>
    </div>

    <br>

    <div style="position: relative; bottom:0px;">
        <hr style="margin-top: 30px; border: 0; border-top: 1px solid #ccc;">

        <div style="text-align: center; font-size: 12px; color: #777; margin-top: 8px;">
            Thank you for visiting Vardhn Villa
            <br>
            Visit Again
        </div>
    </div>
</body>

</html>