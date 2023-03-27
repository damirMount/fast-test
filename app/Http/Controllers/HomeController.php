<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homes = Home::all();
        return view('homes.index', compact('homes'));
    }

    public function getHome(Request $request)
    {
        $home = Home::find($request->homeId);
        $view = view('homes.info', compact('home'))->render();

        return response()->json(['view' => $view]);
    }
}
