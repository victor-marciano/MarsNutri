<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('marcikas1995@gmail.com')
                    ->subject($this->data['assunto'])
                    ->to($this->data['email'])
                    ->view('mail.contactMail')
                    ->with([
                        'nome' => $this->data['nome'],
                        'mensagem' => $this->data['mensagem'],
                    ]);
    }
}
