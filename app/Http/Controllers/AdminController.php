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

class AdminController extends Controller
{
    public function show_transaction(Request $request){
        $transactions = Transactions::with(['dtransactions.product'])->get();
        $products = Products::all();
        
        return view('admin.purchase', compact('transactions', 'products'));
    }

    public function show_products(Request $request){
        $products = Products::with(['category', 'location'])->get();

        $result = $products->map(function($product) {
            return [
                'product_name' => $product->product_name,
                'product_merk' => $product->product_merk,
                'qty' => $product->qty,
                'description' => $product->description,
                'total_price' => $product->total_price,
                'category_name' => optional($product->category)->category_name,
                'location_name' => optional($product->location)->location_name,
            ];
        });

        $categories = DB::table('products')
            ->join('categories', 'products.categoryID', '=', 'categories.categoryID')
            ->select('categories.category_name', DB::raw('COUNT(products.productID) as product_count'))
            ->groupBy('categories.category_name')
            ->get();

        $categoriesAll = Categories::all();

        return view('admin.products', compact('products', 'categories', 'categoriesAll'));
    }
}