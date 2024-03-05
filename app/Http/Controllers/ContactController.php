<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // The Contact section does not need index, show, edit, or destroy methods
    // because it's only for handling contact form submissions.

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.create')->with('success', 'Your message has been sent successfully!');
    }
}
