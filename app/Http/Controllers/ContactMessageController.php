<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view('admin.contactMessages.index', compact('messages'));
    }

    public function show(ContactMessage $contactMessage)
    {
        if (!$contactMessage->viewed_at) {
            $contactMessage->update([
                'viewed_at' => now(),
            ]);
        }

        return view('admin.contactMessages.show', compact('contactMessage'));
    }

    public function markAllRead()
    {
        ContactMessage::whereNull('viewed_at')->update([
            'viewed_at' => now(),
        ]);

        return redirect('/admin/contact-messages')->with(
            'success',
            'Alle contactberichten zijn als gelezen gemarkeerd.'
        );
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect('/admin/contact-messages')->with(
            'success',
            'Het contactbericht is verwijderd.'
        );
    }

    public function destroyAll()
    {
        ContactMessage::query()->delete();

        return redirect('/admin/contact-messages')->with(
            'success',
            'Alle contactberichten zijn verwijderd.'
        );
    }
}
