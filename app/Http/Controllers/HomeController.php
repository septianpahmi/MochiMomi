<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\WhyUs;
use App\Models\Vision;
use App\Models\Contacts;
use App\Models\Feedback;
use App\Models\Products;
use App\Models\Histories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product = Products::orderBy('created_at', 'desc')->take(8)->get();
        $blog = Blogs::all();
        $sejarah = Histories::first();
        $visi = Vision::first();
        $whyus = WhyUs::all();
        $kontak = Contacts::first();
        $feedback = Feedback::where('status', 'active')->get();
        $pageTitle = 'Home';
        return view('frontend.index', compact('product', 'blog', 'pageTitle', 'sejarah', 'visi', 'whyus', 'kontak', 'feedback'));
    }
}
