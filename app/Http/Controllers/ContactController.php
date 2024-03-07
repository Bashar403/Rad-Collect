<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // The Contact section does not need index, show, edit, or destroy methods
    // because it's only for handling contacts form submissions.

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', // Validates phone numbers with a minimum length of 10 characters
            'message' => 'required|string|min:10', // Ensure the message has at least 10 characters
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.create')->with('success', 'Your message has been sent successfully!');
    }
}
