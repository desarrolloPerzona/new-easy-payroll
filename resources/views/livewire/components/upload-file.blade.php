<div class="col-6 offset-3 my-4">
    @if(session()->has('notify'))
        <div class="alert alert-success">
            {{ session('notify') }}
        </div>
    @endif

    <form wire:submit.prevent="updateProfile">

        {{-- <x-forms.filepond wire:model="image" /> --}}
        <x-forms.filepond
            wire:model="files"
            allowImagePreview
            imagePreviewMaxHeight="200"
            allowFileTypeValidation
            acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
            allowFileSizeValidation
            maxFileSize="4mb"
        />

        @error('file') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror

        <button type="submit" class="btn btn-outline-primary">Save</button>
    </form>
</div>
