<?php

namespace App\Notifications;

use App\Wallet;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class PenaltyChargeNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $wallet;
    public $penalty;
    public $reason;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Wallet $wallet, $penalty, $reason)
    {
        $this->wallet = $wallet;
        $this->penalty = $penalty;
        $this->reason = $reason;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Penalty Charge Notification.')
                    ->line('The sum of '.$this->wallet->currency->symbol.' '.$this->penalty.' has been charged to your '.$this->wallet->currency->name.' wallet as penalty for '.$this->reason)
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
            'message'=> 'The sum of '.$this->wallet->currency->symbol.' '.$this->penalty.' has been charged to your '.$this->wallet->currency->name.' wallet as penalty for '.$this->reason,
            'url' => route('transactions')
        ];
    }
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)->content('The sum of '.$this->wallet->currency->symbol.' '.$this->penalty.' has been charged to your '.$this->wallet->currency->name.' wallet as penalty for '.$this->reason);
    }
}
