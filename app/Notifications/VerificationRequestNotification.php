<?php

namespace App\Notifications;

use App\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class VerificationRequestNotification extends Notification implements ShouldQueue
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
        $this->sms_rate_time = Setting::where('name','sms_ratelimit_time')->first()->value;
        $this->email_rate_time = Setting::where('name','email_ratelimit_time')->first()->value;
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
                    ->subject('New Verification Request.')
                    ->line('You have '.$notifiable->unreadNotifications->where('type','App\Notifications\VerificationRequestNotification')->count().' pending verification request that we need to attend to')
                    ->action('Treat Now', route('admin.dashboard'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        switch($this->verificationType){
            case 'arbitrator': $url = 'admin.arbitrator.verification';
            case 'enterprise': $url = 'admin.enterprise.verification';
            case 'user':       $url =   'admin.user.verification';
        }
        return [
            'message' => 'You have a new '.$this->verificationType.' request',
            'url' => route($url)
        ];
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)->content('You have '.$notifiable->unreadNotifications->where('type','App\Notifications\VerificationRequestNotification')->count().' pending verification request that we need to attend to');
    }
}
