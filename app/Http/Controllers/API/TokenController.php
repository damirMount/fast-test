<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\User;
class TokenController extends Controller
{
    public function generateToken()
    {
        $user = User::all();
//        $token = $user->createToken();

        return response()->json(['status'=>'success', 'token'=> $user], 200);

    }
}
