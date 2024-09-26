<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AccountVerifyEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $registeredUser;
    public $status;

    public function __construct($registeredUser, $status)
    {
        $this->registeredUser = $registeredUser;
        $this->status = $status;
    }


    public function build()
    {
        return $this->view('mail')
            ->with([
                'name' => $this->registeredUser->username,
                'status' => $this->registeredUser->is_active,
                'remarks' => $this->registeredUser->remarks,
            ]);
    }
}
