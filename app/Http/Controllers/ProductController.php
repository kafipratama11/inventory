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

    public function update_product(Request $request,$productID)
    {
        // Validasi data
        $request->validate([
            'productID' => 'required|integer|exists:products,productID',
            'product_name' => 'required|string|max:255',
            'product_merk' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'categoryID' => 'required|integer|exists:categories,categoryID'
        ]);


        $data = ([
            'product_name' => $request->product_name,
            'product_merk' => $request->product_merk,
            'price' => $request->price,
            'qty' => $request->qty,
            'categoryID' => $request->categoryID,
        ]);

        Products::where('productID',$productID)->update($data);

        // Ambil ID produk dari request
        // $productID = $request->input('productID');

        // // Cari produk berdasarkan ID
        // $product = Products::findOrFail($productID);

        // // Update produk dengan data dari request
        // $product->update([
        //     'product_name' => $request->product_name,
        //     'product_merk' => $request->product_merk,
        //     'price' => $request->price,
        //     'qty' => $request->qty,
        //     'categoryID' => $request->categoryID,
        // ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    public function delete_product(Request $request)
    {
        $request->validate([
            'productID' => 'required|integer|exists:products,productID',
        ]);

        $productID = $request->input('productID');

        $product = Products::findOrFail($productID);

        $product->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
}