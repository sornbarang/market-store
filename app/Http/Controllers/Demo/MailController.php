<?php

namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
use App\Models\User;

class MailController extends Controller
{

//    test mail
    public function index()
    {
       /* Mail::send('emails.demo',[], function($message) {
            $message->to('barang.sorn@bi-kay.com');
            $message->subject('Mailgun Testing');
        });
        dd('Mail Send Successfully');*/

        $user = User::find(13);
        if($user->count() > 0)
            Mail::to($user->email)->send(new VerifyMail($user));

        dd('Mail Send Successfully');
    }

}