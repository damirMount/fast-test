<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TokenController extends Controller
{
    public function generateToken(Request $request)
    {
//        $user = auth('api')->user();
//        $token = $user->createToken();

        return response()->json(['status' => 'success', 'token' => 'sdfghjklfglkdjs4353regfjkfd'], 200);
    }
}
