<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Define the $data property

    /**
     * Create a new message instance.
     *
     * @param array $data The form data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data; // Assign the form data to the $data property
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-form')->with('data', $this->data);
    }
}
