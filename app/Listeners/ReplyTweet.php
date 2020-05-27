<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Thujohn\Twitter\Facades\Twitter;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplyTweet implements ShouldQueue
{   
    public $queue = 'ReplyStream';

    public $delay = 60;

    /**
     * Handle the event.
     *
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        $post = $event->post;

        Twitter::postTweet([
            'status' => "Terimakasih atas partisipasinya. semoga keadaan lekas membaik @{$post->username}",
            'in_reply_to_status_id' => $post->tweet_id
        ]);
    }
}
