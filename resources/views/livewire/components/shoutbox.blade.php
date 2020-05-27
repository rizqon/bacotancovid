<div class="card shoutbox">
    <div class="card-body">
        <p class="card-text">{{ $post->text }}</p>
        <footer class="blockquote-footer">
            <small>
                Tweeted by <cite title="Tweeted by {{ '@'.$post->username }}">{{ '@'.$post->username }}</cite>
            </small>
        </footer>
    </div>
</div>