<div class="row">
    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
        <h2 class="section_title">Apa Kata Mereka</h2>
    </div>
    <div class="my-5">
        <div class="card-columns">
            @foreach($posts as $post)
                <livewire:components.shoutbox :post="$post">
            @endforeach
        </div>
        <div style="display:none">
        {{ $posts->links() }}
        </div>
    </div>
</div>
