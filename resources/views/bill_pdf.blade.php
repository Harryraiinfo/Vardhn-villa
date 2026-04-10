<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #333;
            padding: 20px;
        }

        .invoice-box {
            border: 1px solid #ddd;
            padding: 20px;
        }

        .top-section {
            width: 100%;
            margin-bottom: 15px;
        }

        .top-section td {
            vertical-align: top;
        }

        .title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .company {
            font-weight: bold;
            font-size: 14px;
        }

        .right {
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 6px;
            text-align: center;
        }

        .table th {
            background: #f5f5f5;
        }

        .no-border td {
            border: none;
        }

        .total {
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            font-size: 11px;
        }

        .signature {
            margin-top: 40px;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="invoice-box">

            <div class="title">INVOICE</div>

            <!-- Top Info -->
            <table class="top-section">
                <tr>
                    <td>
                        <div class="company">VARDHN VILLA</div>
                        Address Line Here <br>
                        <!-- GSTIN: XXXXXXXX <br> -->
                        Phone: 000 000 0000
                    </td>

                    <td class="right">
                        Invoice No: <b> {{ $booking->invoice_no}}</b><br>
                        Date: {{ date('d-m-Y') }}<br>
                        Time: {{ now()->format('H:i') }} <br>
                        State: Punjab
                    </td>
                </tr>
            </table>

            <!-- Customer Info -->
            <table class="top-section">
                <tr>
                    <td>
                        <b>Bill To:</b><br>
                        Customer Name: {{ $booking->name }}<br>
                        Email: {{ $booking->email }} <br>
                        Mobile: {{ $booking->mobile }}
                    </td>

                    <td class="right">
                        <b>Ship To:</b><br>
                        Same as above
                    </td>
                </tr>
            </table>

            <!-- Items Table -->
            <div class="section-title">Room Billing</div>
            <table class="table">
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
                    <td>₹{{ $booking->price }}</td>
                </tr>
            </table>
            <br>

            <div class="section-title">Food Billing</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>S. No </th>
                        <th>Item Description</th>
                        <th>Rate</th>
                        <th>Qty</th>
                        <th>Amount</th>
                    </tr>
                </thead>

                <tbody>
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
                </tbody>
            </table>
            <br>
            <!-- Totals -->
            <table class="top-section">
                <tr>
                    <td></td>
                    <td class="right">
                        Room Total: ₹{{ $booking->price }}<br>
                        Food Total: ₹ {{ number_format($foodTotal, 2) }} <br>
                        <span class="total">
                            <b>Grand Total: ₹{{ $booking->price  + $foodTotal }}</b>
                        </span>
                    </td>
                </tr>
            </table>

            <!-- Footer -->
            <div class="footer">
                <b>Terms & Conditions:</b><br>
                1. Goods once sold will not be taken back.<br>
                2. Subject to jurisdiction.<br><br>

                <b> Thank you for visiting Vardhn Villa</b>
            </div>

            <!-- Signature -->
            <div class="signature">
                Authorized Signatory
            </div>

        </div>
    </div>
    <!-- <p style="text-align: center; padding-top:5px;">Visit Again</p> -->
</body>

</html>