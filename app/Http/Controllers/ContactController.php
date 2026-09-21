<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage as ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getData(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'email_confirmation' => 'required|email|max:255|same:email',
                'phone' => 'nullable|string|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|max:1000',
            ],
            [
                'email_confirmation.same' => 'De e-mailadressen komen niet overeen.',
            ]
        );

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        Mail::to('info@pawsofjoy.nl')->send(
            new ContactMessageMail(
                $request->name,
                $request->email,
                $request->phone,
                $request->subject,
                $request->message,
            )
        );

        return response()->json([
            'message' => 'Je bericht is succesvol verzonden.',
        ]);
    }
}
