<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeEmailMarkdown extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;

    /**
     * WelcomeEmailMarkdown constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
          'name' => $this->user->name
        ];
        return $this->markdown('mails.welcome1', $data);
    }
}
