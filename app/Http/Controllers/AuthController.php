<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        try {
            $data = $request->validated();
            // create and send token back to the client
            $newUser = User::create($data);
            $token = $newUser->createToken('API_REGISTRATION');

            return response()->json([
                "success" => true,
                "message" => "User registered",
                "token" => $token->plainTextToken
            ]);
        } catch (Throwable $e) {
            return response()->json([
                "success" => false,
                "message" => "User could not be registered",
                "error" => $e
            ]);
        }
    }

    public function login(LoginUserRequest $request)
    {
        try {
            $data = $request->validated();
            // compare hashed and given password
            $user = User::where('email', $data['email'])->first();

            if (!$user || !Hash::check($data['password'], $user->password)) {
                return response()->json([
                    "success" => false,
                    "message" => "Wrong credentials",
                ], 401);
            }
            // generate token
            $token = $user->createToken('API_LOGIN');
            // todo send a status code to differ from the other cases
            return response()->json([
                "success" => true,
                "message" => "User logged in",
                "token" => $token->plainTextToken
            ]);
        } catch (Throwable $e) {
            // todo send a status code to differ from the other cases
            return response()->json([
                "success" => false,
                "message" => "User could not be logged in",
                "error" => $e
            ]);
        }
    }
}
