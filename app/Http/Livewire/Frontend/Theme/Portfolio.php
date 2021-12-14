<?php

namespace App\Http\Livewire\Frontend\Theme;

use Livewire\Component;

class Portfolio extends Component
{
    public function render()
    {
        return view('livewire.frontend.dgita.portfolio')->layout('livewire.frontend.dgita.index');
    }
}
