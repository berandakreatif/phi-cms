<?php

namespace App\Http\Livewire\Frontend\Theme;

use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.frontend.dgita.homepage')->layout('livewire.frontend.dgita.index');
    }
}
