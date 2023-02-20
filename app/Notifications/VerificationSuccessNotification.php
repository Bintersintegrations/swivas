<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class VerificationSuccessNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $verificationType;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($verificationType)
    {
        $this->verificationType = $verificationType;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {

        return ['mail','database'];
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
                    ->subject($this->verificationType.' Verification Successful')
                    ->line('Your account has been verified with documents you submitted.')
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
            'message' => 'Your '.$this->verificationType.' profile has been successfully verified'
        ];
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)->content('Your '.$this->verificationType.' profile has been successfully verified');
    }
}
