<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactAdminSubmission;
use App\Mail\SpeakerAdminSubmission;
use App\Mail\SponsorAdminSubmission;

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

    public function submitContactForm(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'title' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        $mailData["name"] = $request->input('name');
        $mailData["email"] = $request->input('email');
        $mailData["title"] = $request->input('title');
        $mailData["subject"] = $request->input('subject');
        $mailData["phone_number"] = $request->input('phone_number');
        $mailData["message"] = $request->input('message');

        $mailSent2 = Mail::to(config('services.mail.admin_mail'))->send(new ContactAdminSubmission($mailData));

        if ($mailSent2) {
            return response()->json(['message' => "Thank you for reaching out! Your message is on its way to our team. We're excited to connect and will be in touch shortly"], 200);
        } else {
            return response()->json(['message' => "Failed to send email. Kindly try again"], 500);
        }
    }

    public function submitSpeakerForm(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'title' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'about' => 'required|string',
            'links' => 'nullable|string',
            'comments' => 'nullable|string',
        ]);


        $mailData["name"] = $request->input('name');
        $mailData["email"] = $request->input('email');
        $mailData["title"] = $request->input('title');
        $mailData["subject"] = $request->input('subject');
        $mailData["phone_number"] = $request->input('phone_number');
        $mailData["about"] = $request->input('about');
        $mailData["links"] = $request->input('links');
        $mailData["comments"] = $request->input('comments');


        $mailSent2 = Mail::to(config('services.mail.admin_mail'))->send(new SpeakerAdminSubmission($mailData));

        if ($mailSent2) {
            return response()->json(['message' => "Thank you for reaching out! Your request is on its way to our team. We're excited to connect and will be in touch shortly"], 200);
        } else {
            return response()->json(['message' => "Failed to send email. Kindly try again"], 500);
        }
    }

    public function submitSponsorForm(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'title' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'about' => 'required|string',
            'links' => 'nullable|string',
            'comments' => 'nullable|string',
        ]);


        $mailData["name"] = $request->input('name');
        $mailData["email"] = $request->input('email');
        $mailData["title"] = $request->input('title');
        $mailData["subject"] = $request->input('subject');
        $mailData["phone_number"] = $request->input('phone_number');
        $mailData["about"] = $request->input('about');
        $mailData["links"] = $request->input('links');
        $mailData["comments"] = $request->input('comments');


        $mailSent2 = Mail::to(config('services.mail.admin_mail'))->send(new SponsorAdminSubmission($mailData));

        if ($mailSent2) {
            return response()->json(['message' => "Thank you for reaching out! Your request is on its way to our team. We're excited to connect and will be in touch shortly"], 200);
        } else {
            return response()->json(['message' => "Failed to send email. Kindly try again"], 500);
        }
    }
}
