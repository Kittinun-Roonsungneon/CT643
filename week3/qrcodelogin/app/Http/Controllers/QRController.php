<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
class QRController extends Controller
{
    public function generate()
    {
        $randomAccessCode = 'CT648' . Str::random(32);
        $qrCode = QrCode::format('svg')->size(300)->generate($randomAccessCode);

        return view('qr', compact('qrCode'));
    }
}
