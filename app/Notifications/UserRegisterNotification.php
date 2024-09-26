<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegisterNotification extends Notification
{
    use Queueable;
    protected $registeredUser;

    public function __construct($registeredUser)
    {
        $this->registeredUser = $registeredUser;
    }


    public function via(object $notifiable): array
    {
        return ['database'];
    }


    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    // public function toDatabase($notifiable)
    // {
    //     return new DatabaseMessage([
    //         'message' => 'A new user has registered: ' . $this->registeredUser->username,
    //         'url' => route('registeredUser.dashboard'),
    //     ]);
    // }
    public function toArray(object $notifiable): array
    {
        return [
            'username' => $this->registeredUser->username ??'',
            'avatar' => $this->registeredUser->avatar ??'',
        ];
    }
}
