<?php

namespace App\Http\Livewire\Frontend\Theme;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.frontend.dgita.blog')->layout('livewire.frontend.dgita.index');
    }
}
