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
        /* $req = R::find($id); */
        $data = ['df' => 'hi'];

        Mail::send('request_mail', $data, function ($message) {
/*             $message->from('john@johndoe.com', 'John Doe');
            $message->sender('john@johndoe.com', 'John Doe'); */
            $message->to('tugdk@awtoulag.gov.tm', 'Degişli işgäre');
            /* $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe'); */
            /* $message->replyTo('john@johndoe.com', 'John Doe'); */
            $message->subject('Ýüz tutma');
            /* $message->priority(3);
            $message->attach('pathToFile'); */
        });
        echo "Basic fucking email was sent. Check your fucking inbox";
    }

    public function html_email()
    {

    }

    public function attachment_email()
    {

    }
}
