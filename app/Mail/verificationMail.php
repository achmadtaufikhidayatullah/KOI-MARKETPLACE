<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class verificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $password;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->name = $mailData['name'];
        $this->password = $mailData['password'];
        $this->url = $mailData['url'];
    }
    
    public function build()
    {
        $name = $this->name;
        $password = $this->password;
        $url = $this->url;
        return $this->markdown('mail.registration' , compact('name' , 'password' , 'url'));
    }


}
