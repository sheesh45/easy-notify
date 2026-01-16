<?php

namespace EasyNotify\Builders;

use Illuminate\Support\Facades\Notification;
use EasyNotify\Notifications\DynamicNotification;

class NotifyBuilder
{
    protected $users;
    protected string $title = '';
    protected string $message = '';
    protected array $channels = [];

    public function to($users)
    {
        $this->users = $users;
        return $this;
    }

    public function title(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function message(string $message)
    {
        $this->message = $message;
        return $this;
    }

    public function mail()
    {
        $this->channels[] = 'mail';
        return $this;
    }

    public function broadcast()
    {
        $this->channels[] = 'broadcast';
        return $this;
    }

    public function database()
    {
        $this->channels[] = 'database';
        return $this;
    }

    public function send()
    {
        Notification::send(
            $this->users,
            new DynamicNotification(
                $this->title,
                $this->message,
                $this->channels
            )
        );
    }
}
