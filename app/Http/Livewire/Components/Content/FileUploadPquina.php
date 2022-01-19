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
        $fileType,
        $allowMultiple,
        $uploadRoute;

    public function mount($name, $maxFiles, $fileType, $allowMultiple, $label, $uploadRoute)
    {
        $this->name = $name;
        $this->maxFiles = $maxFiles;
        $this->fileType = $fileType;
        $this->allowMultiple = $allowMultiple;
        $this->label = $label;
        $this->uploadRoute = $uploadRoute;
    }


    public function render()
    {
        return view('livewire.components.content.file-upload-pquina');
    }
}
