<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = Item::create($request->all());
        $items->save();

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Item $items)
    {
        return view('items.index',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $items)
    {
        //
    }
}
