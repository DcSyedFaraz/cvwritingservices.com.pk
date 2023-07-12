<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Order;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $invoice;
    protected $user;
    protected $attachmentsPath;
    protected $flag;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $files,$user,$invoice,$flag,$password)
    {
        $this->order            = $order;
        $this->attachmentsPath  = $files;
        $this->invoice = $invoice;
        $this->user = $user;
        $this->flag = $flag;
        $this->password= $password;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('email.order')->subject('Order Confirmation')->with([
            "order"     => $this->order, "invoice" => $this->invoice, "user" => $this->user, "flag" => $this->flag,'password'=>$this->password        ]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/' . $filePath);
        }

        return $email;
    }
}
