<?php

namespace App;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'tweet_id',
        'text',
        'username',
        'avatar',
        'time'
    ];

    protected $dispatchesEvents = [
        'created' => PostCreated::class,
    ];
}
