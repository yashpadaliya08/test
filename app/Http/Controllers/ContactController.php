<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'issue_type' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create($request->only('name', 'email', 'issue_type', 'message'));

        return back()->with('success', 'Your message has been received. Our team will contact you soon.');
    }


}
