<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return "usama";

        return $this->view('emails.otp')->with([
            'otp' => $this->email['body'],
            'subject' => $this->email['subject']
        ]);
    }
}
