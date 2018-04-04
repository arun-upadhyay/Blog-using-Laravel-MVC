<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

    public function create_new_contact()
    {
        return view("pages/contact-me");
    }

    public function add_new_contact(Request $request)
    {
        // data validation
        $this->validate($request, ['name' => 'required', 'email' => 'required', 'subject' => 'required', 'message' => 'required']);
        Contact::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
        
    }
    

}
