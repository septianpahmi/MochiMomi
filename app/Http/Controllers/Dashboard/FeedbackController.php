<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function index()
    {
        $pageTitle = 'Feedback';
        $data = Feedback::all();
        return view('dashboard.feedback.index', compact('pageTitle', 'data'));
    }

    public function delete($id)
    {
        Feedback::find($id)->delete();
        return redirect()->route('feedback')->with('success', 'Feedback berhasil dihapus');
    }

    public function active($id)
    {
        Feedback::find($id)->update(['status' => 'active']);
        return redirect()->route('feedback')->with('success', 'Feedback berhasil diaktifkan');
    }

    public function inactive($id)
    {
        Feedback::find($id)->update(['status' => 'inactive']);
        return redirect()->route('feedback')->with('success', 'Feedback berhasil dinonaktifkan');
    }
}
