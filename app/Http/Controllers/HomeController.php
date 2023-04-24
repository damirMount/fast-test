<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function add (Request $request) {
        $count = 0;

        $apartment = Apartment::find($request->id);

        $request->session()->put('nameApart', $apartment);
        $request->session()->put('count', $count + 1);

        return response()->json(['msg' => $apartment->area]);
    }



//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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
