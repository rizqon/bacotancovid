<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Shoutbox extends Component
{
    public $post;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.components.shoutbox');
    }
}
