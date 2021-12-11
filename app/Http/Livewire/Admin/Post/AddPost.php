<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class AddPost extends Component
{
    public $cat, $type, $slug, $title, $subtitle, $content, $cover, $images, $extra, $status, $meta_description, $meta_keywords, $meta_author;

    public function render()
    {
        return view('livewire.admin.post.add-post');
    }

    private function resetInput()
    {
        $this->title = null;
        $this->subtitle = null;
        $this->content = null;
        $this->cover = null;
        $this->status = null;
        $this->meta_description = null;
        $this->meta_keywords = null;
        $this->meta_author = null;
    }

    public function store()
    {
        // $this->validate([
        //     'title' => 'required|max:200',
        //     'subtitle' => 'required|max:200'
        // ]);
        $post = [
            'slug' => Str::slug($this->title, '-'),
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
            'cover' => isset($this->cover) ? $this->cover : NULL,
            'status' => isset($this->status) ? 1 : 0,
            'meta-description' => isset($this->meta_description) ? $this->meta_description : NULL,
            'meta-author' => isset($this->meta_author) ? $this->meta_author : NULL,
            'meta-keywords' => isset($this->meta_keywords) ? $this->meta_keywords : NULL
        ];
        dd($post);
        Post::create($post);
        $this->resetInput();
        return redirect()->to('/admin/posts');
    }
}
