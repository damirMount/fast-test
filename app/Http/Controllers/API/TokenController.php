<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function generateToken(Request $request)
    {
        $user = auth::user();

        $token = $user->createToken();

        return response()->json(['status' => '']);
    }
}
