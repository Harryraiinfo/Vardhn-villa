@extends('manager.layout')

@section('content')

<div class="container mt-4">

    <h3>Customer Invoice</h3>

    <div class="card p-4 shadow">

        <h5 class="text-warning">Vardhn Villa</h5>

        <p>

            Name: <b>{{ $booking->name }}</b> <br>
            Email: {{ $booking->email }} <br>
            Mobile: {{ $booking->mobile }} <br>

        </p>

        <div class="table-responsive">

            <table class="table table-hover align-middle text-nowrap ">

                <thead class="">
                    <tr>
                        <th>Name</th>
                        <th>Room</th>
                        <th>Days</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $booking->name }}</td>

                        <td>{{ $booking->rooms }}</td>
                        <td>{{ $days }}</td>
                        <td>₹{{ $booking->price }}</td>
                        <td>₹{{ $booking->price * $days }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end">
                            <b>Total: ₹{{ $booking->price * $booking->days }}</b>
                        </td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table class="table table-hover align-middle text-nowrap ">
                <h4>Food Bill</h4>
                <thead class="">
                    <tr>
                        <th>S. No </th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Net Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>

                        <td>food</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end">
                            <b>Total: ₹0</b>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>

            <a href="{{ route('bill.pdf', $booking->id) }}" class="btn btn-warning">
                Download PDF
            </a>
        </div>
    </div>

</div>

@endsection