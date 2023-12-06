<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMsgContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function sendMsg(SendMsgContactRequest $request)
    {
        $request->validated();
        return redirect()->route('contact')->with('success', 'Query sent successfully!');
    }
}
