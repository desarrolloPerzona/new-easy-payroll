<div>
    {{-- delete, edit or update message--}}
    @if (session($message))
        <div class="alert alert-success alert-dismissible fade show max-w-6xl mx-auto" role="alert">
            {{ __(session($message)) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
