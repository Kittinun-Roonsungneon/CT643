<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class LineNotifyService
{
    protected $token;

    public function __construct()
    {
        $this->token = env('LINE_NOTIFY_ACCESS_TOKEN');
    }

    public function sendMessage($message)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->asForm()->post('https://notify-api.line.me/api/notify', [
            'message' => $message,
        ]);

        return $response->successful();
    }
}
