<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // コンタクト画面表示
    public function contact()
    {
        return view('/contact');
    }

    public function store(ContactRequest $request)
    {
        $contactData = $request->only(['first_name','last_name','gender','email','tell','address','building','detail']);

        $contact = Contact::create($contactData);

        return redirect('/contact');
    }

}