<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['first_name' ,'last_name','gender', 'email',
        'tel','address','building', 'example','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)  {
        $contacts = $request->only(['first_name' ,'last_name','gender', 'email',
        'tel','address','building', 'example','detail']);
        Contact::create($contacts);
        return view('thanks');
    }
}
