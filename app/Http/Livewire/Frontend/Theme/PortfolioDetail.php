<?php

namespace App\Http\Livewire\Frontend\Theme;

use Livewire\Component;

class PortfolioDetail extends Component
{
    public function render()
    {
        return view('livewire.frontend.dgita.portfolio-detail')->layout('livewire.frontend.dgita.index');
    }
}
