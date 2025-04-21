<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

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

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'select', 'content']);
        Contact::create($contact);
        return view('thanks');
    }

    protected function create(array $data)
    {
        return User::create([
            'category_id' =>$date['category_id'],
            'name' => $data['first_name'],
            'name_kana' =>$data['last_name'],
            'gender' =>$data['gender'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'address' => $data['address'],
            'building' => $data['building'],
            'detail' => $data['detail'],
            'updated_at' => $data['updated_at'],
            'created_at' => $data['created_at'],
        ]);
    }
}

