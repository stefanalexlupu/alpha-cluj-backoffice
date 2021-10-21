<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\NewContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function new(ContactRequest $request)
    {
        $contact = Contact::create([
            'name' => $request->name,
            'age' => $request->age,
            'phone' => $request->phone,
            'info' => $request->info,
            'gdpr' => $request->gdpr,
        ]);

        Mail::to(env('MAIL_NEW_CONTACT__SENDTO', 'alpha@bisericabetel.com'))->queue(new NewContact($contact));

        return response()->json($contact);
    }
}
