<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function generateToken($id)
    {
        // $user = Auth::user();
        // $user->createToken();

        return response()->json(['status'=>'succsess', 'token' => $user], 200);

    }
}
