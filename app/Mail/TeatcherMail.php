<?php

namespace App\Mail;

use App\User;
use App\Teatcher;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TeatcherMail extends Mailable
{
    public $admin;
    public $teatcher;
    
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $admin, Teatcher $teatcher)
    {
        $this->admin = $admin;
        $this->teatcher = $teatcher;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.newTeatcher-message');
    }
}
