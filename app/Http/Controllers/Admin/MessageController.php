<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Contact::orderBy('created_at', 'desc')->get();


        return view('admin.messages', compact('messages'));
    }
}

