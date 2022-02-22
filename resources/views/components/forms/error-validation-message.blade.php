<div>
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                {{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endforeach
        </div>
    @endif
</div>
