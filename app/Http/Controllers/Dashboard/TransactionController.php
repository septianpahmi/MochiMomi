<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\TransactionItems;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $pageTitle = 'Transaksi';
        $data = TransactionItems::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.transaction.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        TransactionItems::find($id)->delete();
        return redirect()->route('transaksi')->with('success', 'Data berhasil dihapus');
    }
    public function sukses($id)
    {
        $item = TransactionItems::where('id', $id)->first();
        $transaksi = Transactions::where('id', $item->transaction_id)->first();
        $transaksi->status = 'success';
        $transaksi->save(); // <-- penting
        return redirect()->route('transaksi')->with('success', 'Data berhasil diubah');
    }

    public function pending($id)
    {
        $item = TransactionItems::where('id', $id)->first();
        $transaksi = Transactions::where('id', $item->transaction_id)->first();
        $transaksi->status = 'pending';
        $transaksi->save(); // <-- penting
        return redirect()->route('transaksi')->with('success', 'Data berhasil diubah');
    }

    public function failed($id)
    {
        $item = TransactionItems::where('id', $id)->first();
        $transaksi = Transactions::where('id', $item->transaction_id)->first();
        $transaksi->status = 'failed';
        $transaksi->save(); // <-- penting
        return redirect()->route('transaksi')->with('success', 'Data berhasil diubah');
    }
}
