<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function Form(){
        $title = 'Contatti';

        $text = 'Vuoi fare parte del nostro team? Scrivici ed analizzeremo la tua richiesta!';


        return view('contatti', compact('title', 'text'));
    }



    public function Send(Request $request){
        $request->message;

        $mail = new ContactMail($request->name, $request->email, $request->message);

        Mail::to('elisa95d@hotmail.it')->send($mail);

        return redirect()->route('contacts')->with(['success'=>'La tua richiesta e stata inviata. Ti ricontatteremo il prima possibile']);

    }

  
}
