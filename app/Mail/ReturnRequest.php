<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReturnRequest extends Mailable
{
    use Queueable, SerializesModels;

    protected $trip;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($trip)
    {
        $this->trip = $trip;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.return')->with([
            'departure' => $this->trip['departure'],
            'arrival' => $this->trip['arrival'],
            'depart_date' => $this->trip['depart_date'],
    		'return_date' => $this->trip['return_date'],
            'class' => $this->trip['class'],
            'email' => $this->trip['email'],
        ]);
    }
}
