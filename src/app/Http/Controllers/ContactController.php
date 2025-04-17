<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $name = $request->first_name. '' .$request->last_name;
        $tel = $request->tel1. '' .$request->tel2. '' . $request->tel3;
        $contact = $request->input(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'select', 'detail', 'content']);
        return view('confirm', compact('name', 'tel', 'contact'));
    }

    public function store(CntactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'select', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
