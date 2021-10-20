<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\NewContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    function contact(ContactRequest $request)
    {
        $contact = Contact::create([
            'name' => $request->name,
            'age' => $request->age,
            'phone' => $request->phone,
            'info' => $request->info,
            'gdpr' => $request->gdpr,
        ]);

        // TODO: change "to"
        Mail::to('ionut@gmail.com')->queue(new NewContact($contact));

        return response()->json($contact);
    }
}
