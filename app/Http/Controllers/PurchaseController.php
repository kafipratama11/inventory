<?php

namespace App\Http\Controllers;

use App\Models\detail_transaction;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transactions;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function create_transaction(Request $request){
        $request->validate([
            'transaction_date' => 'required|date',
            'total_payment' => 'nullable|numeric',
        ]);
        Transactions::create($request->all());
        return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function create_detail_transaction(Request $request)
    {
        $request->validate([
            'transactionID' => 'required|integer',
            'productID' => 'required|integer',
            'amount' => 'required|integer',
        ]);

        detail_transaction::create([
            'transactionID' => $request->transactionID,
            'productID' => $request->productID,
            'amount' => $request->amount,
        ]);

        return redirect()->back()->with('success', 'item berhasil ditambahkan.');
    }
}