<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    private $apiKey = "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";
    public function saveToNewsletter(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        $client = new Client();

        $listId = 3;

        $response = $client->request('POST', 'https://api.brevo.com/v3/contacts/import', [
            'body' => json_encode([
                'emailBlacklist' => false,
                'disableNotification' => false,
                'smsBlacklist' => false,
                'updateExistingContacts' => true,
                'emptyContactsAttributes' => false,
                'jsonBody' => [[
                    'email' => $request->input('email'),
                    'attributes' => [
                        'FULLNAME' => $request->input('name'),
                        'CITY' => $request->input('city'),
                    ],
                ]],
                'listIds' => [$listId]
            ]),
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
                'api-key' => $this->apiKey,
            ],
        ]);

        // Check the response status
        if ($response->getStatusCode() == 202) {
            return response()->json(['message' => 'Contact added successfully'], 200);
        } else {
            $res = json_decode($response->getBody()->getContents());
            $err_msg = $res->message;
            return response()->json(['message' => "Failed to add contact: $err_msg"], 500);
        }
    }
}
