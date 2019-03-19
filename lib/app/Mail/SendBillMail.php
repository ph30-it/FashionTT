<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBillMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name,$code;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->code = $data['code'];
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
     return $this->view('mails.sendmail');
    }
}
