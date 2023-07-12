<?php

namespace App\Http\Controllers\Web;

use App\Contact;
use App\WebSetting;
use App\Events\ContactCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactAdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
       $web_setting = WebSetting::first();

        return view('pages.contact', compact('web_setting'));

    }

    public function store(StoreContactRequest $request)
    {
        // return $request->all();

        $contact = Contact::create($request->all());

        // event(new ContactCreated($contact));
        
        // Send mail to user
        Mail::to($contact->email)->send(new ContactMail($contact));

        // Send mail to admin
        Mail::to(config('mail.from.address'))->send(new ContactAdminMail($contact));


        return redirect()->back()->withSuccess('Thank you for showing your intrest, We\'ve receive your query successfully.');
    }
}
