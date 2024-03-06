<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required|max:25000'
        ]);

        $to_name = 'Hena Mulianakusumah';
        $to_email = '2002016@lnu.edu.ph';
        $data = array('name'=>$request->name, 'email' => $request->email, 'body' => $request->message);

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email, $data) {
            $message->to($to_email, $to_name)
                    ->subject('Message from ' . $data['name']);
            $message->from($data['email'], $data['name']);
        });

        return back()->with('success', 'Thanks for contacting us!');
    }
}
