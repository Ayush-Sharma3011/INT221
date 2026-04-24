<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class emailcontroller extends Controller
{
    public function emaildata(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to($request->email)->send(new ContactMail($details));
        return back()->with('success', 'Email sent successfully!');
    }
}