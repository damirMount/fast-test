<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:10'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'error' => $errors
            ], 400);
        }

        if ($validator->passes()) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }
        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
    public function converter(Request $request)
    {
        $pnr_code = $request->all();
        if (isset($airport_out))
        {
            return response()->json(['message'=>"not found airport_out"],404);
        } else if(isset($airport_in)) {
            return response()->json(['message'=>"not found airport_in"],404);
        }else if(isset($plane)) {
            return response()->json(['message' => "not found plane"], 404);
        }else if(isset($aircompany)) {
            return response()->json(['message' => "not found aircompany"], 404);
        }
    }
        // your code for parsing pnr code ...

        return response()->json(['data' => $]);
    }

    public function me(Request $request)
    {
        return $request->user();
    }
}
