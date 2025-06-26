<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Feedback;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $pageTitle = 'Kontak';
        $kontak = Contacts::first();
        return view('frontend.kontak.index', compact('pageTitle', 'kontak'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Feedback();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('contact.user')->with('success', 'Pesan anda berhasil dikirim');
    }
}
