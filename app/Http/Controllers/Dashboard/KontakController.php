<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $pageTitle = 'Kontak';
        $data = Contacts::all();
        return view('dashboard.kontak.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        $data = Contacts::find($id);
        $data->delete();
        return redirect()->route('kontak')->with('success', 'Kontak berhasil dihapus');
    }

    public function create(Request $request)
    {
        $exists = Contacts::first();
        if ($exists) {
            return redirect()->route('kontak')->with('error', 'Kontak sudah ada');
        }
        $address = $request->address;
        if (strlen($address) > 250) {
            return redirect()->back()->with('error', 'Alamat tidak boleh lebih dari 250 karakter.');
        }
        $data = new Contacts;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->whatsapp = $request->whatsapp;
        $data->instagram = $request->instagram;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->save();
        return redirect()->route('kontak')->with('success', 'Kontak berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $address = $request->address;
        if (strlen($address) > 250) {
            return redirect()->back()->with('error', 'Alamat tidak boleh lebih dari 250 karakter.');
        }
        $data = Contacts::find($id);
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->whatsapp = $request->whatsapp;
        $data->instagram = $request->instagram;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->save();
        return redirect()->route('kontak')->with('success', 'Kontak berhasil diubah');
    }
}
