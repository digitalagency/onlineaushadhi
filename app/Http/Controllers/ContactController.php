<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use App\Http\Requests\ContactFormRequest;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        $message =  new ContactMessage();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->created_at = Carbon::now();
        $message->save();

        // send email
        Mail::to(env('MAIL_COMPANY_ADDRESS', 'pharmacist@onlineaushadhi.com'))
            ->send(new MessageReceived($message));

        return response()->json([
           "success" => true,
            "message" => "Message sent successful. One of our customer support will get back to you soon!"
        ]);
    }
}
