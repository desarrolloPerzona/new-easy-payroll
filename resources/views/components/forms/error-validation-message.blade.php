<div>
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show max-w-6xl mx-auto" role="alert">
            <ul>
            @foreach ($errors->all() as $error)
                <li>- {{$error}}</li>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endforeach
            </ul>
        </div>
    @endif
</div>
