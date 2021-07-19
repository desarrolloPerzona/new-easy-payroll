<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadFile extends Component
{
    use WithFileUploads;

    public $file;

    public $files = [];

    public function updateProfile(): void
    {
        // $this->validate([
        //     'image' => ['required', 'image', 'max:10000'],
        // ]);

        $post = \App\Models\Post::create(['title' => 'test']);

        // SINGLE FILE
        // $post->addMedia($this->image->getRealPath())->toMediaCollection('image');

        // MULTIPLE FILES
        collect($this->files)->each(function ($file) use ($post) {
            return $post->addMedia($file->getRealPath())->toMediaCollection('images');
        }
        );

        session()->flash('notify', 'Form saved !');
    }

    public function render()
    {
        return view('livewire.components.upload-file');
    }
}
