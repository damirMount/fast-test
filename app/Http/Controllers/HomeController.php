<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    /**
//     * Show the application dashboard.
//     *
//     * @return \Illuminate\Contracts\Support\Renderable
//     */
//    public function index()
//    {
//        return view('home');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::paginate(100);
        return view('homes.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Home::create($request->all());

        return redirect()->route('homes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(home $home)
    {
        return view('homes.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        return view('homes.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $home->update($request->all());

        return redirect()->route('homes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(home $home)
    {
        $home->delete();

        return redirect()->route('homes.index');
    }

    public function getHome(Request $request)
    {
        $home = Home::find($request->id);

        $view = view('homes.info', compact('home'))->render();

        return response()->json(['view' => $view]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addHome(Request $request)
    {
        Home::create($request->except('_token'));

        return response()->json(['homeName' => $request->name]);
    }

    public function getLastHome(Request $request)
    {
        dd(Home::where('name', '=', $request->name)->first());
        return response()->json(['home' => $maxHome]);

    }

    public function add(Request $request)
    {
        $apartment = Apartment::find($request->id);

        $request->session()->put('nameApart', $apartment);
        $request->session()->put('count', $count + 1);

        return response()->json()
    }
}
