<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Vision;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index()
    {
        $pageTitle = 'Visi Misi';
        $data = Vision::all();
        return view('dashboard.visi.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        $data = Vision::find($id);
        $data->delete();
        return redirect()->route('visi-misi')->with('success', 'Visi Misi berhasil dihapus');
    }

    public function create(Request $request)
    {
        $exitingVision = Vision::first();
        if ($exitingVision) {
            return redirect()->route('visi-misi')->with('error', 'Hanya boleh menambahkan satu visi misi.');
        }
        Vision::create([
            'vision' => $request->vision,
            'mission' => $request->mission,
        ]);
        return redirect()->route('visi-misi')->with('success', 'Visi Misi berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Vision::find($id);
        $data->vision = $request->vision;
        $data->mission = $request->mission;
        $data->save();
        return redirect()->route('visi-misi')->with('success', 'Visi Misi berhasil diubah');
    }
}
