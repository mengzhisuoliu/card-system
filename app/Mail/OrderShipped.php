<?php
namespace App\Mail; use Illuminate\Bus\Queueable; use Illuminate\Mail\Mailable; use Illuminate\Queue\SerializesModels; use Illuminate\Contracts\Queue\ShouldQueue; class OrderShipped extends Mailable { use Queueable, SerializesModels; public $order; public $card_msg; public $cards_txt; public function __construct($spd09b83, $sp3637d7, $sp43e449) { $this->order = $spd09b83; $this->card_msg = $sp3637d7; $this->cards_txt = $sp43e449; } public function build() { return $this->subject('订单提醒(#' . $this->order->order_no . ')-' . config('app.name'))->view('emails.order'); } }