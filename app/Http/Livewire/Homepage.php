<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage', [
            'posts' => Post::latest()->paginate(12)
        ]);
    }
}
