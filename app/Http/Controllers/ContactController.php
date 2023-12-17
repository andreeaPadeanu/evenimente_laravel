<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function sendMessage(Request $request)
    {
       $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    Message::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message'),
    ]);

    return redirect()->route('contact.index')->with('success', 'Mesajul a fost trimis cu succes!');
    }

}

