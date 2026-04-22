<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $response = $client->chat()->create([
            'model' => 'gpt-4.1-mini',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant'],
                ['role' => 'user', 'content' => $request->message],
            ],
        ]);

        return response()->json([
            'reply' => $response->choices[0]->message->content,
        ]);
    }
}