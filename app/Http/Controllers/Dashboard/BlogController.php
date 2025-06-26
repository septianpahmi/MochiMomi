<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $pageTitle = 'Blog';
        $data = Blogs::all();
        return view('dashboard.blog.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        $data = Blogs::find($id);
        if (file_exists(public_path('images/blog/' . $data->thumbnail))) {
            unlink(public_path('images/blog/' . $data->thumbnail));
        }
        $data->delete();
        return redirect()->route('blog')->with('success', 'Blog berhasil dihapus');
    }

    public function create(Request $request)
    {
        $image = $request->file('thumbnail');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/blog'), $imageName);
        $title = $request->title;
        if (strlen($title) > 250) {
            return redirect()->back()->with('error', 'Title tidak boleh lebih dari 250 karakter.');
        }
        Blogs::create([
            'thumbnail' => $imageName,
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('blog')->with('success', 'Blog berhasil dibuat');
    }

    public function update(Request $request, $id)
    {
        $data = Blogs::find($id);
        if ($request->hasFile('thumbnail')) {
            if (file_exists(public_path('images/blog/' . $data->thumbnail))) {
                unlink(public_path('images/blog/' . $data->thumbnail));
            }
            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blog'), $imageName);
            $data->thumbnail = $imageName;
        }
        $title = $request->title;
        if (strlen($title) > 250) {
            return redirect()->back()->with('error', 'Title tidak boleh lebih dari 250 karakter.');
        }
        $data->update([
            'thumbnail' => $imageName,
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('blog')->with('success', 'Blog berhasil diupdate');
    }
}
