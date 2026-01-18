<?php

namespace EasyNotify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Schema;

class DynamicNotification extends Notification
{
    use Queueable;

    public function __construct(
        protected string $title,
        protected string $message,
        protected array $channels
    ) {}

    public function via($notifiable)
    {
        return $this->channels;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->title)
            ->line($this->message);
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'title' => $this->title,
            'message' => $this->message,
        ]);
    }

    public function toDatabase($notifiable)
    {
        if (!Schema::hasTable('notifications')) {
            return [];
        }

        return [
            'title' => $this->title,
            'message' => $this->message,
        ];
    }
}
