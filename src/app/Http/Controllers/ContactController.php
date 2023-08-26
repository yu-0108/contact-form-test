<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'post_code', 'address', 'building_name', 'opinion']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'post_code', 'address', 'building_name', 'opinion']);
        Contact::create($contact);
        return view('thanks');
    }

}
