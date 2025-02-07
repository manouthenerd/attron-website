<?php

namespace App\Http\Controllers;

use App\Http\Requests\sendContactFormRequest;
use App\Mail\SendContact;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function __invoke(sendContactFormRequest $request) 
    {
        $sender = $request->validated();

        Mail::to('info@attron-cab.com')->send(new SendContact($sender));

        return redirect('/contact#contact-form');
    }
}
