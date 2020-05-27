@extends('layouts.app')


@section('content')
<div class="grid">
	@foreach ($posts as $post)
	<div class="card-col">
        <div class="card card--red">
            <h2 class="card__message">{{ str_replace("@SetelahCovid", '', $post->text) }}</h2>
            <p class="card__location"><img src="{{ $post->avatar }}" style="border-radius:50%; width: 15px"> {{ "@{$post->username}" }}</p>
            <a class="card__twitter" target="_blank"
                href="https://twitter.com/{{ $post->username }}/status/{{ $post->tweet_id }}">
                <svg width="20" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.192 16c7.431 0 11.495-6.156 11.495-11.495 0-.175 0-.349-.012-.522a8.22 8.22 0 002.016-2.091 8.063 8.063 0 01-2.32.635A4.054 4.054 0 0019.147.293c-.793.47-1.66.802-2.566.98a4.044 4.044 0 00-6.884 3.685A11.47 11.47 0 011.37.738 4.043 4.043 0 002.62 6.13a4.01 4.01 0 01-1.833-.506v.052a4.041 4.041 0 003.24 3.96 4.034 4.034 0 01-1.823.07 4.044 4.044 0 003.774 2.805A8.106 8.106 0 010 14.185a11.437 11.437 0 006.192 1.812"
                        fill="currentColor" />
                </svg>
            </a>
        </div>
    </div>
	@endforeach
    <div class="card-sizer"></div>
</div>
@endsection
