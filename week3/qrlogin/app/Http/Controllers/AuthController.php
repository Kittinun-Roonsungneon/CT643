<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;  // เพิ่มบรรทัดนี้
use Illuminate\Support\Str;
use App\Models\PersonalAccessToken;
class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function index()
    {
        $tokens = PersonalAccessToken::latest('created_at')->first();
        // return response()->json([
        //     'user' => $tokens
        // ], 201);
        // die();
        // return view('index');
        return view('index', compact('tokens'));
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
        if ($request->user()) {
            $request->user()->currentAccessToken()->delete();
            // return response()->json(['message' => 'Logged out successfully']);
            return view('auth.login');
        } else {
            return redirect()->route('login')->with('error', 'No user is currently logged in.');
        }
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function loginWithQRCode(Request $request)
    {

        $rac = $request->header('RAC');
        $agent = $request->header('Agent');
        if (!$rac) {
            return response()->json(['error' => 'RAC header is required'], 400);
        }
        // return response()->json([$agent]);

        $user = User::whereHas('tokens', function ($query) use ($rac) {
            $query->where('rac1', $rac);
        })->firstOrFail();

        $tokenResult = $user->createToken('auth_token');
        $token = $tokenResult->plainTextToken;
        $accessToken = $tokenResult->accessToken;

        $randomAccessCode2 = 'CT648' . Str::random(32);
        $accessToken->rac2 = $randomAccessCode2;
        $accessToken->save();

        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'rac2' => $randomAccessCode2,
            'agent' => $agent,
            'token_type' => 'Bearer',
        ]);
    }

}
