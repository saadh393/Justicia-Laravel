<?php

namespace App\Mail;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {        
        $this->data = is_array($data) ? $data : $data->toArray();
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = is_array($this->data["message"]) 
        ? implode(', ', $this->data["message"]) 
        : strval($this->data["message"]);

        return $this->view('emails.contact')->subject("You have a mail from Justicia Network")->with([
            'name' => $this->data["name"],
            'email' => $this->data["email"],
            'contact' => $this->data["contact"],
            'userMessage' => $message,
        ]);
    }
}
