<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use App\Models\Post;
use Livewire\Component;

class IndexPage extends Component
{
    public function render()
    {
        $layout_option = [
            'pageTitle' => 'List Of Pages'
        ];

        $data = [
            'data' => Page::all()
        ];
        return view('livewire.admin.page.index-page', $data)->layout('layouts.app', $layout_option);
    }
}
