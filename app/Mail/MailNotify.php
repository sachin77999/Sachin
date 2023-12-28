<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];
    public function __construct($data)
    {
        $this->data = $data;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail Notify',
        );
    }

    
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }
    public function build(){
        return $this->from('sachinsoni@geekinformatic.com','Sachin Tutorial')
        ->subject($this->data['subject'])
        ->view('emails.index')->with('data',$this->data);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
