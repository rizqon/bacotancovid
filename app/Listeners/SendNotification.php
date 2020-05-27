<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PostCreatedNotification;
use NotificationChannels\Telegram\TelegramChannel;

class SendNotification implements ShouldQueue
{
    public $queue = 'SendNotification';
    
    /**
     * Handle the event.
     *
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        Notification::route(TelegramChannel::class, config('services.telegram-bot-api.recipient'))
            ->notify(new PostCreatedNotification($event->post));
    }
}
