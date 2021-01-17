<?php

namespace Soni\ContactEmail\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Soni\ContactEmail\Models\Contact;
use Soni\ContactEmail\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
