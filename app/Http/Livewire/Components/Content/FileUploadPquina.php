<?php

namespace App\Http\Livewire\Components\Content;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUploadPquina extends Component
{
    use WithFileUploads;

    public
        $name,
        $label,
        $maxFiles,
        $maxSize,
        $fileType,
        $allowMultiple,
        $uploadRoute,
        $attributes,
        $acceptFiles;

    public function mount($name, $maxFiles, $maxSize, $fileType, $allowMultiple, $label, $uploadRoute, $attributes, $acceptFiles)
    {
        $this->name = $name;
        $this->maxFiles = $maxFiles;
        $this->fileType = $fileType;
        $this->allowMultiple = $allowMultiple;
        $this->label = $label;
        $this->uploadRoute = $uploadRoute;
        $this->attributes = $attributes;
        $this->acceptFiles = $acceptFiles;
        $this->maxSize = $maxSize;
    }


    public function render()
    {
        return view('livewire.components.content.file-upload-pquina');
    }
}
