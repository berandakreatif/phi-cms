<?php

namespace App\Http\Livewire\Frontend\Theme;

use Livewire\Component;

class Contactus extends Component
{
    public function render()
    {
        return view('livewire.frontend.dgita.contactus')->layout('livewire.frontend.dgita.index');
    }
}
