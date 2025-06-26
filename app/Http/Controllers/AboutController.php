<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Histories;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $pageTitle = 'About Us';
        $sejarah = Histories::first();
        $kontak = Contacts::first();

        return view('frontend.about.index', compact('pageTitle', 'sejarah', 'kontak'));
    }
}
