<?php

namespace App\Mail;

use App\User;
use App\PreRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentMail extends Mailable
{
    public $admin;
    public $student_user;
    
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $admin, PreRegistration $student_user)
    {
        $this->admin = $admin;
        $this->student_user = $student_user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.newStudent-message');
    }
}
