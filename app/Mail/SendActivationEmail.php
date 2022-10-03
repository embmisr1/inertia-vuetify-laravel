<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendActivationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $new_password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email = null, $new_password)
    {
        $this->email = $email;
        $this->new_password = $new_password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Unisys Activation Key')->view('emails.sendActivationKey');
    }
}
