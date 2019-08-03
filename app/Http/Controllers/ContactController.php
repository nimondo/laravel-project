<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function getForm() {
        return view('contact');
    }

    public function postForm(ContactRequest $request) {
        Mail::send('emailContact', $request->all(), function($message){
            $message->to('corentinbringer@hotmail.com')
                    ->subject('Demande de contact');
        });

        return Redirect::to('/contact')->with('success', true)
                                       ->with('message', 'Votre message a bien été envoyé!');
    }
}
