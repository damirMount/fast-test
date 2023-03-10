<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        return response()->json(['houses' => Home::all()]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' => 'required|string:200',
            'price' => 'required|float',
            'year_of_build' => 'required|integer',
            'count_of_floors' => 'required|integer'
            ]);
        if ($validation->fails()){
            return response()->json(['status' => 'error', 'message'=> $validation->getMessageBag()], 400);
        }
        else{
            return response()->json(['status' => 'success', 'home'=> Home::create($request->all())], 200);
        }
    }
}
