<?php

namespace App\Notifications;

use App\Review;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class ReviewNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $review;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Review $review)
    {
        $this->review = $review;
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
                    ->subject('Profile Review')
                    ->line('You have a new review from '.$this->review->reviewer->name)
                    ->action('View Review', route('profile.view',$this->review->reviewed));
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
            'message' => 'You have a new review from '.$this->review->reviewer->name,
            'url'=> route('profile.view',$this->review->reviewed),
            'sender_profile'=> route('profile.view',$this->review->reviewer),
            'sender_image'=> asset('storage/user/'.$this->review->reviewer->image)
        ];
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)->content('You have a new review from '.$this->$review->reviewer->name);
    }
}
