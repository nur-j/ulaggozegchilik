<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Request as R;

use App\Http\Requests;

class MailController extends Controller
{
    public function basic_email()
    {
        $req = R::find($id);
        $data = ['df' => 'hi'];

        Mail::send('request_mail', $data, function ($message) {
/*             $message->from('john@johndoe.com', 'John Doe');
            $message->sender('john@johndoe.com', 'John Doe'); */
            $message->to('trans.id@ulaggozegchilik.gov.tm', 'Degişli işgäre');
            /* $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe'); */
            /* $message->replyTo('john@johndoe.com', 'John Doe'); */
            $message->subject('Ýüz tutma');
            /* $message->priority(3);
            $message->attach('pathToFile'); */
        });
    }

    public function tugdk_email()
    {
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
       
        \Mail::to('trans.id@ulaggozegchilik.gov.tm')->send(new \App\Mail\RequestMail($details));
       
        dd("Email is Sent.");
    }

    public function html_email()
    {

    }

    public function attachment_email()
    {

    }
}
