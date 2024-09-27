<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
//use Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Handle contact form submission, such as sending an email.
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Send an email to admin or customer support team.
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('oti.007@gmail.com')
                    ->subject('New Contact Message from ' . $data['name']);
        });

        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon.');
    }
}

