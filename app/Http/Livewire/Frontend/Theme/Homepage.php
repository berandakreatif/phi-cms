<?php

namespace App\Http\Livewire\Frontend\Theme;

use App\Models\Category;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        $data = [
            'cat_service' => Category::where('type', 'service')->get(),
            'cat_portfolio' => Category::where('type', 'portfolio')->get(),
        ];
        return view('livewire.frontend.dgita.homepage')->layout('livewire.frontend.dgita.index', $data);
    }
}
