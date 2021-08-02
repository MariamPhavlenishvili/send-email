<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;


class emailController extends Controller
{
    public function index()
    {
        return view('emailSender');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'email'   => 'required|email',
            'message'    => 'required'
        ]);



        $data = [
            'subject' => $request->subject,
            'email'   => $request->email,
            'message' => $request->message
        ];

        Mail::to($data['email'])->send(new sendEmail($data));
        return redirect('/');
    }
}
