<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;


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
        $pdf = PDF::loadView('correos.pdf', ['data' => $this->data]);
    
        return $this->from('bodas.swifties@gmail.com', 'Bodorrios')
                    ->subject('Correos Mailable')
                    ->view('correos.index')
                    ->attachData($pdf->output(), "invitacion.pdf")
                    ->with('data', $this->data);
    }
    
}
