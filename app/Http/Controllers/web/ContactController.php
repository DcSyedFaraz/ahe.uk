<?php

namespace App\Http\Controllers\Web;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('pages.contact');
    }

    public function store(StoreContactRequest $request){

        // dd($request);


        $contact= Contact::create($request->all());

         // Send mail to user
        // Mail::to($contact->email)->send(new ContactMail($contact));
        // Send mail to admin
        // Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')))->send(new ContactAdminMail($contact));

        return response()->json(['success'=>"Thank you for showing your intrest, We've receive your query successfully."]);
    }
}
