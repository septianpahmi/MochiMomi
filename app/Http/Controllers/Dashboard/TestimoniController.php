<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $pageTitle = 'Testimoni';
        $data = Testimonials::all();
        return view('dashboard.testimoni.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        $data = Testimonials::find($id);
        if (file_exists(public_path('images/testimoni/' . $data->image))) {
            unlink(public_path('images/testimoni/' . $data->image));
        }
        $data->delete();
        return redirect()->route('testimoni')->with('success', 'Data Berhasil Dihapus');
    }

    public function create(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/testimoni'), $imageName);
        Testimonials::create([
            'image' => $imageName,
            'name' => $request->name,
            'position' => $request->position,
            'video_link' => $request->video_link,
            'description' => $request->description
        ]);
        return redirect()->route('testimoni')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Testimonials::find($id);
        if ($request->hasFile('image')) {
            if (file_exists(public_path('images/testimoni/' . $data->image))) {
                unlink(public_path('images/testimoni/' . $data->image));
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/testimoni'), $imageName);
            $data->image = $imageName;
        }
        $data->update([
            'image' => $imageName,
            'name' => $request->name,
            'position' => $request->position,
            'video_link' => $request->video_link,
            'description' => $request->description
        ]);
        return redirect()->route('testimoni')->with('success', 'Data Berhasil Diupdate');
    }
}
