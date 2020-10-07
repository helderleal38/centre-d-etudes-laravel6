<?php

namespace App\Mail;

use App\User;
use App\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentMail extends Mailable
{
    public $admin;
    public $comment_user;
    
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $admin, Comment $comment_user)
    {
        $this->admin = $admin;
        $this->comment_user = $comment_user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.newComment-message');
    }
}
