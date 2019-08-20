<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    //---CREATES AN INSTANCE TO SEND TO THE CONTACTMAIL.BLADE.PHP --- //(GOKDAG)
    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    //---BULDS THE EMAIL INSTANCE IN ORDER TO BE SENT BY USER THROUGH CONTACT FORM---//(GOKDAG)
    public function build()
    {
        return $this->subject('New Contact Mail')
                    ->from('fit4codingdiamonds@gmail.com')
                    ->to('gokdag.goktepe@gmail.com')
                    ->view('email.contactmail');
    }
}
