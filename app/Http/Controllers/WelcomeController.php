<?php

namespace App\Http\Controllers;

use App\Models\Home;

class WelcomeController extends Controller
{
    public function index()
    {
        $homes = Home::whereHas('apartments.sale')->paginate(10);
        return view('welcome', compact('homes'));
    }
}
