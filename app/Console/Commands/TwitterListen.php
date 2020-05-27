<?php

namespace App\Console\Commands;

use App\Jobs\ProcessTweet;
use Illuminate\Console\Command;
use Spatie\TwitterStreamingApi\PublicStream;

class TwitterListen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'listen:twitter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $config = config('laravel-twitter-streaming-api');

        PublicStream::create(
            $config['access_token'],
            $config['access_token_secret'],
            $config['consumer_key'],
            $config['consumer_secret']
        )->whenHears(config('site.twitter_username'), function(array $tweet) {
            $this->info("Triggering Prosess");
            ProcessTweet::dispatch($tweet);
        })->startListening();
    }
}
