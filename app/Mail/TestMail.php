<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
public $mailInfo;
public function __construct($mailInfo)
{
    $this->mailInfo=$mailInfo;
}
   
    public function build()
    {
        return $this->markdown('Email.testMail')->with('mailInfo',$this->mailInfo);
    }
}
