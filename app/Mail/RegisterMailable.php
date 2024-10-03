<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;
    public $detail;

    public function __construct($name, $phone, $email, $detail )
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->detail = $detail;
    }

    public function build()
    {
        return $this->view('email.Register', [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            '$detail' => $this->detail,
        ]);
    }
}
