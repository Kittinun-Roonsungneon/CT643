<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;  // เพิ่มบรรทัดนี้
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $tokenResult = $user->createToken('auth_token');
        $token = $tokenResult->plainTextToken;
        $accessToken = $tokenResult->accessToken;

        // สร้าง rac1 และ rac2
        $randomAccessCode1 = 'CT648' . Str::random(32);
        $randomAccessCode2 = 'CT648' . Str::random(32);
        $accessToken->rac1 = $randomAccessCode1;
        $accessToken->rac2 = $randomAccessCode2;
        $accessToken->save();

        Auth::login($user);

        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'rac1' => $randomAccessCode1,
            'rac2' => $randomAccessCode2,
            'token_type' => 'Bearer',
        ], 201);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('username', 'password'))) {
            throw ValidationException::withMessages([
                'username' => ['The provided credentials are incorrect.'],
            ]);
        }

        $user = User::where('username', $request->username)->firstOrFail();
        $tokenResult = $user->createToken('auth_token');
        $token = $tokenResult->plainTextToken;
        $accessToken = $tokenResult->accessToken;

        // สร้าง rac1 และ rac2
        $randomAccessCode1 = 'CT648' . Str::random(32);
        $randomAccessCode2 = 'CT648' . Str::random(32);
        $accessToken->rac1 = $randomAccessCode1;
        $accessToken->rac2 = $randomAccessCode2;
        $accessToken->save();

        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'rac1' => $randomAccessCode1,
            'rac2' => $randomAccessCode2,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
