<?php

namespace App\Jobs;

use App\Events\PostCreated;
use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Thujohn\Twitter\Facades\Twitter;

class ProcessTweet implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $tweet;

    public $queue = 'ProcessTweet';

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $tweet)
    {
        $this->tweet = $tweet;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Post $post)
    {

        $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?).*$)@";

        $posts = $post->create([
            'tweet_id' => $this->tweet['id'],
            'text' => preg_replace($regex, ' ', $this->tweet['text']),
            'username' => $this->tweet['user']['screen_name'],
            'avatar' => $this->tweet['user']['profile_image_url'],
            'time' => $this->tweet['timestamp_ms']
        ]);

        event(new PostCreated($posts));
    }
}
