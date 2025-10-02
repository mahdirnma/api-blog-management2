<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreLoginRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json('Authentication failed', 401);
        }
        dd(Auth::user());
        $token=Auth::user()->createToken('authToken')->plainTextToken;
        return response()->json([
            'user'=>Auth::user(),
            'token'=>$token,
        ]);
    }
}
