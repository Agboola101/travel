<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TripRequest extends Mailable
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
        return $this->markdown('emails.trip')->with([
            'departure' => $this->trip['departure'],
            'arrival' => $this->trip['arrival'],
            'date' => $this->trip['date'],
            'class' => $this->trip['class'],
            'email' => $this->trip['email'],
        ]);
    }
}
