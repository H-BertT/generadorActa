<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class CorreosMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('bodas.swifties@gmail.com', 'Bodorrios')
                    ->subject('Correos Mailable')
                    ->view('correos.index')
                    // ->attach(public_path('/ruta/a/tu/imagen.jpg')); // Asegúrate de reemplazar esto con la ruta a tu imagen
                    ->with('data', $this->data);

    }
}
