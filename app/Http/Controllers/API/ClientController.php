<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $clients = User::paginate(1);

//        return response()->json(User::all());
        dd(json_encode($clients));
        return new ClientResource($clients);
    }

    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'full_name' => 'required|string:200',
            'phone_number' => 'required|string',
            'email' => 'required|string'
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => 'error', 'message' => $validation->getMessageBag(), 400]);
        } else {
            return response()->json(['status' => 'success', 'clients' => Client::create($request->all())]);
        }
    }


    public function show(Client $client)
    {
        return response()->json(['client' => $client]);
    }

    public function update(Request $request, Client $client)
    {
        $validation = Validator::make($request->all(), [
            'full_name' => 'required|string:200',
            'phone_number' => 'required|string',
            'email' => 'required|string'
        ]);
        if ($validation->fails()){
            return response()->json(['status' => 'error', 'message' => $validation->getMessageBag(), 400]);
        }
        else{
            return response()->json(['status' => 'success', 'clients' => $client->update($request->all())], 200);
        }
    }
}
