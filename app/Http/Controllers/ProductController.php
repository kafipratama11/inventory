<?php

namespace App\Http\Controllers;

use App\Models\detail_transaction;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transactions;
use App\Models\Categories;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create_product(Request $request){
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_merk' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'description' => 'nullable|string',
            'categoryID' => 'required|integer|exists:categories,categoryID'
        ]);
        Products::create($request->all());
        return redirect()->back()->with('success', 'Product created successfully.');
    }
}