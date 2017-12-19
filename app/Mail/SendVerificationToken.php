<?php

namespace App\Mail;

use App\VerificationToken;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendVerificationToken extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $username;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(VerificationToken $token, $username)
    {
        $this->token = $token;
        $this->username = $username;

        // print_r($this->username);
        // exit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Please verify your email')
                    ->view('email.verification');
    }
}
