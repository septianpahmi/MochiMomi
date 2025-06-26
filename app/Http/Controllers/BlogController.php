<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Contacts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $pageTitle = 'Kegiatan';
        $blog = Blogs::all();
        $kontak = Contacts::first();
        return view('frontend.blog.index', compact('pageTitle', 'blog', 'kontak'));
    }
}
