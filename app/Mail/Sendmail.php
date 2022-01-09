<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    // public $resortName, $name, $address, $numberPhone, $email, $totalPrice;
    public function __construct()
    // $resortName, $name, $address, $numberPhone, $email, $totalPrice
    {
        // $this->resortName = $resortName;
        // $this->name = $name;
        // $this->address = $address;
        // $this->numberPhone = $numberPhone;
        // $this->email = $email;
        // $this->totalPrice = $totalPrice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this ->subject("Thông báo sản phẩm đã bị xóa trên hệ thống Poly App")
        ->view('mail');
    }
} 