<?php

namespace App\Http\Livewire\Frontend\Theme;

use Livewire\Component;

class ServiceDetail extends Component
{
    public function render()
    {
        return view('livewire.frontend.dgita.service-detail')->layout('livewire.frontend.dgita.index');
    }
}
