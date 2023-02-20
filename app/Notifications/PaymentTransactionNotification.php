<?php

namespace App\Notifications;

use App\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class PaymentTransactionNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $payment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function status($status){
        if($status == "success")
        $message = 'was successful.';
        else $message = 'has failed.';
        return $message;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Transaction of '.$this->payment->amount.' for '.$this->payment->type.' payment '.$this->status($this->payment->status))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => 'Transaction of '.$this->payment->amount.' for '.$this->payment->type.' payment '.$this->status($this->payment->status),
        ];
    }
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)->content('Transaction of '.$this->payment->amount.' for '.$this->payment->type.' payment '.$this->status($this->payment->status));
    }
}
