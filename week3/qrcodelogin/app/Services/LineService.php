<?php
namespace App\Services;

use GuzzleHttp\Client;

class LineService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendMessage($message)
    {
        $response = $this->client->post('https://api.line.me/v2/bot/message/push', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('LINE_ACCESS_TOKEN'),
            ],
            'json' => [
                'to' => env('LINE_GROUP_ID'),
                'messages' => [
                    [
                        'type' => 'text',
                        'text' => $message,
                    ],
                ],
            ],
        ]);

        return $response->getStatusCode();
    }
}
