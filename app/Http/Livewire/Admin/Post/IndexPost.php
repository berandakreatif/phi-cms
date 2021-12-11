<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;

class IndexPost extends Component
{
    public $var;

    public function render()
    {
        $this->var = [
            'data' => Post::all(),
        ];
        return view('livewire.admin.post.index-post', $this->var);
    }
}
