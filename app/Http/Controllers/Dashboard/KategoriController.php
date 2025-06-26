<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $pageTitle = 'Kategori';
        $data = Categories::all();
        return view('dashboard.kategori.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        $data = Categories::find($id);
        $data->delete();
        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus');
    }

    public function create(Request $request)
    {
        $data = new Categories;
        $data->name = $request->name;
        $data->save();
        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Categories::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('kategori')->with('success', 'Kategori berhasil diubah');
    }
}
