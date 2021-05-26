<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JefeRecieved extends Mailable
{
    use Queueable, SerializesModels;
    public $links;
    public $curso;
    public $empleados;
    public $areas;
    public $subject = "Encuesta de Jefe Inmediato";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($links,$curso,$empleados,$areas)
    {
        //
        $this->empleados = $empleados;
        $this->links = $links;
        $this->curso = $curso;
        $this->areas = $areas;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.jefe');
    }
}
