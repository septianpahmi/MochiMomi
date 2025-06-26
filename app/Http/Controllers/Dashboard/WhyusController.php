<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class WhyusController extends Controller
{
    public function index()
    {
        $pageTitle = 'Why Us';
        $data = WhyUs::all();
        return view('dashboard.whyus.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        $data = WhyUs::find($id);
        $data->delete();
        return redirect()->route('why-us')->with('success', 'Data berhasil dihapus');
    }

    public function create(Request $request)
    {
        $countHistory = WhyUs::count();
        if ($countHistory >= 3) {
            return redirect()->route('why-us')->with('error', 'Hanya boleh menambahkan tiga data.');
        }
        $content = $request->content;
        if (strlen($content) > 250) {
            return redirect()->route('why-us')->with('error', 'Konten tidak boleh lebih dari 250 karakter.');
        }
        $title = $request->title;
        if (strlen($title) > 250) {
            return redirect()->route('why-us')->with('error', 'Judul tidak boleh lebih dari 250 karakter.');
        }
        WhyUs::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('why-us')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $content = $request->content;
        if (strlen($content) > 250) {
            return redirect()->route('why-us')->with('error', 'Konten tidak boleh lebih dari 250 karakter.');
        }
        $title = $request->title;
        if (strlen($title) > 250) {
            return redirect()->route('why-us')->with('error', 'Judul tidak boleh lebih dari 250 karakter.');
        }
        $data = WhyUs::find($id);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        return redirect()->route('why-us')->with('success', 'Data berhasil diubah');
    }
}
