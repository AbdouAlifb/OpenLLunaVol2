<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contactData = [
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'subject' => 'Contact Form Submission', // Assuming this is static or add a field in the form
            'message' => $request->message,
        ];

        Mail::to('ali.abdoufb@gmail.com')->send(new ContactMail($contactData));
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
