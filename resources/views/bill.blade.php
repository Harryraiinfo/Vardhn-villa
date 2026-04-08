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

            <table class="table table-bordered table-hover align-middle text-nowrap ">

                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>No. of Rooms</th>
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
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-end py-3 pe-4">
                            <b>Grand Total: ₹{{ $booking->price * $days }}</b>
                        </td>
                    </tr>
                </tfoot>

            </table>

            <br>

            <div class="bill-container">
                <h4 class="text-start mb-4">🍽 Food Billing </h4>

                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="billTable">
                        <thead class="table-dark">
                            <tr>
                                <th>S. No </th>
                                <th>Item Name </th>
                                <th>Price (₹)</th>
                                <th>Qty</th>
                                <th>Total (₹)</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="tableBody">
                            <tr>
                                <td class="sno">1</td>
                                <td><input type="text" placeholder="Food Name"></td>
                                <td><input type="number" class="price" value="0"></td>
                                <td><input type="number" class="qty" value="0"></td>
                                <td class="rowTotal">0</td>
                                <td><button class="btn btn-danger btn-sm deleteRow">X</button></td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <!-- Buttons -->
                                    <div class="d-flex justify-content-between mt-3 px-3">
                                        <button class="btn btn-primary" onclick="addRow()">➕ Add Item</button>
                                        <div class="total-box"><b>Grand Total: ₹ <span id="grandTotal">0</span></b></div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-end">
                <a href="{{ route('bill.pdf', $booking->id) }}" class="btn btn-warning">
                    Download PDF
                </a>
            </div>
        </div>
    </div>

</div>
<script>
    function updateSerialNumbers() {
        let rows = document.querySelectorAll("#tableBody tr");
        rows.forEach((row, index) => {
            row.querySelector(".sno").innerText = index + 1;
        });
    }

    function addRow() {
        let row = `
        <tr>
            <td class="sno"></td>
            <td><input type="text" placeholder="Food Name"></td>
            <td><input type="number" class="price" value="0"></td>
            <td><input type="number" class="qty" value="1"></td>
            <td class="rowTotal">0</td>
            <td><button class="btn btn-danger btn-sm deleteRow">X</button></td>
        </tr>`;

        document.getElementById("tableBody").insertAdjacentHTML("beforeend", row);

        updateSerialNumbers(); // 🔥 update after adding
    }

    // Auto calculate total
    function calculateTotal() {
        let rows = document.querySelectorAll("#tableBody tr");
        let grandTotal = 0;

        rows.forEach(row => {
            let price = row.querySelector(".price").value || 0;
            let qty = row.querySelector(".qty").value || 0;

            let total = price * qty;
            row.querySelector(".rowTotal").innerText = total;

            grandTotal += total;
        });

        document.getElementById("grandTotal").innerText = grandTotal;
    }

    document.addEventListener("input", function() {
        calculateTotal();
    });
    // Delete row
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("deleteRow")) {
            e.target.closest("tr").remove();

            updateSerialNumbers(); // 🔥 update after delete
            calculateTotal();
        }
    });
</script>

@endsection