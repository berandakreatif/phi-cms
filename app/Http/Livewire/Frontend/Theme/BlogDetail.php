<?php

namespace App\Http\Livewire\Frontend\Theme;

use Livewire\Component;

class BlogDetail extends Component
{
    public function render()
    {
        return view('livewire.frontend.dgita.blog-detail')->layout('livewire.frontend.dgita.index');
    }
}
