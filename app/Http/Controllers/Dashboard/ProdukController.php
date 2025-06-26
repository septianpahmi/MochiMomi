<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $pageTitle = "Produk";
        $data = Products::all();
        $kategori = Categories::all();
        return view('dashboard.produk.index', compact('pageTitle', 'data', 'kategori'));
    }

    public function delete($id)
    {
        $data = Products::find($id);
        if (file_exists(public_path('images/produk/' . $data->image))) {
            unlink(public_path('images/produk/' . $data->image));
        }
        $data->delete();
        return redirect()->route('produk')->with('success', 'Produk berhasil dihapus');
    }

    public function create(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/produk'), $imageName);
        $name = $request->name;
        if (strlen($name) > 250) {
            return redirect()->route('why-us')->with('error', 'Nama tidak boleh lebih dari 250 karakter.');
        }
        $brand_name = $request->brand_name;
        if (strlen($brand_name) > 250) {
            return redirect()->route('why-us')->with('error', 'Nama Brand tidak boleh lebih dari 250 karakter.');
        }
        Products::create([
            'image' => $imageName,
            'name' => $request->name,
            'brand_name' => $request->brand_name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'variant' => $request->variant,
            'flavor' => $request->flavor,
            'weight' => $request->weight,
            'description' => $request->description
        ]);
        return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Products::find($id);
        if ($request->hasFile('image')) {
            if (file_exists(public_path('images/produk/' . $data->image))) {
                unlink(public_path('images/produk/' . $data->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/produk'), $imageName);
            $data->image = $imageName;
        }
        $data->update([
            'image' => $imageName,
            'name' => $request->name,
            'brand_name' => $request->brand_name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'variant' => $request->variant,
            'flavor' => $request->flavor,
            'weight' => $request->weight,
            'description' => $request->description
        ]);
        return redirect()->route('produk')->with('success', 'Produk berhasil diupdate');
    }
}
