<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;

class ContactController extends Controller
{
    public function getContact()
    {
        return view("HomePage.contact");
    }

    public function saveContact(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'surname'        => 'required',
            'email'          => 'required|email',
            'phone_number'   => 'required|numeric',
            'message'        => 'required'
        ]);

        $contact = new Contact();

        $contact->name            = $request->get('name');
        $contact->email           = $request->get('email');
        $contact->phone_number    = $request->get('phone_number');
        $contact->message         = $request->get('message');

        $contact->save();

        $data = array(
            'forename'             => $request->get('name'),
            'surname'              => $request->get('surname'),
            'email'                => $request->get('email'),
            'phone_number'         => $request->get('phone_number'),
            'user_message'         => $request->get('message'),
        );

        Mail::send(new ContactMail($data));

        Mail::send('success', $data, function ($message) use ($data) {
            $message->from('bestpaulpipeloluwa@gmail.com', 'Bestpaul.dev');
            $message->to($data['email'])->subject('Thank you for the interest');
        });


        /*\Mail::send('contact_email',
            array(
                'forename'             => $request->get('name'),
                'surname'              => $request->get('surname'),
                'email'                => $request->get('email'),
                'phone_number'         => $request->get('phone_number'),
                'user_message'         => $request->get('message'),
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('bestpaulpipeloluwa@gmail.com');
            });
        */

        return redirect()->back()->with('alert', 'Thanks for contacting me! a response has been sent to the given email');
    }


}
