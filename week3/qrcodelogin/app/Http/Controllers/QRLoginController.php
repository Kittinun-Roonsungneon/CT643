<?php

namespace App\Http\Controllers;
use App\Models\QRCode;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class QRLoginController extends Controller
{
    // public function generateQRCode()
    // {
    //     $code = 'CT648' . Str::random(32);
    //     QRCode::create(['code' => $code]);

    //     return response()->json(['qr_code' => $code]);
    //     return view('generate-qr', ['qrCode' => $qrCode, 'code' => $code]);
    // }
    public function generateQRCode(Request $request)
    {
        $code = 'CT648' . Str::random(32);
        QRCode::create(['code' => $code]);

        $qrCode = QrCode::size(300)->generate($code);

        return view('generate-qr', ['qrCode' => $qrCode, 'code' => $code]);
    }

    public function requestJWT(Request $request)
    {
        $request->validate(['code' => 'required|string']);

        $qrCode = QRCode::where('code', $request->code)->first();
        if (!$qrCode || !$qrCode->jwt) {
            return response()->json(['message' => 'Invalid code or no JWT mapped'], 400);
        }

        return response()->json(['jwt' => $qrCode->jwt]);
    }

    public function verifyQRCode(Request $request)
    {
        $request->validate(['code' => 'required|string']);

        $user = Auth::user();
        $qrCode = QRCode::where('code', $request->code)->first();

        if (!$qrCode) {
            return response()->json(['message' => 'Invalid code'], 400);
        }

        if (!$qrCode->jwt) {
            $token = $user->createToken('QRLoginToken')->plainTextToken;
            $qrCode->update(['jwt' => $token]);
        }

        return response()->json(['jwt' => $qrCode->jwt]);
    }

    public function showGenerateQRForm()
    {
        return view('generate-qr');
    }

    public function showVerifyQRForm()
    {
        return view('verify-qr');
    }

}
