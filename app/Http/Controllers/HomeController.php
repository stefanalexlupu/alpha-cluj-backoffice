<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mockery\Matcher\Contains;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $contacts = Contact::all();

        return view('home', ['contacts' => $contacts]);
    }
}
