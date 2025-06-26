<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $pageTitle = 'Testimoni';
        $data = Testimonials::all();
        $kontak = Contacts::first();
        return view('frontend.testimoni.index', compact('pageTitle', 'data', 'kontak'));
    }
}
