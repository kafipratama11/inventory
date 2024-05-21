<?php

namespace App\Http\Controllers;

use App\Models\detail_transaction;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transactions;
use App\Models\Products;
use App\Models\categories;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
{
    public function show_transaction(Request $request){
        $transactions = Transactions::with(['dtransactions.product'])->get();
        $products = Products::all();
        
        return view('operator.purchase', compact('transactions', 'products'));
    }
}