<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\
     */
    public function index()
    {
        Log::info('dwaddkawfmaw');
        return view('home');
    }
}
