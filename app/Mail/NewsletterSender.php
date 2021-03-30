<?php

namespace App\Mail;

use App\Models\mailPro;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSender extends Mailable
{
    public $request;
    public $mailPro;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
        $this->mailPro = mailPro::all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mailPro[0]->mail)->subject('Newsletter')->view('templates/mail/newsMail')->with(['request' => $this->request]);
    }
}
