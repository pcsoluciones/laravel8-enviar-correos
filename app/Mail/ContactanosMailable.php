<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    // Definir el asunto
    public $subject = "Información del asunto (subject)";
    public $contacto;   //para cuerpo del mensaje
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()     
    // Este método se encarga de traer una vista para el contenido del correo electrónico
    {
        return $this->view('emails.contactanos');
    }
}
