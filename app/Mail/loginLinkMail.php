<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class loginLinkMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $userEmail;
     public $userPass;
     public $loginLink;
    public function __construct($email,$pass,$link)
    {
        $this->userEmail = $email;
        $this->userPass = $pass;
        $this->loginLink = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('loginEmail',["email"=>$this->userEmail,
      "password"=>$this->userPass,
      "link"=>$this->loginLink]);
    }
}
