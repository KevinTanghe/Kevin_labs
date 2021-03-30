<?php

namespace App\Mail;

use App\Models\Subject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;
    public $request;
    public $test;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->test = Subject::find($request->subject_id);
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->subject);
        return $this->from($this->request->mail)->subject($this->test->subject)->view('templates/mail/mail')->with(['request' => $this->request, 'subject' => $this->subject]);
    }
}
