<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Products;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\TransactionItems;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function index()
    {
        $pageTitle = 'Produk List';
        $produk = Products::all();
        $kontak = Contacts::first();

        return view('frontend.produk.produk-list', compact('pageTitle', 'produk', 'kontak'));
    }

    public function detail($slug)
    {
        $pageTitle = 'Produk Detail';
        $produk = Products::where('slug', $slug)->first();
        $kontak = Contacts::first();
        return view('frontend.produk.detail', compact('pageTitle', 'produk', 'kontak'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'customer_name' => 'nullable|string',
            'customer_phone' => 'nullable|string',
        ]);

        $product = Products::findOrFail($request->product_id);
        $total = $product->price * $request->quantity;
        $user = Auth::user();
        $transaction = Transactions::create([
            'customer_name' => $user->name,
            'customer_phone' => $user->phone,
            'whatsapp_link' => $request->wa_link,
            'status' => 'pending',
        ]);

        TransactionItems::create([
            'transaction_id' => $transaction->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => $total,
        ]);

        return response()->json(['success' => true]);
    }

    public function ajax(Request $request)
    {
        $query = Products::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('category_id', $request->kategori);
        }

        $produk = $query->latest()->paginate(12);

        return view('frontend.produk.list', compact('produk'))->render();
    }
}
