<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewServiceRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data; // Registration data

    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function build()
    {
        return $this->subject('New Service Registration')
                    ->view('emails.service_registration')
                    ->with(['data' => $this->data]);
    }
}
