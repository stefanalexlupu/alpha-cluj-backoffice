<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Mockery\Matcher\Contains;
use Inertia\Inertia;

class HomeController extends Controller
{
    function index(Request $request)
    {
        // $contacts = Contact::all();

        // return view('home', ['contacts' => $contacts]);

        return Inertia::render('Dashboard');

        // return Inertia::render('Welcome', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        //     'laravelVersion' => Application::VERSION,
        //     'phpVersion' => PHP_VERSION,
        // ]);
    }
}
