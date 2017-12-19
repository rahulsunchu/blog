<?php

namespace App\Listeners;

use Mail;
use App\Mail\SendVerificationToken;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendVerificationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  $event
     * @return void
     */
    public function handle($event)
    {   
        // print_r($event->user);
        Mail::to($event->user)->send(new SendVerificationToken($event->user->verificationToken, $event->user->name));
    }
}
