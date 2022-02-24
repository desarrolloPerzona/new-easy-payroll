<div>
    {{-- delete, edit or create message--}}
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show max-w-6xl mx-auto" role="alert">
            @if(session('message') == 'edit')
                {{__('Record updated successfully')}}
            @elseif(session('message') == 'create')
                {{__('Record created successfully')}}
            @elseif(session('message') == 'delete')
                {{__('Record deleted successfully')}}
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
