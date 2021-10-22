<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    function index(Request $request)
    {
        return Inertia::render('Contacts', [
            'contacts' => Contact::all()
        ]);
    }
}
