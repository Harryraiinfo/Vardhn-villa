<?php

namespace App\Http\Controllers;

use App\Models\FoodBill;
use Illuminate\Http\Request;

class FoodBillController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        foreach ($request->item ?? [] as $item) {
            if (!empty($item['item']) && $item['qty'] > 0) {
                FoodBill::create([
                    'booking_id' => $request->booking_id,
                    'item' => $item['item'],
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
