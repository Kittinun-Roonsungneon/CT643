<?php

namespace App\Http\Controllers;
use App\Services\LineService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\LineNotifyService;
class LineMessageController extends Controller
{
    protected $lineNotifyService;

    public function __construct(LineNotifyService $lineNotifyService)
    {
        $this->lineNotifyService = $lineNotifyService;
    }

    public function sendLineMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $message = $request->message;

        $response = $this->lineNotifyService->sendMessage($message);

        if ($response) {
            return response()->json(['message' => 'Message sent successfully']);
        } else {
            return response()->json(['error' => 'Failed to send message'], 500);
        }
    }
}
