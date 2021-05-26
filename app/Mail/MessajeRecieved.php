<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessajeRecieved extends Mailable
{
    use Queueable, SerializesModels;

    public $links;
    public $curso;
    public $subject = "Encuesta de Reaccion";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($links,$curso)
    {
        //
        $this->links = $links;
        $this->curso = $curso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message');
    }
}
