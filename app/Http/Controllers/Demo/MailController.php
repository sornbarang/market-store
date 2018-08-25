<?php
/**
 * Created by PhpStorm.
 * User: barangck
 * Date: 25/8/18
 * Time: 10:13 PM
 */
namespace App\Http\Controllers\Demo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{

//    test mail
    public function index()
    {
        Mail::send('emails.demo',[], function($message) {
            $message->to('sornbarang@gmail.com');
            $message->subject('Mailgun Testing');
        });

        dd('Mail Send Successfully');
    }

}