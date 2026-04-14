<?php

namespace App\Http\Controllers;
use App\Models\FoodBill;
use Illuminate\Http\Request;

class FoodBillController extends Controller
{

    public function store(Request $request)
    {


        foreach ($request->items as $item) {

            if (!empty($item['name'])) {
                FoodBill::create([
                    'booking_id' => $request->booking_id,
                    'item_name' => $item['name'],
                    'price' => $item['price'],
                    'qty' => $item['qty'],
                    'total' => $item['price'] * $item['qty'],
                    'grand_total' => $request->grand_total,
                ]);
            }
        }
        return back()->with('success', 'Food bill saved successfully!');
    }

    public function index()
    {
        $bills = FoodBill::latest()->get();
        return view('admin.bills', compact('bills'));
    }
}
