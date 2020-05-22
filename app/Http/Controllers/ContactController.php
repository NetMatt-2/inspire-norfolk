<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Message;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) {

        $message = new Message;
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->phone = $request->get('phone');
        $message->message = $request->get('message');
        $message->save();

        return redirect()->route('contact')->with('success', 'Message successfully sent! Thank you!');
    }
}
