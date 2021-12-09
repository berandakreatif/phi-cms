<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $layout_option = [
            'pageTitle' => 'Dashboard'
        ];

        $data = [
            'pageCount' => Page::all()->count(),
            'postCount' => Post::all()->count()
        ];
        return view('livewire.admin.dashboard', $data)->layout('layouts.app', $layout_option);
    }
}