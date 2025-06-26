<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Histories;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $pageTitle = 'Sejarah';
        $data = Histories::all();
        return view('dashboard.sejarah.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        $data = Histories::find($id);
        if (file_exists(public_path('images/sejarah/' . $data->image))) {
            unlink(public_path('images/sejarah/' . $data->image));
        }
        $data->delete();
        return redirect()->route('sejarah')->with('success', 'Sejarah berhasil dihapus');
    }

    public function create(Request $request)
    {
        $existingHistory = Histories::first();
        if ($existingHistory) {
            return redirect()->route('sejarah')->with('error', 'Hanya boleh menambahkan satu sejarah.');
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/sejarah'), $imageName);
        Histories::create([
            'image' => $imageName,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('sejarah')->with('success', 'Sejarah berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Histories::find($id);
        if ($request->hasFile('image')) {
            if (file_exists(public_path('images/sejarah/' . $data->image))) {
                unlink(public_path('images/sejarah/' . $data->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/sejarah'), $imageName);
            $data->image = $imageName;
        }
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        return redirect()->route('sejarah')->with('success', 'Sejarah berhasil diubah');
    }
}
